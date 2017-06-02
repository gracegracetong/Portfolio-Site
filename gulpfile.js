
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('sass', function(){
  return gulp.src('sass/styles.scss')

    .pipe(sass().on('error', function(err) {
      console.error(err.message);
      browserSync.notify(err.message, 8000); // Display error in the browser
      this.emit('end'); // Prevent gulp from catching the error and exiting the watch process
    }))

    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('styles'))
    .pipe(browserSync.reload({
      stream: true
    }))
});


gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: './'
    },
  })
})


gulp.task('watch', ['browserSync', 'sass'], function(){
  gulp.watch('sass/**/*.scss', ['sass']); 
  gulp.watch('*.html', browserSync.reload); 
  gulp.watch('js/**/*.js', browserSync.reload); 
})