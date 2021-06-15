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
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <h1><u>Post Table</u></h1>
        <a href="{{ route('addPost') }}" class="btn btn-primary btn-warning btn-lg">Add Post</a>
        <table class="table table-dark table-hover">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>

            @foreach ($posts as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->body }}</td>
                <td>
                    <form action="{{ route('addComment') }}" method="post">
                      @csrf
                        <input type="hidden" name='id' value="{{ $item->id }}">
                        <input type="text" name="comment" placeholder="Enter Comment">
                        <input type="submit" name="submit" value="Add Comment">
                    </form>
                    @foreach ($item->comments as $a)
                    <br>
                    <ul>
                        <li>
                            {{ $a->comments }}
                            <a href="deleteComment/{{ $a->id }}" class="btn btn-sm btn-danger">Delete Comment</a>
                        </li>
                    </ul>

                    @endforeach
                </td>
                <td>
                    <a href="show/post/{{ $item->id }}" class='btn btn-primary'>Show</a>
                    <a href="edit/post/{{ $item->id }}" class="btn btn-warning">Edit</a>
                    <a href="delete/post/{{ $item->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>

</body>

</html>