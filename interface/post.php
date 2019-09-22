<?php 
    include '../include/header.php';
    include '../include/db_connection.php';
?>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center my-4">
            <div class="col-md-9 col-11">
                <?php
                    $count = 0;

                    if(isset($_GET['type'],$_GET['id'])):
                        $type = $db->real_escape_string($_GET['type']);
                        include '../include/databaseTable.php';
                    
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
                        <img class="img-fluid" src="https://dummyimage.com/600x400/000/fff" alt="cover-img">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 m-2 p-0">
                            <p class="text-justify"><?=$result['content']?></p>
                            <hr class="w-25 text-left row justify-content-start">
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
                        header("Location: ".headerAddress()."interface/pagenotfound.php");
                    endif;
                ?>
    </div>
</body>

</html>