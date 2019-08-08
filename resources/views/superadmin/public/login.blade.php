<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/admin/Css/login.css" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="/admin/Css/font-awesome.css" type="text/css" media="all">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>

<body>
    <h1 class="title-agile text-center">Miracle Life - organ donation</h1>
    <div class="content-w3ls">
        <div class="content-top-agile">
            <h2>Administrator sign in</h2>
        </div>
        <div class="content-bottom">
            <form action="/superadmin/public/check" method="post">
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
                        {{-- <span class="fa fa-key" aria-hidden="true"></span> --}}
                        <div class="wthree-field">
                            <input name="captcha" id="captcha" type="text" placeholder="captcha" required>
                        </div>
                        <img class="captcha" src="{{captcha_src()}}" style="cursor:pointer;">
                    </div>
                    {{csrf_field()}}
                <ul class="list-login">
                    <li class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox" name="online" value="1">
                            <span class="slider round"></span>
                            keep me signed in
                        </label>
                    </li>
                    <li>
                        <a href="/admin/public/signup" class="text-right">Sign Up</a>
                    </li>
                    <li class="clearfix"></li>
                </ul>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="sign in" />
                </div>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>Copyright &copy; 2019 Miracle Life | Organ Donation. All rights reserved</p>
        </p>
    </div>
    <script src="/home/js/query.js"></script>
    <script src="/home/layer/layer.js"></script>
    <script>
        var src = $('.captcha').attr('src');
        $('.captcha').click(function(){
            $('.captcha').attr('src', src + '$_=' + Math.random());
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
</body>
<!-- //Body -->

</html>