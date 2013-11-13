<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<style type="text/css">
body {
padding-top: 40px;
padding-bottom: 40px;
background-color: #FFF;
}
.form-signin {
padding: 15px;
margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
margin-bottom: 10px;
}
.form-signin .checkbox {
font-weight: normal;
}
.form-signin .form-control {
position: relative;
font-size: 16px;
height: auto;
padding: 10px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.form-signin .form-control:focus {
z-index: 2;
}
.form-signin input[type="text"] {
margin-bottom: -1px;
border-bottom-left-radius: 0;
border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
margin-bottom: 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
}
.frame {
    background-color: #F7F7F7;
    border-radius: 2px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    margin: 0 auto 25px;
    padding: 20px 25px 30px;
    width: 350px;
}
</style>
<form class="frame form-signin">
	<h2 class="form-signin-heading">Please sign in</h2>
	<input type="text" class="form-control" placeholder="Email address" required autofocus>
	<input type="password" class="form-control" placeholder="Password" required>
	<label class="checkbox">
	<input type="checkbox" value="remember-me"> Remember me
	</label>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>