<?php
if(isset($_POST['submit'])){
	$message;
	$captcha = $_POST['captcha'];
	session_start();
	if($captcha === $_SESSION['cap_cod']){
     
   	}else{
   		$message = $error;
   	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Captcha</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Geee</h1>
    <div  class="form-dev">
    	<form method="post" action="registr.php" id="form">
    		<div class="form-group">
    			<label>First Name</label>
    			<input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name" autocomplete="off">
    			<h5 id="usr_check_f"></h5>
    		</div>

    		<div class="form-group">
    			<label>Last Name</label>
    			<input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name" autocomplete="off">
    			<h5 id="usr_check_l"></h5>
    		</div>

    		<div class="form-group">
    			<label>Email</label>
    			<input type="email" name="email" class="form-control" id="email" placeholder="something@exampl.com" autocomplete="off">
    			<h5 id="usr_check_e"></h5>
    		</div>

    		<div class="form-group">
    			<label>Password</label>
    			<input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
    			<h5 id="usr_check_p"></h5>
    		</div>

    		<div class="form-group">
    			<label for="captcha">Captcha</label>
    			<img src="captcha.php" id="cap" class="cap"  alt="">
    			<br>
                <input type="text" name="captcha" style="margin-top: 10px; width: 210px;" placeholder="Enter Captcha" autocomplete="off">
    		</div>
    		<div class="form-group">
    			<input type="checkbox" name="check" value="1" class="form-check-input">
    			<label for="gridCheck1" class="form-check-label">I agree all <a href="" class="hr" >Terms and Policies</a></label>
                
    		</div>

    		<div class="form-group">
    			<input type="button" name="submit" value="Create account" class="btn btn-success" style="float: left">
                <p style="float: right;margin-right: 50px">If already have account <a href="" class="hr">	Sing In</a></p>
    		</div>

    		
    		
    		
    	</form>
    </div>

    <script>
    	$(document).ready(function(){
            $('#usr_check_f').hide();
            $('#usr_check_l').hide();
            $('#usr_check_e').hide();
            $('#usr_check_p').hide();
            
            var first_error = true;

            var pass_error = true;

            var email_error = true;

            var last_error = true;

             $('#f_name').keyup(function(event){
                 user_f_name_check();
            }); 
            function user_f_name_check(){
              var user_f = $('#f_name').val();
                if(user_f.length == ''){
                  $('#usr_check_f').show();
                  $('#usr_check_f').html("**please fill the Last name");
                  $('#usr_check_f').focus();
                  $('#usr_check_f').css("color","red");
                  first_error = false;
                  return false;
                }
                else{
                  $('#usr_check_f').hide(); 
                }
            

         
                if((user_f.length < 3) || (user_f.length >10)){
                  $('#usr_check_f').show();
                  $('#usr_check_f').html("**Last Name length must be 3 to 10");
                  $('#usr_check_f').focus();
                  $('#usr_check_f').css("color","red");
                  first_error = false;
                  return false;
                }
                else{
                  $('#usr_check_f').hide(); 
                }
             }



             $('#l_name').keyup(function(event){
                 user_l_name_check();
            }); 
            function user_l_name_check(){
            	var user_l = $('#l_name').val();
                if(user_l.length == ''){
                	$('#usr_check_l').show();
                	$('#usr_check_l').html("**please fill the Last name");
                	$('#usr_check_l').focus();
                	$('#usr_check_l').css("color","red");
                	first_error = false;
                	return false;
                }
                else{
                  $('#usr_check_l').hide();	
                }
            

         
                if((user_l.length < 3) || (user_l.length >10)){
                	$('#usr_check_l').show();
                	$('#usr_check_l').html("**Last Name length must be 3 to 10");
                	$('#usr_check_l').focus();
                	$('#usr_check_l').css("color","red");
                	first_error = false;
                	return false;
                }
                else{
                  $('#usr_check_l').hide();	
                }
             }



             $('#password').keyup(function(event){
               password_check();
             });

             function password_check(){
             	var pass = $('#password').val();
                if((pass.length == '' )||(pass.length < 7)){
                	$('#usr_check_p').show();
                	$('#usr_check_p').html("**First Name length must be 8 ");
                	$('#usr_check_p').focus();
                	$('#usr_check_p').css("color","red");
                	pass_error = false;
                	return false;
                }
                else{
                  $('#usr_check_p').hide();	
                }
            

             }


             $('#email').keyup(function(event){
               password_check();
             });

             function password_check(){
             	var email = $('#email').val();
                if(email.length == '' ){
                	$('#usr_check_e').show();
                	$('#usr_check_e').html("**used this formet somthing@example.com ");
                	$('#usr_check_e').focus();
                	$('#usr_check_e').css("color","red");
                	pass_error = false;
                	return false;
                }
                else{
                  $('#usr_check_e').hide();	
                }
            

             }


    	});
    </script>



</body>
</html>