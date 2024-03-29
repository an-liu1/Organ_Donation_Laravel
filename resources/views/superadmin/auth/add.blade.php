<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/style.css" />
</head>

<body>
    <article class="page-container">
        <form class="form form-horizontal" id="form-admin-add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Auth Name：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" id="auth_name" name="auth_name">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3">Controller：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" id="controller" name="controller">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3">Action：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" placeholder="" name="action" id="action">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Parent Auth：</label>
                <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="pid" size="1">
				<option value="0">Top Authority</option>
				@foreach($data as $val)
					<option value="{{$val -> id}}">{{$val -> auth_name}}</option>
				@endforeach
			</select>
			</span> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>Is Nav：</label>
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                    <div class="radio-box">
                        <input name="is_nav" type="radio" value="1" id="is_nav-1" checked>
                        <label for="is_nav-1">Yes</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="is_nav-2" value="2" name="is_nav">
                        <label for="is_nav-2">No</label>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
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
    <script type="text/javascript" src="/superadmin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/superadmin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/superadmin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript">
    $(function() {
    	$('#controller,#action').parents('.row').hide()
    	$('select').change(function(){
    		var _val = $(this).val();
    		if(_val > 0){
    			$('#controller,#action').parents('.row').show(300)
    		}else{
    			$('#controller,#action').val('');
    			$('#controller,#action').parents('.row').hide(300)
    		}
    	});
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-admin-add").validate({
            rules: {
                auth_name: {
                    required: true,
                    minlength: 4,
                    maxlength: 16
                },
                is_nav: {
                    required: true,
                },
                pid: {
                    required: true,
                },
            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid",
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type: 'post',
                    url: "",
                    success: function(data) {
                        if(data == '1'){
                        	layer.msg('Successfully Added!', { icon: 1, time: 2000 },function(){
	                        	var index = parent.layer.getFrameIndex(window.name);
				                parent.$('.btn-refresh').click();
				                parent.layer.close(index);
	                        });
                        }else{
                        	layer.msg('Failed to add!', { icon: 2, time: 2000 });
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