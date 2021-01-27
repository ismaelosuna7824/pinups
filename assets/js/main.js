(function($){
    $.fn.scrollFixed = function(params){
    params = $.extend( {appearAfterDiv: 0, hideBeforeDiv: 0}, params);
    var element = $(this);
      
    if(params.appearAfterDiv)
        var distanceTop = element.offset().top + $(params.appearAfterDiv).outerHeight(true) + element.outerHeight(true);
    else
        var distanceTop = element.offset().top;
      
    if(params.hideBeforeDiv)
        var bottom = $(params.hideBeforeDiv).offset().top - element.outerHeight(true) - 10;
    else
        var bottom = 200000;
      
        $(window).scroll(function(){
            if( $(window).scrollTop() > distanceTop && $(window).scrollTop() < bottom ) {
                element.addClass('scrolled');
                $('body').css('padding-top', $('.header').innerHeight())
            } else {
                element.removeClass('scrolled');
                $('body').css('padding-top', '')
            }
        });
    };
  })(jQuery);
      
$(document).ready( function(){
    $(".header").scrollFixed({appearAfterDiv:'.hero'});
});

$('#langSelect').on('change', function() {
  let currentLang = $('html').attr('lang')
  if (this.value === "es" && currentLang !== "es") {
      window.location.href = "/";
  } else if (this.value === "en" && currentLang !== "en") {
      window.location.href = "/en";
  }
});