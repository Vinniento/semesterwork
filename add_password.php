<?php
include "header.php";
?>

<div class="container">
    <h5>Hello,<?php echo " " . $_SESSION['username']; ?>!</h5>
    <p>Please add a password to your account:</p>
<form action="login_check.php" method="post">
  <label for="password">Set Password:</label>  
  <input type="password"  id="password" name="pwd" value= "" required><br><br>
  <div>
  <button class="btn waves-effect waves-light" type="submit" name="submit" value="setpassword">Set your Password</button>
  </div>
<br>
</form>
</div>


  
<?php
include "footer.php";
?>
