var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');

gulp.task('hello', function() {
  // place code for your default task here
  console.log("Iniciando Gulp para Alberca de Cordoba");
});


gulp.task('sass', function(){
  return gulp.src('scss/style.scss')
    .pipe(sass()) // Using gulp-sass to convert to a CSS file
    .pipe(gulp.dest('../'))
});


gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', ['sass']); 
  // Other watchers
})

gulp.task('default', ['sass']);