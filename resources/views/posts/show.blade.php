<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-danger">

    <div class="container mt-5">
        <div class="col-lg-4 offset-3">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('home') }}" class="btn btn-success">Home</a>

                </div>
                <div class="card-body bg-warning">
                    <form>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $data->title }}" disabled>
                        </div>
        
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" class="form-control" disabled>{{ $data->body }}</textarea>
                        </div>
        
                    </form>

                    <h2>Comments</h2>
                    <ul>
                        @foreach ($data->comments as $a)
                            <li>{{ $a->comments }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>