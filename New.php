<!DOCTYPE html>
<html>
<head>
<title>Techothon</title>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="styling.css" >

<script src="jquery.min.js"></script>
<script src="script.js"></script>

 <script>
    	function switchVisible() {
            if (document.getElementById('RegForm')) {

                if (document.getElementById('RegForm').style.display == 'none') 
                {
                    document.getElementById('RegForm').style.display = 'block';
                    document.getElementById('fullpg').style.display = 'none';
                    document.getElementById('showTable').style.display = 'none';
                }

                else 
                {
                    document.getElementById('RegForm').style.display = 'none';
                    document.getElementById('showTable').style.display = 'none';
                    document.getElementById('fullpg').style.display = 'block';
                }
            }
		}


    	function switchVisible1() {
            if (document.getElementById('showTable')) 
            {

                if (document.getElementById('showTable').style.display == 'none') 
                {
                    document.getElementById('showTable').style.display = 'block';
                    document.getElementById('RegForm').style.display = 'none';
                    document.getElementById('fullpg').style.display = 'none';
                }
                else {
                    document.getElementById('showTable').style.display = 'none';
                    document.getElementById('fullpg').style.display = 'none';
                    document.getElementById('RegForm').style.display = 'block';
                }
            }
		}		
    </script>

    <style>
.fling-minislide {width:1500px; height:500px; overflow:hidden; position:relative; }
.fling-minislide img{ position:absolute; animation:fling-minislide 20s infinite; opacity:0; width: 100%; height: auto;}

@keyframes fling-minislide {25%{opacity:1;} 40%{opacity:0;}}
.fling-minislide img:nth-child(4){animation-delay:0s;}
.fling-minislide img:nth-child(3){animation-delay:5s;}
.fling-minislide img:nth-child(2){animation-delay:10s;}
.fling-minislide img:nth-child(1){animation-delay:15s;}

</style>
</head>


<!--Home Page-->

<body>
<h1 style="text-align:center;font-family:calibri;color:#2C95DA;font-size: 400%">Techothon</h1>
<img class="img1" src="logo.jpg" width="150" height="100" style="padding-left: 30px; padding-top: 30px">
<p style="text-align:center;font-family:calibri;color:#047094">Biggest Tech Event!</p>
<hr>

<br>
 
<div id="fullpg">
<ul>
  <li><a class="active" href="Home.html" style="font-family:calibri;">Home</a></li>
  <li><a href="#" onclick="javascript:switchVisible();" style="font-family:calibri;">Register</a></li>
  <li><a href="#" onclick="javascript:switchVisible1();" style="font-family:calibri;">All Registrations</a></li>
</ul>
<br>

<div style="display: block;">
<div class="fling-minislide">
  <img src="banner1.jpg" alt="Slide 4" style="width:1500px;height:500px;">
  <img src="banner2.png" alt="Slide 3" style="width:1500px;height:500px;">
  <img src="banner3.jpg" alt="Slide 2" style="width:1500px;height:500px;">
  <img src="banner4.jpg" alt="Slide 1" style="width:1500px;height:500px;">
</div>
<br>
<hr>
<h1><p style="text-align:center;font-family:calibri;">Our partners</p></h1>

<div id="partners">
<a href="https://www.google.co.in/"> <img style="padding-left: 300px; padding-right: 200px;width:150px;height:150px;" src="googlelogo.png"></a>
<a href="https://www.microsoft.com/en-in"> <img style="padding-right: 200px; width:150px;height:150px;" src="microsoftlogo.jpg"></a>
<a href="https://www.apple.com/in/"> <img style="padding-right: 300px; width:150px;height:150px;" src="apple_logo.jpg"></a>
</div>

<hr style="width:100%;text-align:left;margin-left:0">
<br>

<div>
	
	<p class="ex1" style="font-family:calibri; font-size: 350%">What is Techothon?</p>

<p class="ex1" style="font-family:calibri; font-size: 100%">Techothon is biggest tech event organised for young minds of India who are willing to showcase their talent on big platform. This event will give them exposure and they can win exciting prizes.</p>

