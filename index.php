<?php include 'header.php'; ?>

	
<div style="padding:30px; margin-bottom:30px; min-height: 300px; background: #ededed; color: #666; text-align: center;">
<div class="container">
  <h3 style="font-size: 64px; margin: 30px 0 0; color: #000 !important;   line-height: 78px;     text-shadow: 0 0 3px #aaa;      -webkit-mask-image:-webkit-gradient(linear, left top,left bottom,from(rgba(0,0,0,.70)),to(rgba(0,0,0,1))); font-weight: 700">HELLO</h3>
<h2 align="center" style="font-size:2.4rem; margin-top: 0">I am Nurul Amin Russel. I'm a graphic designer based in Dhaka, Bangladesh. Working as the senior UI/UX designer and front-end developer at <a href="https://www.ivivelabs.com/" target="_blank" style="text-decoration: none;">iViveLabs</a>.</h2></div></div>
<div class="container">
<section id="portfolio">
  <h2 class="text-center" style="text-shadow: 0 0 3px #aaa;      -webkit-mask-image:-webkit-gradient(linear, left top,left bottom,from(rgba(0,0,0,.70)),to(rgba(0,0,0,1))); font-weight: 700">My Works</h2>
  <div class="text-center mb-3">
   <a href="works/isrt-web.php"> <img src="imgs/isrt01.jpg" class="img-fluid" alt="isrt website"> </a>
  </div>
  <div>
   <a href="works/isrtalumni-web.php"><img src="imgs/isrtalumni-thumb.jpg" alt="isrtalumni-thumb"></a><a href="works/ivivelabs-web.php"><img src="imgs/ivivelabs-thumb.jpg" alt="ivivalbs-thumb"></a><a href="works/exclusiva-web.php"><img src="imgs/exclusiva-thumb.jpg" alt="exclusiva-thumb"></a>
  </div>
</section>
<h3 align="center" style="margin-top: 60px; font-size: 22px; letter-spacing: 3px; opacity: .7">My shots from dribbble</h3>
<div id="shots"></div>

</div>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap');
html,
body {
  padding:0;
  margin: 0;
  background: whitesmoke;
  font-family: "Roboto";
  font-weight: 300;
  font-size: 15px;
}
h1, h2{ font-weight: 100 }
h3{ font-weight: 300 }
#shots {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  max-width: 100%;
  margin: auto;
}
#shots .shot {
  position: relative;
  display: block;
  width: 370px;
  margin:0;
  color: black;
  text-decoration: none;
  box-shadow: 0 0 33px rgba(0,0,0,.05)
}
/*@media only screen and (max-width: 779px) {
  #shots .shot {
    width: 50%;
  }
}*/
#shots .shot:hover img {
  opacity: .1;
}
#shots .shot:hover .title {
  opacity: 1;
}
#shots .shot .title {
  position: absolute;
  width: calc(100% - 2rem);
  padding: 1rem;
  opacity: 0;
  transition: opacity .2s ease-in-out;
  font-size: 1rem;
  font-weight: 500;
  letter-spacing: 1px;
}
#shots .shot img {
  display: block;
  max-width: 100%;
  transition: opacity .2s ease-in-out;
}

</style>



<?php include 'footer.php'; ?>

<script type="text/javascript">
  // Set the Access Token
var accessToken = '63a4257ae12d23d30e4d7fe77e01bb65439ea2c999eec6b488be34fe12455edd';

// Call Dribble v2 API
$.ajax({
    url: 'https://api.dribbble.com/v2/user/shots?per_page=9&access_token='+accessToken,
    dataType: 'json',
    type: 'GET',
    success: function(data) {  
      if (data.length > 0) { 
        $.each(data.reverse(), function(i, val) {                
          $('#shots').prepend(
            '<a class="shot" target="_blank" href="'+ val.html_url +'" title="' + val.title + '"><div class="title">' + val.title + '</div><img src="'+ val.images.normal +'"/></a>'
            )
        })
      }
      else {
        $('#shots').append('<p>No shots yet!</p>');
      }
    }
});


// API Variables

//Image width 800x600 (Animated)
  // val.images.hidpi 
//Image width 400x300
  // val.images.normal
//Image width 200x150
  // val.images.teaser
//Title
  // val.title
//Description
  // val.description
//URL
  // val.html_url
</script>