const gulp = require('gulp');

module.exports = () => {
    return gulp.src('src/images/**/*.{gif,png,jpg,svg,webp}')   
        .pipe(gulp.dest('build/images'));
};