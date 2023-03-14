<?php

 function validateTopic($topic){
  
    $errors=array();

    if(empty($topic["name"])){
      array_push($errors," name is required ");
    }
 
  
    

    // $existing=selectOne("topics",["name"=>$topic["name"]]);
    // if (isset($existing)) {
    //     array_push($errors,"Name already exists ");
    // }
    $existing=selectOne("topics",["name"=>$topic["name"]]);
    if (isset($existing) ) {
        if(isset($_POST["update-topic"])&& $existing["id"]!=$topic["id"]){
        array_push($errors,"Topic with that title already exists");
        }
        if(isset($_POST["add-topic"])){
          array_push($errors,"Topic with that title already exists");
          }

    }

  return $errors;
 }
