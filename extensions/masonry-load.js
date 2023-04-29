  var $grid = $('.masonry-grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    gutter: '.gutter-sizer',
    percentPosition: true
  });

  //  https://masonry.desandro.com/layout.html#imagesloaded
  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
  });
