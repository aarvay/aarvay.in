<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Vignesh Rajagopalan (Aarvay)</title>
  
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />   
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script src="js/functions.js" type="text/javascript"></script>
  <script>
    function fetchReq(choice){
      if (choice="MORE") {
        $('#more').html('<img class="loader" align="center" src =images/ajax-loader.gif />');
        $.get('ajaxHandler.php',{'type':choice},function(data) {
          $('#more').fadeIn('slow');
          $('#more').html(data);
        });
        $("#More").css("visibility", "hidden");
        //$("#tabs").show();
      }
    }
  </script> 
</head>
<body>
  <div id="header"> 
    <ul>
      <div id="tabs" style="display: none">
        <li><a href="#"><span>Home</span></a></li>
        <li><a href="#"><span>What I do(did)</span></a></li>
        <li><a href="#"><span>Check 'em out!</span></a></li>
      </div>
      <li><a id="More" onclick=fetchReq("MORE");><span>Show More</span></a></li>
    </ul>
  </div>
  <div id="about">
    <div id="story">
      <h1>Vignesh Rajagopalan</h1>
      <h2>Programmer / Web-Developer / Mrudangam Artist</h2>
      <p>I am a <strong>student</strong> by profession, and a <strong>hacker</strong> by passion. I love startups and I mostly fall under the category of <span>"Builder of Stuff"</span>. I currently author code at <a href="http://campuspry.com">Campuspry</a> and <a href="http://polarizd.com">Polarizd</a>. I am a <strong>Mrudangam Artiste</strong> too.</p>
    </div>
    <ul id="contact">
      <li><span>Phone</span> <strong>(+91) 98849-60659</strong></li>
      <li><span>Website</span> <strong><a href="http://aarvay.in">aarvay.in</a></strong></li>
      <li><span>Blog</span> <strong><a href="http://blog.aarvay.in">Aarvay Labs</a></strong></li>
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
    <p>Copyright &copy; Vignesh Rajagopalan (1991-2011)</p>
  </div>    
</body>
</html>
