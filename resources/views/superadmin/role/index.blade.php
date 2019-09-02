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
    <title>Role Management</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> Main <span class="c-gray en">&gt;</span> Administrator Management <span class="c-gray en">&gt;</span> Role Management <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> Batch Remove</a> <a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('New Role','/superadmin/role/assign','800')"><i class="Hui-iconfont">&#xe600;</i> New Role</a> </span> </div>
        <table class="table table-border table-bordered table-hover table-bg">
            <thead>
                <tr>
                    <th scope="col" colspan="6">Role Management</th>
                </tr>
                <tr class="text-c">
                    <th width="25">
                        <input type="checkbox" value="" name="">
                    </th>
                    <th width="40">ID</th>
                    <th width="100">Role Name</th>
                    <th width="150">Authorized id</th>
                    <th width="150">Authorized ac</th>
                    <th width="70">Operation</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($data as $val)
                <tr class="text-c">
                    <td>
                        <input type="checkbox" value="{{$val -> id}}" name="">
                    </td>
                    <td>{{$val -> id}}</td>
                    <td>{{$val -> role_name}}</td>
                    <td>{{$val -> auth_ids}}</td>
                    <td>{{$val -> auth_ac}}</td>
                    <td class="f-14">
                    	<a title="Assigning permissions" href="javascript:;" onclick="admin_role_assign('Assigning permissions','/superadmin/role/assign','{{$val -> id}}')" style="text-decoration:none"><i class="Hui-iconfont">&#xe603;</i></a>
                    	<a title="Eidt" href="javascript:;" onclick="admin_role_edit('Edit','admin-role-add.html','1')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
                    	<a title="Delete" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="/superadmin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/superadmin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <script type="text/javascript" src="/superadmin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    function admin_role_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    function admin_role_assign(title, url, id, w, h) {
        layer_show(title, url + '?id=' + id, w, h);
    }
    function admin_role_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    </script>
</body>

</html>