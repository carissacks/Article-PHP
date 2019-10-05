<?php 
    include './include/header.php';
    include './include/db_connection.php';

    date_default_timezone_set("Asia/Jakarta");

    if(isset($_GET['type'])):
        $type = $db->real_escape_string($_GET['type']);
    else:
        $type= 'news';
    endif;
?>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center my-4">
            <div class="col-md-9 col-11">
                <?php
                    $count = 0;

                    if(isset($_GET['type'],$_GET['id'])):
                        $type = $db->real_escape_string($_GET['type']);
                        include './include/databaseTable.php';
                    
                        $id = $db->real_escape_string($_GET['id']);

                        $query= "SELECT * FROM $tabelDatabase WHERE id= '".$id."'";
                        $result = $db->query($query)->fetch_assoc();
                        $date = date_create($result['date']);
                ?>

                <h1 class="text-center"><?=$result['title']?></h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-12">
                    <?php if($result['content']) : ?>
                        <div class="row m-3 justify-content-center">
                            <div class="m-2 p-0" style="width: 100px; word-break: break-all; text-align:right">
                                <?php echo $result['content']; ?>
                            </div>

                            <div class="col-9 m-2 p-0">
                                <img class="img-fluid" src="<?php echo $result['cover_img'] ?>" alt="cover-img">
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($result['content_2']) : ?>
                        <div class="row m-3 justify-content-center">
                            <div class="m-2 p-0" style="width: 100px; word-break: break-all; text-align:right">
                                <?php echo $result['content_2']; ?>
                            </div>
                            <div class="col-9 m-2 p-0">
                                <img class='img-fluid' src="<?php echo $result['image_2'] ?>" alt='cover-img'>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if($result['content_3']) : ?>
                        <div class="row m-3 justify-content-center">
                            <div class="m-2 p-0" style="width: 100px; word-break: break-all; text-align:right">
                                <?php echo $result['content_3']; ?>
                            </div>
                            <div class="col-9 m-2 p-0">
                                <img class='img-fluid' src="<?php echo $result['image_3'] ?>" alt='cover-img'>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($result['content_4']) :?>
                        <div class="row m-3 justify-content-center">
                            <div class="m-2 p-0" style="width: 100px; word-break: break-all; text-align:right">
                                <?php echo $result['content_4']; ?>
                            </div>
                            <div class="col-9 m-2 p-0">
                                <img class='img-fluid' src="<?php echo $result['image_4'] ?>" alt='cover-img'>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($result['content_5']) :?>
                        <div class="row m-3 justify-content-center">
                            <div class="m-2 p-0" style="width: 100px; word-break: break-all; text-align:right">
                                <?php echo $result['content_5']; ?>
                            </div>
                            <div class="col-9 m-2 p-0">
                                <img class='img-fluid' src="<?php echo $result['image_5'] ?>" alt='cover-img'>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row justify-content-start">
                        <div class="col-12">                            
                            <small>Published at <?=date_format($date,"d F Y");?></small>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-12">
                        <hr class="w-100">
                            <h5>Related Content</h5>
                            <ul>
                            <?php
                                $year=date("Y");
                                $query2= "SELECT * FROM $tabelDatabase WHERE date LIKE '$year%' AND id !='$id'LIMIT 3";
                                $related = $db->query($query2);

                                while($row= $related->fetch_assoc()):
                            ?>
                                <li><a href="post.php?type=<?=$type?>&id=<?= $row['id']?>"><?=$row['title']?></a></li>
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
</body>

</html>