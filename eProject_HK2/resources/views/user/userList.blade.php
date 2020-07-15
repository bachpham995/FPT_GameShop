<!-- Date: July 11 2020
    Author : Do Thinh
    Note: 
     -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User List</title>
    </head>
    <body>
        <h1>User List</h1>
        <table>
            <tr class="grid-container">
                <th width="100px">Email</th>
                <th width="100px">Last Name</th>
                <th width="100px">First Name</th>
                <th width="100px">Phone</th>
                <th width="100px">Address</th>
                <th width="100px">Role</th>
                {{-- <th width="100px">Status</th> --}}
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->EMAIL }}</td>
                    <td>{{ $user->LNAME }}</td>
                    <td>{{ $user->FNAME }}</td>
                    <td>{{ $user->PHONE }}</td>
                    <td>{{ $user->ADDRESS }}</td>
                    <td>{{ $user->TYPE }}</td>
                    {{-- <td>{{ $user->STATUS }}</td> --}}
                </tr>
            @endforeach
        <table>
    </body>
</html>
