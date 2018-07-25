'use strict';

const gulp = require('gulp');
const browserSync = require('browser-sync').create();

const config = require('./gulp.config.js');

const plumber = require('gulp-plumber');
const less = require('gulp-less');
const autoprefixer = require('gulp-autoprefixer');
const nano = require('gulp-cssnano');
const fileinclude = require('gulp-file-include');


const {AUTOPREFIXER_BROWSERS} = config;

function dev() {

  /**
   * html
   */
  gulp.task('html:dev',()=>{
    return gulp.src(['template/*.html'])
      .pipe(fileinclude({
        prefix: '@@',
        basepath: 'common/'
      }))
      .pipe(gulp.dest('html/'))
      .pipe(browserSync.stream())
  })

  /**
   * style
   */
  gulp.task('style:dev', () => {
    return gulp.src('less/*.less')
      .pipe(plumber())
      .pipe(less())
      .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
      .pipe(gulp.dest('assets/home_new/css/'))
      .pipe(browserSync.stream())
  })

  /**
   * serve
   */
  gulp.task('serve', ['html:dev','style:dev'], () => {
    browserSync
      .watch(['assets/home/js/*.js','assets/home_new/images/*.*'])
      .on('change',browserSync.reload);

    browserSync.init({
      server: config.root,
      notify: false,
      directory: true
    })

    gulp.watch('less/*.less', ['style:dev']);
    gulp.watch(['template/*.html','common/*.html'], ['html:dev']);
  })
}

module.exports = dev;
