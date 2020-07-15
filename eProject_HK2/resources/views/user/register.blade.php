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
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <h4><a href="{{url('/')}}">Back to Index</a></h4>
        <form action="{{ url('user/postRegister') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table class="add-customer-table">
                <tbody>  
                    <tr>
                        <td style="width: 40%">
                            <div style="text-align: right">First Name: </div>
                        </td>
                        <td>
                            <input type="text" id="id_first_name" name="txtFirstName" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: right">Last Name: </div>
                        </td>
                        <td>
                            <input type="text" id="id_last_name" name="txtLastName" required>
                        </td>
                    </tr>
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
                            <div style="text-align: right">Phone: </div>
                        </td>
                        <td>
                            <input type="text" id="id_phone" name="txtPhone" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: right">Address: </div>
                        </td>
                        <td>
                            <input type="text" id="id_address" name="txtAdress" required>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <div style="text-align: right">User Name: </div>
                        </td>
                        <td>
                            <input type="text" id="id_account_name" name="txtAccountName" required>
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            <div style="text-align: right">Password: </div>
                        </td>
                        <td>
                            <input type="password" id="id_account_pass" name="txtAccountPass" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: right">Confirm Password: </div>
                        </td>
                        <td>
                            <input type="password" id="id_account_pass" name="txtAccountPass" required>
                        </td>
                    </tr>
                    <tr align="right">
                        <td colspan="2">
                            <div>
                                 <input type="submit" name="btnAdd" value="Add New" />
                            </div>                                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
