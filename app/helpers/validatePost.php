<?php

 function validatePost($post){
  
    $errors=array();

    if(empty($post["title"])){
      array_push($errors,"title  is required ");
    }
    // if(empty($user["image"])){
    //   array_push($errors,"image is required ");
    // }
    if (!strlen(trim($_POST['body']))){
      array_push($errors," Body is required ");
    }


    $existing=selectOne("posts",["title"=>$post["title"]]);
    if (isset($existing) ) {
        if(isset($_POST["update-topic"])&& $existing["id"]!=$post["id"]){
        array_push($errors,"Post with that title already exists");
        }
        if(isset($_POST["add-topic"])){
          array_push($errors,"Post with that title already exists");
          }

    }

  return $errors;
 }


//  validate login
function validateLogin($user){
  
  $errors=array();

  if(empty($user["username"])){
    array_push($errors," Username is required ");
  }
 
  if(empty($user["password"])){
    array_push($errors," Password is required ");
  }
 
 

return $errors;
}