<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practical Dw</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
</head>
<body>
    <div class="card-header">
        <a href="{{url("new")}}" class="float-lg-right btn btn-danger">+</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Feedback</th>
            </tr>
            </thead>
            <tbody>
            @foreach($survey as $s)
                <tr>
                    <td>{{$s->__get("name")}}</td>
                    <td>{{$s->__get("email")}}</td>
                    <td>{{$s->__get("telephone")}}</td>
                    <td>{{$s->__get("feedback")}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
</body>
</html>
