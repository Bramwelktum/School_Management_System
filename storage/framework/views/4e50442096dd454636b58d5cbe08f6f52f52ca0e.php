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
  <li><a href="#">Elimu School Lecturer Dashboard</a></li>
  <li style="float:right"><a href="#">Logout</a></li>
</ul>

<!-- Side Bar -->
<div class="sidebar">

  <a class="active" href="#">Home</a>
  <a href="<?php echo e(route('addMarks.form')); ?>">Add Marks</a>
  <a href="#">View Units</a>
  <a href="<?php echo e(route('viewMarks.form')); ?>">view Marks</a>
  <a href="#">Add Units</a>
  <a href="#">Add Attendance</a>
  <a href="#">View Attendance</a>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/lecturer_dash.blade.php ENDPATH**/ ?>