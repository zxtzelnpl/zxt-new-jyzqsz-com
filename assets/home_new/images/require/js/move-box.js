(function () {

  var ANIMATION;
  var reCauculate = null;
  var moveBox = $('[data-action="move-box"]');
  var close = moveBox.find('.move-box-head-close');

  var width = moveBox.width();
  var height = moveBox.height();

  var MIN_LEFT;
  var MAX_LEFT;
  var MIN_TOP;
  var MAX_TOP;

  var speed = {
    x: 0.2,
    y: 0.2
  };
  var left = parseInt(moveBox.css('left'));
  var top = parseInt(moveBox.css('top'));
  var position = {
    x:left,
    y:top
  }

  function getRect() {
    clearTimeout(reCauculate);
    reCauculate = setTimeout(function () {
      var WIDTH = window.innerWidth;
      var HEIGHT = window.innerHeight;
      MIN_LEFT = 0;
      MAX_LEFT = WIDTH - width;
      MIN_TOP = 0;
      MAX_TOP = HEIGHT - height;
    }, 300)
  }

  function move() {
    var new_x = position.x + speed.x;
    var new_y = position.y + speed.y;

    if (new_x > MAX_LEFT) {
      speed.x = -Math.abs(speed.x);
    }
    else if (new_x < MIN_LEFT) {
      speed.x = Math.abs(speed.x);
    }

    if (new_y > MAX_TOP) {
      speed.y = -Math.abs(speed.y);
    }
    else if (new_y < MIN_TOP) {
      speed.y = Math.abs(speed.y);
    }
    position.x = position.x + speed.x;
    position.y = position.y + speed.y;

    moveBox.css('transform','translate('+position.x+'px,'+position.y+'px)');

    if(ANIMATION === 1){
      return requestAnimationFrame(move);
    }
    else{
      return false
    }
  }

  getRect();
  ANIMATION = 1;
  requestAnimationFrame(move);

  $(window).on('resize', getRect);

  close.on('click',function(){
    $(window).off('resize', getRect);
    ANIMATION = 0;
    moveBox.hide();
  })

}());
