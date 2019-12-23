<html>
<head>
    <style>
        ul
        {
            list-style-type:none;
        }
        li
        {
            float:left;
            padding:10px;
        }
    </style>
</head>
<body>
    
    <ul>
        <li><a href="register.php"> Register </a></li>
        <li><a href="update.php"> Update </a></li>
        <li><a href="delete.php"> Delete </a></li>
    </ul>
<br><br><br>
<center>
<form method ="post" action="checklogin.php">
    <table border="1">
        <tr>
            <td colspan="2"><h3>Login</h3></td>
        </tr>
        <tr>
            <td>username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>