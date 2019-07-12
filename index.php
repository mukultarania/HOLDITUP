<?php include "includes/login_header.php"; ?>
<?php include "includes/db.php"; ?>
<body>
    <h1 class="error">Team Manager</h1>
	<!---728x90--->
    <div class="w3layouts-two-grids">
      <div class="mid-class">
        <div class="img-right-side">
            <h3>Manage Your Team with Us</h3>
            <p>Teamwork is the ability to work together toward a common vision.
              The ability to direct individual accomplishments toward organizational objectives.
               It is the fuel that allows common people to attain uncommon results." --Andrew Carnegie" </p>

            <img src="images/login01.png" class="img-fluid" alt="">
        </div>
        <div class="txt-left-side">
            <h2> Login </h2>
            <form action="#" method="post">
                <div class="form-left-to-w3l">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <input type="email" name="email" placeholder="Email" required="">

                    <div class="clear"></div>
                </div>
                <div class="form-left-to-w3l ">

                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <input type="password" name="password" placeholder="Password" required="">
                    <div class="clear"></div>
                </div>
                  <!-- <div class="main-two-w3ls">
                      <div class="left-side-forget">
                          <input type="checkbox" class="checked">
                          <span class="remenber-me">Remember me </span>
                      </div>
                      <div class="right-side-forget">
                          <a href="#" class="for">Forgot password...?</a>
                      </div>
                  </div> -->
                <div class="btnn">
                    <button type="submit">Login </button>
                </div>
            </form>
            <div class="w3layouts_more-buttn">
                <h3>Don't Have an account..?
                    <a href="signup.php">Sign Up
                    </a>
                </h3>
            </div>
            <div class="clear"></div>
        </div>
      </div>
    </div>
	<!---728x90--->
<?php include "includes/login_footer.php"; ?>
