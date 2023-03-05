"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
var concat = require("gulp-concat");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var cssnano = require("cssnano");

gulp.task("sass", function () {
  const plugins = [autoprefixer(), cssnano()];
  return gulp
    .src("./src/Resources/public/scss/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss(plugins))
    .pipe(gulp.dest("./src/Resources/public/css"));
});
