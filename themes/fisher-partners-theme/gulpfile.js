// const gulp = require("gulp");
const { src, dest, series, parallel, watch } = require("gulp");
const yargs = require("yargs");
const del = require("del");
const browserSync = require("browser-sync").create();
const gulpif = require("gulp-if");
const concatenate = require("gulp-concat");
const named = require("vinyl-named");
const webpack = require("webpack-stream");

const sass = require("gulp-sass")(require("sass"));
const cleancss = require("gulp-clean-css");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("autoprefixer");
const imagemin = require("gulp-imagemin");

const origin = "src";
const destination = "dist";
const PRODUCTION = yargs.argv.prod;

function browserSyncServer(cb) {
	browserSync.init({
		// notify: false, // disables browsersync notification in browser
		// open: false, // doesn't open a new browser window on start
		proxy: "basic-wordpress-setup.local",
	});
	cb();
}

function browserSyncReload(cb) {
	browserSync.reload();
	cb();
}

async function clean(cb) {
	await del(destination);
	cb();
}

function styles(cb) {
	src(`${origin}/scss/style.scss`)
		.pipe(gulpif(!PRODUCTION, sourcemaps.init()))
		.pipe(sass().on("error", sass.logError))
		.pipe(gulpif(PRODUCTION, postcss([autoprefixer])))
		.pipe(
			gulpif(
				PRODUCTION,
				cleancss({
					compatibility: "ie8",
				})
			)
		)
		.pipe(gulpif(!PRODUCTION, sourcemaps.write()))
		.pipe(dest(`${destination}/css`))
		.pipe(browserSync.stream());
	cb();
}

function scripts(cb) {
	src([`${origin}/js/index.js`])
		.pipe(named())
		.pipe(
			webpack({
				module: {
					rules: [
						{
							test: /\.js$/,
							use: {
								loader: "babel-loader",
								options: {
									presets: [],
								},
							},
						},
					],
				},
				mode: PRODUCTION ? "production" : "development",
				devtool: !PRODUCTION ? "inline-source-map" : false,
				output: {
					filename: "build.js",
				},
				externals: {
					jquery: "jQuery",
				},
			})
		)
		.pipe(dest(`${destination}/js`));
	cb();
}

function images(cb) {
	src(`${origin}/img/**/*.{jpg,jpeg,png,svg,gif}`)
		.pipe(gulpif(PRODUCTION, imagemin()))
		.pipe(dest("dist/images"));
	cb();
}

function copy(cb) {
	src([
		`${origin}/**/*`,
		`!${origin}/{images, scripts, styles}`,
		`!${origin}/{images, scripts, styles}/**/*`,
	]).pipe(dest("dist"));
	cb();
}

function watcher(cb) {
	watch(`${origin}/**/*.scss`).on("change", series(styles));
	watch(`${origin}/**/*.js`).on("change", series(scripts, browserSyncReload));
	watch(`${origin}/**/*.{jpg,jpeg,png,svg,gif}`).on(
		"change",
		series(images, browserSyncReload)
	);
	watch([
		`${origin}/**/*`,
		`!${origin}/{images, js, scss}`,
		`!${origin}/{images, js, scss}/**/*`,
	]).on("change", series(copy, browserSyncReload));
	watch([`**/*.php`, `**/*.twig`], series(browserSyncReload));
	cb();
}

exports.default = series(
	clean,
	parallel(styles, scripts, images, copy),
	browserSyncServer,
	watcher
);
