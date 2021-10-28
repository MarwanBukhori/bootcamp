<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pengguna</title>
    <style>

    table{
        border-collapse: collapse;
        border: 1px solid #ccc;
        width:100%;
    }
    td{
        border: 1px solid #ccc;
    }

    </style>
</head>
<body>
    <div id="main">
        <h2>Senarai Pengguna</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>