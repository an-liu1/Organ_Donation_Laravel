<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Points Exchange</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/index.css" rel="stylesheet">
    <link href="/admin/css/ponit&upload.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <li><a href="/admin/user/index"><i class="fa fa-users fa-fw"></i>Users Info</a></li>
            <li><a href="#"  class="active"><i class="fa fa-sliders fa-fw"></i>Become Donor</a></li> 
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
                <li><a href="/admin/point/index">Points Collecting</a></li>
                <li><a href="/admin/user/index">Users Info</a></li>
                <li><a href="/admin/donor_form/Miracle_life_Organ_Donation_policy.pdf" class="active">Download Donor Form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div>
          <img src="/admin/images/donor.png" alt="" style="width: 90%; margin: 0 auto; display:block;">
        <h2 class="text-center text-uppercase" id="content-upload-h2">Upload File</h2>
        <p class="text-center " id="content-upload-p"> The personal information you provide on this form is collected by the Ministry of Health and Long-Term Care
          for the purpose of recording your decision to be an organ and tissue donor. It may be used and disclosed in
          accordance with the Personal Health Information Protection Act, 2004, as described in the Ministry’s “Statement of
          Information Practices” posted at Ontario.ca/health. The Miracle Life will collect this information from
          the Ministry in accordance with section 8.19 of the Miracle Life for the purpose of facilitating
          organ and tissue transplants and research as well as sharing this information with your family so that they can honour
          your wishes at end of life. If you have questions about the collection, use and/or disclosure of your personal
          information, please see above for details about how to contact us.</p>
        
      </div>

      <div class="container"> <br />
        <div class="row">
    
          <div class="col-md-12">
          <div class="panel panel-info">
            <div class="panel-heading "><strong>Upload files</strong></div>
            <div class="panel-body">
              <form enctype="multipart/form-data" action="/admin/donor/submitForm" method="POST">
                
              <div class="input-group image-preview">
                  
                <input placeholder="" id="filename" type="text" class="form-control image-preview-filename" disabled="disabled">
                <span class="input-group-btn"> 
                
                <div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                  <input type="file" name="file" id="donor_form" accept=".pdf,.doc,.docx">
                </div>
                <button type="submit" id="upload" name="submit" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                </span> 
              </div>

              {{ csrf_field() }}
            </form>
              <br />
              
              <!-- Drop Zone -->
              <div class="upload-drop-zone" id="drop-zone" style="font-size:2em;"> the name should be your username_donor_form, for example: 'admin_donor_form' </div>
              <br />
    
            </div>
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
<script src="/admin/layer/layer.js"></script>
<script>
  $('#donor_form').change(function(){
      $('#filename').attr('placeholder', this.value);
  });

  $('#upload').click(function(){

    $.ajax({
      url: '/admin/donor/submitForm',
      type: 'post',
      data: new FormData($( "form" )[0]),
      dataType: 'json',
      processData: false,
      contentType: false,
      cache: false,
      success: function(msg){
        if(msg.status == '1'){
              layer.msg('Successfully updated your information!!');
            }else{
              layer.msg('Failed to update your information. Try again!');
            }
      },
    });

    return false;
  });


</script>
  </body>
</html>