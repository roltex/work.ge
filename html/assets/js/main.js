


/*Detect Browser*/

var BrowserDetect=(function(){
  var ua = window.navigator.userAgent;

  /*Chrome*/
  var Chrome=function(){
    return CheckBrowser('chrome');
  };

  /*Safari*/
  var Safari=function(){
    return CheckBrowser('safri');
  };

  /*Safari*/
  var Edge=function(){
    return CheckBrowser('edge');
  };

  /*Firefox*/
  var Firefox=function(){
    return CheckBrowser('firefox');
  };
  /*Opera*/
  var Opera=function(){
    return CheckBrowser('opera');
  };
  /*IE*/
  var MSIE = function(){
    if(CheckBrowser('msie') || CheckBrowser('trident'))
    {
      return true;
    }
  };

  var CheckBrowser=function(name){
    var agent=ua.toLowerCase().indexOf(name);
    return (agent>-1)?true:false;
  };

  /*Returns User Agent*/
  var userAgent=function(){
    return ua;
  };

  return {
    callUserAgent:userAgent,
    isMSIE:MSIE,
    isChrome:Chrome,
    isOpera:Opera,
    isSafari:Safari,
    isEdge:Edge,
    isFirefox:Firefox
  }
}());




/*Global variables*/
//var mousewheel = BrowserDetect.isFirefox() ? "DOMMouseScroll" : "mousewheel";

var documentHeight = $(document).height();
var document=document.body;
var page;

var windowWidth = window.innerWidth,
    windowHeight = window.innerHeight;
var skrollr;

/*
 ScrollHandler
 For Page parallax
 */
var PageAnimations = (function($,window,document) {
  var distanceY = window.pageYOffset || document.documentElement.scrollTop;
  var delta= 0, scrolled=0;

  var ScrollFunction= function(){

  };



  var doTransform=function(selector, value){
    selector.css({
      '-webkit-transform' : value,
      '-moz-transform'    : value,
      '-ms-transform'     : value,
      '-o-transform'      : value,
      'transform'         : value
    });
  };



  return {
    callPageScrollFunction: ScrollFunction
  };
})($,window,document);



/*MainAnimations */
var MainAnimations= (function($,document) {


  var Animation=function(page){
    if(page=='home' || page=='search'){
      HomeSearch();
      if(page=='search'){
        RangeSlider();
      }
    } else if(page=='company'){

      Company();

    }

    slideToggle();

  };


  /*RangeSlider*/
  var RangeSlider= function(){

    $('.price-range').jRange({
      from: 200,
      to: '2500',
      step: 1,
      scale: [0,700,1500,2000,'2500 +'],
      format: '%s',
      width: 200,
      showLabels: true,
      isRange : true,
      snap: true
    });

    $('.experience-range').jRange({
      from: 1,
      to: 7,
      step: 1,
      scale: [1,2,3,4,5,6,'7 +'],
      format: '%s',
      width: 200,
      showLabels: true,
      isRange : true,
      snap: true
    });


  };



  /*slideToggle*/
  var slideToggle= function(){
    var el = $('.slideToggle');

    el.click(function(){
      $(this).parent('.slideToggle-parent').toggleClass('open');
    });
  };

  /*HomeSearch*/
  var HomeSearch = function(){

    var search_form=$('.home-search');
    var detail_search=$('.detail-search-btn');
    var select=search_form.find('.select');
    var select_title=select.find('h3');
    var select_li=select.find('li');
    var button=search_form.find('.search-button');

    //checkbox;
    var checkbox=$('.checkbox').find('a');


    // Open select box
    select_title.click(function(event){

      event.preventDefault();
      event.stopPropagation();

      if(select.closest('.select').hasClass('open')){
        select.closest('.select').removeClass('open');
      }


      $(this).closest('.select').toggleClass('open');

    });



    // Select selectbox option
    select_li.click(function(event){

      event.preventDefault();

      var txt=$(this).text();
      var val=$(this).attr('attr-id');

      $(this).closest('.select').find('h3').addClass('active').text(txt);
      $(this).closest('.select').find('input').val(val);

      $(this).closest('.select').removeClass('open');


    });


    //Close selectbox
    $('#header,#filters,#categories').on('click', function(event) {

      event.preventDefault();
      event.stopPropagation();
      select.removeClass('open');

    });


    //Open detailed search options
    detail_search.click(function(event){

      event.preventDefault();

      $('.detailed, .detail-search, #header').toggleClass('open');

    });


    //Custom Checkbox
    checkbox.click(function(event){

      event.preventDefault();
      event.stopPropagation();


      var el=$(this).closest('.checkbox');

      if($(this).closest('.checkbox').find('input').is(':checked')){
        el.find('input').removeAttr('checked');
        el.removeClass('checked');
      }else{
        el.find('input').attr('checked', 'checked');
        el.addClass('checked');
      }


    });



    //Submit Form
    button.click(function(event){

      event.preventDefault();

      $('#search-form').submit();

    });



  };


  /*Company Page*/

  var Company=function(){
    var wrap=$('.company');
    var vide_wrap=wrap.find('.video');
    var vide_items=vide_wrap.find('.item');
    var video_frame=vide_wrap.find('frame');

    vide_items.click(function(event){
      event.preventDefault();
      event.stopPropagation();
      var url= $(this).find('a').attr('href');

      video_frame.append('<iframe width="100%" height="340" src="'+url+'" frameborder="0" allowfullscreen></iframe>');

    });


    var more=wrap.find('.read-more');

    more.click(function(event){
      event.preventDefault();

      $('.hidden-txt').toggleClass('show');

    });


    var tab_btn=$('.tabs');

    tab_btn.click(function(event){
      event.preventDefault();

      $('.sugested').slideDown();
      tab_btn.removeClass('active');
      $(this).addClass('active');

    })


  };

  return {
    callAnimation: function(page){
      Animation(page);
    }
  };
})($,window);



