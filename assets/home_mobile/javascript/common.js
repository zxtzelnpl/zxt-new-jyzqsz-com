/*本地模式下打印*/
var chalk = (function () {
  var href = location.href;
  var index = 0;

  if (href.indexOf('localhost') === -1) {
    return function () {

    }
  }
  else {
    return function (text, color, background) {
      color = color || 'yellow';
      background = background || 'black';
      index++;
      var str1 = '%c' + index + '.' + text;
      var str2 = 'padding:5px;color:' + color + ';background:' + background + ';';
      console.log(str1, str2)
    }
  }
})()
// chalk('mobile.js loaded','yellow','black');

/*SiderMenu插件*/

/*依赖jquery*/
function SiderMenu(obj) {
  this.button = obj.button;
  this.dom = obj.dom;
  this.out = obj.out;
  this.activeClass = obj.activeClass;
  this.judgementArea = this.dom.width();
  this.toggle = this.toggle.bind(this);
  this.outClick = this.outClick.bind(this);
  this.bind();
}
SiderMenu.prototype = {
  STATE: 0,
  open: function () {
    chalk('open');
    this.button.addClass(this.activeClass);
    this.dom.addClass(this.activeClass);
    this.STATE = 1;
  },
  close: function () {
    chalk('close');
    this.button.removeClass(this.activeClass);
    this.dom.removeClass(this.activeClass);
    this.STATE = 0;
  },
  toggle: function () {
    if (this.STATE === 0) {
      this.open()
    }
    else {
      this.close()
    }
  },
  outClick: function (e) {
    if (this.STATE === 1) {
      chalk('outClick');
      var x = e.clientX;
      chalk(x);
      chalk(this.judgementArea);
      if (x > this.judgementArea) {
        this.close();
      }
    }
  },
  bind: function () {
    this.button.on('click', this.toggle);
    this.out.on('click', this.outClick);
  }
}

var SIDER_MENU; // 侧边菜单栏

function common_init() {
  SIDER_MENU = new SiderMenu({
    button: $("[data-action='showSideMenu']"),
    dom: $('#sideMenu'),
    activeClass: 'active',
    out: $('.container')
  });
}


$(function () {
  chalk('common.js loaded');

  common_init();
})
