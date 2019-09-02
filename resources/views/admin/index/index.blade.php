<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Admin Dashboard</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/index.css" rel="stylesheet">
    <script src="/home/images/echart/echarts.common.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js" integrity="sha256-LddDRH6iUPqbp3x9ClMVGkVEvZTrIemrY613shJ/Jgw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
 
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
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
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="/admin/point/index"><i class="fa fa-database fa-fw"></i>Points Collecting</a></li>
            <li><a href="/admin/user/index"><i class="fa fa-users fa-fw"></i>Users Info</a></li>
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
                <li><a href="#"  class="active">Dashboard</a></li>
                <li><a href="/admin/point/index">Points Collecting</a></li>
                <li><a href="/admin/user/index">Users Info</a></li>
                <li><a href="/admin/donor_form/Miracle_life_Organ_Donation_policy.pdf">Download Donor Form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              
              <div class="square"></div>
              <h2 class="templatemo-inline-block">Organ and Tissue Donation</h2><hr>
              <div id="container" style="height: 200px;"></div>
              <!-- <p>One donor can save up to 8 lives.</p>
              <p>Age alone does not disqualify someone from becoming a donor.</p> 
              <p>Your current or past medical history does not prevent you from registering to be a donor. </p>               -->
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              
              <h2 class="text-uppercase">Points</h2>
              <h3 class="text-uppercase margin-bottom-10" style="margin-bottom:40px;">Be a donator</h3>
              <!-- <img src="/admin/images/donator.jpg" alt="donator" class="img-circle img-thumbnail"> -->
              <h3 style="margin-bottom:20px;font-size:1em;"><span style="font-size:5.5em;color:pink;"><a href="/admin/point/index">{{Auth::guard('admin') -> user() -> points}}</a></span> Points</h3>
              <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
              <br><p style="margin-top:10px;">Click to get <span style="color:red;font-size:1.5em;">20</span> points daily!</p>
              <button class="btn btn-primary" id="click">Daily Click</button>
            </div>
            <div class="templatemo-content-widget white-bg col-1">
              
              <h2 class="text-uppercase">Organ Need</h2>
              <h3 class="text-uppercase">WAITING Number</h3><hr>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">Heart: 3990</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">Kidney: 94260</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">Lung: 1368</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">Liver: 13794</div>
              </div>                              
            </div>
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1 huadong"> 
                <div class="huabox">
                    <div class="notice_active" style="height:360px;overflow: hidden;">
                      <ul>
                        @foreach($redeem as $val)
                        <li class="notice_active_ch" style="overflow: hidden;"> 
                          <script>
                              var color = ['orange-bg','white-bg','green-bg'];
                              $('.color').toggleClass(color[Math.floor(Math.random()*color.length)]);
                          </script>           
                          <div class="color templatemo-content-widget">                               
                            <div class="media">
                              <div class="media-body">
                                <p><span class="media-heading text-uppercase">{{$val -> name}}</span> used <span class="media-heading text-uppercase">{{$val -> points}}</span> points to redeem <span class="media-heading text-uppercase">a {{$val -> products}}</span> !</p>  
                              </div>        
                            </div>                
                          </div> 
                        </li>  
                        @endforeach
                      </ul>
                    </div>
                </div>
              {{-- <div class="templatemo-content-widget orange-bg">                               
                  <div class="media">
                    <div class="media-body">
                      <p><span class="media-heading text-uppercase">John Smith</span> used <span class="media-heading text-uppercase">200</span> points to redeem <span class="media-heading text-uppercase">a pen</span> !</p>  
                    </div>        
                  </div>                
                </div>     
              <div class="templatemo-content-widget white-bg">
                
                <div class="media">
                  <div class="media-body">
                    <p><span class="media-heading text-uppercase">Bill Jones</span> used <span class="media-heading text-uppercase">600</span> points to redeem <span class="media-heading text-uppercase">a T-shirt</span> !</p>  
                  </div>        
                </div>           
              </div>
              <div class="templatemo-content-widget green-bg">                               
                <div class="media">
                  <div class="media-body">
                    <p><span class="media-heading text-uppercase">Mary James</span> used <span class="media-heading text-uppercase">1200</span> points to redeem <span class="media-heading text-uppercase">Emergency Alert</span>  !</p>  
                  </div>        
                </div>                
              </div>    --}}

            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                
                <div class="panel-heading position-relative"><h2 class="text-uppercase" style="text-align:center;">Donor Table</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered" id="table">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Donated Organ</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($donor as $val)
                      <tr>
                        <td>{{$val -> id}}</td>
                        <td>{{$val -> first_name}}</td>
                        <td>{{$val -> last_name}}</td>
                        <td>{{$val -> organ}}</td>
                      </tr>
                      @endforeach                      
                    </tbody>
                  </table>  
                </div>                          
              </div>
            </div>           
          </div> 
          
          <footer class="text-right">
            <p>Copyright &copy; 2019 Miracle Life | Organ Donation. All rights reserved</p>
          </footer>         
        </div>
      </div>
    </div>
    <script src="/admin/js/main.js"></script>
    <script src="/admin/layer/layer.js"></script>
    <script type="text/javascript">
      $(function() {
          $('#table').dataTable({
              "aaSorting": [
                  [1, "desc"]
              ], 
              "bStateSave": true, 
              "lengthMenu": [5],
          });

      });

      function timer(opj){
        $(opj).find('ul').animate({
          marginTop : "-3.5rem"  
          },500,function(){  
          $(this).css({marginTop : "0.7rem"}).find("li:first").appendTo(this);  
        })  
      }
      $(function(){ 
        var num = $('.notice_active').find('li').length;
        if(num > 1){
          var time=setInterval('timer(".notice_active")',3500);
        }  
      });


      $('#click').click(function(){

        $.ajax({
          type: 'get',
          url: "/admin/index/click",
          dataType: 'json',
          success: function(data) {

              if(data != '1'){
                  layer.msg('Sorry, you already checked in today!!', { icon: 2, time: 3000 }),function(){
                  var index = parent.layer.getFrameIndex(window.name);
                  parent.window.location = parent.window.location;
                  parent.layer.close(index);
                };
              }else{
                  layer.msg('Congratulation, you got 20 points!', { icon: 1, time: 3000 },function(){
                  var index = parent.layer.getFrameIndex(window.name);
                  parent.window.location = parent.window.location;
                  parent.layer.close(index);
                });
              }
          },
          error: function(XmlHttpRequest, textStatus, errorThrown) {
              layer.msg('error!', { icon: 2, time: 1000 });
          }
        }); 

      });
    </script>
  </body>
</html>