/*Loader */
var Loader = (function($,document) {

  var Loading = function(){

  };

  var Loaded = function(){

    setTimeout(function(){
      $('html').addClass('loaded');

      MainAnimations.callAnimation(page);
      /*  PageAnimations.callPageScrollFunction();
       $(window).bind("scroll", function(){
       PageAnimations.callPageScrollFunction();
       });*/

      if(page=='company'){
        initMap();
        initGallery();
      }

      Modal.init();

    },500);
  };

  return {
    Loading: Loading,
    Loaded: function(page){
      Loaded(page)
    }
  };
})($,window);



/*Main*/
(function($,window,document){
  "use strict";

  /*Detect page*/
  page=$('body').attr('data-page');
  page=page=='undefined'?'home':page;

  Loader.Loading();
  /*Windlow Load*/
  window.onload = function (e) {

    if(page=='home'){
      $('.amcharts-chart-div').find("a[href='http://www.amcharts.com/javascript-maps/']").remove();
    }

    $(".Scrollbar").mCustomScrollbar({
      theme:"dark"
    });

    var slick_nums= 1,dots=true;

    if(page=='company'){
      slick_nums=4;
      dots=false;
    }

    $(".slider").slick({
      dots: dots,
      infinite: true,
      centerMode: false,
      slidesToShow: slick_nums,
      slidesToScroll: 1,
      useTransform: true,
      autoplay:false,
      cssEase: 'cubic-bezier(0.190, 1.000, 0.220, 1.000)',
      speed: 1000
    });


    skrollr = skrollr.init({
      mobileDeceleration: 0.004,
      edgeStrategy: 'set',
      forceHeight: true,
      smoothScrolling: false
    });

    Loader.Loaded(page);

  };

  /*Windlow Resize*/
  window.onresize = function (e) {

    windowWidth = window.innerWidth;
    windowHeight = window.innerHeight;
    documentHeight=$(document).height();

    skrollr.refresh();

  };
})($,window,document);



/*Google map */
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    zoom: 16,
    center: {lat: -25.363882, lng: 131.044922}
  });


  var marker = new google.maps.Marker({
    position: map.getCenter(),
    icon: 'http://localhost/work.ge/assets/images/icos/pin.png',
    map: map
  });
}


/*Google map */
function initGallery() {

  $('.fancybox-thumbs').fancybox({
    closeBtn  : true,
    arrows    : true,
    nextClick : true,

    helpers : {
      thumbs : {
        width  : 139,
        height : 100
      },
      overlay : {
        css : {
          'background' : 'rgba(33,33,33,0.9)'
        }
      }
    }
  });


}






/*Loader */
var Modal = (function($,document) {

  var Main = function(){
    var btn = $('.modal-btn');
    var modal_window = $('#myModal');
    var close = modal_window.find('.close');

    btn.click(function(){
      var title=$(this).attr('attr-title');
      var txt=$(this).attr('attr-text');
      console.log(txt);

      modal_window.find('h2').text(title);
      modal_window.find('p').text(txt);
      modal_window.show();

    });

    close.click(function(){

      modal_window.hide();
      modal_window.find('h2').text('');
      modal_window.find('text').text('');

    });


  };


  return {
    init: function(){
      Main()
    }
  };
})($,window);



