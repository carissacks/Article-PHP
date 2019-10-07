<?php
	if($last-$page > $page-1) $pagement = 1;
    else $pagement = -2;
?>

<nav aria-label='Pagination'>
<div class="row justify-content-end mx-md-3 mx-0">
    <div class='pagination align-content-center'>
        <p class="m-0 mr-3 abc">Page <?=$page?> of <?=$last?> </p>
        <input id='page1' type='submit' class='page-item page-link' value='1'>

    <?php
    if($last != 1 && $last>0){
        if($page-3 > 1)
            echo "<p class='m-0 mx-2'> ... </p>";
        if(($page == 1 || $page == $last) && ($page+1 != $last && $last-1 != 1)){
            if($page-2 != 1) 
                echo "<input id='page".($page+$pagement)."' type='submit' class='page-item page-link' value='".($page+($pagement++))."'>";
            else 
                $pagement++;
            if($page+2 != $last) 
                echo "<input id='page".($page+$pagement)."' type='submit' class='page-item page-link' value='".($page+$pagement)."'>";
        }
        else if($page == 2 && $last != 2){
            echo "<input id='page".($page)."' type='submit' class='page-item page-link' value='".($page)."'>";
            if($page+1 != $last) 
                echo "<input id='page".($page+1)."' type='submit' class='page-item page-link' value='".($page+1)."'>";
            if($page+2 != $last && $page+1 != $last) 
                echo "<input id='page".($page+2)."' type='submit' class='page-item page-link' value='".($page+2)."'>";
        }
        else if($page == ($last-1) && $page != 1){
            if($page-2 != 1) 
                echo "<input id='page".($page-2)."' type='submit' class='page-item page-link' value='".($page-2)."'>";
            echo "<input id='page".($page-1)."' type='submit' class='page-item page-link' value='".($page-1)."'>";
            echo "<input id='page".($page)."' type='submit' class='page-item page-link' value='".($page)."'>";
        }
        else if($page > 2 && $page < $last-1){
            if($page-2 != 1) 
                echo "<input id='page".($page-2)."' type='submit' class='page-item page-link' value='".($page-2)."'>";
            echo "<input id='page".($page-1)."' type='submit' class='page-item page-link' value='".($page-1)."'>";
            echo "<input id='page".($page)."' type='submit' class='page-item page-link' value='".($page)."'>";
            echo "<input id='page".($page+1)."' type='submit' class='page-item page-link' value='".($page+1)."'>";
            if($page+2 != $last) 
                echo "<input id='page".($page+2)."' type='submit' class='page-item page-link' value='".($page+2)."'>";

        }
        if($page+3 < $last) 
            echo "<p class='m-0 mx-2'> ... </p>";
        echo "<input id='page".$last."' type='submit' class='page-item page-link' value='".$last."'>";
    }
?>
</input>
</div>
</div>
</nav>

<script>
    $('.page-item').click(function () {
        window.location = "?type=<?=$type?>&page=" + $(this).val();
    })
    $(document).ready(function () {
        $('#page<?=$page?>').addClass('active');
    })
</script>