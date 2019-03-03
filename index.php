<html>
<head>
	<title>railway</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
      *{
          margin: 0px;
          padding: 0px;
      }
      #more {display: none;}
      .naming{
          text-align: center;
          font-weight: bold;
      }

  </style>
    
     <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          }
            else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
         
         function myFunction1() {
          var dots = document.getElementById("dots1");
          var moreText = document.getElementById("more1");
          var btnText = document.getElementById("myBtn1");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          }
            else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
         
         function myFunction2() {
          var dots = document.getElementById("dots2");
          var moreText = document.getElementById("more2");
          var btnText = document.getElementById("myBtn2");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          }
            else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
         
         function myFunction3() {
          var dots = document.getElementById("dots3");
          var moreText = document.getElementById("more3");
          var btnText = document.getElementById("myBtn3");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          }
            else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
        </script>
</head>
<body>
	<?php include 'header.php';?>
	<div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <img src="images/rail1.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="images/rail2.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="images/rail3.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="images/rail4.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption">
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8">
                <h3>Train Booking System</h3>
                <div class="row">
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <h3>What is train ticket booking</h3>
                          <img src="images/b4.jpg" alt="booking" style="width:100%">
                          <div class="caption">
                            <p>Train ticket booking allows the travelers to seek a confirmed berth in the selected class of a train. There are two ways of booking train tickets: through 
                              <span id="dots">...</span><span id="more">railway station ticket counters or online train ticket booking. Unique PNR (Passenger Name Record) is generated against every ticket booked.</span></p>
                            <button onclick="myFunction()" id="myBtn">Read more</button>
                          </div>
                      </div>
                </div>
                   
                <div class="col-xs-6">
                     <div class="thumbnail">
                         <h3>Process for online booking</h3>
                          <img src="images/b1.jpg" alt="process" style="width:100%">
                          <div class="caption">
                            <p>Online train tickets in India can be booked by logging into the IRCTC (a subsidiary of the Indian Railways) website directly or by seeking help from licensed IRCTC agents. Users 
                              <span id="dots1">...</span><span id="more1"> have to select the source and destination stations, select a train, check for train ticket availability, provide the passenger details (name/s, age, gender, berth preference and meal preference) and then proceed towards payment gateway. The online train ticket booking is finalized once the payment is made. SMS and email is sent to user’s registered details.</span></p>
                            <button onclick="myFunction1()" id="myBtn1">Read more</button>
                          </div>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <h3>What is Assisted Booking</h3>
                          <img src="images/b3.jpg" alt="Lights" style="width:100%">
                          <div class="caption">
                            <p>This is a new concept, whereby the user is helped by an experienced IRCTC licensed agent during the online train ticket booking process. Assisted train
                              <span id="dots2">...</span><span id="more2"> ticket booking removes 90% stress involved in the booking process. The user gets important tips and advice (which are backed by data) in every important step. For example, if tickets are not available for your first choice train, the agent quickly suggests an alternative train (with equally good performance and matching for the travel plans) with high train ticket availability.</span></p>
                            <button onclick="myFunction2()" id="myBtn2">Read more</button>
                          </div>
                      </div>
                </div>
                   
                <div class="col-xs-6">
                     <div class="thumbnail">
                         <h3>Proofs required for online booking</h3>
                          <img src="images/b2.jpg" alt="Lights" style="width:100%">
                          <div class="caption">
                            <p>The users do not have to input any ID card details during train ticket booking session. However, the passenger/s need to carry and show one of following identity card 
                              <span id="dots3">...</span><span id="more3">  during their journey. The original ID card is required for validation purposes. The ID cards are considered valid by Indian railway
                                
                                    Aadhar card,
                                    Voter photo identity card,
                                    Passport,
                                    Driving License,
                                    Pan Card,
                                    Central/State Government issued Photo Identity card,
                                    Student Identity Card with photograph,
                                    Nationalized Bank Passbook with photographs,
                                    Credit Cards with laminated photograph and
                                    Photo identity cards having serial number
                                    </span></p>
                            <button onclick="myFunction3()" id="myBtn3">Read more</button>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                      <img src="images/piyush.jpg" alt="Nature" style="width:100%">
                      <div class="caption">
                        <p class="naming">Shri Piyush Goyal<br>
                          Hon'ble Minister of Railways</p>
                      </div>
                  </div>
                <div class="thumbnail">
                      <img src="images/manoj.jpg" alt="Nature" style="width:100%">
                      <div class="caption">
                        <p class="naming">Shri Manoj Sinha<br>
                          Hon'ble Minister of State for Railways</p>
                      </div>
                  </div>
                <div class="thumbnail">
                      <img src="images/rajen.jpg" alt="Nature" style="width:100%">
                      <div class="caption">
                        <p class="naming">Shri Rajen Gohain<br>
                          Hon'ble Minister of State for Railways</p>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    
    
   
</body>
</html>