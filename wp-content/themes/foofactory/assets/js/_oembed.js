import $ from 'jquery';
$('.oembed .placeholder.video').on('click', function(event) {
      $(this).addClass('playing');
       $(this).find('iframe').attr('src', $(this).data('videourl'));
});
