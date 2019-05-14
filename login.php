<?php

include "header.php";

?>

<div class="container">
  <br>
<form action="login_check.php" method="post">
  <label for="username">Username:</label> 
  <input type="text" id="username" name="username" value= "testuser" required><br><br> 
  <label for="password">Password:</label>  
  <input type="password"  id="password" name="pwd" value= "nlkj" required><br><br>
  
  <div>
  <button class="btn waves-effect waves-light" type="submit" name="submit" value="Login">Login</button>
  </div>

</form>
<br>
<div>
<a href="create_account.php"><button class="btn waves-effect waves-light center-align">Create new Account for Teachers</button></a>
</div>
<br>

</div>


  
<?php

include "footer.php";

?>
