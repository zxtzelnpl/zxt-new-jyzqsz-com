function debounce(fn, delay) {
  // 维护一个 timer
  let timer = null;

  return function() {
    // 通过 ‘this’ 和 ‘arguments’ 获取函数的作用域和变量
    let context = this;
    let args = arguments;

    clearTimeout(timer);
    timer = setTimeout(function() {
      fn.apply(context, args);
    }, delay);
  }
}


function eclipse(selector,number){
  $(selector).each(function(index,info){
    let html = info.innerHTML;

    if(html.length>number){
      info.innerHTML = html.slice(0,number)+'...';
    }

  });
}

$(function(){
  console.log('common.js loaded')
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



  function checkSiderBar(){
    if(window.scrollY>window.innerHeight){
      $('.sider-toolbar').addClass('show')
    }
    else{
      $('.sider-toolbar').removeClass('show')
    }
  }
  $(document).on('scroll',debounce(checkSiderBar,300))



  function scrollToTop(){
    $('body,html').animate({scrollTop: 0}, 1000);
  }
  $('[data-action="scroll-to-top"]').on('click',scrollToTop)
})
