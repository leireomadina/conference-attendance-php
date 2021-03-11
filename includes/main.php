<main>
  <form>
    <div class="mb-3">
      <label for="firstName" class="form-label">Name</label>
      <input type="text" class="form-control" id="firstName" aria-describedby="firstName">
    </div>
    <div class="mb-3">
      <label for="lastName" class="form-label">Last name</label>
      <input type="text" class="form-control" id="lastName" aria-describedby="lastName">
    </div>
    <div class="mb-3">
      <label for="dateOfBirth" class="form-label">Date of birth</label>
      <input type="date" class="form-control" id="dateOfBirth" aria-describedby="dateOfBirth">
    </div>
    <div class="mb-3">
      <label for="specialty" class="form-label">Area of expertise</label>
      <select class="form-select" aria-label="Default select example" id="specialty">
        <option selected>Open this select menu</option>
        <option value="1">Software Developer</option>
        <option value="2">Frontend Developer</option>
        <option value="3">Backend Developer</option>
        <option value="4">Full stack Developer</option>
        <option value="5">Web designer</option>
        <option value="6">Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Contact number</label>
      <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
      <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="formCheck">
      <label class="form-check-label" for="formCheck">Check me out</label>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
  </form>
</main>