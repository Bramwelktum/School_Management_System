<!DOCTYPE html>
<html>
<head>
<title>View Course</title>
</head>
<body>

@include("lecturer_dash")

<table border = "1" style="margin-left: 20%;">
<tr>
<td><b>ID<b></td>
<td><b>Student Name<b></td>
<td><b>Course Work<b></td>
<td><b>Exam<b></td>
<td><b>Total<b></td>
</tr>
@foreach ($marks as $mark)
<tr>
<td>{{ $mark->id }}</td>
<td>{{ $mark->studentName }}</td>
<td>{{ $mark->courseWork }}</td>
<td>{{ $mark->exam}}</td>
<td>{{ $mark->total }}</td>
</tr>
@endforeach
</table>
</body>
</html>