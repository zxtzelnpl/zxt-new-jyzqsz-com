'use strict';

const gulp = require('gulp');
const browserSync = require('browser-sync').create();

const config = require('./gulp.config.js');

const plumber = require('gulp-plumber');
const less = require('gulp-less');
const autoprefixer = require('gulp-autoprefixer');
const nano = require('gulp-cssnano');
const fileinclude = require('gulp-file-include');


const {AUTOPREFIXER_BROWSERS,pc,mobile} = config;

function dev() {

  /**
   * html
   */
  gulp.task('pc-html:dev',()=>{
    /** @namespace pc.html */
    return gulp.src(pc.html.from)
      .pipe(fileinclude({
        prefix: '@@',
        basepath: '@file'
      }))
      .pipe(gulp.dest(pc.html.to))
      .pipe(browserSync.stream())
  })

  /**
   * style
   */
  gulp.task('pc-style:dev', () => {
    return gulp.src(pc.style.from)
      .pipe(plumber())
      .pipe(less())
      .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
      .pipe(gulp.dest(pc.style.to))
      .pipe(browserSync.stream())
  })

  /**
   * serve
   */
  gulp.task('pc-serve', ['pc-html:dev','pc-style:dev'], () => {
    browserSync
      .watch(['assets/home_new/js/*.js','assets/home_new/images/*.*'])
      .on('change',browserSync.reload);

    browserSync.init({
      server: config.root,
      notify: false,
      directory: true
    })

    gulp.watch(pc.style.watch, ['pc-style:dev']);
    gulp.watch(pc.html.watch, ['pc-html:dev']);
  })


  /**
   * html
   */
  gulp.task('mobile-html:dev',()=>{
    /** @namespace mobile.html */
    return gulp.src(mobile.html.from)
      .pipe(plumber())
      .pipe(fileinclude({
        prefix: '@@',
        basepath: '@file'
      }))
      .pipe(gulp.dest(mobile.html.to))
      .pipe(browserSync.stream())
  })

  /**
   * style
   */
  gulp.task('mobile-style:dev', () => {
    return gulp.src(mobile.style.from)
      .pipe(plumber())
      .pipe(less())
      .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
      .pipe(gulp.dest(mobile.style.to))
      .pipe(browserSync.stream())
  })

  /**
   * serve
   */
  gulp.task('mobile-serve', ['mobile-html:dev','mobile-style:dev'], () => {
    browserSync
      .watch(['assets/home_mobile/images/*.*','assets/home_mobile/javascript/*.js'])
      .on('change',browserSync.reload);

    browserSync.init({
      server: config.root,
      notify: false,
      directory: true
    })

    gulp.watch(mobile.style.watch, ['mobile-style:dev']);
    gulp.watch(mobile.html.watch, ['mobile-html:dev']);
  })
}

module.exports = dev;
