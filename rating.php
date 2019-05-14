 <!-- <div id="buttonBar" class="btn-group">
    <button class="button" onclick="changeRatings()">Add Number to Rating</button>
  </div>
  
-->


<?php

error_reporting(0);
$name = 'testgruppe'; //hier muss noch der Name der Gruppe rein, die man bewertet hat
$i=0;

try{
    //create connection to database
	   $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $query= "SELECT COUNT('id') FROM testgruppe";
       $stm = $conn->prepare($query);
       $stm->execute();

       $tablenumber = $stm->fetchColumn();

    $introduction=0;
    $overview=0;
    $structure=0;
    $content = 0;
    $conclusion = 0;
    $visualization = 0;
    $work_as_team = 0;
    $preperation_team =0; 
    $necessity_participate =0; 
    $articulation = 0;
    $talking_speed = 0;
    $pronounciation = 0;
    $competence = 0;
    $presence = 0;
    $eye_contact =0; 
    $posture = 0;
    $gesture = 0;
    $preperation_individual = 0;

    $introductionT=0;
    $overviewT=0;
    $structureT=0;
    $contentT = 0;
    $conclusionT = 0;
    $visualizationT = 0;
    $work_as_teamT = 0;
    $preperation_teamT =0; 
    $necessity_participateT =0; 
    $articulationT = 0;
    $talking_speedT = 0;
    $pronounciationT = 0;
    $competenceT = 0;
    $presenceT = 0;
    $eye_contactT =0; 
    $postureT = 0;
    $gestureT = 0;
    $preperation_individualT = 0;

for($i=0;$i<$tablenumber;$i++) {
    $query = "SELECT indroduction, overview, structure, content,conclusion,visualization,work_as_team,preperation_team,necessity_participate,articulation,talking_speed,pronounciation,competence,presence,eye_contact,posture,gesture,preperation_individual FROM ".$name." WHERE id = :id";
       $statement = $conn->prepare($query);
       $statement->bindParam(':id', $i);
       $statement->execute();       
       $tabelle = $statement->fetch(PDO::FETCH_ASSOC);

       $introduction+=$tabelle[indroduction];
       $overview+=$tabelle[overview];
       $structure+=$tabelle[structure];
       $content+=$tabelle[content];
       $conclusion+=$tabelle[conclusion];
       $visualization+=$tabelle[visualization];
       $work_as_team+=$tabelle[work_as_team];
       $preperation_team+=$tabelle[preperation_team];
       $necessity_participate+=$tabelle[necessity_participate];
       $articulation+=$tabelle[articulation];
       $talking_speed+=$tabelle[talking_speed];
       $pronounciation+=$tabelle[pronounciation];
       $competence+=$tabelle[competence];
       $presence+=$tabelle[presence];
       $eye_contact+=$tabelle[eye_contact]; 
       $posture+=$tabelle[posture];
       $gesture+=$tabelle[gesture];
       $preperation_individual+=$tabelle[preperation_individual];
}
$introduction/=$i;
$overview/=$i;
$structure/=$i;
$content/=$i;
$conclusion/=$i;
$visualization/=$i;
$work_as_team/=$i;
$preperation_team/=$i;
$necessity_participate/=$i;
$articulation/=$i;
$talking_speed/=$i;
$pronounciation/=$i;
$competence/=$i;
$presence/=$i;
$eye_contact/=$i;
$posture/=$i;
$gesture/=$i;
$preperation_individual/=$i;






// teacher teil

$introductionT=0;
    $overviewT=0;
    $structureT=0;
    $contentT = 0;
    $conclusionT = 0;
    $visualizationT = 0;
    $work_as_teamT = 0;
    $preperation_teamT =0; 
    $necessity_participateT =0; 
    $articulationT = 0;
    $talking_speedT = 0;
    $pronounciationT = 0;
    $competenceT = 0;
    $presenceT = 0;
    $eye_contactT =0; 
    $postureT = 0;
    $gestureT = 0;
    $preperation_individualT = 0;
    
    $j=0;

for($i=0;$i<$tablenumber;$i++) {

    $query = "SELECT isteacher FROM ".$name." WHERE id = :id";
       $statement = $conn->prepare($query);
       $statement->bindParam(':id', $i);
       $statement->execute();       
       $tabelle = $statement->fetch(PDO::FETCH_ASSOC);

    
    if ($tabelle[isteacher]="1") {
    $query = "SELECT indroduction, overview, structure, content,conclusion,visualization,work_as_team,preperation_team,necessity_participate,articulation,talking_speed,pronounciation,competence,presence,eye_contact,posture,gesture,preperation_individual FROM ".$name." WHERE id = :id";
       $statement = $conn->prepare($query);
       $statement->bindParam(':id', $i);
       $statement->execute();       
       $tabelle = $statement->fetch(PDO::FETCH_ASSOC);
       
        $j++;

       $introductionT+=$tabelle[indroduction];
       $overviewT+=$tabelle[overview];
       $structureT+=$tabelle[structure];
       $contentT+=$tabelle[content];
       $conclusionT+=$tabelle[conclusion];
       $visualizationT+=$tabelle[visualization];
       $work_as_teamT+=$tabelle[work_as_team];
       $preperation_teamT+=$tabelle[preperation_team];
       $necessity_participateT+=$tabelle[necessity_participate];
       $articulationT+=$tabelle[articulation];
       $talking_speedT+=$tabelle[talking_speed];
       $pronounciationT+=$tabelle[pronounciation];
       $competenceT+=$tabelle[competence];
       $presenceT+=$tabelle[presence];
       $eye_contactT+=$tabelle[eye_contact]; 
       $postureT+=$tabelle[posture];
       $gestureT+=$tabelle[gesture];
       $preperation_individualT+=$tabelle[preperation_individual];
    }
}
$introductionT/=$j;
$overviewT/=$j;
$structureT/=$j;
$contentT/=$j;
$conclusionT/=$j;
$visualizationT/=$j;
$work_as_teamT/=$j;
$preperation_teamT/=$j;
$necessity_participateT/=$j;
$articulationT/=$j;
$talking_speedT/=$j;
$pronounciationT/=$j;
$competenceT/=$j;
$presenceT/=$j;
$eye_contactT/=$j;
$postureT/=$j;
$gestureT/=$j;
$preperation_individualT/=$j;
}
catch (PDOException $exception) 
	{
		echo "ERRRRRRROOOOORRRRR";
    echo  "<br>" . $exception->getMessage();
	}



