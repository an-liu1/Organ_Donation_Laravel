<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Points Exchange</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/index.css" rel="stylesheet">
    <link href="/admin/css/ponit&upload.css" rel="stylesheet">
    {{-- <script src="/admin/js/main.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script> -->
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
            <li><a href="#" class="active"><i class="fa fa-database fa-fw"></i>Points Collecting</a></li>
            <li><a href="/admin/user/index"><i class="fa fa-users fa-fw"></i>Users Info</a></li>
            <li><a href="/admin/donor/index"><i class="fa fa-sliders fa-fw"></i>Become Donor</a></li> 
            <li><a href="/admin/public/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="/">Home Page</a></li>
                <li><a href="/admin/index/index">Dashboard</a></li>
                <li><a href="#"  class="active">Points Collecting</a></li>
                <li><a href="/admin/user/index">Users Info</a></li>
                <li><a href="/admin/donor_form/Miracle_life_Organ_Donation_policy.pdf">Download Donor Form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="content-redeem-img">
          <img style="width: 100%;" src="/admin/images/points.png" class="img-fluid" alt="/admin/images/firstpage.jpg">
        </div>
        <div class="content-redeem-text">
            
        </div>
        <div class="container" id="content-redeem">
          <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
              
              <img src="/admin/images/penC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">PEN</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">200 points</h3>
              <button id="redeem" type="submit" class="redeem PEN_200 btn btn-primary btn-lg">Redeem</button>
            </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
         
              <img src="/admin/images/tshirtC.jpg" alt="Bicycle" class=" img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">T-shirt</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">600 points</h3>
              <button id="redeem" type="submit" class="redeem T-shirt_600 btn btn-primary btn-lg">Redeem</button>
            </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
        
              <img src="/admin/images/bandaidC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">Band-aid</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">400 points</h3>
              <button id="redeem" type="submit" class="redeem Band-aid_400 btn btn-primary btn-lg">Redeem</button>
           </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
          
              <img src="/admin/images/kitC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">Medical Kit</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">800 points</h3>
              <button id="redeem" type="submit" class="redeem Medical-Kit_800 btn btn-primary btn-lg">Redeem</button>
            </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
         
              <img src="/admin/images/maskC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">MASK</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">300 points</h3>
              <button id="redeem" type="submit" class="redeem MASK_300 btn btn-primary btn-lg">Redeem</button>
            </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
         
              <img src="/admin/images/newsC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">Emergency Alert</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">1200 points</h3>
              <button id="redeem" type="submit" class="redeem Emergency-Alert_1200 btn btn-primary btn-lg">Redeem</button> 
            </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
        
              <img src="/admin/images/notebookC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">Notebook</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">600 points</h3>
              <button id="redeem" type="submit" class="redeem Notebook_600 btn btn-primary btn-lg">Redeem</button>
           </div>
            <div class="col-xs-6 col-md-12 col-lg-3 text-center templatemo-position-relative">
          
              <img src="/admin/images/thermometerC.jpg" alt="Bicycle" class="img-thumbnail margin-bottom-30 img-fluid">
              <h2 id="content-item">Thermometer</h2>
              <h3 id="content-points" class="text-uppercase margin-bottom-70">600 points</h3>
              <button id="redeem" type="submit" class="redeem Thermometer_600 btn btn-primary btn-lg">Redeem</button>
            </div>  
          </div>
      </div>
          <footer class="text-right">
            <p>Copyright &copy; 2019 Miracle Life | Organ Donation. All rights reserved</p>
          </footer>       
        </div>
      </div>
    </div>
    <script src="/admin/layer/layer.js"></script>
    <script type="text/javascript">
        $('.redeem').click(function(){

          var val = $(this).attr("class");
          var var1 = val.split(' ')[1];   
          
          var a = var1.split('_')[0];
          var p = var1.split('_')[1];
          console.log(var1,a,p);
          
          layer.confirm('Do you want to redeem this product?', {
              btn: ['Yes', 'No']
              }, function(){

                $.get('/admin/point/redeem/'+ a + '/' + p,function(msg){

                  if(msg == '1'){
                    layer.confirm('Successfully redeeming, fill the shipping information please!', {
                      btn: ['Yes', 'No']
                      },function(){
                        window.location.href="/admin/point/shipping";
                      });
                  }else{
                    layer.alert('You do not have enough points, go daily check to get more points!');
                  }
                  },'json');
              },function(){

              });

        });
    </script>
  </body>
</html>
{{-- , function(){
  window.location.href="/admin/point/shipping";
} --}}