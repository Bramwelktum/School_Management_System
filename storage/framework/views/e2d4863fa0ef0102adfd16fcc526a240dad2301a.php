<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/*Nar bar styling */

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

/*Side bar style*/

body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<!--Nav Bar-->

<ul>
  <li><a href="#">Elimu School Admin Dashboard</a></li>
  <li style="float:right"><a href="route<?php echo e(route('home.form')); ?>">Logout</a></li>
</ul>

<!-- Side Bar -->

<div class="sidebar">

  <a class="active" href="'<?php echo e(route('adminDash.form')); ?>'">Home</a>
  <a href="<?php echo e(route('viewStudent.form')); ?>">View Students</a>
  <a href="<?php echo e(route('addStudent.form')); ?>">Add Students</a>
  <a href="<?php echo e(route('addLecturer.form')); ?>">Add Lecturer</a>
  <a href="<?php echo e(route('viewLecturer.form')); ?>">View Lecturers</a>
  <a href="<?php echo e(route('addCourse.form')); ?>">Add Course</a>
  <a href="<?php echo e(route('viewCourse.form')); ?>">View Courses</a>
  <a href="<?php echo e(route('addUnit.form')); ?>">Add Unit</a>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/admin_dash.blade.php ENDPATH**/ ?>