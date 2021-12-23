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
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/decoration.jpeg" style="width:50%">
                <div class="text">DECORATION</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/makeup.jpg" style="width:50%">
                <div class="text">BEAUTY</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/photography.jpg" style="width:50%">
                <div class="text">PHOTOGRAPHY</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </center>
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

                Service Provided <br><br>

                <select class=service name="service" id="service">
                    <option value="0">Select services:</option>
                    <option value="DECORATION">Decoration</option>
                    <option value="BEAUTICION">Beauticion</option>
                    <option value="PHOTOGRAPHY"> Photography</option>
                    <option value="COSTUME">Costume</option>
                </select>
                <br> <br>
            </div>
            <button type="submit" name="Submit" class="registerbtn">Register</button>
            <button type="reset" class="resetbtn">Reset</button>
        </form>
    </center>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    <div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© CREATE BY DARASYA</div>

</body>

</html>