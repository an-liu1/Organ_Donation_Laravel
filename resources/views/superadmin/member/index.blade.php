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
    <title>User management</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> Main <span class="c-gray en">&gt;</span> User Center <span class="c-gray en">&gt;</span> User List <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="text-c"> Date：
            <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;"> -
            <input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20"> 
            <span class="l">
                <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> Batch Remove</a> 
                <a href="javascript:;" onclick="member_add('new User','/superadmin/member/add','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> New User</a>
                <a href="javascript:;" onclick="location.href = '/superadmin/member/export'" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe644;</i> Export User</a>
                <a href="javascript:;" onclick="_import('Import','/superadmin/member/import','410','350')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe645;</i> Import User</a>
            </span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                    <tr class="text-c">
                        <th width="25">
                            <input type="checkbox" name="" value="">
                        </th>
                        <th width="40">ID</th>
                        <th width="100">Username</th>
                        <th width="100">Name</th>
                        <th width="40">Points</th>
                        <th width="90">Tel</th>
                        <th width="150">Email</th>
                        <th width="130">Register time</th>
                        <th width="70">last_login_time</th>
                        <th width="70">last_login_ip</th>
                        <th width="70">Daily Click</th>
                        <th width="100">Operation</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($data as $val)
                    <tr class="text-c">
                        <td>
                            <input type="checkbox" value="{{$val -> id}}" name="">
                        </td>
                        <td>{{$val -> id}}</td>
                        <td>{{$val -> username}}</td>
                        <td>{{$val -> name}}</td>
                        <td>{{$val -> points}}</td>
                        <td>{{$val -> tel}}</td>
                        <td>{{$val -> email}}</td>
                        <td>{{$val -> created_at}}</td>
                        <td>{{$val -> last_login_time}}</td>
                        <td>{{$val -> last_login_ip}}</td>
                        <td class="td-status">
                        	@if($val -> status == '1')
                        	<span class="label label-success radius">Daily check</span>
                        	@else
                        	<span class="label label-danger radius">Checked in</span>
                        	@endif
                        </td>

                        <td class="td-manage"> 
                            <a title="edit" href="javascript:;" onclick="member_edit('edit','/superadmin/member/edit/'+ {{$val -> id}},'4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                            {{-- <a style="text-decoration:none" class="ml-5" onClick="change_password('Change Password','change-password.html','10001','600','270')" href="javascript:;" title="Change Password"><i class="Hui-iconfont">&#xe63f;</i></a> --}}
                            <a title="delete" href="javascript:;" onclick="member_del(this,{{$val -> id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="/superadmin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/superadmin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <script type="text/javascript" src="/superadmin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/superadmin/lib/laypage/1.2/laypage.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(function() {
        $('.table-sort').dataTable({
            "aaSorting": [
                [1, "desc"]
            ], 
            "bStateSave": true, 
        });

    });
    function member_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    function _import(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    function member_show(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    function member_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    function member_del(obj, id) {
        layer.confirm('Are you sure to delete？',  {btn: ['Yes','No']}, function(index) {
            $.ajax({
                type: 'get',
                url: '/superadmin/member/delete/' + id,
                dataType: 'json',
                success: function(data) {
                   if(data.status == 1){
                    layer.msg('Deleted!', { icon: 1, time: 1000 });
                   }else{
                    layer.msg('Failed to delete!', { icon: 5, time: 1000 });
                   }
                },
                error: function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    </script>
</body>

</html>