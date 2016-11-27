var gulp = require('gulp');
var less = require('gulp-less');
var plumber = require('gulp-plumber');
var notify = require("gulp-notify");
var LessPluginCleanCSS = require('less-plugin-clean-css');
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');

function customNotify(message) {
    return notify({
        title: 'Haunted',
        message: function(file) {
            return message + ': ' + file.relative;
        }
    })
}

gulp.task('default', ['less', 'js']);



/**************
 * Javascript *
 **************/
var srcJsFiles = [
    'webroot/js/script.js'
];
gulp.task('js', function () {
    return gulp.src(srcJsFiles)
        .pipe(jshint())
        .pipe(jshint.reporter(stylish))
        .pipe(customNotify('JS linted'));
});



/**************
 *    LESS    *
 **************/

gulp.task('less', function () {
    var cleanCSSPlugin = new LessPluginCleanCSS({advanced: true});
    gulp.src('webroot/css/style.less')
        .pipe(less({plugins: [cleanCSSPlugin]}))
        .pipe(gulp.dest('webroot/css'))
        .pipe(customNotify('LESS compiled'));
});
