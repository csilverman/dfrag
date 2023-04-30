document.addEventListener('DOMContentLoaded', function () {
  const notes = document.querySelectorAll('.blog-entry');

  notes.forEach((note) => {
    var randomRotation = Math.floor(Math.random()*1+1);
    if( Math.round(Math.random()) )
      randomRotation = randomRotation * -1;
//    alert(randomRotation);
    note.style.setProperty('--rotation', randomRotation +'deg');
  });


  const frags = document.querySelectorAll('.shape');

  frags.forEach((frag) => {
    var randomRotation = Math.floor(Math.random()*10+1);
    if( Math.round(Math.random()) )
      randomRotation = randomRotation * -1;
    // frag.style.transform = 'rotate(' + randomRotation +'deg)';
    frag.style.setProperty('--frag-rotation', randomRotation + 'deg');
  });



  var waypoints = $('.masonry-grid').waypoint(function(direction) {
    if(direction == 'down')
      $('html').addClass('hide')
    if(direction == 'up')
      $('html').removeClass('hide')

  }, {
    offset: '34%'
  })

  //  randomize fragment colors
  var shape_1_fill_colors = Array("#f00", "#ff0", "#0f0");
  var shape_1_fill = shape_1_fill_colors[Math.floor(Math.random()*shape_1_fill_colors.length)];

  var shape_2_fill_colors = Array("#030", "#f0a", "#888");
  var shape_2_fill = shape_2_fill_colors[Math.floor(Math.random()*shape_2_fill_colors.length)];

  $(".shape-1").get(0).style.setProperty("--shape-1-fill", shape_1_fill);
  $(".shape-2").get(0).style.setProperty("--shape-2-fill", shape_2_fill);

}, false);
