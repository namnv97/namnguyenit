$('.slide-home').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    items:1
});

$('.owl-custom-say').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    items:1
});

$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : 5,
    dots: false,
    nav: false,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});

$(document).ready(function() {
    $(".fancybox-thumb").fancybox({
        prevEffect  : 'none',
        nextEffect  : 'none',
        helpers : {
            title   : {
                type: 'outside'
            },
            thumbs  : {
                width   : 50,
                height  : 50
            }
        }
    });
});



//Menu
jQuery(document).ready(function () {
    jQuery('.menu-box .main-menu>li.menu-item-has-children>a').append('<i class="fa fa-angle-down"></i>');
    jQuery('.menu-box .main-menu .sub-menu>li.menu-item-has-children>a').append('<i class="fa fa-angle-right"></i>');

    jQuery('.menu-site .btn-show-menu').click(function () {
        jQuery(this).parents('.menu-site').find('.menu-box').css('width','100%');
        jQuery('body').css("overflow-y","hidden");
    });
    jQuery('.menu-box .btn-hide-menu, .menu-box .bg-menu').click(function () {
        jQuery(this).parents('.menu-box ').css('width','0');
        jQuery('body').css('overflow-y','auto');
    });

    if($(window).width()<992){
        jQuery('.main-menu').on('click','li.menu-item-has-children>a>i',function(e){
            e.preventDefault();
            console.log('1');
            jQuery(this).parent().parent().find('ul.sub-menu').eq(0).slideToggle('fast');
        });
    }
});


jQuery(document).ready(function(){
  jQuery('.content_home>ul>li').on('click',function(){
    if(jQuery(this).hasClass('active')) return false;
    jQuery(this).parent().find('li').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('.content_home .list_post .loading_img').show();
    jQuery('.content_home .list_post .content').hide();
    // jQuery('.content_home .list_post .content').css({'width':0,'height':0});
    setTimeout(function(){
      jQuery('.content_home .list_post .loading_img').hide();
      jQuery('.content_home .list_post .content').show();
      // jQuery('.content_home .list_post .content').css({'width':'100%','height':'100%'});
    },2000);
  });
});