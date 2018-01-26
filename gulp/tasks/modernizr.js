const gulp = require('gulp');
const modernizr = require('gulp-modernizr');

gulp.task("modernizr", function() {
    return gulp.src(["./styles/**/*.css", "./scripts/**/*.js"])
    .pipe(modernizr({
        options: ["setClasses"],
    }))
    .pipe(gulp.dest("./scripts"));
})
