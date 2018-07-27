'use strict';


$(function () {


  function coverShow() {
    $('#detail-cover').fadeIn()
  }

  function coverHide() {
    $('#detail-cover').fadeOut()
  }

  $('#detail-cover-close').on('click', coverHide)


  /*生成PDF*/
  PDFJS.workerSrc = '/assets/home_new/pdf/build/pdf.worker.js';
  var container = document.getElementById('pageContainer');
  var DEFAULT_URL = container.getAttribute('data-url');
  var DEFAULT_SCALE = 1.0;
  var ICANSEE = Number(container.getAttribute('data-see'));


  function scrollObserve(page) {


    function checkToPage(){
      var checkPage = $('[data-page-number="' + page + '"]');
      if(checkPage[0].getBoundingClientRect().top<=10){
        coverShow();
      }
    }

    $(window).on('scroll',debounce(checkToPage,300))
  }


  return PDFJS
    .getDocument(DEFAULT_URL)
    .then(function (doc) {
      var promiseArr = []
      for (var i = 1; i <= doc.numPages; i++) {
        promiseArr.push(
          function (pageNum) {
            return doc
              .getPage(pageNum)
              .then(function (pdfPage) {
                // Create the page view.
                var pdfPageView = new PDFJS.PDFPageView({
                  container: container,
                  id: pageNum,
                  scale: DEFAULT_SCALE,
                  defaultViewport: pdfPage.getViewport(DEFAULT_SCALE)
                });

                // Associate the actual page with the view and draw it.
                pdfPageView.setPdfPage(pdfPage);
                return pdfPageView.draw();
              })
          }.call(null, i)
        )
      }

      Promise
        .all(promiseArr)
        .then(function () {
          console.log('all-pages-finished');

          if(doc.numPages>=ICANSEE){
            scrollObserve(ICANSEE);
          }
        })


    });
})
