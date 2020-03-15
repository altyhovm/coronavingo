<?php
    require_once('header.php');
    $row_0 = array("1","2","3","4","5","6","7","8","9");
    $row_1 = array("10","11","12","13","14","15","16","17","18","19");
    $row_2 = array("20","21","22","23","24","25","26","27","28","29");
    $row_3 = array("30","31","32","33","34","35","36","37","38","39");
    $row_4 = array("40","41","42","43","44","45","46","47","48","49");
    $row_5 = array("50","51","52","53","54","55","56","57","58","59");
    $row_6 = array("60","61","62","63","64","65","66","67","68","69");
    $row_7 = array("70","71","72","73","74","75","76","77","78","79");
    $row_8 = array("80","81","82","83","84","85","86","87","88","89","90");
?>
<div id="card">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_2);
					   echo $row_2[$rand_index];
					   array_splice($row_2, $rand_index, 1);
				   ?>
			   </td>
				<td>
					<?php
					   $rand_index = array_rand($row_3);
					   echo $row_3[$rand_index];
					   array_splice($row_3, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_5);
					   echo $row_5[$rand_index];
					   array_splice($row_5, $rand_index, 1);
				   ?>
			   </td>
				<td>
					<?php
					   $rand_index = array_rand($row_6);
					   echo $row_6[$rand_index];
					   array_splice($row_6, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_8);
					   echo $row_8[$rand_index];
					   array_splice($row_8, $rand_index, 1);
				   ?>
			   </td>
			</tr>
			<tr>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_1);
					   echo $row_1[$rand_index];
					   array_splice($row_1, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_3);
					   echo $row_3[$rand_index];
					   array_splice($row_3, $rand_index, 1);
				   ?>
			   </td>
				<td>
					<?php
					   $rand_index = array_rand($row_4);
					   echo $row_4[$rand_index];
					   array_splice($row_4, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_7);
					   echo $row_7[$rand_index];
					   array_splice($row_7, $rand_index, 1);
				   ?>
			   </td>
				<td>
					<?php
					   $rand_index = array_rand($row_8);
					   echo $row_8[$rand_index];
					   array_splice($row_8, $rand_index, 1);
				   ?>
			   </td>
			</tr>
			<tr>
				<td>
					<?php
					   $rand_index = array_rand($row_0);
					   echo $row_0[$rand_index];
					   array_splice($row_0, $rand_index, 1);
				   ?>
			   </td>
				<td>
					<?php
					   $rand_index = array_rand($row_1);
					   echo $row_1[$rand_index];
					   array_splice($row_1, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_4);
					   echo $row_4[$rand_index];
					   array_splice($row_4, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
				<td>
					<?php
					   $rand_index = array_rand($row_6);
					   echo $row_6[$rand_index];
					   array_splice($row_6, $rand_index, 1);
				   ?>
			   </td>
				<td>
					<?php
					   $rand_index = array_rand($row_7);
					   echo $row_7[$rand_index];
					   array_splice($row_7, $rand_index, 1);
				   ?>
			   </td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
<?php
    require_once('footer.php');
?>