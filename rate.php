<?php
include "header.php";

 $_SESSION['code'] = $_POST['rating_code'];
if (isset($_POST['rating_code'])) {
  try {
	

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    //nur fürs testen, bis wir die präsis anlegen können
	
    $name = "test3344";
    $id_students = 4;
    $rating = $_POST['rating_code'];
    $rating_code = $_POST['rating_code'];
    $creator = "vince";
/*
    $sql = "DELETE FROM presentations WHERE name = :name";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->execute();


    $statement = $conn->prepare("INSERT INTO presentations (name, id_students, rating_code, creator) VALUES (:name, :id_students, :rating_code, :creator)");
    $statement->execute(array('name' => $name, 'id_students' => $id_students, 'rating_code' => $rating_code, 'creator' => $creator));
     */
    $query = "SELECT rating_code FROM presentations WHERE rating_code = :rating_code";
    $statement = $conn->prepare($query);
    $statement->bindParam(':rating_code', $rating_code);
    $statement->execute();
    $code = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($code);

    if (!($code['rating_code'] == $_POST['rating_code'])) {
      header("Location: index.php");
    } 
  } catch (PDOException $error) {
    echo $error;
  }
}
?>


<div class="container">
  <header>
    <br>
    <h3 class="header center-align">Give your Rating</h3>
    <h5 class="header center-align">(1 is worst and 10 is best)</h5><br>
  </header>

  <div class="row grey lighten-4">
    <div class="col s6">
      <header>
        <h5 class="header">As a Group:</h5>
      </header>
    </div>
    <h5 class="col s6 right-align">Group3_E</h5>
  </div>

  <br>
  <hr>
  <header><br>
    <h5 class="header center-align">Content and Structure</h5><br><br>
  </header>


  <form action="rate_check.php" method="post">
    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Introduction</p>
      </div>
      <div class="col s12 m8 l8">
        <form>
          <p class="range-field">
            <input type="range" name="intro" min="0" max="10" />
          </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Gave an Overview?</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="overview" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Structure of the Presentation itself</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="structure" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Content</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="content" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Conclusion</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="conclusion" min="0" max="10" />
        </p>
      </div>
    </div>




    <br>
    <hr>
    <header><br>
      <h5 class="header center-align">Visualization</h5><br><br>
    </header>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Visualization</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="visualization" min="0" max="10" />
        </p>
      </div>
    </div>

    <br>
    <hr>
    <header><br>
      <h5 class="header center-align">Teamwork</h5><br><br>
    </header>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Acted as a team</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="acted_as_team" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Preparation by the team</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="preperation_team" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Audience felt necessity to participate</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="necessity_participate" min="0" max="10" />
        </p>
      </div>
    </div>

    <br>
    <hr>
    <header><br>
      <h5 class="header center-align">Additional Feedback for the group: (optional)</h5><br><br>
    </header>

    <!-- textfeld übergabe name fehlt -->
    <div class="row grey lighten-4">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="Additional_Feedback_theam" class="materialize-textarea"></textarea>
          <label for="textarea1">Additional Feedback</label>
        </div>
      </div>
    </div>

    <br>
    <header><br>
      <h5 class="header center-align">Individual Feedback for Group Members</h5><br><br>
    </header>
    <br>

    <div class="row grey lighten-4">
      <div class="col s6">
        <header>
          <h5 class="header">Group Member:</h5>
        </header>
      </div>
      <h5 class="col s6 right-align">Vincent Schauer</h5>
    </div>
    <br>
    <hr>
    <header><br>
      <h5 class="header center-align">Language</h5><br><br>
    </header>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Articulation</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="articulation" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Talking Speed</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="talking_speed" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Pronunciation</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name="pronunciation" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Competence</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="competence" min="0" max="10" />
        </p>
      </div>
    </div>

    <br>
    <hr>
    <header><br>
      <h5 class="header center-align">Body Language</h5><br><br>
    </header>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Presence</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="body_language" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Eye Contact</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="eye_contact" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Posture</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range"name ="posture" min="0" max="10" />
        </p>
      </div>
    </div>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Gesture</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="gesture" min="0" max="10" />
        </p>
      </div>
    </div>

    <br>
    <hr>
    <header><br>
      <h5 class="header center-align">Preparation</h5><br><br>
    </header>

    <div class="row grey lighten-4">
      <div class="col s12 m4 l4">
        <p>Preparation</p>
      </div>
      <div class="col s12 m8 l8">
        <p class="range-field">
          <input type="range" name ="preperation_individual" min="0" max="10" />
        </p>
      </div>
    </div>

    <br>
    <hr>

    <!-- name für übergabe noch hinzufügen -->
    <header><br>
      <h5 class="header center-align">Additional Feedback for a groupmember: (optional)</h5><br><br>
    </header>

    <div class="row grey lighten-4">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea2" name="Additional_Feedback" class="materialize-textarea"></textarea>
          <label for="textarea2">Additional Feedback</label>
        </div>
      </div>
    </div>
</div>
</div>

<br>
<div class="center-align">
<button class="btn waves-effect waves-light btn-large" type="submit" name="submit" value="Submit Rating">Submit Rating</button>
</div>
<br><br>
</form>



<?php

include "footer.php";

?>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function() {
    $('.sidenav').sidenav();
  });
</script>
<script>
  $(document).ready(function() {
    $('.parallax').parallax();
  });
</script>
</body>

</html>