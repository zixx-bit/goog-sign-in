<?php

// include "../includes/head.php";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
    	<title>PHP and MySQL - Login with Google Account Example</title>
    	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    	<link href="mycss.css" rel="stylesheet">
    	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    	<script src="https://apis.google.com/js/platform.js" async defer></script>
    	<meta name="google-signin-client_id" content="921561199703-hihbvjle6kqkeul1lfe47uugbdsvkq21.apps.googleusercontent.com" charset="utf-8" >

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="account-box">
            <div class="logo">
              www.bumihouse.site
            </div>

            <form class="form-signin" action="gooogle_sign_in.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" required autofocus name="" value="">

              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="password" required name="" value="">

              </div>
              <label class="checkbox"  for="">
                <input type="checkbox" value="remember-me" name="" value="">
                Keep me signed-n
              </label>
              <button class="btn btn-lg btn-block purple-bg" type="submit" name="button">Sign in</button>

            </form>

            <a class="forgotLink" href="#">I cant access my acccount</a>
            <div class="or-box">
              <span class="or">OR</span>
                  <div class="row">
                    <div class="col-md-12">
                    <center><div class="g-signin2" data-onsuccess="onSignIn">
                    </div></center>

                    </div>

                    </div>

                  </div>

                <div class="or-box row-block">
                  <div class="row">
                    <div class="col-md-12 row-block">
                      <a href="http://www.jquery2dotnet.com" class="btn btn-rpimary btn-block">Create New Account</a>

                    </div>

                  </div>

                </div>

            </div>
          </div>

        </div>

      </div>

    <!-- </div> -->

    <script type="text/javascript">
    function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();

      if (profile) {
        $.ajax({
            type:'POST',
            url:'login_pro.php',
            data:{
              id:profile.getId(),
              name:profile.getName(),
              imageUrl:profile.getImageUrl(),
              email:profile.getEmail()
             }
        })
        .done(function(data){
          console.log(data);
          window.location.href = 'home.php';
        }).fail(function(){
          alert("Posting failed.")
        });


      }

    }

    </script>
<!-- sign out user
 -->
    <script >
    function signOut(){
      var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function(){
            console.log('User signed out.');
          });
    }

    </script>

  </body>
</html>
