<!DOCTYPE html>
<html>
<head>
<title>View Course</title>
</head>
<body>

<?php echo $__env->make("lecturer_dash", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<table border = "1" style="margin-left: 20%;">
<tr>
<td><b>ID<b></td>
<td><b>Student Name<b></td>
<td><b>Course Work<b></td>
<td><b>Exam<b></td>
<td><b>Total<b></td>
</tr>
<?php $__currentLoopData = $marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($mark->id); ?></td>
<td><?php echo e($mark->studentName); ?></td>
<td><?php echo e($mark->courseWork); ?></td>
<td><?php echo e($mark->exam); ?></td>
<td><?php echo e($mark->total); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/viewMarks.blade.php ENDPATH**/ ?>