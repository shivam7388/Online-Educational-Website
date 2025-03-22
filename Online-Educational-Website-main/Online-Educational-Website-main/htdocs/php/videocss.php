<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style4.css">
    <title>CSS</title>
    <style>
     .main-video {
    position: relative;
    width: 100%;
    height:100%;
    padding-bottom: 56.25%;
  }
   .main-video .thumbnail {
   top:10px;
  height: 96%;
  width: 99%;
  object-fit: cover;
}

  .main-iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
  }
@media only screen and (max-width: 768px) {
.container {
 flex-direction:column-reverse;
 height:auto;
 width:auto;
}
.container .main-video {
    margin-left: auto;
    margin-top: 9rem;
    width: 94%;
    padding: 17px;
    margin-right: auto;
}
.container .videos {
    width: 75%;
   margin:auto;
}  
}
    </style>
</head>
<body>
 <?php require 'nav.php' ?>
    <div class="container">
        <div class="videos">
            <div class="video-container">
                       <img src="../img/CSS-tutorial.jpg" class="thumbnail" data-src="https://www.youtube.com/embed/n4R2E7O-Ngo?start=50">
                       <iframe src="https://www.youtube.com/embed/n4R2E7O-Ngo?start=50" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen muted></iframe>      
               </div>
            <div class="video-container">
                <img src="../img/HTML-Tutorials.png" class="thumbnail" data-src="https://www.youtube.com/embed/_Mz69752y_8?start=50">
                <iframe src="https://www.youtube.com/embed/_Mz69752y_8?start=50" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen muted></iframe>
            </div>
            <div class="video-container">
               <img src="../img/PHP.jpg" class="thumbnail">
                <iframe src="https://www.youtube.com/embed/6EukZDFE_Zg?start=60" frameborder="0" autoplay; encrypted-media; picture-in-picture; allowfullscreen muted></iframe>   
             </div>
            <div class="video-container">
                <img src="../img/javascript.jpg" class="thumbnail" data-src="https://www.youtube.com/embed/8HUuKkgskCA?start=50">
                <iframe src="https://www.youtube.com/embed/8HUuKkgskCA?start=50" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen muted></iframe>
            </div>
        </div>
        <div class="main-video">
               <img src="../img/CSS-tutorial.jpg" class="thumbnail" data-src="https://www.youtube.com/embed/n4R2E7O-Ngo?start=50">
                <iframe src="https://www.youtube.com/embed/n4R2E7O-Ngo?start=50" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen muted></iframe>      
    </div>
    </div>

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      $(document).ready(function(){

  // initialize the main video thumbnail
  var mainThumb = $('.main-video img.thumbnail').attr('src');

  $('.video-container').click(function(){

   
    // set the clicked video as active
    $(this).addClass('active').siblings().removeClass('active');

    // get the video URL and thumbnail from the clicked element
    var src = $(this).find('iframe').attr('src');
    var thumb = $(this).find('img.thumbnail').attr('src');

    // set the main video iframe's src to the clicked video
    $('.main-video iframe').attr('src',src);

    // set the main video thumbnail to the clicked thumbnail
    $('.main-video img.thumbnail').attr('src',thumb);

    // pause all other videos
    $('.video-container').not('.active').each(function(){
      var player = $(this).find('iframe')[0].contentWindow;
      player.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    });

    // play the clicked video
    var player = $('.main-video iframe')[0].contentWindow;
    player.postMessage('{"event":"command","func":"playVideo","args":""}', '*');

  });

  // play the main video when the thumbnail is clicked
  $('.main-video img.thumbnail').click(function(){
    var player = $('.main-video iframe')[0].contentWindow;
    player.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
  });

  // pause the main video when a different video thumbnail is clicked$('.videos img.thumbnail').click(function(){
  var player = $('.main-video iframe')[0].contentWindow;
  player.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');

  setTimeout(function() {
    $('.main-video img.thumbnail').fadeOut();
  }, 2000);

});

</script>
</body>
</html>