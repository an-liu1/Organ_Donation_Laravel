<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/home/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <script src="/home/Images/echart/echarts.common.min.js"></script>
    
    <title>Miracle Life</title>
  </head>
  <body>
<header>
      <div id="Home" class="site-wrap" style="background-color:white;">

          <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body"></div>
          </div>
         
          <div class="border-bottom top-bar py-2">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p class="mb-0">
                    <span style="color:gray;"><i class="fas fa-user"></i> <a class="log-icon" href="/admin/index/index"> @if(@Auth::guard('admin') -> User() -> username)  &nbsp;&nbsp; {{Auth::guard('admin') -> User() -> username}}</a> @else <a class="log-icon" href="/admin/public/login">Log In</a> &nbsp;&nbsp;<i class="fas fa-user"></i> <a class="log-icon" href="/admin/public/signup">Sign Up</a> @endif </span>
                  </p>
                </div>
                <div class="col-md-6">
                  <ul class="social-media">
                    <li><a target="_blank" href="https://www.facebook.com/Life-Miracle-Co-305878040031231/" class="p-2"><span class="icon-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/organdonation1_/
                      " class="p-2"><span class="icon-twitter"><i class="fab fa-instagram"></i></span></a></li>
                    <li><a target="_blank" href="https://twitter.com/Lifemiracle3" class="p-2"><span class="icon-instagram"><i class="fab fa-twitter"></i></span></a></li>
             
                  </ul>
                </div>
              </div>
            </div> 
          </div>
         
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index.php"> <img  src="/home/images/logo.svg" alt="logo1" class="logo1" style="width:20%;"> </a>
             
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about-us">ABOUT</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#Ontario-data">ONTARIO DATA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Events">EVENTS</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#Story">STORY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact">CONTACT</a>
                          </li>
             
                </ul>
             
              </div>
            </nav>
          </header>
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c983bb06ec0ca7a"></script>
            <section>
              <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="/home/images/1212.png" id="img-1" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                      <h5 class="p-1">Organ and Tissue Donation</h5>
                      <p class="p-2">One donor can save up to 8 lives.</p>
                      <p class="p-3 d-none d-md-block">Age alone does not disqualify someone from becoming a donor.</p>
                      <p class="p-4">Your current or past medical history does not prevent you from registering to be a donor. </p>
                      <button id="be-1" type="button" class="btn btn-warning btn-lg" onclick="window.location.href='/admin/donor/index'">Be A Donor</button>
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="/home/images/banner.jpg" id="img-1" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                      <!-- <h5>First slide label</h5>
                      <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/home/images/poster.png" id="img-1" class="d-block w-100" alt="...">
                    <!-- <div class="carousel-caption">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div> -->
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </section>
            
            <section id="about-us" >
              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                            <h2 class="aboutus-title">ABOUT <span class="span-1"> US</span></h2>
                        </div>                        
                    </div>
                </div>
                <div class="row" id="aboutus-row">
                   <div class="col-md-6">
                       <div class="about-img">
                          <div class="embed-responsive embed-responsive-16by9">
                         <video controls poster="/home/images/cover.jpg" src="/home/images/1.mp4"></video>
                            </div>
                          
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="about-text">
                           <p >Today, in Ontario, there are over 1,500 people 
                              waiting for a lifesaving organ transplant. This is their 
                              only treatment option, and every 3 days someone 
                              will die because they did not get their transplant
                              in time.
                              
                             
                               
                              
                               </p>
                           <p> But you can help. When you register your consent 
                              for organ and tissue donation, you let those waiting
                              know that you would help them if you could.
                              </p>
           <!-- Button trigger modal -->
