var gulp = require('gulp');
var sass = require('gulp-sass');

var order = require("gulp-order");
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var jqc = require('gulp-jquery-closure');

var pumpme = require('pump');
var insert = require("gulp-insert");


gulp.task('styles', function() {
    gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});


gulp.task('styles2', function() {
    gulp.src('../scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('../css/'));
});

var jsDest = 'js/min';

gulp.task('scripts', function() {
    return gulp.src('/js/*.js')
        .pipe(order([
            'style-guide/js/enquire.js',
            'style-guide/js/bootstrap.min.js',
            'style-guide/js/prism.js',
            'style-guide/js/spectrum-picker.js',
            'style-guide/js/uncomment.js',
            'style-guide/js/prism-builder.js',
            'style-guide/js/velocity.js',
            'style-guide/js/velocity-ui.js',
            'style-guide/js/_expand-form.js',
            'style-guide/js/formShowHide.js',
            'style-guide/js/slideAnimation.js',
            'style-guide/js/hideAll.js',
            'style-guide/js/hideCode.js',
            'style-guide/js/hideNotes.js',
            'style-guide/js/hideTitle.js',
            'style-guide/js/navSmall.js',
            'style-guide/js/animateHeight.js',
            'style-guide/js/editor-stuff.js',
            'style-guide/js/editable-content.js'
        ], { base: './' }))
        .pipe(concat('compiled.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('compiled.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});


var jsDest2 = '../js/min';

gulp.task('scripts2', function(cb) {
  pumpme([
      gulp.src('../js/*.js'),
      concat('main.js'),
      insert.wrap('(function($) {', '})( jQuery );'),
      gulp.dest(jsDest2),
      rename('main.min.js'),
      uglify(),
      gulp.dest(jsDest2)
    ],
    cb
  );
});

//Watch task
gulp.task('default',function() {
    gulp.watch('scss/**/*.scss',['styles']);
    gulp.watch('../scss/**/*.scss',['styles2']);
    gulp.watch('js/*.js',['scripts']);
    gulp.watch('../js/*.js',['scripts2']);
});

gulp.task('setup', ['styles']);

gulp.task('setup', ['styles2']);