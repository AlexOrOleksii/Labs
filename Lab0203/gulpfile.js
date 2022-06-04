const gulp = require('gulp');

const html = require('./gulp/tasks/html');
const styles = require('./gulp/tasks/styles');
const images = require('./gulp/tasks/images');
const icons = require('./gulp/tasks/icons');
const clean = require('./gulp/tasks/clean');

const all = gulp.parallel(html, styles, icons, images);
const build = gulp.series(clean, all);

module.exports.build = gulp.series(build);