 <!doctype html>
<html>
  <head>
          <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
   
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body>
   <!-- Header -->
      <div id="header" class="skel-layers-fixed">

        <div class="top">

          <!-- Logo -->
            <div id="logo">
              <a href="http://doreenyou.me"><span class="image avatar"><img src="img/logo_black.png" alt="logo" /></span></a>
            </div>

          <!-- Nav -->
            <nav id="nav">
              <ul>
                <li><a href="http://doreenyou.me/#top" id="top-link" class="skel-layers-ignoreHref">About</a></li>
                <li><a href="http://doreenyou.me/#portfolio" id="portfolio-link" class="skel-layers-ignoreHref">Portfolio</a></li>
                <li><a href="http://doreenyou.me/CV_Youran-You_UX.pdf" target="_new" id="about-link" class="skel-layers-ignoreHref">Résumé</a></li>
              </ul>
            </nav>
            
        </div>
        
        <div class="bottom">

          <!-- Social Icons -->
            <ul class="icons">
              <li><a href="https://medium.com/@doreen_you" class="icon fa-medium" alt="Read my writings on Medium" target="_new"><span class="label">Medium</span></a></li>
              <li><a href="http://www.linkedin.com/pub/youran-you/61/818/106" class="icon fa-linkedin" alt="Connect me on LinkedIn" target="_new"><span class="label">LinkedIn</span></a></li>
              <li><a href="http://www.facebook.com/youran.doreen.you" class="icon fa-facebook" target="_new" alt="Add me on Facebook"><span class="label">Facebook</span></a></li>
              <li><a href="http://www.flickr.com/photos/doreenyou/" class="icon fa-flickr" target="_new" alt="View my albums I photographed"><span class="label">Flickr</span></a></li>
              <li><a href="mailto:doreenyou610@gmail.com" class="icon fa-envelope" target="_new" alt="Write me an email"><span class="label">Email</span></a></li>
            </ul>

          <!-- Rights -->
            <div class="rights">
              <p>Copyright © 2016 Youran You.</p>
            </div>
        
        </div>
      
      </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/skel.min.js"></script>
      <script src="js/skel-layers.min.js"></script>
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/jquery.scrolly.min.js"></script>
      <script src="js/jquery.scrollzer.min.js"></script>
      <script src="js/init.js"></script>
      <script src="js/jquery.magnific-popup.js"></script>
      <script type="text/javascript">
    /*    $('.article .content').magnificPopup({
          delegate: 'img',
          type: 'image'
        });*/
        $(document).ready(function(){
    $('.article .content').magnificPopup({delegate: 'img' , type: 'image', gallery:{enabled:true}, 

     callbacks: {
          elementParse: function(item) { item.src = item.el.attr('src'); }
     }

    });
  });
      </script>
     

</body>
</html>
