<?php
function marraige_age_calc( string $name, int $age, string $gender){

  $wait_age_female = 18-$age;

if($gender == "female" && $age >= 18 ){

    return "You are Ready For Marraige!";
}else{
  
    return " you have to wait {$wait_age_female} years ";
};

  $wait_age_male = 21-$age;
if($gender == "male" && $age >= 21){

       return "You are Ready For Marraige!";

}else{
    return "You have to wait {$wait_age_male} years";
}

}