$content_structure = ($introduction+$overview+$structure+$content+$conclusion)/5;
$teamwork = ($work_as_team+$preperation_team+$necessity_participate)/3;
$language = ($articulation+$talking_speed+$pronounciation+$competence)/4;
$body_language = ($presence+$eye_contact+$posture+$gesture)/4;

$content_structureT = ($introductionT+$overviewT+$structureT+$contentT+$conclusionT)/5;
$teamworkT = ($work_as_teamT+$preperation_teamT+$necessity_participateT)/3;
$languageT = ($articulationT+$talking_speedT+$pronounciationT+$competenceT)/4;
$body_languageT = ($presenceT+$eye_contactT+$postureT+$gestureT)/4;
?>





    <div class="row">
        <div class="col s6 m6 l6 indigo lighten-4">
            
            <h4 class="center">Students</h4><br>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Content & Structure</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="content_structure"><?php echo round($content_structure,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Introduction</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="introduction"><?php echo round($introduction,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Gave an Overview?</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="overview"><?php echo round($overview,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Structure of the Presentation itself</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="structure_presentation"><?php echo round($structure,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Content</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="content"><?php echo round($content,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Conclusion</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="conclusion"><?php echo round($conclusion,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Visualization</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="visualization"><?php echo round($visualization,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Teamwork</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="teamwork"><?php echo round($teamwork,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Acted as a Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="acted_as_team"><?php echo round($work_as_team,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Preparation by the Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="preparation_team"><?php echo round($preperation_team,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Audience felt necessity to participate</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="participation"><?php echo round($necessity_participate,1); ?></span></p></h5>
                    </div>
                </div>
                <h4 class="center">Vincent Schauer</h4><br>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Language</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="language"><?php echo round($language,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Articulation</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="articulation"><?php echo round($articulation,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Talking Speed</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="talking_speed"><?php echo round($talking_speed,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Pronunciation</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="pronunciation"><?php echo round($pronounciation,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Competence</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="competence"><?php echo round($competence,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Body Language</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="body_language"><?php echo round($body_language,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Presence</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="presence"><?php echo round($presence,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Eye Contact</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="eye_contact"><?php echo round($eye_contact,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Posture</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="posture"><?php echo round($posture,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Gesture</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="gesture"><?php echo round($gesture,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Preparation</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="preparation_individual"><?php echo round($preperation_individual,1); ?></span></p></h5>
                    </div>
                </div>
        </div>



        <div class="col s6 m6 l6 blue">
        <h4 class="center">Teacher</h4><br>
        <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Content & Structure</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="content_structure"><?php echo round($content_structureT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Introduction</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="introduction"><?php echo round($introductionT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Gave an Overview?</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="overview"><?php echo round($overviewT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Structure of the Presentation itself</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="structure_presentation"><?php echo round($structureT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Content</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="content"><?php echo round($contentT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Conclusion</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="conclusion"><?php echo round($conclusionT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Visualization</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="visualization"><?php echo round($visualizationT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Teamwork</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="teamwork"><?php echo round($teamworkT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Acted as a Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="acted_as_team"><?php echo round($work_as_teamT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Preparation by the Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="preparation_team"><?php echo round($preperation_teamT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Audience felt necessity to participate</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="participation"><?php echo round($necessity_participateT,1); ?></span></p></h5>
                    </div>
                </div>
                <h4 class="center">Vincent Schauer</h4><br>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Language</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="language"><?php echo round($languageT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Articulation</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="articulation"><?php echo round($articulationT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Talking Speed</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="talking_speed"><?php echo round($talking_speedT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Pronunciation</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="pronunciation"><?php echo round($pronounciationT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Competence</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="competence"><?php echo round($competenceT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Body Language</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="body_language"><?php echo round($body_languageT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Presence</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="presence"><?php echo round($presenceT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Eye Contact</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="eye_contact"><?php echo round($eye_contactT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Posture</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="posture"><?php echo round($postureT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Gesture</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="gesture"><?php echo round($gestureT,1); ?></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Preparation</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="preparation_individual"><?php echo round($preperation_individualT,1); ?></span></p></h5>
                    </div>
                </div>
    </div>

<!--</div>-->




<!--
<script>

function changeRatings() {
      let rating_content = document.getElementById("content_structure");
      rating_content.innerHTML="5.2";
    }

</script>
-->
