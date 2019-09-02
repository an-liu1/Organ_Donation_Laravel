<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/superadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/superadmin/static/h-ui.admin/css/style.css" />
<title>Organ Donation Superadmin</title>
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">Organ Donation</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li>{{@Auth::guard('superadmin') -> User() -> role -> role_name}}</li>
				<li class="dropDown dropDown_hover">
					<a href="#" class="dropDown_A">{{Auth::guard('superadmin') -> User() -> username}}<i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" onClick="myselfinfo()">Your Profile</a></li>
						<li><a href="/superadmin/public/logout"">Switch Account</a></li>
						<li><a href="/superadmin/public/logout">Log Out</a></li>
				</ul>
			</li>
				<li id="Hui-msg"> <a href="#" title="message"><span class="badge badge-danger">2</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
				<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" data-val="default" title="Default(Black)">Default(Black)</a></li>
						<li><a href="javascript:;" data-val="blue" title="Blue">Blue</a></li>
						<li><a href="javascript:;" data-val="green" title="Green">Green</a></li>
						<li><a href="javascript:;" data-val="red" title="Red">Red</a></li>
						<li><a href="javascript:;" data-val="yellow" title="Yellow">Yellow</a></li>
						<li><a href="javascript:;" data-val="orange" title="Orange">Orange</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe72d;</i> Donor Form<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/superadmin/form/index" data-title="Donor Form" href="javascript:void(0)">Donor Form</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe66f;</i> Redeemed Products<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/superadmin/product/index" data-title="Redeemed Products" href="javascript:;">Redeemed Products</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> Users Management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/superadmin/member/index" data-title="Users List" href="javascript:;">Users List</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> Manager Management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/superadmin/role/index" data-title="Role Management" href="javascript:void(0)">Role Management</a></li>
					<li><a data-href="/superadmin/auth/index" data-title="Authority Management" href="javascript:void(0)">Authority Management</a></li>
					<li><a data-href="/superadmin/manager/index" data-title="Administrator List" href="javascript:void(0)">Administrator List</a></li>
			</ul>
		</dd>
	</dl>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="My Panel" data-href="/superadmin/member/index">My Panel</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="/superadmin/member/index"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">closethis </li>
		<li id="closeall">closeall </li>
</ul>
</div>
<script type="text/javascript" src="/superadmin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/superadmin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/superadmin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/superadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/superadmin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
</body>
</html>