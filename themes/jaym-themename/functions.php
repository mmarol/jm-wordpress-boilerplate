<?php

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */


// ------------------ Timber Setup ------------------

/**
 * If you are installing Timber as a Composer dependency in your theme, you'll need this block
 * to load your dependencies and initialize Timber. If you are using Timber via the WordPress.org
 * plug-in, you can safely delete this block.
 */
$composer_autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
	require_once $composer_autoload;
	$timber = new Timber\Timber();
}

/**
 * This ensures that Timber is loaded and available as a PHP class.
 * If not, it gives an error message to help direct developers on where to activate
 */
if (!class_exists('Timber')) {

	add_action(
		'admin_notices',
		function () {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
		}
	);

	add_filter(
		'template_include',
		function ($template) {
			return get_stylesheet_directory() . '/static/no-timber.html';
		}
	);
	return;
}

/**
 * Sets the directories (inside your theme) to find .twig files
 */
Timber::$dirname = array('templates', 'views');

/**
 * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
 * No prob! Just set this value to true
 */
Timber::$autoescape = false;


/**
 * We're going to configure our theme inside of a subclass of Timber\Site
 * You can move this to its own file and include here via php's include("MySite.php")
 */
class StarterSite extends Timber\Site
{
	/** Add timber support. */
	public function __construct()
	{
		add_action('after_setup_theme', array($this, 'theme_supports'));
		add_filter('timber/context', array($this, 'add_to_context'));
		add_filter('timber/twig', array($this, 'add_to_twig'));
		add_action('init', array($this, 'register_post_types'));
		add_action('init', array($this, 'register_taxonomies'));
		add_action('init', array($this, 'register_menus'));
		add_action('init', array($this, 'register_widgets'));
		add_action('init', array($this, 'my_acf_op_init'));
		parent::__construct();
	}

	// Abstracting long chunks of code.

	// The following included files only need to contain the arguments and register_whatever functions. They are applied to WordPress in these functions that are hooked to init above.

	// The point of having separate files is solely to save space in this file. Think of them as a standard PHP include or require.

	function register_post_types()
	{
		require('lib/custom-types.php');
	}

	function register_taxonomies()
	{
		require('lib/taxonomies.php');
	}

	function register_menus()
	{
		require('lib/menus.php');
	}

	function register_widgets()
	{
		require('lib/widgets.php');
	}

	function my_acf_op_init()
	{
		if (function_exists('acf_add_options_page')) {

			acf_add_options_page(array(
				'page_title'     => 'Global Page Settings',
				'menu_title'    => 'Global Page Settings',
				'menu_slug'     => 'global-page-settings',
				'capability'    => 'edit_posts',
			));

			acf_add_options_sub_page(array(
				'page_title'     => 'Global Header Settings',
				'menu_title'    => 'Header',
				'parent_slug'    => 'global-page-settings',
			));

			acf_add_options_sub_page(array(
				'page_title'     => 'Global Footer Settings',
				'menu_title'    => 'Footer',
				'parent_slug'    => 'global-page-settings',
			));
		}
	}

	/** This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context($context)
	{
		$context['foo']   = 'bar';
		$context['stuff'] = 'I am a value set in your functions.php file';
		$context['notes'] = 'These values are available everytime you call Timber::context();';
		$context['menu']  = new Timber\Menu('Primary Nav');
		$context['site']  = $this;
		$context['options'] = get_fields('option');
		return $context;
	}

	public function theme_supports()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		add_theme_support('menus');
	}

	/** This Would return 'foo bar!'.
	 *
	 * @param string $text being 'foo', then returned 'foo bar!'.
	 */
	public function myfoo($text)
	{
		$text .= ' bar!';
		return $text;
	}

	/** This is where you can add your own functions to twig.
	 *
	 * @param string $twig get extension.
	 */
	public function add_to_twig($twig)
	{
		$twig->addExtension(new Twig\Extension\StringLoaderExtension());
		// Ninja Form Filter
		$twig->addFilter(new Twig\TwigFilter('makeNinjaForm', array($this, 'makeNinjaForm')));
		return $twig;
	}

	// Ninja Form Function
	function makeNinjaForm($formid)
	{
		$formid = '[ninja_form id=' . $formid . ']';

		return $formid;
	}
}

new StarterSite();


// ------------------ Additional Dependencies ------------------



function load_assets()
{
	// Load styles
	wp_enqueue_style('jaym-stylesheet', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');

	// Load scripts
	wp_enqueue_script('jaym-scripts', get_template_directory_uri() . '/dist/js/build.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_assets');
