$(document).ready(function(){
  console.log('yes');

  $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                $('.displaynone').fadeIn(150);
            } else {
                $('.displaynone').fadeOut(200);
            }
        });

})