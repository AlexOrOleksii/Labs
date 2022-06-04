const gulp = require('gulp');

module.exports = () => {
    return gulp.src('src/icons/**/*')
        .pipe(gulp.dest('build/icons'));
};