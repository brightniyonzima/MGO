<html lang="en">
<head>
<title>Registration</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="boostrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->

<!-- bootstratp stuff -->
<script src="boostrap/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="boostrap/js/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="boostrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- end of boostrap -->
</head>
<body id="page6">
<!-- START PAGE SOURCE -->
<div class="wrap">
    <header>
        <div class="container">
            <h1><a href="#">MUST Grants Office</a></h1>
            <nav>
                <ul>
                  <li><a href="index.html" class="m1">Home</a></li>
                  <li><a href="about-us.html" class="m2">About Us</a></li>
                  <li><a href="articles.html" class="m3">Our Articles</a></li>
                  <li><a href="contact-us.html" class="m4">Contact Us</a></li>
                  <li class="last current"><a href="login.html" class="m5">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4" style="margin-top: 50px;">
                <form action="process_user_registration.php" method="post" style="width: 100%">
                <div class="rowElem">
                   <div class="label">
                        <label>First Name: </label>
                    </div>
                   <div>
                       <input type="text" name="first_name" class="form-control">
                   </div>
                </div>

                <div class="rowElem">
                   <div class="label">
                        <label>Last Name: </label>
                    </div>
                   <div>
                       <input type="text" name="last_name" class="form-control">
                   </div>
                </div>

                <div class="rowElem">
                   <div class="label">
                        <label>User Name: </label>
                    </div>
                   <div>
                       <input type="text" name="user_name" class="form-control">
                   </div>
                </div>

                <div class="rowElem">
                    <div class="label">
                        <label>Contact: </label>
                    </div>
                    <div>
                       <input type="text" name="phone" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="margin-top: 50px;">
                <div class="rowElem">
                   <div class="label">
                        <label>User Group: </label>
                    </div>
                   <div>
                       <select class="form-control" name="user_group">
                           <option value="1">Admin</option>
                           <option value="2">User</option>
                       </select>  
                   </div>
                </div>

                <div class="rowElem">
                   <div class="label">
                        <label>Email: </label>
                    </div>
                   <div>
                       <input type="email" name="email" class="form-control">
                   </div>
                </div>

                <div class="rowElem">
                    <div class="label">
                        <label>Password: </label>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="rowElem">
                    <div class="label">
                        <label>Confirm Password: </label>
                    </div>
                    <div>
                        <input type="password" name="cpassword" class="form-control">
                    </div>
                </div>

                <div class="rowElem">
                    <br>
                    <input type="submit" name="" value="Register" class="btn btn-success btn-sm">
                </div>
            </div>
            </form>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2018 <a href="#">SiteName</a> - All Rights Reserved</p>
    
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
