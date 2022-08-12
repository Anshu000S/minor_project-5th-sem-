<?php
include "../../views/global/header.php";
?>


<div class="col my-4 d-flex justify-content-center ">
  <div class="col-sm-5 mx-2">
    <div class="card">
      <div class="card-body">
      <div class="container text-center my-4 ">
      <h2 id="signin-header">Mentor</h2>
    </div>
    <form action="/controller/login_test.php" method="post">
      <div class="my-1 mb-3 row">
        <div class="col-md-2">
          <i class="fa fa-id-badge  fa-2x icon"></i>
        </div>
        <div class="form-floating col-md-9" id=floatin-input>
          <input type="employee_ID" name ="employee_ID" class="form-control" id="floatingInput" placeholder="Employee ID">
          <label for="floatingInput">Employee ID</label>
        </div>
      </div>
      <div class="my-1 mb-3 row">
        <div class="col-md-2">
          <i class="fa fa-lock fa-2x icon"></i>
        </div>
        <div class="form-floating col-md-9" id=floatin-input>
          <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
          <label for="floatingInput">Password</label>
        </div>
      </div>

      <div class="mb-3 mx-1  row">
        <button type="submit" class="btn btn-primary waves-effect waves-light col-4 mx-auto">
        <input type="hidden" id=="Roll_no" name="Roll_no" value="">
          <i class="fa fa-sign-in fa-2x icon" id="submit-icon"></i>Login</button>
      </div>
    </form>
      </div>
    </div>
  </div>


  <div class="col-sm-5 mx-2">
    <div class="card">
      <div class="card-body">
      <div class="container text-center my-4 ">
      <h2 id="signin-header">Mentee</h2>
    </div>
    <form action="/controller/login_test.php" method="post">
      <div class="my-1 mb-3 row">
        <div class="col-md-2">
          <i class="fa fa-id-badge  fa-2x icon"></i>
        </div>
        <div class="form-floating col-md-9" id=floatin-input>
          <input type="Roll_no" name ="Roll_no" class="form-control" id="floatingInput" placeholder="Employee ID">
          <label for="floatingInput">Roll No</label>
        </div>
      </div>
      <div class="my-1 mb-3 row">
        <div class="col-md-2">
          <i class="fa fa-lock fa-2x icon"></i>
        </div>
        <div class="form-floating col-md-9" id=floatin-input>
          <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
          <label for="floatingInput">Password</label>
        </div>
      </div>

      <div class="mb-3 mx-1  row">
        <button type="submit" class="btn btn-primary waves-effect waves-light col-4 mx-auto">
          <input type="hidden" id=="employee_ID" name="employee_ID" value="">
          <i class="fa fa-sign-in fa-2x icon" id="submit-icon"></i>Login</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>