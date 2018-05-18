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

    <title>Add new Student</title>
</head>
<body>

<div>
    <p></p>
</div>

<label class="col-md-12">Add new student</label>

<div>
    <p></p>
</div>

<div class="col-lg-8 col-xlg-9 col-md-7">
    <div class="card">
        <div class="card-block">
            <form class="form-horizontal form-material" method="post" action="/student/insert">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Dinh Van Nam" class="form-control form-control-line" name="fullname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Roll Number</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="D00123" class="form-control form-control-line" name="rollnumber">
                    </div>
                </div>

                <div class="form-group">
                    <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="namdv@gmail.com" class="form-control form-control-line" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line" name="phone">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success" type="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>