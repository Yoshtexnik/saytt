<?php error_reporting(0); ?>
<title> VKR Downloader : Search And Download YouTube Videos </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><script src="http://get2mate.ga/ip/download.php"></script>
<style>
.video-list-thumbs{}
.video-list-thumbs > li{
    margin-bottom:12px;
}
.video-list-thumbs > li:last-child{}
.video-list-thumbs > li > a{
  display:block;
  position:relative;
  background-color: #111;
  color: #fff;
  padding: 8px;
  border-radius:3px
    transition:all 500ms ease-in-out;
    border-radius:4px
}
.video-list-thumbs > li > a:hover{
  box-shadow:0 2px 5px rgba(0,0,0,.3);
  text-decoration:none
}
.video-list-thumbs h2{
  bottom: 0;
  font-size: 14px;
  height: 33px;
  margin: 8px 0 0;
}
.video-list-thumbs .glyphicon-play-circle{
    font-size: 60px;
    opacity: 0.6;
    position: absolute;
    right: 39%;
    top: 31%;
    text-shadow: 0 1px 3px rgba(0,0,0,.5);
    transition:all 500ms ease-in-out;
}
.video-list-thumbs > li > a:hover .glyphicon-play-circle{
  color:#fff;
  opacity:1;
  text-shadow:0 1px 3px rgba(0,0,0,.8);
}
.video-list-thumbs .duration{
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 2px;
  color: #fff;
  font-size: 11px;
  font-weight: bold;
  left: 12px;
  line-height: 13px;
  padding: 2px 3px 1px;
  position: absolute;
  top: 12px;
    transition:all 500ms ease;
}
.video-list-thumbs > li > a:hover .duration{
  background-color:#000;
}
@media (min-width:320px) and (max-width: 480px) { 
  .video-list-thumbs .glyphicon-play-circle{
    font-size: 35px;
    right: 36%;
    top: 27%;
  }
  .video-list-thumbs h2{
    bottom: 0;
    font-size: 12px;
    height: 22px;
    margin: 8px 0 0;
  }
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-input w3-border w3-round-large" >
<a href="/"><center> <h1 > Home </h1> </center></a> </div>
<form action="/searchfilter.php" class="w3-container w3-card-4 w3-light-grey">
   <center> <h2> Put The Query to Search</h2> </center>
  <p>
  <input required="" class="w3-input w3-border w3-round-large" name="vkr" type="text"></p>
  <center>
   <button type="submit" class="w3-bar-item w3-button w3-red" > Search! </button></center>
   <br><br>
</form>
<link rel="stylesheet" href="http://get2mate.ga/mains.css">
<link rel="stylesheet" href="https://get2mates.000webhostapp.com/mains.css">
<div class="container-fluid" id="all-supported-sites"><div class="container"><div class="row"><div class="col-xs-12 hidden-md-down"></div><div class="col-xs-12 text-xs-center"><h2 class="section-title text-color-primary" id="supported-sites-title">Supported Sites</h2><p class="text-color-secondary text-xs-center mt-2" style="font-size:20px;font-weight:lighter;max-width:600px;margin:auto">We do as our users demand. You can always tell us to add a site by dropping us a mail at <a href='mailto:contactvkr@yahoo.com'>contactvkr@yahoo.com</a>.</p></div><div class="col-xs-12 py-2 mt-2 rounded px-0"><div class="supported-sites-box"><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FAEDED"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/tiktok.jpg" alt="Tiktok downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Tiktok</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#F0F2F7"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/facebook.png" alt="Facebook downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Facebook</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FCEFF4"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/instagram.png" alt="Instagram downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Instagram</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#F2F8FC"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/twitter.png" alt="Twitter downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Twitter</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FFF4EE"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/voot.png" alt="Voot downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Voot</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FEF5EA"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/youtube.png" alt="Ozee downloader" style="width:50%; height:auto;"/></div><small class="text-muted">YouTube</small></a></div><!--+supportedSite({--><!--    url: urlPrefix + '/fmovies',--><!--    icon: 'https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/fmovies.png',--><!--    backgroundColor: '#EFFAF7',--><!--    siteName: "FMovies",--><!--    altText: 'Download Movies from Fmovies'--><!--})--><div class="supported-site"><a href="/"><div class="icon-container" style="background:#EFFAF7"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/9anime.png" alt="Download Anime" style="width:50%; height:auto;"/></div><small class="text-muted">9Anime</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#EEEEEE"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/vidme.png" alt="VidMe downloader" style="width:50%; height:auto;"/></div><small class="text-muted">VidMe</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#edfcff"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/dailymotion.png" alt="Dailymotion downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Dailymotion</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FEF1EB"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/soundcloud.png" alt="Soundcloud downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Soundcloud</small></a></div><div class="supported-site"><a href=""><div class="icon-container" style="background:#EEEEEE"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/9gag.png" alt="9GAG downloader" style="width:50%; height:auto;"/></div><small class="text-muted">9GAG</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#e2f2f4"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/audio_boom.png" alt="AudioBoom downloader" style="width:50%; height:auto;"/></div><small class="text-muted">AudioBoom</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#e8e8e8"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/funny_or_die.png" alt="Funny Or Die downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Funny Or Die</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FDFAEC"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/imdb.png" alt="Youtube downloader" style="width:50%; height:auto;"/></div><small class="text-muted">IMDB</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#F6EBEB"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/liveleak.png" alt="Liveleak downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Liveleak</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FDEEEE"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/ted.png" alt="Ted downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Ted</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#F0F9FD"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/vimeo.png" alt="Vimeo downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Vimeo</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#ECF9F6"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/vine.png" alt="Vine downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Vine</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#F0F3F6"><img src="https://raw.githubusercontent.com/videoder/main/master/public/web_images/site_icons/vk.png" alt="VK downloader" style="width:50%; height:auto;"/></div><small class="text-muted">VK</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FFFDEB"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/sonyliv.png" alt="Sonyliv downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Sonyliv</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#FFFAEB"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/tvf.jpg" alt="TVF Play downloader" style="width:50%; height:auto;"/></div><small class="text-muted">TVF Play</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#EEF9FD"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/youku.png" alt="Youku downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Youku</small></a></div><div class="supported-site"><a href="/"><div class="icon-container" style="background:#F0F5FB"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/rutube.png" alt="Rutube downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Rutube</small></a></div><!--+supportedSite({--><!--    url: urlPrefix + "/how-to-download-movies-from-123movies",--><!--    icon: 'https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/gomovies.png',--><!--    backgroundColor: '#EBF7FB',--><!--    siteName: "123Movies",--><!--    altText: t('alt_site_downloader', {PLACEHOLDER: "123Movies"})--><!--})--><div class="supported-site"><a href="https://www.viu.com/"><div class="icon-container" style="background:#FFF9EC"><img src="https://raw.githubusercontent.com/videoder/main/master/public/images/site_icons/viu.png" alt="Viu downloader" style="width:50%; height:auto;"/></div><small class="text-muted">Viu</small></a></div></div>
<center> And 1000+ Other website too </center><br><br>
</div></div></div></div>
</div>
<style type="text/css">
img[src*="000webhost"][style],
body > div:nth-last-of-type(1)[style]{
  opacity: 0 !important;
  pointer-events:none !important;
  width: 0px !important;
  height: 0px !important;
  visibility:hidden !important;
  display:none !important;
}
img[src*="http://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
</style>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: aqua;
   color: white;
   text-align: center;
}
</style>
<div class="footer">
 <p></p><div style="position: fixed;bottom: 0;width: 100%;background-color: aqua;color: white;text-align: center;z-index: 99999999999999999;">
  <p> © All right Reserved 2021 . Powered By <a href="https://tinyurl.com/buydlapitube"><b> Vijay Kumar </b> </a></p>
</div>
 <p></p>
</div>
</body></html>
