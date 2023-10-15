<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Students</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-success">Student List</h2>
                    <a href="{{ route('student_create') }}" class="btn btn-outline-success">Add Student</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi delectus, maxime molestiae quis vitae?</p>

                <!-- Student List -->
                <div class="list-group">
                    @foreach($students as $key => $student)
                        <a class="list-group-item" href="{{ route('student_show', ['id' => $student['id']]) }}">{{ $student['first_name'] }} {{ $student['last_name'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
