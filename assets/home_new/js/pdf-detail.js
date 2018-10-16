'use strict';

// The workerSrc property shall be specified.
PDFJS.workerSrc = '/assets/home_new/pdf/build/pdf.worker.js';
var pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null
    ;
  
var container = document.getElementById('pageContainer');
var canvas = document.getElementById('pageCanvas');
var ctx = canvas.getContext('2d');
var WIDTH = canvas.getBoundingClientRect().width;
console.log(WIDTH);
var DEFAULT_URL = container.getAttribute('data-url');
var DEFAULT_SCALE = 1.0;

/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param {number} num Page number.
 */
function renderPage(num) {
  pageRendering = true;
  // Using promise to fetch the page
  pdfDoc.getPage(num).then(function(page) {
    var viewport = page.getViewport(DEFAULT_SCALE);

    canvas.width = viewport.width;
    canvas.height = viewport.height;

    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
  
    var renderTask = page.render(renderContext);

    //Wait for rendering to finish
    renderTask.promise.then(function() {
      pageRendering = false;
      if(pageNumPending !== null) {
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  //Updage page counters
  document.getElementById('page_num').textContent = num;
}

function changeButtonState(num,total){
  var prev = document.getElementById('prev');
  var next = document.getElementById('next');
  if(num<=1){
    prev.className = 'btn prev disable';
  }
  else{
    prev.className = 'btn prev';
  }

  if(num>=total){
    next.className = 'btn next disable';
  }
  else{
    next.className = 'btn next';
  }
}

/**
 * If anoher page rendering in progress, waits until the rendering is 
 * finished. Otherwise, executes rendering immediately.
 * @param {number} num 
 */
function queueRenderPage(num) {
  if(pageRendering) {
    pageNumPending = num;
  }else{
    renderPage(num)
  }
}

/**
 * Displays previous page.
 */
function onPrevPage() {
  if(pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
  changeButtonState(pageNum,pdfDoc.numPages);
}
document.getElementById('prev').addEventListener('click',onPrevPage);

/**
 * Displays next page
 */
function onNextPage(){
  if(pageNum >= pdfDoc.numPages){
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
  changeButtonState(pageNum,pdfDoc.numPages);
}
document.getElementById('next').addEventListener('click',onNextPage);

PDFJS.getDocument(DEFAULT_URL).then(function(pdfDoc_){
  pdfDoc = pdfDoc_;
  document.getElementById('page_count').textContent = pdfDoc.numPages;

  // Initial/first page rendering
  renderPage(pageNum);
});
