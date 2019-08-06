<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="/admin/css/index.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js" integrity="sha256-LddDRH6iUPqbp3x9ClMVGkVEvZTrIemrY613shJ/Jgw=" crossorigin="anonymous"></script>

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
          <img src="/admin/images/logo.svg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>    

        <!-- <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div> -->
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="/admin/index/index"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="/admin/point/index"><i class="fa fa-database fa-fw"></i>Points Collecting</a></li>
            <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Users Info</a></li>
            <li><a href="/admin/donor/index"><i class="fa fa-sliders fa-fw"></i>Become Donor</a></li> 
            <li><a href="/admin/public/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="/">Home Page</a></li>
                <li><a href="/admin/index/index">Dashboard</a></li>
                <li><a href="/admin/point/index">Points Collecting</a></li>
                <li><a href="#" class="active">Users Info</a></li>
                <li><a href="/admin/donor_form/Miracle_life_Organ_Donation_policy.pdf">Download Donor Form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">User Information</h2>
						<p>Here is the information about you. You can do some edit here!</p>
            <form  class="templatemo-login-form" enctype="multipart/form-data">
              <div class="row form-group">
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputUsername">Username</label>
											<input type="text" class="form-control" id="inputUsername"  name="user_name" value="{{Auth::guard('admin') -> User() -> username}}" readonly="readonly">                  
									</div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName"  name="name" value="{{Auth::guard('admin') -> User() -> name}}">                  
                </div> 
              </div>
              {{csrf_field()}}
              <div class="row form-group">
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputTel">Phone Number</label>
											<input type="text" class="form-control" id="inputTel"   name="tel" value="{{Auth::guard('admin') -> User() -> tel}}">                  
									</div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail"  name="email" value="{{Auth::guard('admin') -> User() -> email}}">                  
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
                    <input type="password" class="form-control" id="inputNewPassword" name="new_pass" required>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Confirm New Password</label>
                    <input type="password" class="form-control" id="inputConfirmNewPassword" name="confirm_pass" required>
                </div> 
							</div>
							<div class="row form-group">
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputLastLoginTime">Last Login Time</label>
											<input type="text" class="form-control" id="inputLastLoginTime" name="last_login_time" value="{{Auth::guard('admin') -> User() -> last_login_time}}" readonly="readonly">
									</div>
									<div class="col-lg-6 col-md-6 form-group">                  
											<label for="inputRegisterDate">Register Date</label>
											<input type="text" class="form-control" id="inputRegisterDate" name="register_date" value="{{Auth::guard('admin') -> User() -> created_at}}" readonly="readonly">
									</div> 
                </div>
                
                <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">                  
                      <label for="dailycheck">Daily Check</label>
                      <input type="text" class="form-control" id="dailycheck" @if(Auth::guard('admin') -> User() -> status == '1') value="Daily check" @else value="checked in" @endif readonly="readonly">                  
                  </div>
                  <div class="col-lg-6 col-md-6 form-group">                  
                      <label for="inputPoints">Collected Points</label>
                      <input type="text" class="form-control" id="inputPoints" value="{{Auth::guard('admin') -> User() -> points}}" readonly="readonly">                  
                  </div> 
                </div>

              <div class="form-group text-right">
                <button type="submit" id="submit" class="templatemo-blue-button">Update</button>
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
    <script src="/admin/layer/layer.js"></script>
    <script>

            $('form').submit(function(){

                if($('#inputNewPassword').val() != $('#inputConfirmNewPassword').val()){
                    layer.msg('The passwords did not match. Try again!');
                    return false;
                }else{

                    $.ajax({
                      type: 'post',
                      url: '/admin/user/edit',
                      data: $('form').serialize(),
                      dataType: 'json',
                      success: function(msg){
                                  @if (count($errors) > 0)
                                    var allError = '';
                                    @foreach ($errors -> all() as $error)
                                    allError += "{{$error}}<br/>"; 
                                    @endforeach
                                    layer.alert(allError,{title:'Wrong Tips',icon: 5});
                                  @endif

                                  if(msg.status == '1'){
                                    layer.msg('Successfully updated your information!!');
                                  }else{
                                    layer.msg('Failed to update your information. Try again!');
                                  }
                                },
                      
                    });
                    return false;
                }
    
             });



                    // $.post('/admin/user/edit',$('form').serialize(),function(msg){
                    //   alert('dsfsfdsf');

                    //   @if (count($errors) > 0)
                    //     var allError = '';
                    //     @foreach ($errors -> all() as $error)
                    //     allError += "{{$error}}<br/>"; 
                    //     @endforeach
                    //     layer.alert(allError,{title:'Wrong Tips',icon: 5});
                    //   @endif

                    //   alert(msg.status);
                    //   if(msg.status == '1'){
                    //     layer.msg('Successfully updated your information!!');
                    //   }else{
                    //     layer.msg('Failed to update your information. Try again!');
                    //   }
                    // },'json');
            //     }
            // });
      //  });

      //  $('#submit').click(function(){
      //       alert(fdsfsdf);
      //       alert($('form').serialize());
      //       $.post('/admin/user/edit',$('form').serialize(),function(msg){
      //         if(msg == '1'){
      //           layer.msg('Successfully updated your information!!');
      //         }else{
      //           layer.msg('Failed to update your information. Try again!');
      //         }
      //       },'json');
      //  });


    </script>
  </body>
</html>
