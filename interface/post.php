<?php include '../include/header.php' ?>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center my-4">
            <div class="col-10">
                <?php
                    include '../include/db_connection.php';
                    $count = 0;

                    if(isset($_GET['type'], $_GET['id'])):
                        $type= $_GET['type'];
                        include '../include/databaseTable.php';
                        echo "<script>$('#".$_GET['type']."').addClass('active')</script>";
                    
                    // $tabelDatabase = "ms_category_bookreview";
                    // var_dump( $_GET);
                        $id=$_GET['id'];
                        $query= "SELECT * FROM ms_category_articles WHERE id= '".$id."'";
                        $result = $db->query($query);
                        while($row = $result->fetch_assoc()):
                ?>

                <h1 class="text-center"><?=$row['title']?></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <img class="img-fluid" src="https://dummyimage.com/600x400/000/fff" alt="cover-img">
        </div>
        <div class="row justify-content-center">
            <div class="col-10 m-2">
                <p><?=$row['content']?></p>
            </div>
        </div>
                <?php endwhile;
                        mysqli_free_result($result);
                        mysqli_close($db);
                    else:
                        header("Location: ".headerAddress()."interface/pagenotfound.php");
                    endif;
                ?>
    </div>
</body>

</html>