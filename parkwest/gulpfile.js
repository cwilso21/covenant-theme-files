// include gulp
var gulp = require('gulp');

// plugin manifest
var jshint  = require('gulp-jshint');
var sass    = require('gulp-sass');
var concat  = require('gulp-concat');
var uglify  = require('gulp-uglify');
var rename  = require('gulp-rename');
var bourbon = require('node-bourbon');

// lint task
gulp.task('lint', function () {
  return gulp.src('working/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// concatenate and minify js
gulp.task('scripts', function () {
  return gulp.src(['working/js/assets/jquery-1.11.3.js', 'working/js/assets/bootstrap.js', 'working/js/assets/parallax.js', 'working/js/assets/smooth-scroll.js', 'working/js/main.js'])
    .pipe(concat('main.max.js'))
    .pipe(rename('ch-main.js'))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('working/css/*.scss')
        .pipe(sass({includePaths: require('node-bourbon').includePaths}))
        .pipe(gulp.dest('dist'));
});

// watch files for changes
gulp.task('watch', function () {
  gulp.watch('working/js/*.js', ['lint', 'scripts']);
  gulp.watch('working/css/**/*.scss', ['sass']);
});

// default task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);