<button  type="button" class="about-button" data-toggle="modal" data-target="#exampleModalCenter">
    Read More
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Facts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>All major religions support organ and tissue 
              donation, or respect an individual’s choice.
              </p>
          <p>One donor can save up to 8 lives through organ 
              donation and enhance the lives of up to 75 more
               through the gift of tissue.
              </p>
          <p>Organ and tissue donation does not impact funeral 
              plans. An open casket funeral is possible.
              </p>
          <p>Age alone does not disqualify someone from
              becoming a donor. The oldest organ donor
              was over 90 and the oldest tissue donor 
              was over 100. There’s always potential to be
               a donor; it shouldn’t stop you from 
              registering.
              </p>
          <p>Your current or past medical history does not 
              prevent you from registering to be a donor. 
              Individuals with serious illnesses can, sometimes, 
              be organ and/or tissue donors. Each potential 
              donor is evaluated on a case-by-case basis.
              </p>
        </div>
  
      </div>
    </div>
  </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </section>

                <section id="Ontario-data" class="Ontario-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                                    <h2 class="aboutus-title">ONTARIO <span class="span-1"> DATA</span></h2>
                                </div>                        
                            </div>
                        </div>
                        <div class="row" id="ondata-row">
                            <div class="col-md-6">
                                <div class="ondata-text">
                                <p class="ondata-p">The need for organ donors in Ontario</p>
                                <p class="ondata-p-2"> <span class="span-2"> C</span>urrently, around 1,600 people in Ontario are waiting for a life-saving organ transplant. And though most of us believe that organ donation is a good thing, just over a quarter of us are registered as donors. Some great strides have been made in Ontario over the past year, but still more needs to be done. You can Spread the Word by encouraging your friends and family to register their consent to become organ and tissue donors.
                                  </p>
                                </div>
                                
                    
                                
                            </div>
                           <div class="col-md-6">
                               <div class="about-img">
                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                      </ol>
                                      <div class="carousel-inner" id="ondata-img">
                                        <div class="carousel-item active">
                                          <!-- <img id="ondata-img-g" src="/home/images/ondata-3.PNG" class="d-block w-100" alt="..."> -->
                                          <div id="main-1" style="width:600px; height:400px;"></div>
                                          <div id="ondata-p-g-1" clas s="carousel-caption ">
                                              <p class="ondata-p-3">Ontarians are currently waiting for an organ <br>
                                                transplant. As of December 31, 2018</p>
                                        
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!-- <img id="ondata-img-g" src="/home/images/ondata-2.PNG" class="d-block w-100" alt="..."> -->
                                            <div id="main-2" style="width:600px; height:400px;"></div>
                                            <div class="carousel-caption ">
                                              <p class="ondata-p-9">Ontarians have received a lifesaving organ transplant since 2003.
                                              </p>
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="carousel-item">
                                          <!-- <img id="ondata-img-g" src="/home/images/ondata-1.PNG" class="d-block w-100" alt="..."> -->
                                          <div id="main-3" style="width:600px; height:400px; color: yellowgreen;"></div>
                                          <div class="carousel-caption ">
                                            <p class="ondata-p-3"> 168,650 Ontarians that have registered to become organ and tissue donors. Reached 67% of our total goal as of December 31, 2018.

                                             
                                  
                                             
                                  </p>
                                  
                                          </div>
                                      </div>
                                       
                                        <div class="carousel-item">
                                          <!-- <img id="ondata-img-g" src="/home/images/ondata-4.PNG" class="d-block w-100" alt="..."> -->
                                          <div id="main-4" style="width:600px; height:400px;"></div>
                                          <div class="carousel-caption">
                                            <p class="ondata-p-3">The Ontarians are registered donors. That’s 4.2 million out of an eligible 12.5 million.

                                            </p>
                                     
                                          </div>
                                      </div>
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                               </div>
                         
                     
                            
                            
                            
                        </div>
                    </div>
                </section>

           
            <section id="Events">
           
                <div class="container" id="events-container-1">
           
                    <div class="row">
                        <div class="col-md-6">
                            <div class="events-text">
                              <p class="events-p-1"> National Pediatric Transplant Week</p>
                                <p class="events-p-2"><span class="span-2"> T</span>his observance is a week at the end of National Donate Life Month that offers donation and transplantation organizations the platform to talk about the powerful message of ending the pediatric waiting list, to engage clinical partners to share their innovative work and patient stories (candidates and recipients), and to honor donor families whose children have saved and healed lives through organ, eye, and tissue donation.</p>
                            </div>
                                               
                       </div>
                       <div class="col-md-6">
                           <div class="events-img">
                               <img id="events-img" src="/home/images/events.png" class="img-fluid" alt="About images">
                        
                           </div>
                       </div>
                
              
        
                        
                        
                        
                    </div>
                </div>

                <div class="container" id="events-container-1">
           
                    <div class="row">
                      
                       <div class="col-md-6">
                           <div class="events-img">
                               <img id="events-img" src="/home/images/events1.png" class="img-fluid" alt="About images">
                        
                           </div>
                       </div>
                
              
        
                        
                        
                        
                  
                    <div class="col-md-6">
                        <div class="events-text">
                          <p class="events-p-3"> Transplant Games</p>
                            <p class="events-p-4"><span class="span-2"> T</span>he Transplant Games are modeled after the Olympics and feature transplant recipients of all ages competing in various athletic events, illustrating the ability of transplantation to extend and enhance life. Athletes receive medals, and living donors and families of deceased donors are honored in special ceremonies for their life-enabling gifts. The National Kidney Foundation started the Games in 1990 and sponsored them every 2 years through 2010. </p>
                        </div>
                                           
                   </div>
                </div>
            </section>

      
            <section id="Story">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2 class="story-p-1">STORIES</h2>
                        <p class="story-p-2">Read some amazing stories about people whose lives have been affected by organ donation and discover what a difference it can make.</p>
                    </div>                        
                </div>
            </div>
            <div class="row" id="story-img-1">
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story1.png" alt="">
                        <div class="overlay">
                            <h2>Organ donation and infants</h2>
                            <a target="_blank" class="info" href="https://globalnews.ca/news/1949595/organ-donation-and-infants-one-familys-brave-story-about-love-loss-and-helping-others/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story-2-1.JPG" alt="">
                        <div class="overlay">
                            <h2>Lindsay, double hand recipient</h2>
                            <a target="_blank" class="info" href="https://unos.org/stories-of-hope/lindsay-double-hand-recipient/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story-3-1.jpg" alt="">
                        <div class="overlay">
                            <h2>Kathy, islet recipient</h2>
                            <a target="_blank" class="info" href="https://unos.org/stories-of-hope/kathy-islet-recipient/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
              
            </div>
            <div class="row" id="story-img-1">
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms" id="story-img-rd">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story4.png" alt="">
                        <div class="overlay">
                            <h2>Ryley's Story</h2>
                            <a target="_blank" class="info" href="https://www.canadiantransplant.com/ryleys-story">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms" id="story-img-rd">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story-5-1.jpg" alt="">
                        <div class="overlay">
                            <h2>Travis, double lung recipient
                              </h2>
                            <a target="_blank" class="info" href="https://unos.org/stories-of-hope/travis-double-lung-recipient/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms" id="story-img-rd">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story-4-1.jpg" alt="">
                        <div class="overlay">
                            <h2>Zion and Zhania, heart recipients
                              </h2>
                            <a target="_blank" class="info" href="https://unos.org/stories-of-hope/zion-and-zhania-heart-recipients/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
              
            </div>
            <div class="row" id="story-img-1">
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms" id="story-img-rd">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story-7-1.jpg" alt="">
                        <div class="overlay">
                            <h2>Chris, living donor</h2>
                            <a target="_blank" class="info" href="https://unos.org/stories-of-hope/chris-living-donor/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms" id="story-img-rd">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story-6-1.jpg" alt="">
                        <div class="overlay">
                            <h2>Hover effect 2</h2>
                            <a target="_blank" class="info" href="https://www.organdonation.nhs.uk/real-life-stories/people-who-have-benefitted-from-receiving-a-transplant/jessica-kidney-transplant-recipient/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms" id="story-img-rd">
                    <div class="hovereffect">
                        <img id="story-img-d" class="img-responsive" src="/home/images/story9.png" alt="">
                        <div class="overlay">
                            <h2>Hover effect 2</h2>
                            <a target="_blank" class="info" href="https://www.organdonation.nhs.uk/real-life-stories/people-who-have-benefitted-from-receiving-a-transplant/wendy-and-richard-caulkin-heart-transplant-and-lung-transplant/">link here</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
              
            </div>
        </div>
    </section>

            <section id="Contact"> 
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                            <h2 class="story-p-1">CONTACT</h2>
                            <p class="story-p-2">Any information you provide will not be used for other commercial purposes and will not be
                              sold, rented, leased or forwarded to any third party.</p>
                              <p id='s' style="color: #dc0a18;"></p>
                        </div>                        
                    </div>
                </div>
                  <form enctype="multipart/form-data">
                      <span class="contact-p">NAME</span><p class="f" style="color: #dc0a18;"></p>
                      <input id="input-1" placeholder="Please enter your name" type="text" name="first_name" class="first_name form-control mb-2">

                      <span class="contact-p">EMAIL</span><p class="e" style="color: #dc0a18;"></p>
                      <input id="input-1" placeholder="Please enter your email" type="email" name="email" class="email form-control mb-2">

                      <span class="contact-p">PHONE</span><p class="p" style="color: #dc0a18;"></p>
                      <input id="input-1" placeholder="Please enter your phone number" type="text" name="phone" class="phone form-control mb-2">
                  
                      <span class="contact-p">MESSAGE</span><p class="m" style="color: #dc0a18;"></p>
                      <textarea id="input-1" style="height:120px;" placeholder="Please enter your message" class="message form-control" name="message"></textarea>
                      
                      <button id="submit-1" type="button" class="submit btn btn-warning btn-lg">Submit</button>
                  </form>
            </div>
            </section>
            <footer>
                <section id="footer-section" class="footer-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-heading-2">
                                    <h3 class="section-title">
                                        <span>Office Address</span>
                                    </h3>
                                </div>
                                
                                <div class="footer-address">
                                    <ul>
                                        <li style="list-style-type:none;" class="footer-contact"><i class="fa fa-home"></i>123, King Street, London ON</li>
                                        <li style="list-style-type:none;" class="footer-contact"><i class="fa fa-envelope"></i><a href="#">lcc751993173@gmail.com</a></li>
                                        <li style="list-style-type:none;" class="footer-contact"><i class="fa fa-phone"></i>+1 (226) 456-7890</li>
                                        <li style="list-style-type:none;" class="footer-contact"><i class="fa fa-globe"></i><a href="#" target="_blank">www.miraclelife.com</a></li>
                                    </ul>
                                </div>
                            </div><!--/.col-md-3 -->
                            
                            
                            <div class="col-md-4">
                                <div class="section-heading-2">
                                    <h3 class="section-title">
                                        <span>Latest Tweet</span>
                                    </h3>
                                </div>
                                
                                <div class="latest-tweet">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-twitter fa-2x media-object"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">About 15 days ago</h4>
                                            <p>Life miracle corporation just made a presentation about organ donation in Fanshawe College on March 13th, 2019.  Check it out  <a target="_blank" href="https://twitter.com/Lifemiracle3">here</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.col-md-3 -->
                            
                            <div class="col-md-4">
                                <div class="section-heading-2">
                                    <h3 class="section-title">
                                        <span>Stay With us</span>
                                    </h3>
                                </div>
                                <div class="subscription">
                                    <p>JOIN IN THE DONOR </p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your E-mail" id="name" required data-validation-required-message="Please enter your name.">
                                        <input id="subscribe" type="submit" class="btn btn-primary" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                            
         
                        </div><!--/.row -->
                    </div><!-- /.container -->
                </section>
                <!-- End Footer Section -->
                
                
                <!-- Start CCopyright Section -->
                <div id="copyright-section" class="copyright-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="copyright">
                                    Copyright © 2019. All Rights Reserved.Design and Developed by <a href="http://www.chaochaoli.ca">Miracle Life</a>
                                </div>
                            </div>
                            
                            <div class="col-md-5">
                                <div class="copyright-menu pull-right">
                                    <ul>
                                        <li>
                           
                                            <a class="active" href="index.php">HOME <span class="sr-only">(current)</span></a>
                                          </li>   <li>  
                                            <a  href="#about-us">ABOUT</a>
                                          </li><li>
                                              <a  href="#Ontario-data">ONTARIO DATA</a>
                                            </li>
                                     <li>
                                                <a  href="#Events">EVENTS</a>
                                              </li>
                                                  <a  href="#Story">STORY</a>
                                          </li><li>
                                                    <a  href="#Contact">CONTACT</a>
                                                  </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/.row -->
                    </div><!-- /.container -->
                </div>
                <!-- End CCopyright Section -->
                
                

            </footer>
    <script src="/home/js/main.js"></script>
    <script src="/home/js/query.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
    $('.first_name').blur(function(){
      var nameformat = /^[a-zA-Z]+[a-zA-Z]+$/;
      if(!nameformat.test($('.first_name').val())){
        $('.f').html('Unvaild name!');
      }else{
        $('.f').html('');
      }
    });

    $('.email').blur(function(){
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(!mailformat.test($('.email').val())){
        $('.e').html('Fill correct email please!');
      }else{
        $('.e').html('');
      }
    });

    $('.phone').blur(function(){
      var phoneformat = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
      if(!phoneformat.test($('.phone').val())){
        $('.p').html('Unvaild phone number!');
      }else{
        $('.p').html('');
      }
    });

    $('.message').blur(function(){
      if($('.message').val().length < 3){
        $('.m').html('Give me more comments please!');
      }else{
        $('.m').html('');
      }
    });

    $('.submit').click(function(){

      $.get('/home/contact/index', function(msg){
            if(msg == 5){
								$('#s').text('Thank you for contacting me. I will be in touch with you very soon.');
								$('.first_name').text('');
								$('.email').text('');
								$('.phone').text('');
								$('.message').text('');

							}else if(msg == 1 || msg == 2){
								$('#s').text('Something Wrong! Checking the information please!');
							}
            },'json');

      // $.post('/home/contact/index', $('form').serialize(), function(msg){
      //       if(msg == 5){
			// 					$('#s').text('Thank you for contacting me. I will be in touch with you very soon.');
			// 					$('.first_name').text('');
			// 					$('.email').text('');
			// 					$('.phone').text('');
			// 					$('.message').text('');

			// 				}else if(msg == 1 || msg == 2){
			// 					$('#s').text('Something Wrong! Checking the information please!');
			// 				}
      //       });

    //   $.ajax({
    //     type: 'post',
    //     url:'/home/contact/index',
    //     success: function(msg){
    //         if(msg == 5){
		// 						$('#s').text('Thank you for contacting me. I will be in touch with you very soon.');
		// 						$('.first_name').text('');
		// 						$('.email').text('');
		// 						$('.phone').text('');
		// 						$('.message').text('');

		// 					}else if(msg == 1 || msg == 2){
		// 						$('#s').text('Something Wrong! Checking the information please!');
		// 					}
    //         },
    //     dataType: 'json',
    //     data: $('form').serialize(),
    //   });
    });
    </script>        
  </body>
</html>