<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sign up | hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Holiday Homes Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!--//fonts--> 
</head>
<body style="  font-family: 'Barlow', sans-serif;
  font-size: 100%;
  background: url(../images/bann2.jpg)no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
  background-attachment:fixed;">



 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Voyage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('hotel.index')}}" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="{{route('hotelPost.index')}}" class="nav-link">Tour</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="{{route('login.index')}}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!--background-->
<h1> Hotel Signup</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Choice For 
Holiday Homes</h2>
						<div class="book-form agileits-login">
							<form action="#" method="post">
								<div class="phone_email">
									<label>Full name : </label>
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="Name" placeholder="" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="email" name="email" placeholder="" required="">
									</div>
								</div>
								<div class="phone_email">
									<label>Phone number : </label>
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="Phone no" placeholder="" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<label>Address : </label>
									<div class="form-text">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<input type="text" name="address" placeholder="" required="">
									</div> 
								</div> 
								<div class="clear"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Departure Date : </label> 
										<div class="book_date"> 
											<i class="fa fa-calendar" aria-hidden="true"></i>
												<input  id="datepicker" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

										</div>					
									</div>
									<div class="span1_of_2">
										<label>Arrival Date : </label> 
										<div class="book_date"> 
											<i class="fa fa-calendar" aria-hidden="true"></i>
												<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

										</div>					
									</div>
									<div class="clear"></div>
									<div class="span1_of_1">
										<label>No.of people : </label>
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-users" aria-hidden="true"></i>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="AX"></option>
												<option value="null">1 People</option>
												<option value="null">2 People</option>
												<option value="null">3 People</option>         
												<option value="AX">4 People</option>
												<option value="AX">More</option>
											</select>
										</div>	
									</div>
									<div class="span1_of_2">
										<label>Select Location : </label>
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="AX"></option>
												<option value="null">Villa</option>
												<option value="null">Apartment</option>
												<option value="null">House</option>         
												<option value="AX">More</option>
											</select>
										</div>	
									</div> 									
									<div class="clear"></div>
								</div> 
												
								<input type="submit" value="Reservation">
							</form>
						</div>

		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2018 Holiday Homes Booking Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>