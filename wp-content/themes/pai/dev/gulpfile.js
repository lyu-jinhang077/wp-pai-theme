const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const del = require('del');
const cssnano = require('gulp-cssnano');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const uglify = require('gulp-uglify');

gulp.task('styles', () => {
  return gulp.src('scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer({ add: true })]))
    .pipe(concat('theme.css'))
    .pipe(gulp.dest('dist/'));
});

gulp.task('scripts', function(){
  return gulp.src('js/**/*.js')
    .pipe(concat('theme.min.js'))
    .pipe(uglify())
    .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
    .pipe(gulp.dest('dist/'));
});

gulp.task('clean', () => {
  return del([
    'dist/**/*'
  ]);
})

gulp.task('build', gulp.series('styles', 'scripts'));
