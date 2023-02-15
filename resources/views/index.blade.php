<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="mt-5">
    <button type="button" class="btn btn-success">Create Post</button>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Crated At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            {{-- <td>{{$post['title']}}</td> --}}
            <td>{{$post->title}}</td>
            <td>{{$post->posted_by}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a class="btn btn-info">View</a>
                <a class="btn btn-primary">Edit</a>
                <a class="btn btn-danger">Delete</a>
            </td>
            @endforeach 
        </tbody>
      </table>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>