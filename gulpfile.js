var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

var $ = require('gulp-load-plugins')();

// Static server
gulp.task('serve', function() {
    browserSync({
        notify : false,
        proxy: "http://localhost/BaseBlogPOO/public/"
    });
});

gulp.task('watch',['serve'], function() {
    gulp.watch("pages/*.php", [reload]);
    gulp.watch("app/*.php", [reload]);
    gulp.watch("public/*.php", [reload]);
});