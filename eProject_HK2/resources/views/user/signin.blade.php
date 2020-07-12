<!-- Date : July 11 2020
    Author : Do Thinh
    Note: -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign in</title>
    </head>
    <body>
        <h1>Sign in</h1>
        <form action="{{ url('user/checkSignin') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table>
                <tbody>  
                    <tr>
                        <td>
                            <div style="text-align: right">Email: </div>
                        </td>
                        <td>
                            <input type="text" id="id_email" name="txtEmail" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: right">Password: </div>
                        </td>
                        <td>
                            <input type="password" id="id_account_pass" name="txtAccountPass" required>
                        </td>
                    </tr>
                    <tr align="right">
                        <td colspan="2">
                            <div>
                                 <input type="submit" name="btnAdd" value="Sign in" />
                            </div>                                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
