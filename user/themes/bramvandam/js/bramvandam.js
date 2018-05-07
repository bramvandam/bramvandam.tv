  // Navigatie Smartphones //

  // function navBodyMove() {
  //
  //   $('.navbar-toggle').click(function(){
  //
  //     var $this = $(this),
  //         expanded = $this.data('expanded');
  //
  //     if (expanded === "true") {
  //
  //       $('body').css("transform", "translateY(0px)");
  //       $this.attr("data-expanded", "true");
  //
  //     }
  //
  //     else {
  //
  //       $('body').css(  "transform", "translateY(230px)");
  //     }
  //
  //
  //
  //   });
  // }

  function deFocusNavButton() {

    $(".navbar-toggle").mouseup(function(){
      $(this).blur();
    });

  }





  function navBodyMove() {

    $('.navbarShow').click(function(){

    var $this = $(this),
        $mainContent = $('.mainContent');

      $mainContent.toggleClass('mainContentShow mainContentHide');
      $this.toggleClass('navbarHide navbarShow');

    });

    $('.navbarHide').click(function(){

    var $this = $(this),
        $mainContent = $('.mainContent');

      $mainContent.toggleClass('mainContentShow mainContentHide');
      $this.toggleClass('navbarShow navbarHide');

    });



  }




  // WerkItem tonen en verbergen //
  function werkItemFocusToggle() {

    $('.werkItem-thumb').click(function(){
      // WerkItem tonen en overzicht verbergen //
      $('.werkItemFocus-main').show();
      $('.werkItemFocus-BackButton').show();
      $('.werk-overview').hide();
      // naar boven scrollen //
      window.scrollTo(0, 0);
      // navigatiestijl aanpassen //
      $('head').append('<link rel="stylesheet" type="text/css" href="user/themes/bramvandam/css/main-inverted.css">');
    });

    $('.werkItemFocus-BackButton').click(function(){
      // WerkItem verbergen en overzicht tonen //
      $('html, body').css({overflow: 'auto',height: 'auto'});
      $('.werkItemFocus-main').hide();
      $('.werkItemFocus-BackButton').hide();
      $('.werk-overview').show();
      // naar boven scrollen //
      window.scrollTo(0, 0);
      // Verwijder oude pagina //
      $('.werkItemFocus-load').html('');
      // navigatiestijl aanpassen //
      $('link[rel=stylesheet][href~="user/themes/bramvandam/css/main-inverted.css"]').remove();

    });
  }

  // WerkItem selecteren laden //
  function werkLoad(){

    $.ajaxSetup({cache: false });

    $('.werkItem-thumb').click(function(){
      // WerkItem selecteren //
      var $this = $(this),
          newPage = $this.data('folder'),
          spinner = '<div class="loader-placement"><div class="loader">Loading...</div></div>';
      // WerkItem laden //
      $('.werkItemFocus-load').html(spinner).load(newPage);

    });
  }


  // WerkItem's video tonen en verbergen //
  function werkItemFocusPlayToggle(){

    var video = $("#video-iframe").attr("src");

    if($('.werkItemFocus-play').length) {
        // div exists

      $('.werkItemFocus-playBackButton').click(function(){
        // Video verbergen //
        $('.werkItemFocus-play').hide();
        // Scrollen toestaan //
        $('html, body').css({overflow: 'auto',height: 'auto'});
        // Video resetten //
        $("#video-iframe").attr("src","");
        $("#video-iframe").attr("src",video);
      });

      $('.werkItemFocus-playItemWrapper').click(function(){
        // Video verbergen //
        $('.werkItemFocus-play').hide();
        // Scrollen toestaan //
        $('html, body').css({overflow: 'auto',height: 'auto'});
        // Video resetten //
        $("#video-iframe").attr("src","");
        $("#video-iframe").attr("src",video);
      });

      $('.werkItemFocus-thumbOverlay').click(function(){
        // Video tonen //
        $('.werkItemFocus-play').show();
        // Scrollen verbieden //
        $('html, body').css({overflow: 'hidden',height: '100%'});
      });

      $('.werkItemFocus-thumb').click(function(){
        // Video tonen //
        $('.werkItemFocus-play').show();
        // Scrollen verbieden //
        $('html, body').css({overflow: 'hidden',height: '100%'});
      });

      $('.werkItemFocus-herOverlayText').click(function(){
        // Video tonen //
        $('.werkItemFocus-play').show();
        // Scrollen verbieden //
        $('html, body').css({overflow: 'hidden',height: '100%'});
      });

    }


  }


  // handle links with @href started with '#' only
  $(document).on('click', 'a[href^="#"]', function(e) {
      // target element id
      var id = $(this).attr('href');

      // target element
      var $id = $(id);
      if ($id.length === 0) {
          return;
      }

      // prevent standard hash navigation (avoid blinking in IE)
      e.preventDefault();

      // top position relative to the document
      var pos = $id.offset().top;

      // animated top scrolling
      $('body, html').animate({scrollTop: pos},{duration:'slow', easing:'swing'});
  });





    $(function() {
      deFocusNavButton();
      navBodyMove();
      werkLoad();
      werkItemFocusToggle();

      $(document.links).filter(function() {
        return this.hostname !== window.location.hostname;
      }).attr('target', '_blank');

    });

    $(function() {
      $(document).ajaxComplete(function(){
        werkItemFocusPlayToggle();
        werkItemFocusToggle();
        navBodyMove();

      });

    });
