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

  window.onload = function () {
    const spinner = document.getElementById('loading');
    spinner.classList.add('loaded');
  };

  $(function () {
    var $win = $(window),
      $header = $('header'),
      $container = $('c-container'),
      animationClass = 'is-scroll';

    $win.on('load scroll', function () {
      var value = $(this).scrollTop();
      if (value > 100) {
        $header.addClass(animationClass);
        $container.addClass(animationClass);
      } else {
        $header.removeClass(animationClass);
        $container.removeClass(animationClass);
      }
    });
  });
});
