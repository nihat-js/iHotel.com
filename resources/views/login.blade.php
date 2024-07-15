@include("head.php")


<form method="post" action="/login">

  <div class="form-group">
    <label for=""> Email </label>
    <input class="form-control" type="email" name="email" />
  </div>
  <div class="form-group">
    <label for="">Password </label>
    <input type="password" name="password" class="form-control" />
  </div>
  <p> I need an <a href="/register"> account </a> </p>

</form>