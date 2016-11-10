var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');

gulp.task('hello', function() {
  // place code for your default task here
  console.log("Iniciando Gulp para Alberca de Cordoba");
});


gulp.task('sass', function(){
  return gulp.src('scss/style.scss')
    .pipe(sass()) // Using gulp-sass to convert to a CSS file
    .pipe(gulp.dest('../'))
});

gulp.task('uglify', function(){
  return gulp.src('js/javascript.js')
    .pipe(uglify()) // Using gulp-sass to convert to a CSS file
    .pipe(gulp.dest('../js/'))
});


gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', ['sass']); 
  gulp.watch('js/javascript.js', ['uglify']); 
  // Other watchers
})

gulp.task('default', ['sass', 'uglify']);