<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<body style="font-family:Verdana;color:#aaaaaa;">

    <div style="background-color:#e5e5e5;padding:15px;text-align:center;">
        <h1>DARASYA WEDDING PLANNER</h1>
    </div>

    <div style="overflow:auto">
        <div class="menu">
            <a href="#home">HOME</a>
            <a href="#service">SERVICE</a>
            <a href="#aboutus">ABOUT US</a>
            <a href="#contactus">CONTACT US</a>
        </div>

        <div class="main">
            <h2>DARASYA WEDDING PLANNER</h2>
        </div>

        <div class="right">
            <h2>About</h2>
        </div>
    </div>
<center>
    <form method="post" action="function.php">
        <div class="container">

            Name :
            <input type="text" name="name" placeholder="Name" size="100" /><br><br>



            Email :
            <input type="text" placeholder="Enter Email" name="email" size="50">
            <br><br>


            <br><br>

            Phone No :
            <input type="text" placeholder="phoneNo" name="phoneNo" />
            <br>
            <br>
           

            <br><br>

            Service Provided <br><br>

            <select class=service name="service" id="service">
                <option value="0">Select services:</option>
                <option value="deco">Decoration</option>
                <option value="beauty">Beauticion</option>
                <option value="photo"> Photography</option>
                <option value="costume">Costume</option>
            </select>
            <br> <br>
        </div>
        <button type="submit" name="Submit" class="registerbtn">Register</button>
        <button type="reset" class="resetbtn">Reset</button>
    </form>
    </center>

</body>

</html>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© CREATE BY DARASYA</div>

</body>

</html>