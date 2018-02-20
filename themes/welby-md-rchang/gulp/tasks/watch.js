const gulp = require('gulp');
const browserSync = require('browser-sync').create();


gulp.task('watch', function() {
  browserSync.init({
    notify: false,
    proxy: 'http://welbymd.local/',
    ghostMode: false
  });

  gulp.watch('./**/*.php', function() {
    browserSync.reload();
  });
  gulp.watch('./styles/scss/**/*.scss', ['waitForStyles']);
  gulp.watch('./scripts/modules/*.js', ['waitForScripts']);
});

gulp.task('waitForStyles', ['styles'], function() {
  browserSync.reload();
});

gulp.task('waitForScripts', ['scripts'], function() {
  browserSync.reload();
});