<p class="ex1" style="font-family:calibri; font-size: 100%">Winning tem will get cash prize of ₹1 lakh and certificate of participation will be provided to every participant.</p>


<p class="ex1" style="font-family:calibri; font-size: 100%">By attending tech conferences and startup events, you can stay ahead of others and be aware of new and emerging trends. Tech conferences are the largest exhibit of startup ideas and disruptive technologies. These speakers are experts in their own right and throw light on the future of the tech industry as a whole. By attending tech conferences and startup events, you can stay ahead of others and be aware of new and emerging trends. Tech conferences are the largest exhibit of startup ideas and disruptive technologies. ... These speakers are experts in their own right and throw light on the future of the tech industry as a whole. The inspiration you get from these events will challenge you to become more productive which can lay the foundation for growth. Attending these events can introduce you to inspiring people you would want to connect with for their inspiration.</p>

<p class="ex1" style="font-family:calibri; font-size: 100%">With lots of experience and information that will be gotten from these events, you automatically become a thought leader in your niche or industry. Some of these events come with a certificate from programs you can attend while at the event if it is not a 1-day event. The speakers at these events are among the best in their industry. Learning from them by listening and jotting down means you are duplicating their brain which normally is not easy to access anywhere except these kind of events. Most times it is either an App or a new productivity gadget. Sometimes a software. Companies will give you access to these new tools to try and see if you will like any. Some just came for user’s experience and feedback to know if they should push further and launch the product. During the Q & A session, you will be given the chance to ask questions that you need clarity to regarding your business and you will be given the perfect answer to your questions.</p>

<p class="ex1" style="font-family:calibri; font-size: 100%">Whether you are going for networking purpose, inspiration, to get updates on upcoming trends, meeting with investors, or just to get yourself away from your hustle, attending these events means you are investing in yourself. Attending these events is an investment in your business, in yourself and in your employees. This is because, during the course of working with them on some projects, you will be teaching and sharing with them some vital things they need to know to become more productive. Lastly, attending these events can ignite energy in you when you see lot of people with like mindset and energy sitting close to you striving to learn and be better. When you discover that you are not alone in the quest for knowledge, it motivates you to grow and challenge yourself in your business.</p>

<br><br>
</div>

</div>
</div>

<!--Registration form-->

<div id="RegForm" style="display: none;">
	<ul>
  <li><a class="active" href="Home.html" style="font-family:calibri;">Home</a></li>
  <li><a href="#" style="font-family:calibri;">Register</a></li>
  <li><a href="#" onclick="javascript:switchVisible1();" style="font-family:calibri;">All Registrations</a></li>
</ul>
<br>
<p style="text-align:center;font-family:calibri;color:#047094">Register yourself today in biggest tech event of India!</p>
<br><br>

    <div class="form1">
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


<!--Show Registrations-->

  <div id="showTable" style="display: none;">

    <br>
    <br>
    <br>
    <br>
<ul>
  <li><a class="active" href="Home.html" style="font-family:calibri;">Home</a></li>
  <li><a href="#" onclick="javascript:switchVisible();" style="font-family:calibri;">Register</a></li>
  <li><a href="#" onclick="javascript:switchVisible1();" style="font-family: calibri;">Registered Members</a></li>
 
</ul>
<br>
<div>
    <h4 id="memberS">No Member Registered</h4>

    <div class="tble">
        <table id="regData">
            <thead>
                <td>Name</td>
                <td >Email</td>
                <td >Platform</td>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>


<div id="example1">
  <p style="font-family:calibri; font-size: 100%; color: #636669; text-align:center;">This is not a original Techothon website.</p>
  <p style="font-family:calibri; font-size: 100%; color: #636669; text-align:center;">This is Assignmet Work</p>
</div>
</div>

<footer>
  <p style="font-family:calibri; font-size: 100%; color: white; text-align:center;">Rishabh Acharya<br>
  <p style="font-family:calibri; font-size: 100%; color: white; text-align:center;">MITAOE WT ASSIGNMENT<br>
</footer>
</body>
</html>
