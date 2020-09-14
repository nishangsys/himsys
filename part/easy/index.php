<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Build CRUD DataGrid with jQuery EasyUI - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="js/easyui.css">
	<link rel="stylesheet" type="text/css" href="js/icon.css">
	<link rel="stylesheet" type="text/css" href="js/demo.css">
	<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="js/jquery.edatagrid.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: 'get_users.php',
				saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php'
			});
		});
	</script>
</head>
<body>
	
	
	<table id="dg" title="NISHANG SYSTEMS DATA SHEET" style="width:100%;height:auto; overflow:hidden; font-size:16px"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="name" width="50" editor="{type:'validatebox',options:{required:true}}">Names</th>
				<th field="age" width="30" editor="{type:'validatebox',options:{required:true}}">Position</th>
				<th field="idcard" width="30" editor="text">ID Card No</th>
                <th field="tel" width="30" editor="text">Telephone</th>
                <th field="cate" width="30" editor="text">Category</th>
                
                <th field="adress" width="30" editor="text">Address</th>
                <th field="email" width="40" editor="text">Email</th>
                <th field="dob" width="20" editor="text">Date of Birth</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
    <ul>
    <li>
		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Delete Records</a></li>
		    <li><a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a></li>
</li>
</ul>
	</div>
	
</body>
</html>