<?php
	$count = strlen($arf_content);
	$content = wordwrap($arf_content, 72, "<wbr>", true);
	//$content = $arf_content;
	

	echo "$content<br>";
	echo $count;
?>