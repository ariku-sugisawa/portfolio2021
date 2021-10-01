$(function () {
  'use strict';

  // ==========================================================================
  // 共通要素定義
  // ==========================================================================

  var $window = $(window);
  var $document = $(document);
  var $html = $(document.documentElement);
  var $body = $(document.body);
  var $page = $html.add($body);

  /* 以下各種処理を記述 */

  const loader = document.getElementById('js-loader');
  window.addEventListener('load', () => {
    const ms = 400;
    loader.style.transition = 'opacity ' + ms + 'ms';

    const loaderOpacity = function () {
      loader.style.opacity = 0;
    };
    const loaderDisplay = function () {
      loader.style.display = 'none';
    };
    setTimeout(loaderOpacity, 1000);
    setTimeout(loaderDisplay, 1000 + ms);
  });

  $(function () {
    var $win = $(window),
      $header = $('.header__wrap'),
      $main = $('.main'),
      animationClass = 'is-scroll';

    $win.on('load scroll', function () {
      var value = $(this).scrollTop();
      if (value > 100) {
        $header.addClass(animationClass);
        $main.addClass(animationClass);
      } else {
        $header.removeClass(animationClass);
        $main.removeClass(animationClass);
      }
    });
  });
});
