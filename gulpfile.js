var gulp = require('gulp'),
    bower = require('gulp-bower'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    livereload = require('gulp-livereload'),
    lr = require('tiny-lr'),
    server = lr();

var sassDir = 'public/css/scss';
var cssDir = 'public/css';
var jsDir = 'public/js';
var imageDir = 'public/img';

/* ###### TASKS ####### */

gulp.task('styles', function () {
    return gulp.src(sassDir + '/styles.scss')
        .pipe(sass({ style: 'expanded' }))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest(cssDir))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest(cssDir))
        .pipe(livereload(server))
        .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('components', function () {
    return gulp.src('bower_components/**/')
        .pipe(gulp.dest('public/components'));
});

gulp.task('watch', function () {

    server.listen(35729, function (err) {

        if (err) {
            return console.log(err)
        }
        // Watch .scss files
        gulp.watch(sassDir + '/**/*.scss', ['styles']);
    });

});