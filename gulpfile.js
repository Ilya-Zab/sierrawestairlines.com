'use strict';

/**
 * Require "gulp"
 */
const gulp = require('gulp');

/**
 * Require "gulp-rename"
 */
const rename = require('gulp-rename');

/**
 * Require "gulp-sass"
 */
const sass = require('gulp-sass')(require('sass'));

/**
 * Require "gulp-autoprefixer"
 */
const autoprefixer = require('gulp-autoprefixer');

/**
 * Require "gulp-sourcemaps"
 */
const sourcemaps = require('gulp-sourcemaps');

/**
 * Require "browser-sync"
 */
const browserSync = require('browser-sync').create();

/**
 * Require "gulp-file-include"
 */
const fileInclude = require('gulp-file-include');


/**
 * Require "del"
 */
const removeFiles = require('del');

// Ilya
const yargs = require('yargs');

const fileName = yargs.argv.file;





/**
 * Directory initialization
 */
const baseDir = 'public';
const sourceDir = 'src';

const path = {
	build: {
		html: baseDir + '/',
		css: baseDir + '/css/',
		js: baseDir + '/js/',
		php: baseDir + '/php/',
		inc: baseDir + '/inc/',
		img: baseDir + '/img/',
		fonts: baseDir + '/fonts/',
		plugins: baseDir + '/plugins/',
	},
	source: {
		html: [sourceDir + '/**/*.html', '!' + sourceDir + '/template-parts/*.html'],
		// css: sourceDir + '/scss/style.sass',
		css: sourceDir + '/scss/style.scss',
		js: sourceDir + '/js/**/*.js',
		php: sourceDir + '/php/**/*.php',
		inc: sourceDir + '/inc/**/*',
		img: sourceDir + '/img/**/*.{jpg,png,svg,gif,ico,webp,mp4}',
		fonts: sourceDir + '/fonts/**/*',
		plugins: sourceDir + '/plugins/**/*',
	},
	watch: {
		html: sourceDir + '/**/*.html',
		// css: sourceDir + '/scss/**/*.sass',
		css: sourceDir + '/scss/**/*.scss',
		js: sourceDir + '/js/**/*.js',
		php: sourceDir + '/php/**/*.php',
		inc: sourceDir + '/inc/**/*',
		img: sourceDir + '/img/**/*.{jpg,png,svg,gif,ico,webp,mp4}',
		fonts: sourceDir + '/fonts/**/*',
		plugins: sourceDir + '/plugins/**/*',
	},
	clean: baseDir + '/',
};


/**
 * Main scripts
 */
function browserReload() {
	browserSync.reload();
}

function removeBuildFiles() {
	return removeFiles(path.clean);
}

function preprocessCSS() {
	return gulp.src(path.source.css)
		.pipe(sourcemaps.init())
		.pipe(sass({
			errorLogToConsole: true,
			outputStyle: 'expanded',
		}))
		.on('error', console.error.bind(console))
		.pipe(rename({
			extname: '.css',
		}))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(path.build.css))
		.pipe(browserSync.stream());
}

function preprocessHTML() {
	return gulp.src(path.source.html)
		.pipe(fileInclude())
		.pipe(gulp.dest(path.build.html))
		.pipe(browserSync.stream());
}

function preprocessImg() {
	return gulp.src(path.source.img)
		.pipe(gulp.dest(path.build.img))
		.pipe(browserSync.stream());
}

function preprocessJS() {
	return gulp.src(path.source.js)
		.pipe(gulp.dest(path.build.js))
		.pipe(browserSync.stream());
}

function preprocessPHP() {
	return gulp.src(path.source.php)
		.pipe(gulp.dest(path.build.php))
		.pipe(browserSync.stream());
}

function preprocessInc() {
	return gulp.src(path.source.inc)
		.pipe(gulp.dest(path.build.inc))
		.pipe(browserSync.stream());
}

function preprocessFonts() {
	return gulp.src(path.source.fonts)
		.pipe(gulp.dest(path.build.fonts))
		.pipe(browserSync.stream());
}

function preprocessPlugins() {
	return gulp.src(path.source.plugins)
		.pipe(gulp.dest(path.build.plugins))
		.pipe(browserSync.stream());
}

function sync() {
	return browserSync.init({
		server: {
			baseDir,
			index: fileName // Где fileName - имя файла, переданное через параметры командной строки
		},
		port: 3000,
		notify: false,
	});
}




/**
 * Transitional scripts
 */
function watchFiles() {
	gulp.watch(path.watch.html, preprocessHTML);
	gulp.watch(path.watch.css, preprocessCSS);
	gulp.watch(path.watch.img, preprocessImg);
	gulp.watch(path.watch.js, preprocessJS);
	// gulp.watch( path.watch.php, preprocessPHP );
	gulp.watch(path.watch.fonts, preprocessFonts);
	gulp.watch(path.watch.inc, preprocessInc);
	gulp.watch(path.watch.plugins, preprocessPlugins);
}


/**
 * Exports
 */
// const preprocessingFunctions = gulp.series(preprocessHTML, preprocessCSS, preprocessJS, preprocessPHP, preprocessInc, preprocessImg, preprocessFonts, preprocessPlugins);
const preprocessingFunctions = gulp.series(preprocessHTML, preprocessCSS, preprocessJS, preprocessImg, preprocessFonts, preprocessPlugins);
const parallelFunctions = gulp.parallel(watchFiles, sync);
const seriesFunctions = gulp.series(removeBuildFiles, preprocessingFunctions, parallelFunctions);

exports.default = seriesFunctions;
