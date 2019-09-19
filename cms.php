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
    <div class="container-fluid m-0 p-0" id="cms">
        <div class="row m-0 p-0">
            <div class="col-2 p-4" id="sidebar">
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
            <div class="col-10 p-4" id="content">
                <div class="container">
                    <div class="row w-100">
                        <h1 id="title"><?=$_GET['type']?></h1>
                    </div>
                    <div class="row justify-content-end w-100">
                        <form method="POST">
                            <input id="idPost" type="text" hidden>
                            <button class="btn btn-primary" type="submit" name="createNew">Add new</button>
                        </form>
                    </div>
                    <div class="row my-4 justify-content-center w-100">
                        <table class="table table-hover table-striped table-bordered" id="myTable" style="width:100%">
                            <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Modified date</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                            $host = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "accumn";
                            $count = 0;

                            $db = new mysqli($host, $username, $password, $dbname);

                            if(isset($_GET['type'])){
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
                                        <button class="btn btn-primary mt-2">Delete</button>
                                        <button class="btn btn-primary mt-2">Edit</button>
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