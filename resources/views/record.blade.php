<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>pagination-functionality</title>
</head>
<body>
    <center>
        <br>
        <h1>Pagination Functionality In Laravel 10</h1>
        <br>
    </center>
    <div class="container">
        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($record as $records )
                    <tr>
                        {{-- <td>{{ $loop->index+1 }}</td> --}}
                        <td>{{ $records->id }}</td>
                        <td>{{ $records->name }}</td>
                        <td>{{ $records->author }}</td>
                        <td>{{ $records->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$record->links('pagination::bootstrap-5')}}
    </div>
    
</body>
</html>