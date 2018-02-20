const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssNext = require('postcss-cssnext');
const autoprefixer = require('autoprefixer');
const cssImport = require('postcss-import');
const rename = require('gulp-rename');

gulp.task("styles", ["scss"], function() {
  return gulp.src("./styles/main.css")
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"))
});

gulp.task("scss", function() {
    return gulp.src("./styles/scss/**/*.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(postcss([cssImport, cssNext]))
        .pipe(gulp.dest("./styles"))
})
