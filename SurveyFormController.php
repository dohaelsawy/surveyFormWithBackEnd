<?php
require_once 'surveyFormModel.php';
include_once 'DbController.php';


class SurveyFormController  {

    public function setFormInfo (surveyFormModel $dataReceived): bool
    {
        $db = new DBController();
        $name = $dataReceived->get_name();
        $email = $dataReceived->get_email();
        $age = $dataReceived->get_age();
        $CurrentRole = $dataReceived->get_currentRole();
        $FriendFreeCodeCamp = $dataReceived->get_friendFreeCodeCamp();
        $FeatureOfFreeCodeCamp = $dataReceived->get_featureOfFreecodecamp();
        $ImproveField = $dataReceived->get_improveField();
        $Suggestions = $dataReceived->get_suggestions();
        if ($db->OpenConnection()) {
            $query = "insert into userdata (UserName,UserEmail,UserAge,CurrentRole,FriendFreeCodeCamp,FeatureOfFreeCodeCamp,ImproveField,Suggestions) values ('$name','$email','$age','$CurrentRole','$FriendFreeCodeCamp','$FeatureOfFreeCodeCamp','$ImproveField','$Suggestions')";
            return $db->insert($query);
        }
        else {
            echo "there is something went wrong ...";
        }

    }
}