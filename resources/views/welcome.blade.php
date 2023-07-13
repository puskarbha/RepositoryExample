<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Document</title>

    <style>
        table {
            margin-left: auto;
            margin-right: auto;
        }
        table,td,th{
            border: 2px solid black;
            border-collapse: collapse;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 align="center">Employee Details</h1>

<table >
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{$employee->name}}</td>
        <td>{{$employee->address}}</td>
        <td>{{$employee->contact}}</td>
        <td><button class="btn btn-primary">Update</button></td>
        <td><button class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
</table>
</body>
</html>
