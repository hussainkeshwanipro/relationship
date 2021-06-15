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
                    Update Post Form
                </div>
                <div class="card-body bg-warning">
                    <form action="{{ route('updatePost') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                        </div>
        
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" class="form-control">{{ $data->body }}</textarea>
                        </div>
        
                        <button type="submit" class="btn btn-success">Update Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>