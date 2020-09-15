<!DOCTYPE HTML>
<html>
<head>
    <title>Techothon</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="design.css">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
</head>
<body>
<br><br>
    <div class="header">
        <h2>
            Register Yourself
        </h2>
    </div>
<br><br>
<hr>
<br><br>
<ul>
  <li><a class="active" href="Home.html" style="font-family:calibri;">Home</a></li>
  <li><a href="Main.html" style="font-family:calibri;">Register</a></li>
  <li><a href="registered.html" style="font-family:calibri;">All Registrations</a></li>
</ul>
<br>
<p style="text-align:center;font-family:calibri;color:#047094">Register yourself today in biggest tech event of India!</p>
<br><br>

    <div class="form">
        <form method="POST" name="form_1" class="regForm">
            <p><input type="text" id="name" placeholder="Enter Full Name"></p>
            <p><input type="text" id="email" placeholder="Enter Email-id"></p>
            <br>
           

            <p>
                Select Platform:
                <select name="gender" id="gender" >
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Both">Both</option>
                </select>
            </p>
            <br>

            <br>

            <div id="ag">
                Age:&emsp;&emsp;&emsp;&emsp;
                <input type="radio" name="age" id="age_1" value="abv">
                <label for="age">Above 18&emsp;</label>
                <input type="radio" name="age" id="age_2" value="blw">
                <label for="age">Below 18</label><br>
            </div>

            <p>
                <textarea placeholder="Tell us something about yourself" id="about"></textarea>
            </p>

            <p>
                <input name="terms" type="checkbox" id="terms" value="accept">
                <label for="terms">I accept terms and condition.</label> 
            </p>

            <button class="checkValidation" type="submit">Submit</button>
        </form>
        <h4 id="showon">Form Submitted Successfully.</h4>
    </div>
</body>
</html>
