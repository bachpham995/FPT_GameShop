<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail User</h1>
    <table width='25%'>
        <tr>
            <td>Account ID:</td><td>{{$user->accountid}}</td>
        </tr>
        <tr>
            <td>Email:</td><td>{{$user->email}}</td>
        </tr>
        <tr>
            <td>Full name:</td><td>{{$user->fullname}}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>
                <select name="slRole">
                    <option value="0">Choose opton</option>
                    <option value="1" @if($user->role==1) selected @endif> Admin</option>
                    <option value="2" @if($user->role==0) selected @endif> User</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Active</td>
            <td>
                <select name="slActive">
                    <option value="0">Choose opton</option>
                    <option value="1" @if($user->active==1) selected @endif> Active</option>
                    <option value="2" @if($user->active==0) selected @endif> Disable</option>
                </select>
            </td>
        </tr>
    </table>
    <h3><a href="{{url("index")}}">Back to index</a></h3>
</body>
</html>
