<!DOCTYPE html>
<html>
<head>
  <title>Resume for Your Name</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Your description" />

  <link rel="stylesheet" type="text/css" href="assets/styles/app.css">
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css">  
  <link rel="stylesheet" type="text/css" href="assets/styles/foundation.css">

  <script type="text/javascript" src="assets/javascript/jquery.js"></script>
  <script type="text/javascript" src="assets/javascript/jquery.tweetable.js"></script>
  <script type="text/javascript" src="assets/javascript/jquery.foundation.accordion.js"></script>
  <script type="text/javascript">
    $(document).foundationAccordion();
  </script>
  <script type="text/javascript">
    $(function(){
      $('#tweets').tweetable({username: 'anthonyterrell', time: false, limit: 1, replies: true, position: 'append'});
    });
  </script>
</head>
<body>
  <div class="row">
    <div class="ten columns centered resume">
      <div class="row">
        <div class="twelve columns bio">
          <div class="three columns">
            <img src="assets/images/me.png">
          </div><!-- /three columns -->
          <div class="nine columns">
            <h2>A Web Developer</h2>
            <p>
              Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit, sed <strong>do eiusmod</strong>
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur.
            </p>
          </div><!-- /nine columns -->          
        </div><!-- /twelve columns -->
      </div><!-- /row -->
      <div class="row">
        <div class="five columns offset-by-seven">
          <div class="panel contact">
            <p>
              <strong>
                Phone: 555.555.5555 <br />
                Twitter: <a href="http://twitter.com/usernamegoeshere">@username</a> <br />
                Email: <a href="mailto:youremailaddress">email</a>
              </strong>
            </p>
          </div><!-- /panel contact -->
        </div><!-- /five columns -->
      </div><!-- /row --> 
      <div class="row">
        <div class="twelve columns experience">
          <div class="hide-for-small">
            <h3>Experience</h3>
            <hr>
          </div>
          <div class="position">
            <h4>Position, <a href="#">Company</a><span class="date right">2011-Current</span></h4>
            <p> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div><!-- /position -->
          <div class="position">
            <h4>Position, <a href="#">Company</a><span class="date right">2011-Current</span></h4>
            <p> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div><!-- /position -->
          <div class="position">
            <h4>Position, <a href="#">Company</a><span class="date right">2011-Current</span></h4>
            <p> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div><!-- /position -->
        </div><!-- /twelve columns -->
      </div><!-- /row -->
      <div class="row">
        <div class="twelve columns education">
          <div class="hide-for-small">
            <h3>Education</h3>
          </div><!-- /hide-for-small -->
            <hr>
            <h5>Degree/Diploma, School <span class="date right">2005</span></h5>
            <h5>Degree/Diploma, School <span class="date right">2005</span></h5>
            <h5>Degree/Diploma, School <span class="date right">2005</span></h5>
        </div><!-- /twelve columns -->
      </div><!-- /row -->
      <div class="row hide-for-small">
        <div class="twelve columns">
          <div class="hide-for-small">
            <h3>Skills</h3>
            <hr>
          </div>
          <div class="nine columns centered">
            <table>
              <tr>
                <td>PHP/MySQL</td>
                <td>HTML5/CSS3</td>
                <td>HAML/SASS</td>
              </tr>
              <tr>
                <td>MVC Frameworks</td>
                <td>Blogging Engines (WordPress)</td>
                <td>File Based CMS</td>
              </tr>
              <tr>
                <td>REST Servers</td>
                <td>Social APIs</td>
                <td>Responsive Layouts</td>
              </tr>
              <tr>
                <td>Photoshop</td>
                <td>JavaScript</td>
                <td>JSON</td>
              </tr>
            </table>
          </div><!-- /nine columns -->
        </div><!-- /twelve columns -->
      </div><!-- /row hide-for-small -->
        <div class="row">
          <div class="twelve columns footer">
            <div class="seven columns centered twitter">
              <img class="left" src="assets/images/twitter.png">
              <div id="tweets">
              </div>
            </div>       
          </div>
        </div>
      </div><!-- /row -->
    </div><!-- /twelve columns -->
    
</body>
</html>