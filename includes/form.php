<main>
  <form method="post" action="success.php">
    <div class="mb-3">
      <label for="firstname" class="form-label">Name</label>
      <input type="text" class="form-control" id="firstname" aria-describedby="firstName" name="firstname">
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Last name</label>
      <input type="text" class="form-control" id="lastname" aria-describedby="lastName" name="lastname">
    </div>
    <div class="mb-3">
      <label for="dateofbirth" class="form-label">Date of birth</label>
      <input type="date" class="form-control" id="dateofbirth" aria-describedby="dateOfBirth" name="dateofbirth">
    </div>
    <div class="mb-3">
      <label for="specialty" class="form-label">Area of expertise</label>
      <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
        <option value="1">Software Developer</option>
        <option>Frontend Developer</option>
        <option>Backend Developer</option>
        <option>Full stack Developer</option>
        <option>UX/UI designer</option>
        <option>Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Contact number</label>
      <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone" >
      <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="formcheck" name="formcheck">
      <label class="form-check-label" for="formcheck" >Check me out</label>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
    </div>
  </form>
</main>