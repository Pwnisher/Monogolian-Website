
    var loader = document.getElementById("loading");
    window.addEventListener("load",function(){
      loader.style.display = "none";
    })

/*-------------------- STICKY NAVBAR -----------------*/
    window.addEventListener("scroll",function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })

/*--------------------  HIGHLITER --------------------*/
    const li=document.querySelectorAll(".links");
    const sec=document.querySelectorAll("section");

    function activeMenu(){
      let len=sec.length;
      while(--len && window.scrollY + 100 <sec[len].offsetTop){}
        li.forEach(ltx => ltx.classList.remove("active"));
      li[len].classList.add("active");
    }
    activeMenu();
    window.addEventListener("scroll" , activeMenu);