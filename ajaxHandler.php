<?php
$more = '
    <div class="section">
      <h2>Work Experience</h2>
      <div class="item">
        <h3><a href="http://fundsindia.com">FundsIndia</a></h3>
        <h4>Software Engineer Intern</h4>
        <div class="date">May-July 2011</div>
        <div class="description">
          <p>
            Worked on the core online portal. Made it more viral by adding few usecases. 
            Wrote a Facebook App to socialize the platform and an API to support interactions between the Platform and the app.
            Wrote a fully customized Parser to scrape a source and API(se) the output into a neat JSON object.
          </p>
        </div>
      </div>
      <div class="item">
        <h3>Polarizd</h3>
        <h4>Co-Founder</h4>
        <div class="date">2011 - current</div>
        <div class="description">
          <p>I work on the development of the core social platform of Polarizd optimized for photo-sharing.</p>
        </div>
      </div>
      <div class="item">
        <h3>Campuspry</h3>
        <h4>Co-Founder</h4>
        <div class="date">2011 - current</div>
        <div class="description">
          <p>I work on the social platform.</p>
        </div>
      </div>
      <div class="item">
        <h3>AstroLogic</h3>
        <h4>Server-Side Engineer</h4>
        <div class="date">2010 - 2011</div>
        <div class="description">
          <p>Took care of the Server-Side scripting and Facebook Application.</p>
        </div>
      </div>
    </div>
  <div class="section">
    <h2>Education</h2>
    <div class="item">
        <h3>SASTRA University, IN</h3>
        <h4>Computer Science and Engineering</h4>
        <div class="date">2009 - 2013</div>
        <div class="description">
          <p>Core Member of the GNU Linux Open Source at SASTRA (GLOSS) Community. Founded the Theoretical Computer Science Club when I was a fresher that encouraged students to particiapte in Programming Contests.</p>
        </div>
      </div>
      <div class="item">
        <h3>P.S. Senior Secondary School</h3>
        <h4>General Schooling/High School</h4>
        <div class="date">1994 - 2009</div>
        <div class="description">
          <p></p>
        </div>
      </div>
    </div>
    <div class="section">
      <h2>Skills</h2>
      <div class="item">
        <h3>Programming Languages</h3>
        <div class="description">
          <p>C, C++, Java, Visual Basic, J2ME, Pascal, Ruby</p>
        </div>
      </div>
      <div class="item">
        <h3>Scripting Languages</h3>
        <div class="description">
          <p>BASH</p>
        </div>
      </div>
      <div class="item">
        <h3>Web Technologies</h3>
        <div class="description">
          <p>HTML, CSS, Javascript, PHP (Zend,Yii), Ruby on Rails, AJAX, jQuery </p>
        </div>
      </div>
      <div class="item">
        <h3>DBMS</h3>
        <div class="description">
          <p>MySQL, SQLlite, Oracle, SQL Server, NoSQL(MongoDB)</p>
        </div>
      </div>
      <div class="item">
        <h3>Social APIs</h3>
        <div class="description">
          <p>Facebook, Twitter</p>
        </div>
      </div>
    </div>

        ';        
  $type = $_REQUEST['type'];
  if ($type == "MORE"){
    echo $more;
  } elseif ($type == "WHAT"){
    echo $what;  
  }
?>