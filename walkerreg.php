<?php
include('header.php');
?>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
<form>
  <fieldset>
    <legend>Waqq.ly Dog Walker Sign Up</legend>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div>
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
    </div>
    <div>
      <label for="inputName" class="form-label mt-4">Your name:</label>
      <input type="text" class="form-control" id="inputName" placeholder="Enter name">
    </div>
    <div>
      <label for="inputLocation" class="form-label mt-4">Your location:</label>
      <input type="text" class="form-control" id="inputLocation" placeholder="Enter location">
    </div>
    <div>
      <label for="inputExperience" class="form-label mt-4">How many years have you walked dogs?</label>
      <input type="text" class="form-control" id="inputExperience" placeholder="Enter years of experience">
    </div>
    <div>
      <label for="inputAvailability" class="form-label mt-4">Are you full time or part time?</label>
      <input type="text" class="form-control" id="inputAvailability" placeholder="Enter hours you work">
    </div>
    <fieldset>
    <legend class="mt-4">Are you insured?</legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="insuredRadios" id="insuredRadios1" value="option1" checked="">
        <label class="form-check-label" for="insuredRadios1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="insuredRadios" id="insuredRadios2" value="option2">
        <label class="form-check-label" for="insuredRadios2">
          No
        </label>
      </div>
        </label>
      </div>
    </fieldset>
<div class="container text-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <button type="submit" class="btn btn-primary w-100">Submit</button>
    </div>
    <div class="col text-right">
    <a href="index.php" class="btn btn-primary">Back to Home</a>
    </div>
  </div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
<?php
include('footer.php');
?>