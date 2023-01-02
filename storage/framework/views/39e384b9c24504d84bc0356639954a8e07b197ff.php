<!DOCTYPE html>
<html>
<head>
<title>View Student</title>
</head>
<body>

<?php echo $__env->make("admin_dash", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3> View Student </h3>

<table border = "1" style="margin-left: 20%;">
<tr>
<td><b>ID<b></td>
<td><b>First Name<b></td>
<td><b>Last Name<b></td>
<td><b>Date of Birth<b></td>
<td><b>Course<b></td>
<td><b>Phone Number<b></td>
<td><b>Email<b></td>
<td><b>Password<b></td>
<td><b>Edit<b></td>
</tr>
<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($student->id); ?></td>
<td><?php echo e($student->firstName); ?></td>
<td><?php echo e($student->lastName); ?></td>
<td><?php echo e($student->dob); ?></td>
<td><?php echo e($student->course); ?></td>
<td><?php echo e($student->phoneNumber); ?></td>
<td><?php echo e($student->email); ?></td>
<td><?php echo e($student->password); ?></td>
<td><a href = 'edit/<?php echo e($student->id); ?>'>Edit</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/viewStudent.blade.php ENDPATH**/ ?>