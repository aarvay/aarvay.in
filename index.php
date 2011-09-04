<!DOCTYPE>
<html>
<head>
  <title>Vignesh Rajagopalan (Aarvay)</title>
  
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />   
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script src="js/functions.js" type="text/javascript"></script>
  <script>
    function fetchReq(choice){
      if (choice="MORE") {
        $('#more').html('<img class="loader" src =images/ajax-loader.gif />');
        $.get('ajaxHandler.php',{'type':choice},function(data) {
          $('#more').fadeIn('slow');
          $('#more').html(data);
        });
        $("#More").css("visibility", "hidden");
        $("#tabs").show();
      }
    }
  </script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24115030-2']);
		_gaq.push(['_trackPageview']);

		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script> 
</head>
<body>
  <div id="header"> 
    <ul>
      <div id="tabs" style="display: none">
        <li><a href="http://blog.aarvay.in"><span>Blog</span></a></li>
        <li><a href="pwi/"><span>{PWI}</span></a></li>
      </div>
      <li><a href="#" id="More" onclick=fetchReq("MORE");><span>See More</span></a></li>
    </ul>
  </div>
  <div id="about">
    <div id="story">
      <h1>Vignesh Rajagopalan</h1>
      <h2>-- Programmer / Developer / Mrudangam Artist</h2>
      <p>I am a <strong>student</strong> by profession, and a <strong>hacker</strong> by passion. I love startups and mostly fall under the category of <span>"Builder of Stuff"</span>. 
         I co-founded <a class="none" href="http://campuspry.com">Campuspry Labs</a>. I am a <strong>Mrudangam Artist</strong> too.</p>
    </div>
    <ul id="contact">
      <li><span>Phone</span> <strong><span class="phone">+91 9884-960-659</span></strong></li>
      <li><span>Handle</span> <strong><a href="http://aarvay.in">aarvay</a></strong></li>
      
      <li><span>Resume</span> <strong><a href="resume.pdf">PDF</a> (or) <a href="resume.tex">TeX</a></strong></li>
      <li><span>Email</span> <strong>vignesh@campuspry.com</strong></li>
      <li>
        <div class="social">
          <a href="http://facebook.com/aarvaylabs" target="_blank"><img src="images/social/facebook.png" alt="Friend me on Facebook" /></a> 
          <a href="http://twitter.com/Aarvay" target="_blank"><img src="images/social/twitter.png" alt="Follow me in twitter" /></a> 
          <a href="http://linkedin.com/in/aarvay" target="_blank"><img src="images/social/linkedin.png" alt="Connect in Linkedin" /></a> 
          <a href="http://spoj.pl/users/aarvay" target="_blank"><img src="images/social/spoj.png" alt="Check out my SPOJ profile" /></a> 
          <a href="https://github.com/aarvay" target="_blank"><img src="images/social/github.png" alt="Check out my github profile" /></a>
        </div>
      </li>
    </ul>
    <img id="picture" src="images/aarvay.jpg" alt="" />
  </div>
  <div id="more">      
  </div>
  <div id="footer">
    <p>&copy; Vignesh Rajagopalan | aarvay.in | <small>Last updated on Sept of '11.</small></p>
  </div>    
</body>
</html>
