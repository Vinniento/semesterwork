<?php

include "header.php";

?>

<div class="container"><br><br>
<form action="create_account_check.php" method="post" >
  <label for="firstname">First Name:</label> 
  <input type="text" id="firstname" name="firstname" required><br><br> 
  <label for="lastname">Second Name:</label>  
  <input type="text"  id="secondname" name="lastname" required><br><br>
  <label for="email">E-mail:</label>  
  <input type="email"  id="email" name="email" required><br><br>
  <label for="institution">Institution/University</label>  
  <input type="text"  id="institution" name="institution" required><br><br>
  <label for="password">Password:</label>  
  <input type="password"  id="password" name="pwd" required><br><br>
  <label for="password1">Password again:</label>
  <input type="password"  id="password1" name="pwd1" required><br><br>
  <label>
  <div class="row center-align">
  <input type="radio" value="student" name="chooseperson" id="studentradio">
  <span>Student</span>
  </label>
  <label>
  <input type="radio" value="teacher" name="chooseperson" id="teacherradio">
  <span>Teacher</span>
  </label><br><br>
  
  <button class="btn waves-effect waves-light" type="submit" value="Create Account">Create Account</button>
  <!--<input type="submit" value="Create Account">-->
  <input type="hidden" name="submit" value="validate"><br><br>
  </div>
</form>
</div>
  
<?php

include "footer.php";

?>
