<?php 

class SurveyFormModel {
    private $name ;
    private $email;
    private $age ;
    private $currentRole; 
    private $friendFreeCodeCamp;
    private $featureOfFreecodecamp ;
    private $improveField;
    private $suggestions ;

    public function set_name ($name){
        $this->name = $name ;
    }
    public function set_email ($email){
        $this->email = $email ;
    }
    public function set_age ($age){
        $this->age = $age ;
    }
    public function set_currentRole ($currentRole){
        $this->currentRole = $currentRole ;
    }
    public function set_friendFreeCodeCamp ($friendFreeCodeCamp){
        $this->friendFreeCodeCamp = $friendFreeCodeCamp ;
    }
    public function set_featureOfFreecodecamp ($featureOfFreecodecamp){
        $this->featureOfFreecodecamp = $featureOfFreecodecamp ;
    }
    public function set_improveField ($improveField){
        $this->improveField = $improveField ;
    }
    public function set_suggestions ($suggestions){
        $this->suggestions = $suggestions ;
    }


    public function get_name(){
        return $this->name;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_age(){
        return $this->age;
    }
    public function get_currentRole(){
        return $this->currentRole;
    }
    public function get_friendFreeCodeCamp(){
        return $this->friendFreeCodeCamp;
    }
    public function get_featureOfFreecodecamp(){
        return $this->featureOfFreecodecamp;
    }
    public function get_improveField(){
        return $this->improveField;
    }
    public function get_suggestions(){
        return $this->suggestions;
    }




}