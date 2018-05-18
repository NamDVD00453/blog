<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <title>Document</title>
</head>
<body>

<div class="card">
    <div class="card-block">
        {{--<h4 class="card-title">Basic Table</h4>--}}
        {{--<h6 class="card-subtitle">Add class <code>.table</code></h6>--}}

        <div>
            <p></p>
        </div>

        <label class="col-md-12">List all students</label>

        <div>
            <p></p>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Roll Number</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listStudent as $key =>$student)
                    <tr>
                        <td>{{$student -> id}}</td>
                        <td>{{$student -> fullname}}</td>
                        <td>{{$student -> rollnumber}}</td>
                        <td>{{$student -> email}}</td>
                        <td>{{$student -> phone}}</td>
                        <td><a href="update/{{$student->id}}">edit</a></td>
                        <td><a href="student/delete/{{$student->id}}">delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>




    </div>
</div>

</body>
</html>