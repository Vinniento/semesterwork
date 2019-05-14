<?php
include "header.php";

?>

<div class="row indigo darken-4 no-margin no-margin-bottom" style="height: 30em;">
  <div class="col s4 m4 l4 hide-on-small-only indigo darken-4"></div>
  <div class="col s8 m6 l4 offset-s2 offset-m3">
    <br><br><br><br><br>
    <div class="valign-wrapper">
    <form action="rate.php" method="post" class="col l12">
      <div class="card">
        <div class="card-content indigo lighten-4 center-align">
          <div class="row no-margin no-margin-bottom">
            <div class="input-field center-align">
              <input id="code" type="text" name="rating_code" class="validate" required>
              <label for="code" name="rating_code">Enter code here!</label>
              <br>
              <br>
              <button type="submit" class="myButton" name="submit_rating_code">Rate!</button>
              <span class="helper-text" data-error="invalid code" data-success="valid code"></span>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
  <div class="col s4 m4 l4 hide-on-small-only indigo darken-4"></div>
</div>


<?php

include "footer.php";

?>