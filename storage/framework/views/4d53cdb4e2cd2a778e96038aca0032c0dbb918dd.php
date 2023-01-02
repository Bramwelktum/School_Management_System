<!DOCTYPE html>
<html>
<head>
<title>View Course</title>
</head>
<body>

<?php echo $__env->make("admin_dash", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<table border = "1" style="margin-left: 20%;">
<tr>
<td><b>ID<b></td>
<td><b>Course Name<b></td>
<td><b>Course Type<b></td>
<td><b>Course Duration<b></td>
<td><b>Faculty<b></td>
</tr>
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($course->id); ?></td>
<td><?php echo e($course->courseName); ?></td>
<td><?php echo e($course->type); ?></td>
<td><?php echo e($course->duration); ?></td>
<td><?php echo e($course->faculty); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/viewCourse.blade.php ENDPATH**/ ?>