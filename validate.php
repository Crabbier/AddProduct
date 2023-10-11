<?php
  class validate{
    public function checkEmpty($data, $fields){
      $msg = null;
      foreach ($fields as $value){
        if (empty($data[$value])){
          $msg .= "<p>$value field empty</p>";
        }
      }
      return $msg;
    }

    public function validDate($date){
        $CurrentDate = date("Y-m-d");

        if (strtotime($date) == strtotime($CurrentDate)) {
            return true;
        } else{
            return false;
        }
    }

    // check to see if color is a valid input
    public function validColor($color){
        $validColors = ["Silver","Gold","Copper","Black","White","Blue","Red"];
        if (in_array($color, $validColors)){
            return true;
        }else{
            return false;
        }
        
    }

    public function validCategory($category){
        $validCategories = ["Quartz Watch","Mechanic Watch","Automatic Watch","Necklace","Bracelet","Ring"];
        if (in_array($category, $validCategories)){
            return true;
        }else{
            return false;
        }
        
    }
  }
?>