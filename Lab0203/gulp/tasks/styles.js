const gulp = require('gulp');

const plumber = require('gulp-plumber');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const shorthand = require('gulp-shorthand');

module.exports = () => {
  return gulp.src("src/styles/**/*.+(scss|sass)")
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(shorthand())
    .pipe(cleanCSS({
      debug: true,
      compatibility: '*'
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('build'));
};