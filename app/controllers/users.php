<?php
include(ROOT_PATH."/app/database/db.php");
include(ROOT_PATH."/app/helpers/middleware.php");
include(ROOT_PATH."/app/helpers/validateUser.php");

$table="users";
$admins=selectAll($table);
$errors=array();
$username="";
$admin="";
$password="";
$password_confirmation="";
$email="";
$username="";
$id= "";

function loginUser($user){
    $_SESSION["id"]= $user["id"];
    $_SESSION["username"]= $user["username"];
    $_SESSION["email"]= $user["email"];
    $_SESSION["admin"]= $user["admin"];
    $_SESSION["message"]="You are now logged in ";
    $_SESSION["type"]=" success ";
    
    if($_SESSION["admin"]){
        header("Location:".BASE_URL."/admin/dashboard.php");
    }else{
        header("Location:".BASE_URL."/index.php");
    }
    
   

    exit();
}

if(isset($_POST["register-btn"])||isset($_POST["create-admin"]))
{
   

$errors=validateUser($_POST);

//    dd($errors);
if (count($errors)===0) {
    unset($_POST["register-btn"],$_POST["password_confirmation"],$_POST["create-admin"]);

   if(isset( $_POST["admin"])){
    $_POST["admin"]=1;
    $user_id=create("users",$_POST);
    $_SESSION["message"]="Admin created ";
    $_SESSION["type"]=" success ";
    header("Location:".BASE_URL."/admin/users/index.php");
    exit();
   }else{
    $_POST["admin"]=0;
    $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT) ;    
    $user_id=create("users",$_POST);
    $user=selectOne("users",["id"=>$user_id]);
    
    // log in User
    loginUser($user);
   }

  

    // dd($user); 
}else{

    $username=$_POST["username"];
    $password=$_POST["password"];
    $password_confirmation=$_POST["password_confirmation"];
    $email=$_POST["email"];
    $admin=isset($_POST["admin"])? 1:0;
  
}

//end is set
}


if(isset($_GET["id"])){
$user=selectOne($table,["id"=>$_GET["id"]]);
$username=$user["username"];
$email=$user["email"];
$admin=$user["admin"]==1 ? 1:0;
$id=$user["id"];
}
// update admin
if(isset($_POST["update-admin"])){
    adminOnly();
//   dd($_POST);
$errors=validateUser($_POST);
if (count($errors)===0) {
    $id=$_POST["id"];
    unset($_POST["update-admin"]);
    unset($_POST["id"]);
    unset($_POST["password_confirmation"]);
    // dd($_POST);
    $_POST["admin"]=isset($_POST["admin"])?1:0;
    $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT) ;    
    $user_id=update($table,$id,$_POST);
    $_SESSION["message"]="Admin updated ";
    $_SESSION["type"]=" success ";
    header("Location:".BASE_URL."/admin/users/index.php");
    exit();
} else {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $password_confirmation=$_POST["password_confirmation"];
    $email=$_POST["email"];
    $admin=isset($_POST["admin"])? 1:0;
}

}

// login controller

if(isset($_POST["login-btn"])){
   $errors=validateLogin($_POST);
   if(count($errors)===0){
    $user=selectOne("users",["email"=>$_POST["email"]]);
    // dd(password_verify($_POST["password"],$user["password"]));
   if($user &&  password_verify($_POST["password"],$user["password"]) ){
     loginUser($user);
   }else{
    array_push($errors,"Invalid credentials");
   }
      
   }
   
 $email=$_POST["email"];
 $password=$_POST["password"];
}


// delete admin 
if (isset($_GET["delete_id"])) {
    adminOnly();
    $count=delete($table,$_GET["delete_id"]);
    $_SESSION["message"]="Admin deleted successfully ";
    $_SESSION["type"]=" success ";
    header("Location:".BASE_URL."/admin/users/index.php");
    exit();
}



?>