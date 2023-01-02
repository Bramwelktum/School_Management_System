<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add Marks</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include("lecturer_dash")

    <div class="container mt-5" style="margin-left: 20%; width: 70%; height: 70%;">

    <h3> Add Marks </h3>
    
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('MarksRoute.form') }}" novalidate>

            @csrf

            <!--Student Name-->
            <div class="form-group mb-2">
                <label>Student Name</label>
                <input type="text" class="form-control @error('studentName') is-invalid @enderror" name="studentName" id="studentName">

                @error('studentName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Coursework-->
            <div class="form-group mb-2">
                <label>Course Work</label>
                <input type="text" class="form-control @error('courseWork') is-invalid @enderror" name="courseWork" id="courseWork">

                @error('courseWork')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <!--exam-->
            <div class="form-group mb-2">
                <label>Exam</label>
                <input type="text" class="form-control @error('exam') is-invalid @enderror" name="exam" id="exam">

                @error('exam')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--total-->
            <div class="form-group mb-2">
                <label>Total</label>
                <input type="text" class="form-control @error('total') is-invalid @enderror" name="total" id="total">

                @error('total')
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