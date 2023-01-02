<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
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
  margin-left: 20%
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<?php echo $__env->make("admin_dash", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Admission Form:</h3>

<div>
  <form method="post" action="<?php echo e(route(add_students_form)); ?>">
    <?php echo e(csrf_field()); ?>


    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstName"><br><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastName"> <br><br>

    <label for="dob">Date of Birth</label>
    <input type="datetime-local" placeholder="Date of Birth" required name="date" value="2022-12-16 T20:00"> <br><br>

    <label for="course">Select Course</label>
    <select id="course" name="course">
      <option value="comp_sci">Bsc Computer Science</option>
      <option value="hr">Bsc Human Resurce</option>
      <option value="bcom">Bsc Commerce</option>
      <option value="it">Bsc Information Technology</option>
    </select> <br><br>

    <label for="pnumber">Phone Number</label>
    <input type="number" id="pnumber" name="phoneNumber"> <br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email"> <br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password"> <br><br>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


<?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/add_students_form.blade.php ENDPATH**/ ?>