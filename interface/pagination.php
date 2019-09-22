<?php
	$page = $_GET['page'];
	$last = 33; 
	// Tinggal dicount berdasarkan count data di database terus / 9 diceiling

	if($last-$page > $page-1){
		$pagement = 1;
	}
	else{
		$pagement = -2;
	}
	
	echo "<div class='col-4'>";
	echo "<input id='page1' type='submit' class='btnPagination' value='1'>";
	if($page-2 > 1) echo "...";
	if($page == 1 || $page == $last){
		echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+($pagement++))."'>";
		echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+$pagement)."'>";
	}
	else if($page == 2 || $page == ($last-1)){
		if($page == 2) echo "<input id='page".($page)."' type='submit' class='btnPagination' value='".($page)."'>";
		else echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+$pagement++)."'>";
		echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+($pagement++))."'>";
		echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+$pagement)."'>";
		
	}
	else{
		if($page-2 != 1) echo "<input id='page".($page-2)."' type='submit' class='btnPagination' value='".($page-2)."'>";
		echo "<input id='page".($page-1)."' type='submit' class='btnPagination' value='".($page-1)."'>";
		echo "<input id='page".($page)."' type='submit' class='btnPagination' value='".($page)."'>";
		echo "<input id='page".($page+1)."' type='submit' class='btnPagination' value='".($page+1)."'>";
		if($page+2 != $last) echo "<input id='page".($page+2)."' type='submit' class='btnPagination' value='".($page+2)."'>";

	}
	if($page+2 < $last) echo "...";
	echo "<input id='page".$last."' type='submit' class='btnPagination' value='".$last."'>";
	echo "</div>";

	if(isset($_GET['page'])){
		echo "<script>$('#page".$_GET['page']."').addClass('btn-primary')</script>";
	}
?>
<script>
	$('.btnPagination').click(function(){
		window.location = "pagination.php?page="+$(this).val();
	});
</script>


