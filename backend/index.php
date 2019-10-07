<?php 
    include '../include/header.php';
    include '../include/db_connection.php';

    if(isset($_GET['type'])):
        $type = $db->real_escape_string($_GET['type']);
    else:
        $type= 'featured';
    endif;
    include '../include/databaseTable.php';
?>

<body>
    <div class="container-fluid m-0 p-0 h-100" id="cms">
        <div class="row m-0 p-0 justify-content-center">
            <div class="col-md-2 col-12" id="sidebar">
                <nav class="navbar navbar-dark py-4 m-0" style="border-radius: 0%;">
                    <div class="navbar-header py-md-5">
                        <h2 class="white" height="100%">UMN Category</h2>
                        <!-- <img src="http://adada.info/wp/wp-content/uploads/2017/06/umn-e1497107134312.png" -->
                        <!-- class="img-fluid col-5 col-md-12" alt="logo umn"> -->
                        <!-- <div class="container-fluid"> -->
                        <!-- <div class="row justify-content-center mb-md-5">
                            <img src="http://adada.info/wp/wp-content/uploads/2017/06/umn-e1497107134312.png"
                                class="img-fluid col-12 col-md-12" alt="logo umn"> -->
                        <!-- <h3 class=" m-0 mt-0 mt-md-3 white col-5 col-md-12 align-self-center text-center">Category</h3> -->
                    </div>
                    <!-- <div class="row justify-content-center"> -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item <?php echo ($type=='featured')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=featured">Featured</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='events')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=events">Event</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='news')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=news">News</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='articles')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=articles">Articles</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='photos')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=photos">Photos</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='accountingupdate')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=accountingupdate">Accounting Update</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='research')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=research">Research</a>
                            </li>
                            <li class="nav-item <?php echo ($type=='bookreview')?'active':''?> type">
                                <a class="nav-link" href="index.php?type=bookreview">Book Review</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                        <!-- <div class="list-group col-8 col-md-12">
                                <button id="featured"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Featured</button>
                                <button id="events"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Events</button>
                                <button id="news"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">News</button>
                                <button id="articles"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Articles</button>
                                <button id="photos"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Photos</button>
                                <button id="accountingupdate"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Accounting Update</button>
                                <button id="research"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Research</button>
                                <button id="bookreview"
                                    class="list-group-item list-group-item-action list-group-item-secondary type">Book Review</button>
                            </div> -->

                    <!-- </div> -->
                </div>
            <!-- </div> -->
        <div class="col-md-10 col-12 p-4" id="content">
            <div class="container">
                <div class="row w-100 py-2">
                    <h1 class="title"><?=$category?></h1>
                </div>
                <div class="row justify-content-end w-100">
                <?php
                            if(strcmp($type,"photos")){
                        ?>
                        <form method="POST" action="addForm.php">
                            <input name="type" type="text" value="<?=$type?>" hidden>
                            <button class="btn btn-primary" type="submit" name="createNew"><i class='glyphicon glyphicon-plus'></i> Add new</button>
                        </form>
                        <?php
                            }
                            else{
                        ?>
                        <form method="POST" action="addPhotosForm.php">
                            <input name="type" type="text" value="<?=$type?>" hidden>
                            <button class="btn btn-primary" type="submit" name="createNew"><i class='glyphicon glyphicon-plus'></i> Add new</button>
                        </form>
                        <?php 
                            } 
                        ?>
                </div>
                <div class="row my-md-4 mx-0 justify-content-center w-100">
                    <table class="table table-hover table-striped table-bordered m-0 p-0" id="myTable"
                        style="width:100%">
                        <thead>
                            <th>#</th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Modified date</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                            echo "<script>$('#".$type."').addClass('active')</script>";
                            $query = "SELECT * FROM $tabelDatabase";
                            $result = $db->query($query);

                            while($row = $result->fetch_assoc()):
                                $count++;
                        ?>
                                <tr>
                                    <td><?=$count?></td>
                                    <td><?=$row['id']?></td>
                                    <td><?= substr($row['title'],0, 50)?></td>
                                    <td><?= substr($row['content'], 0, 150) ?></td>
                                    <td><?=$row['date']?></td>
                                    <td>
                                        <form action="./cms/delContent.php" method="POST">
                                            <input type="text" name="id" value="<?=$row['id']?>" hidden>
                                            <input type="text" name="type" value="<?=$type?>" hidden>
                                            <button type="submit" class="btn btn-primary mt-2"><i class='glyphicon glyphicon-trash'></i></button>
                                        </form>
                                        <form action="updateForm.php" method="POST">
                                            <input type="text" name="id" value="<?=$row['id']?>" hidden>
                                            <input type="text" name="type" value="<?=$type?>" hidden>
                                            <button class="btn btn-primary mt-2"><i class='glyphicon glyphicon-pencil'></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php   
                            endwhile;
                            mysqli_free_result($result);
                            mysqli_close($db);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function () {
        $('#myTable').DataTable();
        })

        // $(".type").click(function () {
        //     $(".type").removeClass("active");
        //     // var idType = '#'+$(this).attr('id');
        //     // $(idType).addClass("active");
        //     $('#idPost').val($(this).attr('id'));
        //     window.location.href = "index.php?type=" + $(this).attr('id');
        })
    </script>
</body>

</html>