<?php echo Asset::css('web_style.css'); ?>
<div id="sao_content">
<table id="sao_table" style="width:84%">
  <th>Title</th>	
  <th>Year-Month-Day</th>
  <tr>
<?php
$arf_info = array();
$title = array();
$x = 0;

foreach ($arf_data as $key) {
	$arf_info = $key;

	$id_index = 0+($x*11);
	$title_index = ($x+2)+($x*11);
	$date_index = ($x+4)+($x*11);
	
	echo '<td><a href="http://www.bsitcapstone.local.com/menu/announcement/'; echo $arf_info['arf_id']; echo '">';
		echo $arf_info['title']; echo '</a></td>';
		echo '<td>';
			echo $arf_info['arf_date'];
			 echo '</td>';

		echo '<tr>';
	$x = $x+1;

}
//print_r($arf_info);
?>

 </tr>
</table>
</div>