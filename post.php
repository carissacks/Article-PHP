<?php 
    // include './include/header.php';
    include 'header.php';
    include './include/db_connection.php';

    date_default_timezone_set("Asia/Jakarta");

    if(isset($_GET['type'])):
        $type = $db->real_escape_string($_GET['type']);
    else:
        $type= 'news';
    endif;

    // include "navbar.php";
    $count = 0;

    if(isset($_GET['type'],$_GET['id'])):
        $type = $db->real_escape_string($_GET['type']);
        include './include/databaseTable.php';
    
        $id = $db->real_escape_string($_GET['id']);

        $query= "SELECT * FROM $tabelDatabase WHERE id= '".$id."'";
        $result = $db->query($query)->fetch_assoc();
        $date = date_create($result['date']);
?>
    <section class="container-fluid pb-5 mb-md-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mx-3" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><a href="index.php?type=<?=$type?>"><?=$category?></a></li>
                <li class="breadcrumb-item active"><?=substr($result['title'], 0, 25)?>...</li>
            </ol>
        </nav>

        <div class="container-fluid">
            <div class="row justify-content-center my-4">
                <div class="col-md-6 col-11">
                    <h1 class="text-center" id="post-title"><?=$result['title']?></h1>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-12">
                        <div class="row justify-content-center my-md-3 my-2">
                            <?php
                                if($result['cover_img'])
                                    echo "<img class='img-fluid' src='backend/cms/images/".$type."/".$result['cover_img']."' alt='cover-img'>";
                            ?>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-11 m-2 p-0">
                                <?php
                                    if($result['content'])
                                        echo "<p class='text-justify content'>".$result['content']."</p>";
                                ?>                            
                            </div>
                        </div>
                            <?php
                                for($i=2; $i<6; $i++):
                                    if($result['image_'.$i]):
                            ?>
                        <div class='row justify-content-center my-md-3 my-2'>
                            <img class='img-fluid' src="backend/cms/images/<?=$type?>/<?=$result['image_'.$i]?>" alt='cover-img'>
                        </div>
                                    <?php endif; ?>

                                <?php
                                    if($result['content_'.$i]):
                                ?>
                        <div class="row justify-content-center">
                            <div class="col-11 m-2 p-0">
                                <p class='text-justify content'><?=$result['content_'.$i]?></p>
                            </div>
                        </div>
                                    <?php endif;
                                endfor;?>
<hr class='w-25 text-left row justify-content-start'>


                        <div class="row justify-content-start py-2">
                            <div class="col-12">                            
                                <small>Published at : <?=date_format($date,"d F Y");?>
                                <?php if($result['updated']!=0):?>
                                    <span class="active">- Updated</span>
                                <?php endif;?>
                                </small>
                            </div>
                        </div>
                        <div class="row justify-content-start py-2">
                            <div class="col-12">
                                <hr class="w-100">
                                <small class="related-title my-3">Related Content</small>
                                <ul class="related-content">
                                <?php
                                    $year=date_format($date,"Y");
                                    $query1= "SELECT * FROM $tabelDatabase WHERE date LIKE '$year%' AND id !='$id'";
                                    $related = $db->query($query1);
                                    $rnd = rand(0, max(mysqli_num_rows($related)-3, 0));
                                    $query2= "SELECT * FROM $tabelDatabase WHERE date LIKE '$year%' AND id !='$id' LIMIT 3 OFFSET $rnd";
                                    $related = $db->query($query2);

                                    while($row= $related->fetch_assoc()):
                                ?>
                                    <li class="ml-4"><a href="post.php?type=<?=$type?>&id=<?= $row['id']?>"><?=$row['title']?></a></li>
                                <?php endwhile;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <?php 
                            mysqli_close($db);
                        else:
                            headTo("pagenotfound.php");
                        endif;
                    ?>
        </div>
    </section>
<?php
    include 'footer.php';
?>