<?php

$args = array(
    'post_type' => 'custom-post-type',
    'posts_per_page' => -1,
);

$context          = Timber::context();
$context['page'] = Timber::get_post();
$context['items'] = Timber::get_posts($args);

$templates        = array('page-example-page.twig');

Timber::render($templates, $context);
