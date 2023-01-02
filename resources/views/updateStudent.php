<!DOCTYPE html>
<html>
<head>
<title>Student Update</title>
</head>
<body>
<form action = "/edit/<?php echo $students[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
    <!--First Name-->
<tr>
<td>First Name</td>
<td>
<input type = 'text' name = 'firstName'
value = '<?php echo$students[0]->firstName; ?>'/> </td>
</tr>
    <!--Last Name-->
<tr>
<td>Last Name</td>
<td>
<input type = 'text' name = 'lastName'
value = '<?php echo$students[0]->lastName; ?>'/>
</td>
</tr>
    <!--Date of Birth-->
<tr>
<td>Date of Birth</td>
<td>
<input type = 'datetime-local' name = 'dob'
value = '<?php echo$students[0]->dob; ?>'/>
</td>
</tr>
    <!--course-->
<tr>
<td>Course</td>
<td>
<input type = 'text' name = 'course'
value = '<?php echo$students[0]->course; ?>'/>
</td>
</tr>
    <!--Phone Number-->
<tr>
<td>Phone Number</td>
<td>
<input type = 'number' name = 'phoneNumber'
value = '<?php echo$students[0]->phoneNumber; ?>'/>
</td>
</tr>
    <!--Email-->
<tr>
<td>Email</td>
<td>
<input type = 'email' name = 'email'
value = '<?php echo$students[0]->email; ?>'/>
</td>
</tr>
    <!--Password-->
<tr>
<td>Password</td>
<td>
<input type = 'password' name = 'password'
value = '<?php echo$students[0]->password; ?>'/>
</td>
</tr>
    <!--Submit-->
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update student" />
</td>
</tr>
</table>
</form>
</body>
</html>