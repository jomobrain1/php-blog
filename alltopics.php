

<div class="topics">
<?php foreach ($topics as $key=> $topic) : ?>
       
       <div>
           <a href="index.php?t_id=<?php echo $topic[0]."&name=".$topic[1] ?>"  class="topics"><?php echo $topic[1] ?></a>
       </div>
  
     <?php endforeach ; ?>   
</div>

<style>

.topics{
    display: flex;
    margin-bottom: 50px;
    justify-content: center;
    align-items: center;
   
   
    
}

.topics a{
    background-color: steelblue;
    padding: 5px 16px;
    margin: 3px 10px;
    color: #fff;
}
    

</style>