<?php

require_once 'SurveyFormController.php';
require_once 'SurveyFormModel.php';

$data = new SurveyFormController ;
$surveyModel = new SurveyFormModel ;

if (isset($_POST['submit'])){
  $surveyModel->set_name($_POST['UserName']);
  $surveyModel->set_email($_POST['email']);
  $surveyModel->set_age($_POST['age']);
  $surveyModel->set_currentRole($_POST['currentRole']);
  $surveyModel->set_friendFreeCodeCamp($_POST['ans']);
  $surveyModel->set_featureOfFreecodecamp($_POST['featureOfFreeCodeCamp']);
  $surveyModel->set_improveField(implode(',',$_POST['improveField']));
  $surveyModel->set_suggestions($_POST['suggestions']);
  if ($data->setFormInfo($surveyModel)){
    header("location:ThankYou.html");
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey Form</title>
  <link rel="stylesheet" href="survey form.css">
</head>

<body>
  <div class="form-titel">
    <h1 id="title">FreeCodeCamp Survey Form</h1>
    <p id="description"> Thank you for taking time to help us improve the platform</p>
  </div>
  <div class="form-group ">
    <form id="survey-form" method="POST">
      <div class="form-items">
        <label for="name" id="name-label"> Name</label><br>
        <input type="text" id="name" name = "UserName" required placeholder="Enter Your Name"><br>
      </div>
      <div class="form-items">
        <label for="email" id="email-label"> Email</label><br>
        <input type="email" id="email" name = "email" required placeholder="Enter Your Email"><br>
      </div>
      <div class="form-items">
        <label for="number" id="number-label">Age</label><br>
        <input type="number" id="number" name ="age" min="10" max="99" placeholder="Age"><br>
      </div>
      <div class="form-items" >
        <label for="dropdown">Which option best describies your current role?</label>
        <select name="currentRole" id="dropdown">
          <option value="none" disabled selected>select current role</option>
          <option value="student">student</option>
          <option value="full-time-job">full time job</option>
          <option value="full-time-learner">full time learner</option>
          <option value="prefer-not-to-say">prefer not to say</option>
        </select>
     </div>
      <div class="form-items" id='friendFreeCodeCamp'>
        <p>would you recommend freeCodeCamp to a friend?</p>
          <label>
              <input type="radio" name="ans" value="definitely">
          </label>definitely<br>
          <label>
              <input type="radio" name="ans" value="maybe">
          </label>maybe<br>
          <label>
              <input type="radio" name="ans" value="notSure">
          </label>not sure<br>
      </div>
      <div class="form-items">
        <p>what is your favorite feature of FreeCodeCamp</p>
        <select name="featureOfFreeCodeCamp" id="dropdown-2">
          <option value="none" disabled selected>select an option </option>
          <option value="challenges">challenges</option>
          <option value="projects">projects</option>
          <option value="community">community</option>
          <option value="open-source">open source</option>
        </select>
      </div>
      <div class="form-items">
        <p>what would you like to see improved? (check all that apply)</p>
          <label>
              <input type="checkbox" name = 'improveField[]' value="frontEnd">
          </label>front-end projects <br>
          <label>
              <input type="checkbox" name = 'improveField[]' value="backEnd">
          </label>back-end projects <br>
          <label>
              <input type="checkbox" name = 'improveField[]' value="DataVisualization">
          </label>Data Visualization <br>
          <label>
              <input type="checkbox" name = 'improveField[]' value="Challenges">
          </label>Challenges<br>
          <label>
              <input type="checkbox" name = 'improveField[]' value="OpenSourceCommunity">
          </label>Open Source Community<br>
      </div>
      <div class="form-items">
        <p>Any comments or suggestions?</p>
          <label>
              <textarea name="suggestions" placeholder="Enter your comment here"></textarea>
          </label>
      </div>
      <div class="form-items">
        <button name = 'submit' type ='submit'id="submit">submit</button>
      </div>

    </form>
  </div>
</body>

</html>