<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add Student</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include("admin_dash")

    <div class="container mt-5" style="margin-left: 20%; width: 70%; height: 70%;">

    <h3> Add Student </h3>
    
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('studentRoute.form') }}" novalidate>

            @csrf

            <!--First Name-->
            <div class="form-group mb-2">
                <label>First Name</label>
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" id="firstName">

                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Last Name-->
            <div class="form-group mb-2">
                <label>Last Name</label>
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" id="lastName">

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--DOB-->
            <div class="form-group mb-2">
                <label>Date of Birth</label>
                <input type="datetime-local" class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob">

                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <!--Course-->
            <div class="form-group mb-2">
                <label>Course</label>
                <input type="text" class="form-control @error('course') is-invalid @enderror" name="course" id="course">
                @error('course')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                     
            </div>

            <!--PHONE NUMBER-->
            <div class="form-group mb-2">
                <label>Phone Number</label>
                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" id="phoneNumber">

                @error('phoneNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Email-->
            <div class="form-group mb-2">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--password-->
            <div class="form-group mb-2">
                <label>Password</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="password" id="password">

                @error('password')
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