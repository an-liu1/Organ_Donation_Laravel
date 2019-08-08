<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="/superadmin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/superadmin/lib/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/style.css" />
    <!-- 引入webuploader的需要css文件 -->
    {{-- <link rel="stylesheet" type="text/css" href="/statics/webuploader-0.1.5/webuploader.css"> --}}

    <!--[if IE 6]>
<script type="text/javascript" src="/superadmin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>Eidt User</title>
</head>

<body>
    <article class="page-container">
        <form class="form form-horizontal" id="form-member-add">
            @foreach ($user as $val)
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Username：</label>
                <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$val -> username}}" id="username" name="username">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Name：</label>
                <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$val -> name}}" placeholder="" id="name" name="name">
                </div>
            </div>
            <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Password：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" value="{{$val -> password}}" placeholder="" id="password" name=password">
                </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Confirm Password：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="password" class="input-text" value="" placeholder="" id="Confirm_pass" name="Confirm_pass">
                    </div>
                </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Telephone Number：</label>
                <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$val -> tel}}" placeholder="" id="tel" name="tel">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Email：</label>
                <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$val -> email}}" name="email" id="email">
                </div>
            </div>          
			
            {{csrf_field()}}
            @endforeach
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;">
                </div>
            </div>
        </form>
    </article>

    <script type="text/javascript" src="/superadmin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/superadmin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
    {{-- <script type="text/javascript" src="/superadmin/lib/My97DatePicker/4.8/WdatePicker.js"></script> --}}
    <script type="text/javascript" src="/superadmin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/superadmin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    {{-- <script type="text/javascript" src="/superadmin/lib/jquery.validation/1.14.0/messages_zh.js"></script> --}}

    {{-- <script type="text/javascript" src="/statics/webuploader-0.1.5/webuploader.js"></script> --}}
    {{-- <script type="text/javascript" src="/statics/avatar.js"></script> --}}
    <script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-member-add").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 2,
                    maxlength: 20
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                Confirm_pass: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                tel: {
                    required: true,
                    isMobile: true,
                },
                email: {
                    required: true,
                    email: true,
                },
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid",
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type: 'post',
                    url: '',
                    success: function(data) {
                        if(data == 1){
                        	layer.msg('Successfully edited this account!', { icon: 1, time: 2000 },function(){
	                        	var index = parent.layer.getFrameIndex(window.name);
				                // parent.$('.btn-refresh').click();
				                parent.window.location = parent.window.location;
				                parent.layer.close(index);
	                        });
                        }else{
                        	layer.msg('Failed to edit. Try again!', { icon: 2, time: 2000 });
                        }
                    },
                    error: function(XmlHttpRequest, textStatus, errorThrown) {
                        layer.msg('error!', { icon: 2, time: 1000 });
                    }
                });
            }
        });
    });
    </script>
</body>

</html>