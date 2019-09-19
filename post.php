<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center my-4">
            <div class="col-10">
                <?php
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "accumn";
                    $count = 0;

                    $db = new mysqli($host, $username, $password, $dbname);
                    if(isset($_GET['type'], $_GET['id'])){
                        global $tabelDatabase;

                        echo "<script>$('#".$_GET['type']."').addClass('active')</script>";
                        if($_GET['type'] == 'featured'){
                            $tabelDatabase = "ms_category_featured";
                        }
                        if($_GET['type'] == 'events'){
                            $tabelDatabase = "ms_category_events";
                        }
                        if($_GET['type'] == 'news'){
                            $tabelDatabase = "ms_category_news";
                        }
                        if($_GET['type'] == 'articles'){
                            $tabelDatabase = "ms_category_articles";
                        }
                        if($_GET['type'] == 'photos'){
                            $tabelDatabase = "ms_category_photos";
                        }
                        if($_GET['type'] == 'accountingupdate'){
                            $tabelDatabase = "ms_category_accountingupdate";
                        }
                        if($_GET['type'] == 'research'){
                            $tabelDatabase = "ms_category_research";
                        }
                        if($_GET['type'] == 'bookreview'){
                            $tabelDatabase = "ms_category_bookreview";
                        }
                    }
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
        ?>
    </div>
</body>

</html>