<!DOCTYPE html>
<html>
<head>
<title>View Course</title>
</head>
<body>

@include("admin_dash")

<table border = "1" style="margin-left: 20%;">
<tr>
<td><b>ID<b></td>
<td><b>Course Name<b></td>
<td><b>Course Type<b></td>
<td><b>Course Duration<b></td>
<td><b>Faculty<b></td>
</tr>
@foreach ($courses as $course)
<tr>
<td>{{ $course->id }}</td>
<td>{{ $course->courseName }}</td>
<td>{{ $course->type }}</td>
<td>{{ $course->duration}}</td>
<td>{{ $course->faculty }}</td>
</tr>
@endforeach
</table>
</body>
</html>