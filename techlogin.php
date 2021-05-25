<?php
include_once'techloginprocess.php';
?>
<style>
  .submitbtn {
    width: auto;
    margin-top: 20px;
    text-transform: uppercase;
    background-color: #011627;
    color: white;
    border-radius: 20px;
   
    border-style: solid;
    font-weight: bold;
    border-color: #011627;
    font-size: 12px;
    padding: 10px 30px 10px 30px;

  }

  .submitbtn:hover {
    background-color: white;
    color: #011627;
    border-color: #011627;
    cursor: pointer;
    font-weight: bold;
  }

  @media screen and (max-width: 992px) {
    .submitbtn {
      margin: auto;
    }
  }
</style>
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"
      style="background-color:white;box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); border-radius:30px;border-style: outset;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">WELCOME,PLEASE LOGIN!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><i class="far fa-envelope"></i> Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
              style="text-decoration: solid;
  border-style: outset;border-style: none none solid none;border-color: #011627;width: 90%;">
            <span class="badge rounded-pill bg-danger"><?php echo $emailErr;?></span>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><i class="fas fa-key"></i> Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" style="text-decoration: solid;
  border-style: outset;border-style: none none solid none;border-color: #011627;width: 90%;">
            <span class="badge rounded-pill bg-danger"><?php echo $passworderr;?></span>
            <div id="passwordHelpBlock" class="form-text">
              Your password must be 6-15 characters long, contain letters and numbers , special characters, and must not
              contain spaces or emoji.
            </div>
          </div>
        
          <span class="badge rounded-pill bg-danger"><?php echo $oneerror;?></span>
          <input type="submit" name="login" value="Login" class="submitbtn">
          
        </form>
      </div>
      <div class="modal-footer">
        <p class="signup">NEW? <a href="techregister.php" target="_blank">Register Now!</a></p>
        <br>
       
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>