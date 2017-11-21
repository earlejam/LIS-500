<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>CodeForAll</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">CodeFor<b><span style="color: #283593;">All</span></b></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">About</a></li>
        <li><a href="mentor.php">Become a Mentor</a></li>
        <li><a href="mentee.php">Become a Mentee</a></li>
        <li><a href="#">Connect</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">About</a></li>
        <li><a href="mentor.php">Become a Mentor</a></li>
        <li><a href="mentee.php">Become a Mentee</a></li>
        <li><a href="#">Connect</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php
    $displayForm = True;

    if(isset($_POST['action'])) {
      if(!empty($_POST['terms'])) {

        $displayForm = False;
        $first = $_POST['first_name'];

        ?>

        <div class="row">
          <div class="col s10 m8 offset-m2 offset-s1 center-align">
            <h2>Thanks, <?php echo $first; ?>!</h2>
            <h4>We can't wait to connect you with mentors with the expertise you need! Stay tuned.</h4>
            <img class="responsive-img" src="resources/images/mature-students.jpg">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col s4 m4 offset-m4 offset-s4 center-align">
            <a class="waves-effect waves-light btn-large" href="index.html">Return to Home</a>
          </div>
        </div>
        <br>

        <?php
      }
    }

    if($displayForm) {
  ?>

<div class="row">
  <div class="col s12 m8 offset-m2">
    <h1>Become a <b><span style="color: #283593;">Mentee</span></b></h1>
  </div>
</div>
<div class="row">
    <form class="col s12 m8 offset-m2" action="mentee.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="email" name="email" type="text" class="validate">
          <label for="email" data-error="Invalid" data-success="Valid">Email</label>
        </div>
        <div class="input-field col s6">
          <input id="confirm_email" name="confirm_email" type="text" class="validate">
          <label for="confirm_email data-error="Invalid" data-success="Valid"">Confirm Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input id="confirm_password" name="confirm_password" type="password" class="validate">
          <label for="confirm_password">Confirm Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="about_self" name="about_self"
          class="materialize-textarea"></textarea>
          <label for="textarea1">Please tell us about yourself in a few short sentences.</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="skills" name="skills" type="text" class="validate">
          <label for="skills">What subjects are you interested in receiving mentoring with? (Separate with commas, please)</label>
        </div>
      </div>
      <div class="row">
        <input type="checkbox" name="terms" id="terms" />
        <label for="terms">I agree to the CodeForAll <a href="https://www.apple.com/legal/internet-services/itunes/us/terms.html" target="_blank">Terms and Conditions</a>.</label>
      </div>
      <div class="row">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>

  <?php
    }
   ?>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project to reduce the gap in the representation of minorities in tech. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
