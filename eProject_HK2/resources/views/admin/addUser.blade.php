<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <h1>Add user</h1>
    <form method="POST" action="{{url("admin/addUser")}}">
    @csrf
        <table widht="25%" border="1"> 
            <tr>
                <td>Account Id:</td>
                <td><input type="text" name="txtId"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="txtEmail"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="txtPass"></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="txtFullname"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="slRole">
                        <option value="0">Choose option</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Active</td>
                <td>
                    <select name="slActive">
                        <option value="0">Choose option</option>
                        <option value="1">Active</option>
                        <option value="2">Disable</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Create"></td>
            </tr>
        </table>
    </form>
</body>
</html>