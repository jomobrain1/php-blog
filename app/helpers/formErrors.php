
<div class="msg">
      
        <?php if(count($errors)>0) : ?>
          <?php foreach($errors as $error) : ?>
            <li class="error"><?php echo $error; ?></li>
          <?php endforeach ; ?>
        <?php endif ?>
           
        
</div>

<style>
  .error{
    list-style: none;
    color: #d43;
    font-weight: 600;
  }
</style>