<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{url("checkLog")}}">
    @csrf
        <table>
            <tr>
                <td>Email</td>
                <td><input type="text" name="emailLogin"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwordLogin"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value='Login'></td>
            </tr>
        </table>
    </form>
</body>
</html>
