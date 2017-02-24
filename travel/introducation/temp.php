<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">

	</head>
	<body>
		<div class="panel-group" id="accordion">
			<



		  <div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"
						   href="#collapseTwo">
							点击我进行展开，再次点击我进行折叠。第 2 部分--show 方法
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
						lomo.
					</div>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"
						   href="#collapseThree">
							点击我进行展开，再次点击我进行折叠。第 3 部分--toggle 方法
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
						lomo.
					</div>
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"
						   href="#collapseFour">
							点击我进行展开，再次点击我进行折叠。第 4 部分--options 方法
						</a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
						lomo.
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function () { $('#collapseFour').collapse({
				toggle: false
			})});
			$(function () { $('#collapseTwo').collapse('show')});
			$(function () { $('#collapseThree').collapse('toggle')});
			$(function () { $('#collapseOne').collapse('hide')});
		</script>
		<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	</body>
</html>
