import autoprefixer from 'autoprefixer';
import browserSync from 'browser-sync';
import gulp from 'gulp';
import plumber from 'gulp-plumber';
import postcss from 'gulp-postcss';
import rename from 'gulp-rename';
import gulpSass from 'gulp-sass';
import sourcemaps from 'gulp-sourcemaps';
import dartSass from 'sass';

const sass = gulpSass(dartSass);

const dir = {
  src: 'src'
};

// watch: 更新ファイルの監視
// ==========================================================================

gulp.task('watch', () => {
  gulp.watch(`${dir.src}/**/*`, gulp.task('server-reload'));
  gulp.watch(`${dir.src}/**/scss/**/*.scss`, gulp.task('scss'));
});

// scss: Sassのコンパイル
// ==========================================================================

gulp.task('scss', (done) => {
  gulp.src([`${dir.src}/**/scss/**/*.scss`], { base: dir.src })
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(sourcemaps.write('./'))
    .pipe(rename((path) => {
      path.dirname = path.dirname.replace('scss', 'css');
    }))
    .pipe(gulp.dest(dir.src));
  done();
});

// server: ローカルサーバーの起動
// ==========================================================================

gulp.task('server', (done) => {
  browserSync.init({
    server: { baseDir: dir.src }
  });
  done();
});

// server-reload: ブラウザのリロード
// ==========================================================================

gulp.task('server-reload', (done) => {
  browserSync.reload();
  done();
});

// default: 起動時処理
// ==========================================================================

gulp.task('default', gulp.parallel('watch', 'scss', 'server'));
