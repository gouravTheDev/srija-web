

<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Srija Software Solutions</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/myStyle.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/responsive-menu.css">
<script src="js/responsive-menu.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript">

//	Validating the form

function validate()

{

		var frm=document.form2;
		frm.fname.value=trim(frm.fname.value);
		if(frm.fname.value=="") { alert("Please Enter Frist Name"); frm.fname.focus(); return false; }
		
		frm.lname.value=trim(frm.lname.value);
		if(frm.lname.value=="") { alert("Please Enter Last Name"); frm.lname.focus(); return false; }
		
		frm.email.value=trim(frm.email.value);
		if(frm.email.value=="") { alert("Please enter email"); frm.email.focus(); return false; }
		if(!validatemail(frm.email,'Please enter valid email')) return false;		

		frm.mobile.value=trim(frm.mobile.value);
		if(frm.mobile.value=="") { alert("Please Enter Mobile Number"); frm.mobile.focus(); return false; }
		if(!validatephone(frm.mobile,'Please Enter Valid Mobile number')) return false;
		
		
		frm.description.value=trim(frm.description.value);
		if(frm.description.value=="") { alert("Please Enter Description "); frm.description.focus(); return false; }

	}

</script>
</head>
<body>
<!-- // -->
<div class="container-fluid">
<!--  <div class="header_top_area">-->

        <div class="col-md-2 logo desktop"><a href="#"><img src="images/logo.png" alt="logo" class="text-center"/></a></div>
        <div class="col-md-2 logo mobile"><a href="#"><img src="images/mobile-logo.png" alt="logo" class="text-center img-responsive"/></a></div>
        <div class="col-md-10">
          <!--<div class="col-md-6 col-md-offset-6 enquiry-bg text-right">
            <p>Enquiries:+44 2033 710 595</p>
          </div>-->
                    <div class="col-md-12 nav-bg">
            <div id="nav-auto">
              <div id='cssmenu' >
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about-srija.php">About Srija</a></li>
                  <li><a href="our-business.php">Our Business</a></li>
                  <li><a href="our-services.php">Our Services</a></li>
					<li><a href="our-products.php">Our Products</a></li>
                  <li><a href="our-customers.php">Our Customers</a></li>
                  
<li><a href="testimonials.php">Testimonials</a></li>
<li><a href="careers.php">Careers</a></li>
                  <li class="active"><a href="contact-us.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
<!--</div>-->
<!-- // --> 
<div class="container-fluid innerpage-hdng">
  <div class="beImg">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>&nbsp;</h4>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumb pull-right">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- // -->
<div class="container minheight">
  <div class="row">
  <div class="col-md-12"><h3>Contact Us</h3></div>
    <div class="col-md-3">
    
      <h2>Srija Software Solutions</h2>
      <p><strong>Registered Office Address: </strong><br>
Suite 102,<br>
 28-42 Olympic House,<br> 
Ilford, London, <br> 
United Kingdom, <br> 
IG1 1BA
      </p>
      
      <p><strong>Contact  me :</strong> hr@srija.uk</p>
    </div>
    <div class="col-md-9">
      <h2>Get in touch</h2>
      <p>Srija is the UK's leading mobile software app development company and recruitment consulting, based in London.</p>
      <p>Email on <strong>hr@srija.uk</strong> or call on: <strong>+44 20 3926 8595</p>
      <div class="row">
      <div class="col-md-12">
            <form action="contact-us.php" method="post" name="form2" id="form2" onSubmit="return validate();">
            <div class="col-md-6 form-group"> 
              <!--<label>First Name</label>-->
              <input name="fname" type="text" class="form-control" id="fname" placeholder="Enter Frist Name">
            </div>
            <div class="col-md-6 form-group"> 
              <!--<label>Last Name</label>-->
              <input name="lname" type="text" class="form-control" id="lname" placeholder="Enter Last Name">
            </div>
            <div class="col-md-6 form-group">
              <input name="email" type="text" class="form-control" id="email" placeholder="Enter E-Mail ID">
            </div>
            <div class="col-md-6 form-group">
              <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
            </div>
            <div class="col-md-12" style="padding-bottom:2px;"></div>
            <div class="col-md-12 form-group">
             <textarea name="description" rows="1" class="form-control" id="description" placeholder="How we can Help!"></textarea>
            </div>
            <div class="clearfix"></div>
            
            <div class="col-md-12 form-group">
              <label class="control-label" for="singlebutton"></label>
              <div class="col-md-12">
                <button id="singlebutton" name="singlebutton" class="btn btn-default btn-samll center-block btn-huge"> Submit </button>
              </div>
              <!-- // --> 
            </div>
            <input type="hidden" name="submited" value="submited">
          </form>
      
      </div>
      </div>
    </div>
  </div>
</div>
<!-- // -->
<div class="container-fluid footer-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2019 www.srija.co.uk.  All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!-- // --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>