document.addEventListener('DOMContentLoaded', function () {
  const notes = document.querySelectorAll('.blog-entry');

  notes.forEach((note) => {
    var randomRotation = Math.floor(Math.random()*1+1);
    if( Math.round(Math.random()) )
      randomRotation = randomRotation * -1;
//    alert(randomRotation);
    note.style.setProperty('--rotation', randomRotation +'deg');
  });

}, false);
