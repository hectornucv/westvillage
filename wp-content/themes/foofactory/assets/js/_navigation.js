import $ from 'jquery';
/*=============================================
= Enabling multi-level navigation =
===============================================*/
$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
  event.preventDefault();
  event.stopPropagation();
  $(this).parent().siblings().removeClass('open');
  $(this).parent().toggleClass('open');
});
