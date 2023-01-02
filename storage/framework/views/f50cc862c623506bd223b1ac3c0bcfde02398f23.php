<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 25%;
  margin-right: 25%;
}
h3{
    text-align: center;
}
</style>
<body>

<h3>Welcome to Elimu School Login Page</h3>

<div>
    <form action="login" method = "POST">
       <?php if(Session::has('success')): ?>
      <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
       <?php endif; ?>
       <?php if(Session::has('fail')): ?>
       <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
        <?php endif; ?>   
        <?php echo csrf_field(); ?>
       <div class="row">
       <div class="col-md-12 form-group">
        <!--Student Name-->
       <label for="username">Student Name</label>
       <input type="text" name ="firstName" class="form-control form-control-lg">
       </div>
       <div class="col-md-12 form-group">
        <!--password-->
       <label for="pword">Password</label>
       <input type="password" name ="password" class="form-control form-control-lg">
       </div>
       </div>
       <div class="row">
       <div class="col-12">
       <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
       </div>
       </div>
       </div>
       </form>

  </form>
</div>

</body>
</html>



<?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/login.blade.php ENDPATH**/ ?>