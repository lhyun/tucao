<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>后台管理</title>
		<link rel="stylesheet" type="text/css" href="/tptest/Public/Css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="/tptest/CosWall/Admin/Public/Css/jquery.dataTables.min.css"/>
		<script src="/tptest/Public/Js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="/tptest/Public/Js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="/tptest/CosWall/Admin/Public/Js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
		
	</head>
	<body>
		<header class="page-header">
			<ul class="nav nav-pills ">
				<li>
					<a href="#">
						内容管理
					</a>
				</li>
				<li>
					<a class="exit" href="<?php echo U('Admin/Index/destr');?>">
						登出
					</a>
				</li>
			</ul>
		</header>
		<section class="container-fluid">
			<table class="table table-hover table-striped" id="cosCons">
				<thead>
				<tr>
					<th>ID</th>
					<th>用户名</th>
					<th>内容</th>
					<th>发表日期</th>
					<th>操作</th>
				</tr>
				</thead>
				<tbody><?php if(is_array($cosCons)): $i = 0; $__LIST__ = $cosCons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><tr>
					<td class="id"><?php echo ($co["id"]); ?></td>
					<td class="uname"><?php echo ($co["user_id"]); ?></td>
					<td class="content"><?php echo ($co["content"]); ?></td>
					<td class="pdate"><?php echo ($co["date"]); ?></td>
					<td class="handle"><a href="#">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody>
				
				
			</table>
		</section>
		<script type="text/javascript" charset="utf-8">
			var deleUrl = "<?php echo U('Index/delete');?>"
			$(function() {
				$("#cosCons").dataTable();
				$(".handle a").click(function(){
					if (!confirm("确认要删除？")) {
						window.event.returnValue = false;
						return;
					}
					var $deleNode =  $(this).parent().parent();
					//ajax
					$.post(deleUrl,{"deleID":$deleNode.children(":first").text()},
					function(msg){
						//删除失败
						if(!msg.status){
							//添加提示属性（基本用不到。。。）
							$(this).attr("data-toggle","popover");
							$(this).attr("data-trigger","focus");
							$(this).attr("data-content","删除失败");
							$(this).popover('toggle');
						}
						//删除成功
						else{
							$deleNode.remove();
						}
					});
				});
				
			});
		</script>
	</body>
</html>