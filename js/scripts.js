
    var loader = document.getElementById("loading");
    window.addEventListener("load",function(){
      loader.style.display = "none";
    })


    window.addEventListener("scroll",function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })