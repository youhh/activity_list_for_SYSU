<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
	<head>
		<style type="text/css">
		table th
		{
			width: 155px;
		}  
		</style>
	</head>

	<body>
		<table border="1" cellpadding = "8">
		<tr>
		<th>&nbsp;</th>
		<th>时间</th>
		<th>星期一</th>
		<th>星期二</th>
		<th>星期三</th>
		<th>星期四</th>
		<th>星期五</th>
		<th>星期六</th>
		<th>星期天</th>
		</tr>
		<?php for($i=0;$i<15;$i++){ ?>
			<tr/>
			<?php for($j=0;$j<9;$j++){ ?>
				<?php if($j==0){ ?>
					<th>
					<?php echo $i+1;?>
					</th>
				<?php } else if($j == 1){ ?>
					<th>
					<?php  $time=$i*55; $min=$time%60; $hour = ($time-$min)/60 ; $hour+=8; if($min < 10){ $min = '0'.$min; } echo $hour.":".$min; ?>
					</th>
				<?php } else{ ?>
					<th>
					<?php echo ($data[$i][$j]); ?>
					</th>
				<?php } ?>
			<?php }; ?>
			<tr/>
		<?php }; ?>
		</table>
	</body>
</html>