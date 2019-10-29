<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration Form</title>

        <style type="text/css" rel="stylesheet">
            td.leftcol {
                width: 120px;
                text-align: right;
                font-weight: 600;
            }
        </style>
    </head>

    <body style="padding-left: 50px">
        <h2>User Registration Form</h2>
        <p>Please complete the following form.</p>
        <!-- the registration form starts here    -->
        <form name="reg" action="reg_confirm.php" method="post">

            <table width="550" border="2" cellspacing="0" cellpadding="5" rules="none" frame="box">
                <tr>
                    <td class="leftcol">Name:</td>
                    <td><input type="text" name="name" value="" required/>  </td>
                </tr>
                <tr>
                    <td class="leftcol">Zip code</td>
                    <td><input type="number" name="zipcode" value="" required/>  </td>
                </tr>
                <tr>
                    <td class="leftcol">Gender:</td>
                    <td><input type="radio" name="gender" id="male" value="Male" required/> Male
                        <input type="radio" name="gender" id="female" value="Female" required/> Female</td>
                </tr>
                <tr>
                    <td class="leftcol">Email:</td>
                    <td><input type="email" name="email" value="" required/> </td>
                </tr>
                <tr>
                    <td class="leftcol">Operating systems:</td>
                    <td><select name="os" size="3">
                            <option>WindowsXP</option>
                            <option>Windows 2000</option>
                            <option>Windows 2003</option>
                            <option selected="selected">Windows 7</option>
                            <option>Windows 8</option>
                            <option>Windows 10</option>
                            <option>Linux</option>
                            <option>Mac OS</option>
                            <option>Others</option>
                        </select>  </td>
                </tr>
                <tr>
                    <td class="leftcol"><input type="checkbox" name="newsletter" value="Yes" />  </td>
                    <td>Please send me newsletter.</td>
                </tr>
                <tr>
                    <td class="leftcol">Tell us about yourself:</td>
                    <td><textarea name="info" rows="5" cols="45">
                        </textarea>  </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Register Me" /> &nbsp;&nbsp;
                        <input type="reset" value="Clear Form" /></td>
                </tr>
            </table>
        </form>

        <!-- the registration form ends here  -->
    </body>
</html>
