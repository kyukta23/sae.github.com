
  window.addEventListener('load',fun2);
  window.addEventListener('load',fun3);
    function fun2(){
      for(var i=3;i<=source.length-1;i++){
        $(".headSlider").append("<div class='item'><img src=images/slider/" + source[i] + "></div>");
      }
    }
    function fun3(){
        $("#trinity1").append("<img src=images/trinity/" + trinity[2] + ">");
         $("#trinity2").append("<img src=images/trinity/" + trinity[3] + ">");
          $("#trinity3").append("<img src=images/trinity/" + trinity[4] + ">");
    }

	$(window).scroll(function() {
		if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
		{
			$('.navbar').addClass('fixed');
			$('.navbar').removeClass('transparentNav');
		} else {
			$('.navbar').addClass('transparentNav');
			$('.navbar').removeClass('fixed');
		}
	});

