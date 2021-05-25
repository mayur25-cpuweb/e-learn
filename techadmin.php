<?php
//include_once'techloginprocess.php';
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="login" value="Login" class="submitbtn">
      </div>
    </div>
  </div>
</div>