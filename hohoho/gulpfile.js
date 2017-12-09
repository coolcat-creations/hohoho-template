var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');


gulp.task('styles', function() {
	gulp.src('scss/template.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('css'));
});

//Watch task
gulp.task('watch',function() {
	gulp.watch('scss/**/*.scss',['styles']);
});


gulp.task('js', function(){
	gulp.src('js/*.js')
		.pipe(uglify())
		.pipe(rename({
			suffix: ".min",
		}))
		.pipe(gulp.dest('js'));
});

gulp.task('css', function(){
	gulp.src('css/template.css')
		.pipe(minify())
		.pipe(rename({
			suffix: ".min",
		}))
		.pipe(gulp.dest('css'));
});

gulp.task('default',['styles','js','css'],function(){
});