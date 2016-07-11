/* File: gulpfile.js */

// grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util');
    sass   = require('gulp-sass');
    notify = require('gulp-notify');
    minifycss = require('gulp-minify-css');
    plumber = require('gulp-plumber');
    sourcemaps = require('gulp-sourcemaps');
    rename = require('gulp-rename');
    concat = require('gulp-concat');
    uglify = require('gulp-uglify');
    base64 = require('gulp-base64');
    imagemin = require('gulp-imagemin');
    browserSync = require('browser-sync').create();
    reload = browserSync.reload;

// create a default task and just log a message
gulp.task('default', function() {
  return gutil.log('Gulp [task:build] is running.....')
});

gulp.task('sass', function() {
    gulp.src('source/scss/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sourcemaps.init())  // Process the original sources
    .pipe(sass({ style: 'expanded', }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gutil.env.type === 'production' ? minifycss() : gutil.noop())
    .pipe(sourcemaps.write()) // Add the map to modified source.
    .pipe(gulp.dest('app/assets/css'))
    // .pipe(notify({ message: 'Styles task complete' }))
    .pipe(reload({stream:true}));
});

gulp.task("js",function(){
    gulp.src("source/js/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(concat('app-bundle.js'))
    .pipe(rename({suffix:'.min'}))
    //only uglify if gulp is ran with '--type production'
    .pipe(gutil.env.type === 'production' ? uglify() : gutil.noop())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('app/assets/js'))
    .pipe(reload({stream:true}));
});

gulp.task("html", function(){
    gulp.src("app/**/*.html")
    .pipe(reload({stream:true}));
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: 'app'
    },
  })
})

// /////////////////////////////////////////////////
// Watch Task
// /////////////////////////////////////////////////

gulp.task("watch",function(){
  gulp.watch("source/js/**/*.js",['js']);
  gulp.watch("source/scss/**/*.scss",['sass']);
  gulp.watch("app/**/*.html",['html']);
});

// /////////////////////////////////////////////////
// Build Task
// use --type production for live srv release
// /////////////////////////////////////////////////
gulp.task('default', ['js', 'sass', 'browserSync', 'watch']);
