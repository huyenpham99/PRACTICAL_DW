<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRACTICAL DW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
</head>

<body>
<form role="form" method="post" enctype="multipart/form-data" id=form-new">
    @method("POST")
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="name" class="form-control @error("name")  is-invalid @enderror" placeholder="Student Name">
            @error("name")
            <span class="error invalid-feedback">  {{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Student Email</label>
            <input type="email" name="email" class="form-control @error("email")  is-invalid @enderror" placeholder="Student Email">
            @error("email")
            <span class="error invalid-feedback">  {{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Student Email</label>
            <input type="text" name="telephone" class="form-control @error("telephone")  is-invalid @enderror" placeholder="Student Telephone">
            @error("telephone")
            <span class="error invalid-feedback">  {{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Feedback</label>
            <textarea name="feedback" class="form-control @error("feedback") is-invalid @enderror" placeholder="Feedback"></textarea>
            @error("feedback")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
<script type="text/javascript">
    $('#contactForm').on('submit',function(event){
        event.preventDefault();
        student_name = $('#student_name').val();
        email = $('#email').val();
        telephone = $('#telephone').val();
        feedback = $('#feedback').val();
        $.ajax({
            url: "/survey",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                student_name:student_name,
                email:email,
                telephone:telephone,
                feedback:feedback,
            },
            success:function(response){
                alertify.success('Successfully!!!');
                $("#contactForm")[0].reset();
            },
        });
    });
</script>
</html>
