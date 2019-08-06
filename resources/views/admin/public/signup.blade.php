﻿<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/admin/Css/login.css" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="/admin/Css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <h1 class="title-agile text-center">Miracle Life - organ donation</h1>
    <div class="content-w3ls">
        <div class="content-top-agile">
            <h2>sign up</h2>
        </div>
        <div class="content-bottom">
            <form id="submitForm">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" placeholder="username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="password" type="Password" placeholder="password" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-male" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="name" id="fullname" type="text" placeholder="full name" required>
                    </div>
				</div>
				<div class="field-group">
                    <span class="fa fa-phone" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="tel" id="tel" type="text" placeholder="phone number" required>
                    </div>
				</div>
				<div class="field-group">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="email" id="email" type="email" placeholder="email" required>
                    </div>
                </div>
                {{csrf_field()}}
                <ul class="list-login">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                        <label class="form-check-label" for="exampleCheck1">I agree to the <a data-toggle="modal" data-target="#exampleModalLong">Terms & Conditions</a></label>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Terms of Use</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                    <h2>Appropriateness of Participation</h2>
                                    <p> must be at least 16 years of age to create a campaign page. All content posted to your page will be reviewed and moderated by TGLN according to the following moderation guidelines. Upon submitting content to the Website, you grant to TGLN a non-exclusive license to use, reproduce and display such content for any TGLN purpose.<P>
                                    
                                    <p>Postings must be appropriate. Postings that demonstrate elements of the following will be deleted by the TGLN moderator, in TGLN's sole discretion:
                                    
                                    Posting of personal information about other individuals (including mention of a donor, recipient or potential recipient by name or other identifier such as specific nature of their relationship with page creator – mother, father, etc.) Crude, profane, hateful, threatening or salacious language
                                    Discrimination on any basis, including physical or mental disability, race, creed, colour, sex, or country of origin
                                    Harassment or defamation of any group or individual
                                    Photos featuring other individuals, trademarks, nudity or inappropriate behaviour
                                    Inappropriate behaviour includes, but is not limited to, criminal activity, violence, sexually explicit or suggestive activity
                                    Soliciting living donations</p>

                                    <h2>Community where they reside</h2>
                                    <p>Year organ donation or transplant took place, or time period during which they have been waiting for transplant
                                    Type of organ donation or transplant
                                    Nature of their relationship in general terms (loved one, family member, friend), if referring to a third party, who is a donor, recipient or potential recipient
                                    Users may not post information about:
                                    
                                    Community where the recipient or donor, as applicable, resides or resided
                                    Hospital where the donation or transplant took place
                                    Names of any involved clinicians
                                    Date (other than year) the organ donation or transplant took place
                                    Moderators will also review content for "data linkage" issues, i.e. information that may not identify third-parties explicitly but could reasonably, in combination with other information, come to identify third-parties.
                                    
                                    Moderation of Outbound Links for Organizational Pages:
                                    
                                    Only outbound link permitted is an organization's main web page
                                    Views Expressed are those of Users
                                    Although TGLN moderates the content of the Website, the content appearing in the campaign pages does not necessarily reflect the views of TGLN, and TGLN assumes no responsibility or liability for the content or for any claims, damages or losses resulting from any use of the Website. You are solely responsible for the content of your campaign page and any claims that may arise relating to your page.</p>
                                    
                                    <h2>Links</h2>

                                    <p>Links from the Website to other sites, where available, do not constitute an endorsement of these sites by TGLN. These links are provided as an information service only. It is your responsibility to evaluate the content and usefulness of information obtained from other sites. TGLN is not responsible for the accuracy or reliability of any content posted on any linked site.
                                    
                                    Information that TGLN May Log
                                    Any information that you disclose on the Website should be considered public and you should therefore exercise caution when deciding what to disclose in such places (including your personal information). Be aware that the information that is provided on the Website may be logged by TGLN, as further described below.
                                    
                                    Server Log Information that TGLN Gathers
                                    The Website logs and displays, in real time, the number of unique visitors to the online donor registry site from your campaign page.
                                    
                                    TGLN web servers generate logs that may contain information about computers or devices used to access the Website or about general activity on the Website, such as the following:
                                    
                                    Internet address of computer or device
                                    Type of browser or other application used
                                    The operating system of the computer or device
                                    Web pages requested by users
                                    Referring web pages
                                    Time spent on the Website
                                    This information is collected and used for Website administration purposes. TGLN server administrators may produce summary reports from these logs and share that information with Website content managers who typically use this information in aggregate to understand what pages are popular, how users are navigating to and within the Website, and when the Website is used most frequently. TGLN web server administrators also use logs for error identification and tracking, as well as audit purposes.</p>
                                    
                                    <h2>Your Personal Information</h2>
                                    <p>Please see TGLN's Privacy Policy to understand the limited purposes for which TGLN may use personal information that you provide via the Website. The Privacy Policy discusses, for example, when and why TGLN may wish to contact you directly about your campaign page.</p>
                                    
                                    <h2>Cookies</h2>
                                    <p>Cookies are small pieces of data stored by a web browser on a user's computer. Cookies are often used to retain information about preferences and pages a user has visited. For example, when a user visits some sites on the web, the user may see a "Welcome Back" message. The first time that user visited that website, a cookie was stored on the user's computer; upon the user's return, the cookie is read again.
                                    
                                    The Website uses cookies to identify you when you first visit the Website and when you return. Cookies are used so you will not have to repeatedly enter user names and passwords when you go to different parts of the Website.
                                    
                                    You can refuse to accept cookies, disable cookies and/or remove cookies from your hard drive. Taking any of these actions may affect your ability to use the Website.</p>
                                    
                                    <h2>Continuity of Service</h2>
                                    <p>As a result of the dynamic nature of the Internet, resources that are publicly available one day may require restricted access the next, and the location of items may change as menus, pages, and files are reorganized. TGLN does not warrant that the service will be uninterrupted or error free. TGLN may make improvements and/or changes in the information and/or programs described herein at any time.
                                    
                                    TGLN does not represent or warrant that the Website or its servers are free of viruses or other harmful components.</p>
                                    
                                    <h2>Limitation of Liability</h2>

                                    <p>You expressly agree that use of the Website is at your sole risk and you are responsible for your actions while using the Website.
                                    
                                    The content published via the Website could contain technical inaccuracies or typographical errors.
                                    
                                    In no event will TGLN be liable for any damages whatsoever arising out of or in connection with the use of the Website or your reliance on the content.</p>
                                    
                                    <h2>Agreement</h2>
                                    <p>By accepting these Terms of Use, you agree to comply with the Terms of Use; you will indemnify TGLN for any and all claims arising from your use of or posting of content on the Website; you will abide by all applicable provincial and federal laws. These Terms of Use are governed by the laws of Ontario, Canada.
                                    
                                    If you do not agree to accept these Terms of Use, you may close this window now and stop the Website registration process. Once registered, your continued use of the Website signals your acceptance of these Terms of Use.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                </ul>

				<ul class="form-check">
                    <li class="switch-agileits">
                        <label class="switch">already have an account?</label>
                        <a href="/admin/public/login" class="text-right" style="color:red;">Log in here</a>
                    </li>
                    <li class="clearfix"></li>
                </ul>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="submit" />
                </div>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>Copyright &copy; 2019 Miracle Life | Organ Donation. All rights reserved</p>
    </div>
</body>
<!-- //Body -->
<script src="/admin/layer/layer.js"></script>
<script type="text/javaScript">
    // $('#saveForm').click(function(){
    //     if(!$('#exampleCheck1').attr('checked')){
    //     layer.alert('Please view the policy first, thank you!!',{title:'Wrong Tips',icon: 5});
    // }
    // });

    $('form').submit(function(){

        $.ajax({
            type: 'post',
            url: '/admin/public/signup',
            data: $('#submitForm').serialize(),
            dataType: 'json',
            success: function(msg) {
                if(msg.status == '1'){
                    layer.alert('Congratulation!!Successfully registered and you get 300 ponits!!!',{title:'Successfully Registered',icon: 1},function(){
                        window.location.href="/admin/public/login";
                    });
                }else{
                    layer.alert('Hummmm, something worng! Try again please!',{title:'Something Worng',icon: 5});
                }
            },
        });
        return false;
    });

    @if (count($errors) > 0)
            //以JavaScript弹窗形式输出错误的内容
            var allError = '';
            @foreach ($errors -> all() as $error)
               allError += "{{$error}}<br/>"; 
            @endforeach
            //输出错误信息
            layer.alert(allError,{title:'Wrong Tips',icon: 5});
        @endif
</script>
</html>