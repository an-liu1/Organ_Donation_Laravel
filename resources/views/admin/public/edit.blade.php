<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="./Public/Admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="./Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Public/Admin/css/index.css" rel="stylesheet">

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Miracle Life</h1>
        </header>
        <div class="profile-photo-container">
          <img src="./Public/Admin/images/logo.svg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>    

        <!-- <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div> -->
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="?c=index&a=index"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="?c=Points&a=index"><i class="fa fa-database fa-fw"></i>Points Collecting</a></li>
            <li><a href="?c=User&a=showUser" class="active"><i class="fa fa-users fa-fw"></i>Users Info</a></li>
            <li><a href="?c=Donor&a=index"><i class="fa fa-sliders fa-fw"></i>Become Donor</a></li> 
            <li><a href="?c=User&a=logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="./index.php">Home Page</a></li>
                <li><a href="?c=index&a=index">Dashboard</a></li>
                <li><a href="?c=Points&a=index">Points Collecting</a></li>
                <li><a href="?c=User&a=showUser" class="active">Users Info</a></li>
                <li><a href="./Public/Admin/donor_form/Miracle_life_Organ_Donation_policy.pdf">Download Donor Form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">User Information</h2>
						<p>Here is the information about you. You can do some edit here!</p>
            <form action="?c=User&a=edit" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputUsername">Username</label>
											<input type="text" class="form-control" id="inputUsername"  name="user_name" value="<{$userInfo.user_name}>" readonly="readonly">                  
									</div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName"  name="name" value="<{$userInfo.name}>">                  
                </div> 
              </div>
              <div class="row form-group">
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputTel">Phone Number</label>
											<input type="text" class="form-control" id="inputTel"   name="tel" value="<{$userInfo.tel}>">                  
									</div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail"  name="email" value="<{$userInfo.email}>">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Current Password</label>
                    <input type="password" class="form-control highlight" id="inputCurrentPassword" value="*********************" readonly="readonly">                  
                </div>                
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" class="form-control" id="inputNewPassword" name="new_pass" >
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Confirm New Password</label>
                    <input type="password" class="form-control" id="inputConfirmNewPassword" name="confirm_pass" >
                </div> 
							</div>
							<div class="row form-group">
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputLastLoginTime">Last Login Time</label>
											<input type="text" class="form-control" id="inputLastLoginTime" name="last_login_time" value="<{$smarty.session.last_login_time|date_format:'Y-m-d H:i:s'}>" readonly="readonly">
									</div>
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputRegisterDate">Register Date</label>
											<input type="text" class="form-control" id="inputRegisterDate" name="register_date" value="<{$userInfo.register_date|date_format:'Y-m-d H:i:s'}>" readonly="readonly">
									</div> 
                </div>
                
                <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">                  
                      <label for="inputLoginTimes">Login Times</label>
                      <input type="text" class="form-control" id="inputLoginTimes" value="<{$userInfo.login_times}>" readonly="readonly">                  
                  </div>
                  <div class="col-lg-6 col-md-6 form-group">                  
                      <label for="inputPoints">Collected Points</label>
                      <input type="text" class="form-control" id="inputPoints" value="<{$userInfo.points}>" readonly="readonly">                  
                  </div> 
                </div>

              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>                           
						</form>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2019 Miracle Life | Organ Donation. All rights reserved</p>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>
