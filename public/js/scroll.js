$('.img-holder').imageScroll({
   image: null,
   imageAttribute: 'image',
   container: $('body'),
   windowObject: $(window),
   speed:.2,
   coverRatio:.50,
   holderClass: 'imageHolder',
   imgClass: 'img-holder-img',
   holderMinHeight: 200,
   holderMaxHeight: null,
   extraHeight: 50,
   mediaWidth: 1600,
   mediaHeight: 900,
   parallax: true,
   touch: false
});