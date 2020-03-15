<?php
    require_once('header.php');
    
    $rows = array(
        array(1,2,3,4,5,6,7,8,9),
        array(10,11,12,13,14,15,16,17,18,19),
        array(20,21,22,23,24,25,26,27,28,29),
        array(30,31,32,33,34,35,36,37,38,39),
        array(40,41,42,43,44,45,46,47,48,49),
        array(50,51,52,53,54,55,56,57,58,59),
        array(60,61,62,63,64,65,66,67,68,69),
        array(70,71,72,73,74,75,76,77,78,79),
        array(80,81,82,83,84,85,86,87,88,89,90)
    );
    
    $blank_or_not = array(true,false);
?>
<div id="card">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<?php
				    $blank_count = 0;
				    $col_count = 0;
				    
				    while ($col_count <= 8) {
				        if ($blank_count < 4) {
				            $blank_or_not_rand = array_rand($blank_or_not);
				            if ($blank_or_not_rand) {
				                $blank_count++;
				                echo '<td id="r0_c'.$col_count.'" class="blank"></td>';
				            } else {
				                $rand_index = array_rand($rows[$col_count]);
				                echo '<td id="r0_c'.$col_count.'" class="clickable" onclick="check_card(this.id);">'.$rows[$col_count][$rand_index].'</td>';
				                array_splice($rows[$col_count], $rand_index, 1);
				            }
				        } else {
				            $rand_index = array_rand($rows[$col_count]);
				            echo '<td id="r0_c'.$col_count.'" class="clickable" onclick="check_card(this.id);">'.$rows[$col_count][$rand_index].'</td>';
				            array_splice($rows[$col_count], $rand_index, 1);
				        }
				        $col_count++;
				    }
				?>
			</tr>
			<tr>
				<?php
				    $blank_count = 0;
				    $col_count = 0;
				    
				    while ($col_count <= 8) {
				        if ($blank_count < 4) {
				            $blank_or_not_rand = array_rand($blank_or_not);
				            if ($blank_or_not_rand) {
				                $blank_count++;
				                echo '<td id="r1_c'.$col_count.'" class="blank"></td>';
				            } else {
				                $rand_index = array_rand($rows[$col_count]);
				                echo '<td id="r1_c'.$col_count.'" class="clickable" onclick="check_card(this.id);">'.$rows[$col_count][$rand_index].'</td>';
				                array_splice($rows[$col_count], $rand_index, 1);
				            }
				        } else {
				            $rand_index = array_rand($rows[$col_count]);
				            echo '<td id="r1_c'.$col_count.'" class="clickable" onclick="check_card(this.id);">'.$rows[$col_count][$rand_index].'</td>';
				            array_splice($rows[$col_count], $rand_index, 1);
				        }
				        $col_count++;
				    }
				?>
			</tr>
			<tr>
				<?php
				    $blank_count = 0;
				    $col_count = 0;
				    
				    while ($col_count <= 8) {
				        if ($blank_count < 4) {
				            $blank_or_not_rand = array_rand($blank_or_not);
				            if ($blank_or_not_rand) {
				                $blank_count++;
				                echo '<td id="r2_c'.$col_count.'" class="blank"></td>';
				            } else {
				                $rand_index = array_rand($rows[$col_count]);
				                echo '<td id="r2_c'.$col_count.'" class="clickable" onclick="check_card(this.id);">'.$rows[$col_count][$rand_index].'</td>';
				                array_splice($rows[$col_count], $rand_index, 1);
				            }
				        } else {
				            $rand_index = array_rand($rows[$col_count]);
				            echo '<td id="r2_c'.$col_count.'" class="clickable" onclick="check_card(this.id);">'.$rows[$col_count][$rand_index].'</td>';
				            array_splice($rows[$col_count], $rand_index, 1);
				        }
				        $col_count++;
				    }
				?>
			</tr>
		</tbody>
	</table>
</div>
<?php
    require_once('footer.php');
?>