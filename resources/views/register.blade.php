@include("head")

<form method="POST" action="/register">
  @csrf
  <div class="form-group">
    <label for="">Email </label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Confirm password</label>
    <input type="password" name="confirmPassword" class="form-control">
  </div>

  <button type="submit" class="btn btn-success mt-2">Register</button>

</form>