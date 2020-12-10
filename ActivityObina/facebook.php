<?php 
  include 'connection.php'

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form method="POST">
    <div id="bar">
      <div id="navigation"> 

        <table class="log">
          <tr>
            <td class="login_input">Email or Phone</td>
            <td class="login_input">Password</td>
          </tr>
          <tr>
            <td><input class="input" type="text" name="email">
            </td>
            <td><input class="input" type="password" name="password">
            </td>
            <td><input id="button" type="submit" name="login" value="Log In"></td>
          </tr>
          <tr>
            <td></td>
            <td class="forgot"><a href="forgot.php">Forgot Password?</a></td>
        </table>
    
    <h1 class="fb-logo">facebook</h1>
   
  </div>
  </div>

  <div id="container">
    <div id="content">
      
      <div id="leftbod">
        
        <div class="connect bolder">
          Connect with friends and the
          world around you on Facebook.</div>
        
        <div class="leftbar">
          <img src="see.png" alt="" class="iconwrap fb1"/>
          <div class="fb1">
            <span class="text">See photos and updates</span>
            <span class="text2 fb1">from friends in News Feed</span>
          </div>
        </div> 
          
          <div class="leftbar">
          <img src="news.png" alt="" class="iconwrap fb1"/>
          <div class="fb1">
            <span class="text">Share what's new</span>
            <span class="text2 fb1">in your life on your timeline</span>
            </div>
          </div>
             
            <div class="leftbar">
          <img src="findmore.png" alt="" class="iconwrap fb1"/>
          <div class="fb1">
            <span class="text">Find more</span>
            <span class="text2 fb1">of what you're looking for with graph search</span>
        </div> 
        </div> 
       
            
      </div>
       
      <div id="rightbod">
        <div class="signup bolder">Sign Up</div>
        <div class="free bolder">It's free and always will be</div>
        
        <div class="formbox">
        <input class="inputbody in1" type="text" name="fname" placeholder="First name">
        <input class="inputbody in1" type="text" name="lname" placeholder="Last name">
        </div>
        <div class="formbox">
        <input class="inputbody in2" type="text" name="email_acc" placeholder="Email or mobile number">
        </div>
        <div class="formbox">
        <input class="inputbody in2" type="text" name="newpass" placeholder="New password">
        </div>
        <div class="formbox">
          <div class="bday" >Birthday</div>
        </div>
        <div class="formbox">
          <input type="date" name="birthday">
            <div style="  font-size:19px;color:#141823;-webkit-font-smoothing: antialiased;margin-bottom:5px; margin-top: 10px;" >Gender</div>
            <div class="formbox ">
              <span data-type="radio" class="spanpad">
                <input type="radio" name="gender" id="fem" class="m0" value="Female">
                <label for="fem" class="gender">Female
                </label>
                <input type="radio" name="gender" id="male" class="m0" value="Male">
                <label for="male" class="gender">Male
                </label>
                <input type="radio" name="gender" id="male" class="m0" value="Custom">
                 <label for="custom" class="gender">Custom
                </label>
              </span>
            </div>
            <div class="formbox">
              <div class="agree">
                By clicking Sign Up, you agree to our <div class="link">Terms</div> and that you have read our <div class="link">Data Use Policy</div>, including our <div class="link">Cookie Use</div>.
              </div>  
            </div>
            <div class="formbox">
              <button class="signbut bolder" type="submit" name="subm">Sign Up</button>
            </div>
          <div class="formbox">
            <div class="create"><div class="link h">Create a Page</div> for a celebrity, band or business.</div>
          </div>
      </div>
     </div>
    </div>

  </form>
  
  <?php 
    //Sign In

     if(isset($_POST['subm'])){
      
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email_acc = $_POST['email_acc'];
      $newpass = $_POST['newpass'];
      $birthday = $_POST['birthday'];
      $gender = $_POST['gender'];
    

      $sqlInsert = "INSERT INTO tblFacebook (fname, lname, email_acc, newpass, birthday,gender) 
      VALUES ('$fname','$lname','$email_acc','$newpass','$birthday','$gender')";
      
      $query = mysqli_query($connect,$sqlInsert);
      if ($query==TRUE) {
        echo "<strong>Record Added</strong>";
        

      }else{
        echo "<strong>Record not Added</strong>";
      }
  }

    ?>

      <?php
    //LOG IN

     if(isset($_POST['login'])){
      
      $email = $_POST['email'];
      $password = $_POST['password'];
      

      $sqlSelect= "SELECT * FROM tblFacebook WHERE email='$email' AND password='$password'";
      
      
      $query = mysqli_query($connect,$sqlSelect);
      $num= mysqli_num_rows($query);

      if ($num>0) {
        
        header("location: login.php");

      }
      
      else{
        echo "USERNAME AND PASSWORD IS INCORRECT";
      }
  }

?>



</body>
</html>