<?php
	if($last-$page > $page-1) $pagement = 1;
	else $pagement = -2;

	echo "<div class='col-4'>";
    echo "<input id='page1' type='submit' class='btnPagination' value='1'>";
    if($last != 1){
        if($page-3 > 1) echo "...";
        if(($page == 1 || $page == $last) && ($page+1 != $last && $last-1 != 1)){
            if($page-2 != 1) echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+($pagement++))."'>";
            else $pagement++;
            if($page+2 != $last) echo "<input id='page".($page+$pagement)."' type='submit' class='btnPagination' value='".($page+$pagement)."'>";
        }
        else if($page == 2 && $last != 2){
            echo "<input id='page".($page)."' type='submit' class='btnPagination' value='".($page)."'>";
            if($page+1 != $last) echo "<input id='page".($page+1)."' type='submit' class='btnPagination' value='".($page+1)."'>";
            if($page+2 != $last && $page+1 != $last) echo "<input id='page".($page+2)."' type='submit' class='btnPagination' value='".($page+2)."'>";
        }
        else if($page == ($last-1) && $page != 1){
            if($page-2 != 1) echo "<input id='page".($page-2)."' type='submit' class='btnPagination' value='".($page-2)."'>";
            echo "<input id='page".($page-1)."' type='submit' class='btnPagination' value='".($page-1)."'>";
            echo "<input id='page".($page)."' type='submit' class='btnPagination' value='".($page)."'>";
        }
        else if($page > 2 && $page < $last-1){
            if($page-2 != 1) echo "<input id='page".($page-2)."' type='submit' class='btnPagination' value='".($page-2)."'>";
            echo "<input id='page".($page-1)."' type='submit' class='btnPagination' value='".($page-1)."'>";
            echo "<input id='page".($page)."' type='submit' class='btnPagination' value='".($page)."'>";
            echo "<input id='page".($page+1)."' type='submit' class='btnPagination' value='".($page+1)."'>";
            if($page+2 != $last) echo "<input id='page".($page+2)."' type='submit' class='btnPagination' value='".($page+2)."'>";

        }
        if($page+3 < $last) echo "...";
        echo "<input id='page".$last."' type='submit' class='btnPagination' value='".$last."'>";
    }
    echo "</div>";

	if(isset($_GET['page'])){
		echo "<script>$('#page".$_GET['page']."').addClass('btn-primary')</script>";
	}
?>
<script>
	$('.btnPagination').click(function(){
		window.location = "?page="+$(this).val();
	});
</script>


