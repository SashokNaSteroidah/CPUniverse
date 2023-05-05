let gulp = require('gulp')
let rename = require('gulp-rename')
let sass = require('gulp-sass')
let autoprefixer = require('gulp-autoprefixer')
let sourcemaps = require('gulp-sourcemaps')


function scss_convert (done) {
    gulp.src("./scss/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({
            errorLogToConsole: true,
            outputStyle: 'compressed'
        }))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./css/'));
    done()
}

function watcher(){ // Создаем обычную функцию
    gulp.watch("./scss/**/*", scss_convert) // В данной строчке мы вызываем watcher, который при любых изменениях в папке scss будет автоматически делать функцию scss_convert
}

gulp.task("default", gulp.parallel(watcher)); // И здесь мы ее вызываем (можно сделать не только через серию, просто забыл убрать)