@include("head")


<form method="post" action="/system/login">
  @csrf
  <div class="form-group">
    <label for=""> Email </label>
    <input class="form-control" type="email" name="email" />
  </div>
  <div class="form-group">
    <label for="">Password </label>
    <input type="password" name="password" class="form-control" />
  </div>
  <button>Submit</button>
  <p> I need an <a href="/register"> account </a> </p>

</form>