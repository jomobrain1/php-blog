<?php

 function validateUser($user){
  
    $errors=array();

    if(empty($user["username"])){
      array_push($errors," Username is required ");
    }
    if(empty($user["email"])){
      array_push($errors," Email is required ");
    }
    if(empty($user["password"])){
      array_push($errors," Password is required ");
    }
    if($user["password_confirmation"]!== $user["password"]){
      array_push($errors," Passwords dont match");
    }
  
    if(empty($user["password_confirmation"])){
      array_push($errors," Password is required ");
    }

    // $existingUser=selectOne("users",["email"=>$user["email"]]);
    // if (isset($existingUser)) {
    //     array_push($errors," Email already exists ");
    // }
    $existing=selectOne("users",["email"=>$user["email"]]);
    if (isset($existing) ) {
        if(isset($_POST["update-admin"])&& $existing["id"]!=$user["id"]){
        array_push($errors,"Email aready exists");
        }
        if(isset($_POST["create-admin"])){
          array_push($errors,"Email aready exists");
          }

    }

  return $errors;
 }


//  validate login
function validateLogin($user){
  
  $errors=array();

  if(empty($user["email"])){
    array_push($errors," email is required ");
  }
 
  if(empty($user["password"])){
    array_push($errors," Password is required ");
  }
 
 

return $errors;
}