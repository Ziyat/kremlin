var lr = require('tiny-lr'), // Минивебсервер для livereload
    gulp = require('gulp'), // Сообственно Gulp JS
    jade = require('gulp-jade'), // Плагин для Jade
    stylus = require('gulp-stylus'), // Плагин для Stylus
    livereload = require('gulp-livereload'), // Livereload для Gulp
    myth = require('gulp-myth'), // Плагин для Myth - http://www.myth.io/
    csso = require('gulp-csso'), // Минификация CSS
    imagemin = require('gulp-imagemin'), // Минификация изображений
    uglify = require('gulp-uglify'), // Минификация JS
    concat = require('gulp-concat'), // Склейка файлов
    connect = require('connect'), // Webserver
    server = lr(),
    serveStatic = require('serve-static');

// vendor files 

var vendorJs = [
        './bower_components/jquery/dist/jquery.min.js',
        './bower_components/materialize/dist/js/materialize.min.js'
    ],
    vendorCss = [
        './bower_components/materialize/dist/css/materialize.min.css'
    ],

    vendorFonts = [
        './assets/fonts/roboto/Roboto-Bold.woff',
        './assets/fonts/roboto/Roboto-Bold.woff2',
        './assets/fonts/roboto/Roboto-Light.woff',
        './assets/fonts/roboto/Roboto-Light.woff2',
        './assets/fonts/roboto/Roboto-Medium.woff',
        './assets/fonts/roboto/Roboto-Medium.woff2',
        './assets/fonts/roboto/Roboto-Regular.woff',
        './assets/fonts/roboto/Roboto-Regular.woff2',
        './assets/fonts/roboto/Roboto-Thin.woff',
        './assets/fonts/roboto/Roboto-Thin.woff2'
    ];
    
gulp.task('stylus', function() {
    gulp.src('./assets/stylus/screen.styl')
        .pipe(stylus({
            use: ['nib']
        })) // собираем stylus
    .on('error', console.log) // Если есть ошибки, выводим и продолжаем
    .pipe(myth()) // добавляем префиксы - http://www.myth.io/
    .pipe(gulp.dest('./public/css/')) // записываем css
    gulp.src('./assets/css/*.css')
    .pipe(gulp.dest('./public/css/'))
    .pipe(livereload(server)); // даем команду на перезагрузку css
});

gulp.task('html', function() {
    gulp.src(['./assets/template/*.html', '!./assets/template/_*.html'])
    .pipe(gulp.dest('./public/')) // Записываем собранные файлы
    .pipe(livereload(server)); // даем команду на перезагрузку страницы
});

// перенос файлов
gulp.task('transfare', function() {
  gulp.src(vendorJs)
      .pipe(gulp.dest('assets/js'))

  gulp.src(vendorCss)
  .pipe(gulp.dest('assets/css'))
  .pipe(gulp.dest('public/css'))

  gulp.src(vendorFonts)
  .pipe(gulp.dest('public/fonts/roboto'))
});
gulp.task('js', function() {
    gulp.src(['./assets/js/**/jquery.min.js', './assets/js/**/materialize.min.js', './assets/js/**/app.js', '!./assets/js/vendor/**/*.js'])
        .pipe(concat('index.js')) // Собираем все JS, кроме тех которые находятся в ./assets/js/vendor/**
        .pipe(gulp.dest('./public/js'))
        .pipe(livereload(server)); // даем команду на перезагрузку страницы
});

gulp.task('images', function() {
    gulp.src('./assets/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./public/img'))

});

gulp.task('http-server', function() {
    connect()
        .use(require('connect-livereload')())
        .use(serveStatic('./public'))
        .listen('9000');

    console.log('Server listening on http://localhost:9000');
});

// Запуск сервера разработки gulp watch
gulp.task('watch', function() {
    // Предварительная сборка проекта
    gulp.run('stylus');
    gulp.run('html');
    gulp.run('images');
    gulp.run('js');

    // Подключаем Livereload
    server.listen(35729, function(err) {
        if (err) return console.log(err);

        gulp.watch('assets/stylus/**/*.styl', function() {
            gulp.run('stylus');
        });
        gulp.watch('assets/css/**/*.css', function() {
            gulp.run('stylus');
        });
        gulp.watch('assets/template/**/*.html', function() {
            gulp.run('html');
        });
        gulp.watch('assets/img/**/*', function() {
            gulp.run('images');
        });
        gulp.watch('assets/js/**/*', function() {
            gulp.run('js');
        });
    });
    gulp.run('http-server');
});

gulp.task('build', function() {
    // css
    gulp.src('./assets/stylus/screen.styl')
        .pipe(stylus({
            use: ['nib']
        })) // собираем stylus
    .pipe(myth()) // добавляем префиксы - http://www.myth.io/
    .pipe(csso()) // минимизируем css
    .pipe(gulp.dest('./build/css/')) // записываем css

    
    gulp.src(['./assets/template/*.html', '!./assets/template/_*.html'])
        .pipe(gulp.dest('./public/')) // Записываем собранные файлы

    // js
    gulp.src(['./assets/js/**/*.js', '!./assets/js/vendor/**/*.js'])
        .pipe(concat('index.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./build/js'));

    // image
    gulp.src('./assets/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./build/img'))

});