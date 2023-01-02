<!DOCTYPE html>
<html>
<head>
<title>View Student</title>
</head>
<body>

@include("admin_dash")

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
@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->firstName }}</td>
<td>{{ $student->lastName }}</td>
<td>{{ $student->dob }}</td>
<td>{{ $student->course }}</td>
<td>{{ $student->phoneNumber }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->password }}</td>
<td><a href = 'edit/{{ $student->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html>