<?php

include "header.php";

?>

<div class="row indigo darken-4 no-margin no-margin-bottom" style="height: 30em;">
    <div class="col s4 m4 l4 hide-on-small-only indigo darken-4"></div>
    
    <div class="col s8 m6 l4 offset-s2 offset-m3 grey lighten-3 center" style="height: 30em;">
        <br><br><br><br><br><br><br><br><br>
        <button class="btn waves-effect waves-light btn-large" type="button" name="view_ratings" value="View Ratings" onclick="showViewRatings()">View Ratings</button>
        <span class="helper-text" data-error="invalid code" data-success="valid code"></span>
        
    </div>
    </div>  
    <div class="col s4 m4 l4 hide-on-small-only indigo darken-4"></div>
</div>


<?php

include "footer.php";

?>