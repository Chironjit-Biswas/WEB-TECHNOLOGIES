<!DOCTYPE html>
<html>
<head>
    
    <title>This is Registration Page</title>
</head>
<body>
    <h1>REGISTRATION</h1>

    <form>
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>User Name:</td>
            <td><input type="text" name="uname" id="Uname"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pass" id="pass"></td>
        </tr>
        <tr>
            <td>Comfirm Password:</td>
            <td><input type="password" name="cpass" id="cpass"></td>
        </tr>
    </table>


    <h2>Gender</h2>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>


    <h2>Date of Birth</h2>
    <label for="day"></label>
    <input type="day" id="day" >
    <label for="month"></label>
    <input type="month" id="month" >
    <label for="year"></label>
    <input type="year" id="year" >(dd/MM/YYYY) <br><br>



    <input type="submit" value="Submit">
    <input type="reset" value="Reset">



    </form>
    
</body>
</html>