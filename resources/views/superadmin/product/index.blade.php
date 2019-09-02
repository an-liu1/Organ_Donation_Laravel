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
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/style.css" />
    <title>Redeemed Products</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> Main <span class="c-gray en">&gt;</span> Redeemed Products<span class="c-gray en">&gt;</span> Redeemed Products List <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title=refresh><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="text-c"> Date：
            <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;"> -
            <input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> Batch Remove</a> <a href="javascript:;" onclick="admin_add('new form','admin-add.html','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> New Form</a></span> </div>
        <table class="table table-border table-bordered table-bg">
            <thead>
                <tr>
                    <th scope="col" colspan="11">Donor Form</th>
                </tr>
                <tr class="text-c">
                    <th width="15">
                        <input type="checkbox" name="" value="">
                    </th>
                    <th width="20">ID</th>
                    <th width="90">Name</th>
                    <th width="100">Points Use</th>
                    <th width="100">Product</th>
                    <th width="100">Image</th>
                    <th width="100">Redeem Time</th>
                    <th width="100">Operation</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($product as $val)
                <tr class="text-c">
                    <td>
                        <input type="checkbox" value="{{$val -> id}}" name="">
                    </td>
                    <td>{{$val -> id}}</td>
                    <td>{{$val -> name}}</td>
                    <td>{{$val -> points}}</td>
                    <td>{{$val -> products}}</td>
                    <td><img src="/admin/images/{{strtolower($val -> products)}}.jpg" width="100"></td>
                    <td>{{$val -> redeem_time}}</td>
                    <td class="td-manage">
                        <a title="delete" href="javascript:;" onclick="admin_del(this,{{$val -> id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="/superadmin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/superadmin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/superadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <script type="text/javascript" src="/superadmin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/superadmin/lib/laypage/1.2/laypage.js"></script>
    <script type="text/javascript">
    $('table').dataTable({
    	"aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] }],
    	"aaSorting": [[ 1, "desc" ]],
    });

    function admin_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }
    function admin_del(obj, id) {
        layer.confirm('Are u sure to delete the donor form？', {btn: ['Yes','No']}, function(index) {
            $.ajax({
                type: 'get',
                url: '',
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
    function admin_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    </script>
</body>

</html>