function a(){
  console.log('a');
  return true;
}

function b(){
  console.log('b');
  return true;
}

function c(){
  console.log('c');
  return false;
}

var d = a()&&(b()||!c());
