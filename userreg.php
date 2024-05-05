<?php
include('header.php');
?>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
<form>
  <fieldset>
    <legend>Waqq.ly Dog Owner Sign Up</legend>
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
    <div class="container text-center">
        <div id="dogForm">
            <div class="row">
                <div class="col">
                    <label for="inputDogName" class="form-label mt-4">Dog name:</label>
                    <input type="text" class="form-control" name="dogName[]" placeholder="Enter dog name">
                </div>
                <div class="col">
                    <label for="inputDogAge" class="form-label mt-4">Dog age:</label>
                    <input type="text" class="form-control" name="dogAge[]" placeholder="Enter dog age">
                </div>
                <div class="col">
                    <label for="inputDogBreed" class="form-label mt-4">Dog breed:</label>
                    <input type="text" class="form-control" name="dogBreed[]" placeholder="Enter dog breed">
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-4" onclick="duplicateDog(event)">Add Another Dog</button>
        <button class="btn btn-danger mt-4" onclick="removeLastDog(event)">Remove Last Dog</button>
        <br />
        <br />
    </div>
</div>
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


<script>
    function duplicateDog(event) {
      event.preventDefault();

      // Get the dog form element
      var dogForm = document.getElementById('dogForm');
      
      // Clone the first row of dog information
      var clonedRow = dogForm.firstElementChild.cloneNode(true);
      
      // Clear input values in the cloned row
      var inputs = clonedRow.querySelectorAll('input[type="text"]');
      inputs.forEach(function(input) {
        input.value = '';
      });
      
      // Append the cloned row to the dog form
      dogForm.appendChild(clonedRow);
    }

    function removeLastDog(event) {
        event.preventDefault();
      // Get the dog form element
      var dogForm = document.getElementById('dogForm');

      // Get all the rows of dog information
      var rows = dogForm.querySelectorAll('.row');

      // If there's only one row (the original row), do nothing
      if (rows.length <= 1) return;

      // Remove the last row of dog information
      dogForm.removeChild(rows[rows.length - 1]);
    }
  </script>
<?php
include('footer.php');
?>