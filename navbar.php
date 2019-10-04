<?php 
    date_default_timezone_set("Asia/Jakarta");

    if(isset($_GET['type'])):
        $type = $db->real_escape_string($_GET['type']);
    endif;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 0%;">
    <!-- <div class="navbar-header navbar-brand">
        <h4 class="white" height="100%">UMN Category</h4>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo ($type=='featured')?'active':''?>">
                <a class="nav-link" href="index.php?type=featured&page=1">Featured</a>
            </li>
            <li class="nav-item <?php echo ($type=='events')?'active':''?>">
                <a class="nav-link" href="index.php?type=events&page=1">Event</a>
            </li>
            <li class="nav-item <?php echo ($type=='news')?'active':''?>">
                <a class="nav-link" href="index.php?type=news&page=1">News</a>
            </li>
            <li class="nav-item <?php echo ($type=='articles')?'active':''?>">
                <a class="nav-link" href="index.php?type=articles&page=1">Articles</a>
            </li>
            <li class="nav-item <?php echo ($type=='photos')?'active':''?>">
                <a class="nav-link" href="index.php?type=photos&page=1">Photos</a>
            </li>
            <li class="nav-item <?php echo ($type=='accountingupdate')?'active':''?>">
                <a class="nav-link" href="index.php?type=accountingupdate&page=1">Accounting Update</a>
            </li>
            <li class="nav-item <?php echo ($type=='research')?'active':''?>">
                <a class="nav-link"href="index.php?type=research&page=1">Research</a>
            </li>
            <li class="nav-item <?php echo ($type=='bookreview')?'active':''?>">
                <a class="nav-link" href="index.php?type=bookreview&page=1">Book Review</a>
            </li>
        </ul>
    </div>
</nav>