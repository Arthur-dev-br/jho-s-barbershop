$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
});



$('.slideEventos').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  rows: 1,
  autoplay: true,
  autoplaySpeed: 2100,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1

      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.slideGaleria').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1250,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.cardDepoimentos').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
});

new WOW().init();


// * menu mobile *//

document.querySelector(".abrir-menu").onclick = function () {
  // alert("cliquei no botão ABRIR MENU")
  document.documentElement.classList.add("menu-ativo")
}

document.querySelector(".fechar-menu").onclick = function () {
  // alert("cliquei no botão FECHAR MENU")
  document.documentElement.classList.remove("menu-ativo")
}


// On Scroll //
window.onscroll = function () {
  var top = window.scrollY;

  if (top >= 1100) { //SE TOP FOR MAIOR QUE 1100 faça:
    console.log(top);
    document.getElementById('topoFixo').classList.add('menu-fixo');
  } else { //SENÃO for faça:
    console.log("estou abaixo de: " + top);
    document.getElementById('topoFixo').classList.remove('menu-fixo');
  }

}
