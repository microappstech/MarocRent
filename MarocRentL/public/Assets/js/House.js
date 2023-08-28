var navbar = this.document.querySelector(".navbar");

window.addEventListener("scroll", function () {
    var demandCard = document.querySelector("#demandCard");
    console.log("Y : "+this.window.scrollY);
    navbar.style.position ="fixed";
    if (window.scrollY > 310) {
        // console.log( navbar.offsetTop );
        // console.log("should be fixed");
        demandCard.classList.add("demandCardFixed");
    } else {
        demandCard.classList.remove("demandCardFixed");
    }
  });