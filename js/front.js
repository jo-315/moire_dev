jQuery(function($) {
  add_first_circle = function() {
    const options = {
    	widthRatio: 0.5,
    	heightRatio: 0.5,
      delay: 0,
      gap: 0,
    	effect: "drop-css",
    	effectOptions: {
        radius: 400,
    		duration: 3e3,
    		color: '#ffffff',
        opacity: 0.3
    	}
    }
  	$(".content-effect").twinkle(options);
  }

  add_random_circle = function() {
    const options = {
      widthRatio: Math.random(),
      heightRatio: Math.random(),
      delay: 0,
      gap: 0,
      effect: "drops-css",
      effectOptions: {
        radius: 200,
        duration: 1e3 + Math.random() * 1e3,
        color: '#ffffff',
        opacity: 0.3
      }
    }

    $(".content-effect").twinkle(options);
  }

  if (window.matchMedia( "(min-width: 480px)" ).matches) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve(add_first_circle())
      }, 300)
    }).then(() => {
      $(".moire-title").fadeIn(4000)
      return
    }).then(() => {
      $(".moire-sub-title").fadeIn(5000)
      return
    }).then(() => {
      $(".moire-header-img").fadeIn(5000)
      return
    }).then(() => {
      setInterval(add_random_circle, 2500);
      return
    })
  } else {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve(add_first_circle())
      }, 300)
    }).then(() => {
      $(".moire-title").fadeIn(1500)
      return
    }).then(() => {
      $(".moire-sub-title").fadeIn(2500)
      return
    }).then(() => {
      $(".moire-header-img").fadeIn(2500)
      return
    })
  }
})

jQuery(function($) {
  $(window).scroll(function (){
    var index = 0;
    $('.project-content-column-wrap').each(function(){
      index++;
      var elemPos = $(this).offset().top,
      scroll = $(window).scrollTop(),
      windowHeight = $(window).height();
      if (window.matchMedia( "(min-width: 480px)" ).matches) {
        if (scroll > elemPos - windowHeight && index === 1){
          $(this).addClass('project-content-column-wrap_fadein');
        } else if (scroll > elemPos - windowHeight + 100 && index === 2) {{
          $(this).addClass('project-content-column-wrap_fadein');
        }} else if (scroll > elemPos - windowHeight + 200 && index === 3) {{
          $(this).addClass('project-content-column-wrap_fadein');
        }}
      } else {
        if (scroll > elemPos - windowHeight){
          $(this).addClass('project-content-column-wrap_fadein');
        }
      }
    });
  });
})
