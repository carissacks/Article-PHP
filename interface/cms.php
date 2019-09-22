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
    <div class="container-fluid m-0 p-0" id="cms">
        <div class="row m-0 p-0">
            <div class="col-md-2 col-12 p-4" id="sidebar">
                <img src="http://adada.info/wp/wp-content/uploads/2017/06/umn-e1497107134312.png" class="img-fluid"
                    alt="logo umn">
                <h3 class="mt-3 white">Category</h3>
                <div class="list-group">
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
                        class="list-group-item list-group-item-action list-group-item-secondary type">Accounting Up
                        Date</button>
                    <button id="research"
                        class="list-group-item list-group-item-action list-group-item-secondary type">Research</button>
                    <button id="bookreview"
                        class="list-group-item list-group-item-action list-group-item-secondary type">Book
                        Review</button>
                </div>
            </div>
            <div class="col-md-10 col-12 p-4" id="content">
                <div class="container">
                    <div class="row w-100">
                        <h1 class="title"><?=$type?></h1>
                    </div>
                    <div class="row justify-content-end w-100">
                        <form method="POST" action="addForm.php">
                            <input name="type" type="text" hidden>
                            <button class="btn btn-primary" type="submit" name="createNew">Add new</button>
                        </form>
                    </div>
                    <div class="row my-md-4 mx-0 justify-content-center w-100">
                        <table class="table table-hover table-striped table-bordered m-0 p-0" id="myTable" style="width:100%">
                            <thead>
                                <th>#</th>
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
                                    <td><?= substr($row['title'],0, 50)?></td>
                                    <td><?= substr($row['content'], 0, 150) ?></td>
                                    <td><?=$row['date']?></td>
                                    <td>
                                        <form action="../cms/delContent.php" method="POST">
                                            <input type="text" name="id" required value="<?=$row['id']?>" hidden>
                                            <input type="text" name="type" required value="<?=$type?>" hidden>
                                            <button type="submit" class="btn btn-primary mt-2">Delete</button>
                                        </form>
                                        <form action="../interface/updateForm.php" method="POST">
                                            <input type="text" name="id" required value="<?=$row['id']?>" hidden>
                                            <input type="text" name="type" required value="<?=$type?>" hidden>
                                            <button class="btn btn-primary mt-2">Edit</button>
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

        $(".type").click(function () {
            $(".type").removeClass("active");
            // var idType = '#'+$(this).attr('id');
            // $(idType).addClass("active");
            $('#idPost').val($(this).attr('id'));
            window.location.href = "cms.php?type=" + $(this).attr('id');
        })
    </script>
</body>

</html>