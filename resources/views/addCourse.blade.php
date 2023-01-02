<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add Course</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include("admin_dash")

    <div class="container mt-5" style="margin-left: 20%; width: 70%; height: 70%;">

    <h3> Add Course </h3>
    
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('CourseRoute.form') }}" novalidate>

            @csrf

            <!--Course Name-->
            <div class="form-group mb-2">
                <label>Course Name</label>
                <input type="text" class="form-control @error('courseName') is-invalid @enderror" name="courseName" id="courseName">

                @error('courseName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Course Type-->
            <div class="form-group mb-2">
                <label>Course Type: Degree/Diploma/Certificate</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type">

                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <!--Duration-->
            <div class="form-group mb-2">
                <label>Duration: Years</label>
                <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration">

                @error('duration')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Faculty-->
            <div class="form-group mb-2">
                <label>Faculty</label>
                <input type="text" class="form-control @error('faculty') is-invalid @enderror" name="faculty" id="faculty">

                @error('faculty')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
</body>

</html>