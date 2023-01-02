<!DOCTYPE html>
<html>
<head>
<title>View Lecturer</title>
</head>
<body>

@include("admin_dash")

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
@foreach ($lecturers as $lecturer)
<tr>
<td>{{ $lecturer->id }}</td>
<td>{{ $lecturer->fname }}</td>
<td>{{ $lecturer->lname }}</td>
<td>{{ $lecturer->DOB }}</td>
<td>{{ $lecturer->phone }}</td>
<td>{{ $lecturer->email }}</td>
<td>{{ $lecturer->units }}</td>
<td>{{ $lecturer->password }}</td>
</tr>
@endforeach
</table>
</body>
</html>