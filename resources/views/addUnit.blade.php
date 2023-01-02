<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add Unit</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include("admin_dash")

    <div class="container mt-5" style="margin-left: 20%; width: 70%; height: 70%;">

    <h3> Add Unit </h3>
    
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('unit.form') }}" novalidate>

            @csrf

            <!--Unit Code-->
            <div class="form-group mb-2">
                <label>Unit Code</label>
                <input type="text" class="form-control @error('unitCode') is-invalid @enderror" name="unitCode" id="unitCode">

                @error('unitCode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Unit Name-->
            <div class="form-group mb-2">
                <label>Unit Name</label>
                <input type="text" class="form-control @error('unitName') is-invalid @enderror" name="unitName" id="unitName">

                @error('unitName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <!--year-->
            <div class="form-group mb-2">
                <label>Year</label>
                <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year">

                @error('year')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--Lecturer Name-->
            <div class="form-group mb-2">
                <label>Lecturer Name</label>
                <input type="text" class="form-control @error('lecturerName') is-invalid @enderror" name="lecturerName" id="lecturerName">

                @error('lecturerName')
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