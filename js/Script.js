(function() {

  var preload = document.getElementById("preload");
  var loading = 5;
  var id = setInterval(frame,64);

  function frame() {
    if(loading == 100) {
      clearInterval(id);
      window.open("Homepage.php", "_self");
    } else {
      loading = loading + 1;
      if(loading == 90) {
        preload.style.animation = "fadeOut 1s ease"
      }
    }
  }
})();
