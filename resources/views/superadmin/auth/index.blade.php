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
    <title>Authority Management</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> Main <span class="c-gray en">&gt;</span>  Administrator Management <span class="c-gray en">&gt;</span> Authority Management <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> Batch Remove</a> <a href="javascript:;" onclick="admin_permission_add('New Authority','/superadmin/auth/add','','400')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> New Authority</a></span>  </div>
        <table class="table table-border table-bordered table-bg">
            <thead>
                <tr>
                    <th scope="col" colspan="8">Authorities</th>
                </tr>
                <tr class="text-c">
                    <th width="25">
                        <input type="checkbox" name="" value="">
                    </th>
                    <th width="40">ID</th>
                    <th width="150">Auth Name</th>
                    <th width="150">Controller</th>
                    <th width="150">Action</th>
                    <th width="150">Parent Auth</th>
                    <th width="150">Is Nav</th>
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
                    <td>{{$val -> auth_name}}</td>
                    <td>@if($val -> controller){{$val -> controller}}@else N/A @endif</td>
                    <td>@if($val -> action){{$val -> action}}@else N/A @endif</td>
                    <td>
                        @if($val -> parent_name)
                            {{$val -> parent_name}}
                        @else
                            Top Authority
                        @endif
                    </td>
                    <td>@if($val -> is_nav == '1')Yes @else No @endif</td>
                    <td><a title="eidt" href="javascript:;" onclick="admin_permission_edit('edit','','1','','310')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_permission_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="/superadmin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/superadmin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    <script type="text/javascript">

    $(function(){

        $('table').dataTable({
            "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] }],
            "aaSorting": [[ 1, "asc" ]],
        });
    });
    function admin_permission_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    function admin_permission_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    function admin_permission_del(obj, id) {
        layer.confirm('Delet？', function(index) {
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data) {
                    $(obj).parents("tr").remove();
                    layer.msg('Deleted!', { icon: 1, time: 1000 });
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