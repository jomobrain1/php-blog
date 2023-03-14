<?php if(isset($_SESSION["message"])) : ?>
          <div class="msg">
            <p class="success"><?php echo $_SESSION["message"] ?></p>
          </div>
          <?php 
          
          unset($_SESSION["message"]);
          unset($_SESSION["type"]);
          ?>
<?php endif ; ?>

<style>
  .success{
    position: fixed;
    top: 10px;
    right: 50px;
    background: green;
    color: white;
    border: 1px solid green;
    border-radius: 5px;
    padding: 3px 15px;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   
   animation: shake 1000ms linear ;
  }
  @keyframes shake{
    0%{
      right: 30px;
    }
    40%{
      right: 100px;
      top: 100px;

    }
    70%{
      right: 150px;
      top: 100px;

    }
    100%{
      top: 10px;
      right: 50px;
    }
  }
</style>

<script>
let timeout;

function myFunction() {
  timeout = setTimeout(alertFunc, 4000);
}

function alertFunc() {
  let msg=document.querySelector(".msg");
  msg.style.display="none"
}

myFunction()
</script>