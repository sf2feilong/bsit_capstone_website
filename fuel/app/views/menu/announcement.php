<?php echo Asset::css('web_style.css'); ?>
<?php

$arf_id = "";
$user_id = "";
$title = "";
$content = "";
$arf_date = "";
$arf_expiry_date = "";
$post_to = '';
$viewable_to = '';
$confirm_by = '';
$remarks = '';
$status = '';

$x = 0;

foreach ($arf_body as $key) {
	if($x==0){
		$arf_id = $key;
	}
	else if($x==1){
		$user_id = $key;
	}
	else if($x==2){
		$title = $key;
	}
	else if($x==3){
		$content = $key;
	}
	else if($x==4){
		$arf_date = $key;
	}
	else if($x==5){
		$arf_expiry_date = $key;
	}
	else if($x==6){
		$post_to = $key;
	}
	else if($x==7){
		$viewable_to = $key;
	}
	else if($x==8){
		$confirm_by = $key;
	}
	else if($x==9){
		$remarks = $key;
	}
	else if($x==10){
		$status = $key;
	}

	$x = $x+1;
}

$wrapped_content = wordwrap($content, 72, "<wbr>", true);

echo '<table id="announcement_table" style="width: 84%">';
echo '<tr>
		<th>Title: '; echo $title; echo '</th>
	  </tr>
	  <tr>
	  	<th>Date(YYYY-MM-DD): '; echo $arf_date; echo '</th>';
	  echo '</tr>';

	  echo '<tr>';
	  echo '<th>Description:<br>'; echo $wrapped_content; echo '<br></th>';
	  echo '</tr>';
	  echo '<tr>
	  			<th>Created by: '; echo $user_id; echo '</th>';
	  echo '</tr>';
	  echo '</table>';

/*echo "<div id='content_left'>
		Title: $title 
		<div id='content_right'>
		Date: $arf_date<br>
		Expiry Date: $arf_expiry_date
		</div>
		<p><br><br>Description:<br>$wrapped_content</p><br><br>
		Created by: $user_id<br>
		</div>";

/*foreach ($arf_body as $key) {
	echo "$key<br>";
	$x = x+1;

	<table>
		
	</table>
}*/
?>