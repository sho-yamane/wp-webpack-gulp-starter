// require
const gulp = require("gulp")
const webpackStream = require("webpack-stream")
const webpack = require("webpack")
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const plumber = require('gulp-plumber')
const rename = require('gulp-rename')
const cssnano = require('gulp-cssnano')
const watch = require('gulp-watch')
const notify = require('gulp-notify')
const imagemin = require('gulp-imagemin')
const fileInclude = require('gulp-file-include')

// webpack.config.js
const webpackConfig = require("./webpack.config")

// settings
const imagePath = {
  src:  './img',
  dist: './dist/img'
}

// task
gulp.task("webpack", () => {
  return webpackStream(webpackConfig, webpack)
    .on('error', function handleError () {
      this.emit('end')
    })
    .pipe(gulp.dest("dist/js"))
})

gulp.task('sass', () => {
  return gulp.src('./scss/*.scss')
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./dist/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano({discardComments: {removeAll: true}}))
    .pipe(gulp.dest('./dist/css'))
})

gulp.task('include', ['sass'], function() {
  gulp.src('php/header.php')
    .pipe(fileInclude())
    .pipe(gulp.dest('./'))
});

gulp.task('optimizeImage', () => {
  return gulp.src(imagePath.src + '/**/*')
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(imagemin())
    .pipe(gulp.dest(imagePath.dist));
})

// command
gulp.task('default', ['include', 'webpack', 'optimizeImage'], () => {})

gulp.task('watch', () => {
  gulp.watch('./js/**/*', ['webpack'])
  gulp.watch('./img/*', ['optimizeImage'])
  gulp.watch('./scss/**/*', ['include'])
  gulp.watch('./php/*.php', ['include'])
})
