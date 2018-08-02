/*防抖动*/
function debounce(fn, delay) {
  // 维护一个 timer
  var timer = null;

  return function() {
    // 通过 ‘this’ 和 ‘arguments’ 获取函数的作用域和变量
    var context = this;
    var args = arguments;

    clearTimeout(timer);
    timer = setTimeout(function() {
      fn.apply(context, args);
    }, delay);
  }
}

/*去空格*/
var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
function trim( text ) {
  return text == null ?
    "" :
    ( text + "" ).replace( rtrim, "" );
}

/*多行省略控制*/
function eclipse(selector,number){
  $(selector).each(function(index,info){
    var html = info.innerHTML;

    if(html.length>number){
      info.innerHTML = html.slice(0,number)+'...';
    }

  });
}

$(function(){
  console.log('%c民众投顾', 'background:#44a2f2;font-size:2em;color:#fff;font-weight:bold;border-radius:5px;padding:5px;');
  console.log('%ccommon.js loaded', 'background:yellow;color:#44a2f2;');

  /*公司申明*/
  function statementShow(){
    console.log('statementShow');
    $('.statement').addClass('show');
  }
  function statementHide(){
    console.log('statementHide');
    $('.statement').removeClass('show');
  }
  $('[data-action="show-statement"]').on('click',statementShow);
  $('[data-action="hide-statement"]').on('click',statementHide);


  /*侧边栏*/
  var siderToolBar = document.querySelector('.sider-toolbar');
  var siderToolBarB = parseInt(getComputedStyle(siderToolBar).bottom);
  var footer = document.querySelector('footer.footer');
  var innerHeight = window.innerHeight;
  var contentWidth = 1350;
  var delta = 80;
  var show = 'show';
  function checkSiderBar(){
    var scrollY = window.scrollY;
    var currentFooterTop = footer.getBoundingClientRect().top;

    if(scrollY<innerHeight){
      $(siderToolBar).removeClass(show)
    }
    else{
      $(siderToolBar).addClass(show)
    }

    if(currentFooterTop < innerHeight - siderToolBarB + delta){
      $(siderToolBar).css({
        bottom:innerHeight-currentFooterTop+delta
      })
    }
    else{
      $(siderToolBar).css({
        bottom:''
      })
    }
  }
  $(document).on('scroll',checkSiderBar);


  /*侧边栏-横向*/
  function siderToolBarVertical(){
    var innerWidth = window.innerWidth;
    var _space = (innerWidth - contentWidth)/2;
    var space = _space>0?_space:0;
    var left = contentWidth + space*2 - 30 - siderToolBar.getBoundingClientRect().width;
    $(siderToolBar).css({
      left:left
    })
  }
  siderToolBarVertical();
  $(window).on('resize',siderToolBarVertical);

  /*回到顶部工具*/
  function scrollToTop(){
    $('body,html').animate({scrollTop: 0}, 1000);
  }
  $('[data-action="scroll-to-top"]').on('click',scrollToTop)
})
