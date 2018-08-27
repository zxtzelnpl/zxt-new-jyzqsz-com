const dist = 'assets';
const src = 'src';
const pc = 'home_new';
const mobile = 'home_mobile';

function makeUrl(dir){
  return {
    javascript:{
      from:`${src}/javascript/${dir}/*.js`,
      watch:`${src}/javascript/${dir}/**/*.js`,
      to:`${dist}/${dir}/javascript`,
    },
    style:{
      from:`${src}/less/${dir}/*.less`,
      watch:[`${src}/less/const.less`,`${src}/less/${dir}/**/*.less`],
      to:`${dist}/${dir}/css`,
    },
    html:{
      from:`${src}/template/${dir}/*.html`,
      watch:`${src}/template/${dir}/**/*.html`,
      to:`${dist}/${dir}/html`,
    }
  }
}

const config={
  root:'./',
  dist:`${dist}/`,
  src:`${src}/`,

  pc:makeUrl(pc),

  mobile:makeUrl(mobile),

  AUTOPREFIXER_BROWSERS:[
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ],
  UGLIFY_OPTION:{
    compress:{
      drop_console:true
    }
  }
};

module.exports=config;
