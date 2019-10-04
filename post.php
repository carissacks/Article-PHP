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
                    <div class="row justify-content-center my-md-3 my-2">
                        <?php
                            if($result['cover_img'])
                                echo "<img class='img-fluid' src=".$result['cover_img']." alt='cover-img'>";
                        ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 m-2 p-0">
                            <?php
                                if($result['content'])
                                    echo "<p class='text-justify'>".$result['content']."</p>
                                          <hr class='w-25 text-left row justify-content-start'>";
                            ?>                            
                        </div>
                    </div>

                    <div class="row justify-content-center my-md-3 my-2">
                        <?php
                            if($result['image_2'])
                                echo "<img class='img-fluid' src=".$result['image_2']." alt='cover-img'>";
                        ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 m-2 p-0">
                            <?php
                                if($result['content_2'])
                                    echo "<p class='text-justify'>".$result['content_2']."</p>
                                          <hr class='w-25 text-left row justify-content-start'>";
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center my-md-3 my-2">
                        <?php
                            if($result['image_3'])
                                echo "<img class='img-fluid' src=".$result['image_3']." alt='cover-img'>";
                        ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 m-2 p-0">
                            <?php
                                if($result['content_3'])
                                    echo "<p class='text-justify'>".$result['content_3']."</p>
                                          <hr class='w-25 text-left row justify-content-start'>";
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center my-md-3 my-2">
                        <?php
                            if($result['image_4'])
                                echo "<img class='img-fluid' src=".$result['image_4']." alt='cover-img'>";
                        ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 m-2 p-0">
                            <?php
                                if($result['content_4'])
                                    echo "<p class='text-justify'>".$result['content_4']."</p>
                                          <hr class='w-25 text-left row justify-content-start'>";
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center my-md-3 my-2">
                        <?php
                            if($result['image_5'])
                                echo "<img class='img-fluid' src=".$result['image_5']." alt='cover-img'>";
                        ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 m-2 p-0">
                            <?php
                                if($result['content_5'])
                                    echo "<p class='text-justify'>".$result['content_5']."</p>
                                          <hr class='w-25 text-left row justify-content-start'>";
                            ?>
                        </div>
                    </div>

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
                                $year=date_format($date,"Y");
                                $query1= "SELECT * FROM $tabelDatabase WHERE date LIKE '$year%' AND id !='$id'";
                                $related = $db->query($query1);
                                $rnd = rand(0, max(mysqli_num_rows($related)-3, 0));
                                $query2= "SELECT * FROM $tabelDatabase WHERE date LIKE '$year%' AND id !='$id' LIMIT 3 OFFSET $rnd";
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