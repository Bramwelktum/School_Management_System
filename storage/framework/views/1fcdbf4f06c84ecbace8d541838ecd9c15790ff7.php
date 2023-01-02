<!DOCTYPE html>
<html>
<head>
<title>View Lecturer</title>
</head>
<body>

<?php echo $__env->make("admin_dash", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3> View Lecturer </h3>

<table border = "1" style="margin-left: 20%;">
<tr>
<td><b>ID<b></td>
<td><b>First Name<b></td>
<td><b>Last Name<b></td>
<td><b>Date of Birth<b></td>
<td><b>Phone Number<b></td>
<td><b>Email<b></td>
<td><b>Units<b></td>
<td><b>Password<b></td>
</tr>
<?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($lecturer->id); ?></td>
<td><?php echo e($lecturer->fname); ?></td>
<td><?php echo e($lecturer->lname); ?></td>
<td><?php echo e($lecturer->DOB); ?></td>
<td><?php echo e($lecturer->phone); ?></td>
<td><?php echo e($lecturer->email); ?></td>
<td><?php echo e($lecturer->units); ?></td>
<td><?php echo e($lecturer->password); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/viewLecturer.blade.php ENDPATH**/ ?>