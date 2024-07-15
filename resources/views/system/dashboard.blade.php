@include("head")


<div class="alert alert-success">
  <?= Auth::guard("system_users")->user()->email ?>
</div>