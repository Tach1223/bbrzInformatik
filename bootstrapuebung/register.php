<?php
include 'header.php';
?>

<h1>Register</h1>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="name" class="form-control" id="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="name" class="form-control" id="lastname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php
include 'footer.php';
?>