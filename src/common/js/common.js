$(function() {

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

function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-hamburger-bg');

  hamburger.addEventListener('click', function () {
    body.classList.toggle('navOpen');
  });
  blackBg.addEventListener('click', function () {
    body.classList.remove('navOpen');
  });
}
toggleNav();



});
