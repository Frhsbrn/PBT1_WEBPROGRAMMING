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

        <div class="main">
            <h2>DARASYA WEDDING PLANNER</h2>
            Hello! Welcome to Darasya's Wedding Planner.
            We provide the wedding service you have been looking for.
            Do have a look at our website and do contact us if
            you have any question. Thank you.
        </div></br>
    </div></br>

    <table>
        <tr>
            <th>OUR SERVICE</th>
            <th>PER PACKAGE</th>
        </tr>
        <tr>
            <td>PHOTOGRAPHY</td>
            <td>RM500</td>
        </tr>
        <tr>
            <td>DECORATION</td>
            <td>RM1000</td>
        </tr>
        <tr>
            <td>BEAUTICIAN</td>
            <td>RM500</td>
        </tr>
    </table>

    <center>
        <form method="post" id="form" action="result.php">
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

                Decoration RM500 <br><br>

                <select class=deco name="deco" id="deco">
                    <option value="0">ADD ON:</option>
                    <option value="flower">Flower RM120</option>
                    <option value="balloon">Balloon RM50</option>
                    <option value="bridal">Bridal RM200</option>
                </select>
                <br> <br>

                Beautician RM1000 <br><br>

                <select class=beauty name="beauty" id="beauty">
                    <option value="0">ADD ON:</option>
                    <option value="make up">Makeup RM250</option>
                    <option value="hair">Hair RM300</option>
                    <option value="henna">Henna RM100</option>
                    
                </select>
                <br> <br>

                Photography RM500 <br><br>

                <select class=photo name="photo" id="photo">
                    <option value="0">ADD ON:</option>
                    <option value="video">Video RM100</option>
                    <option value="candid">Candid RM100</option>
                    <option value="formal"> Formal RM50</option>
                    
                </select>
                <br> <br>
            </div>
            <button type="submit" name="Submit" class="registerbtn">Register</button>
            <button type="reset" class="resetbtn">Reset</button>
        </form>
    </center>
    <div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© CREATE BY DARASYA</div>

</body>

</html>