<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <table border="3">
            <tr>
                <td>name</td>
                <td>last name</td>
                <td>age</td>
                <td>years experience</td>
                <td>profession</td>
                <td>caliication</td>
                <td>description</td>
            </tr>
            @foreach($professional as $profe)
            <tr>
                <th>{{$profe->people->name}}</th>
                <th>{{$profe->people->last_name}}</th>
                <th>{{$profe->people->age}}</th>
                <th>{{$profe->years_experience}}</th>
                <th>{{$profe->profession}}</th>
                <th>{{$profe->calification}}</th>
                <th>{{$profe->description}}</th>
                
            </tr>
            @endforeach
        </table>
    </section>
</body>
</html>