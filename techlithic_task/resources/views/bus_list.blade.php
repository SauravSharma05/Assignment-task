<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUISNESS list page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Website</th>
        <th scope="col">Email</th>
        <th scope="col">Contact person</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($buisness as $item)

      <tr>
        <th scope="row">{{ $item->name }}</th>
        <td>{{ $item->address }}</td>
        <td>{{ $item->website }}</td>
        <td>{{ $item->cperson }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->email }}</td>

      </tr>
      @endforeach

    </tbody>
  </table>
