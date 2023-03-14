<?php
session_start();
require('connect.php');


// to be deleted
function dd($values) 
{
    echo "<pre>",print_r($values,true),"</pre>";
    die();
}
function executeQuery($sql,$data){
    global $conn;
    $stmt=$conn->prepare($sql);
    $values=array_values($data);
    $types=str_repeat('s',count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table,$conditions=[]){
    global $conn;
    $sql="SELECT * FROM $table  ";
    if (empty($conditions)) {
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $records=$stmt->get_result()->fetch_all();
        return $records;
    }else{

        // return records that match the conditions
        // $sql=select * from $table where username="jomobrain1" AND admin=1
        $index=0;
        foreach($conditions as $key=>$value){
            if($index===0){
                $sql=$sql. " WHERE $key=? ";
            }else{
                $sql=$sql. " AND  $key=? ";  
            }
         $index++;
        }
        $stmt=executeQuery($sql,$conditions);
        $records=$stmt->get_result()->fetch_all();
        return $records;
    }
  
    
}

function selectOne($table,$conditions){
    global $conn;
    $sql="SELECT * FROM $table  ";
   

        // return records that match the conditions
        // $sql=select * from $table where username="jomobrain1" AND admin=1
        $index=0;
        foreach($conditions as $key=>$value){
            if($index===0){
                $sql=$sql. " WHERE $key=? ";
            }else{
                $sql=$sql. " AND  $key=? ";  
            }
         $index++;
        }
        $sql=$sql." LIMIT 1 ";
        

        
        $stmt=executeQuery($sql,$conditions);
        $records=$stmt->get_result()->fetch_assoc();
        return $records;
   
  
    
}


// insert into db
function create($table,$data){
 global $conn;
 
// $sql=insert into users set username=?,admin=?email=?,password=?
$sql="INSERT INTO $table SET ";
$index=0;
foreach($data as $key=>$value){
    if($index===0){
        $sql=$sql. " $key=? ";
    }else{
        $sql=$sql. ", $key=? ";  
    }
 $index++;
}
$stmt=executeQuery($sql,$data);
$id=$stmt->insert_id;
return $id;

}

function update($table,$id,$data){
        
   // $sql=insert into users set username=?,admin=?email=?,password=?
   $sql="UPDATE $table SET ";
   $index=0;
   foreach($data as $key=>$value){
       if($index===0){
           $sql=$sql. " $key=? ";
       }else{
           $sql=$sql. ", $key=? ";  
       }
    $index++;
   }
   $sql=$sql." WHERE id=? ";
   $data["id"]=$id;
   $stmt=executeQuery($sql,$data);
  
   return $stmt->affected_rows;
   
}

function delete($table,$id){
     
    // $sql=insert into users set username=?,admin=?email=?,password=?
    $sql="DELETE FROM  $table WHERE id=? ";
       
    $stmt=executeQuery($sql,["id"=>$id]);   
    return $stmt->affected_rows;
    
}
function getPublishedPostsAndTopics($topic_id){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=? ";
    $stmt=executeQuery($sql,["published"=>1,"topic_id"=>$topic_id]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
} 
function getPublishedPosts(){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? ";
    $stmt=executeQuery($sql,["published"=>1]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}   
function getMainPost(){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? Limit 1  ";
    $stmt=executeQuery($sql,["published"=>1]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}  
function getTwoPosts(){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? LIMIT 2";
    $stmt=executeQuery($sql,["published"=>1]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}
function getPublishedTopics1(){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?";
    $stmt=executeQuery($sql,["published"=>1,"topic_id"=>6 ]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}
function getPublishedTopics2(){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?";
    $stmt=executeQuery($sql,["published"=>1,"topic_id"=>7 ]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}

function getPublishedTopics3(){
    global $conn;
    $sql="SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?";
    $stmt=executeQuery($sql,["published"=>1,"topic_id"=>8 ]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}

function searchPosts($term){
    global $conn;
    $match="%".$term . "%" ;
    $sql="SELECT p.*, u.username 
    FROM posts AS
    p JOIN users AS u
     ON p.user_id=u.id WHERE p.published=? 
     AND p.title LIKE ?  OR p.body LIKE  ?  ";
    $stmt=executeQuery($sql,["published"=>1,"title"=>$match,"body"=>$match ]);
    $records=$stmt->get_result()->fetch_all();
    return $records;
}
 
   

// $conditions=[
//     "admin"=>0,
//     "username"=>"beast",
//     "password"=>"12345678",
//     "email"=>"beast402.com",
    
// ];

// $users=create("users",$conditions);
// $users=update("users",2,$conditions);
$users=delete("users",2);
// dd($users);
