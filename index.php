<?php 
    include './include/header.php';
    include './include/db_connection.php';

    date_default_timezone_set("Asia/Jakarta");

    if(isset($_GET['type'])):
        $type = $db->real_escape_string($_GET['type']);
    else:
        $type= 'featured';
    endif;

    include './include/databaseTable.php';
?>

<body>
    <?php include "navbar.php"?>
    <section id="article-container" class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-3" style="background-color: transparent;">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?=$type?></li>
        </ol>
    </nav>

        <div class="container-fluid">
            <div class="child-container container">
                <section id="archive">
                    <div class="row justify-content-center text-center mb-5">
                        <i class="archive-icon icon-block-featured"></i>
                        <h1 class="title"><?=$type?></h1>
                    </div>

                    <div class="archive-items">
                        <div class='row py-md-2 py-0'>
                            
                        <?php
                            if (!isset($_GET['page'])){
                                $page=1;
                            }
                            else $page= $_GET['page'];
                            $q = "SELECT COUNT(*) AS `count` FROM `$tabelDatabase`";
                            $hasil = $db->query($q);
                            $data = mysqli_fetch_assoc($hasil);
                            $last = ceil($data['count']/9);

                            if($page > $last){
                                $page = $last;
                            }

                            $offsetVal = ($page-1)*9;

                            $query= "SELECT * FROM $tabelDatabase LIMIT 9 OFFSET $offsetVal";
                            $result= $db->query($query);

                            $idx=0;

                            while($row = $result->fetch_assoc()):
                                $date=date_create($row['date']);
                                if($idx%3==0):
                        ?>
                        <!-- <div class='row py-md-2 py-0'> -->
                            <?php endif; ?>
                            <article class="col-md-4 col-sm-6 col-xs-12" id="">
                                <header>
                                    <div class="box-image mb-3">
                                        <img src="<?= $row['cover_img']?>" alt="" class="img-fluid">
                                    </div>
                                    <h2><a href="post.php?type=<?=$type?>&id=<?= $row['id']?>"><?= $row['title']?></a>
                                    </h2>
                                    <span class="content-date">
                                        <time class="meta-text" datetime="<?= $row['date']?>">
                                            <?= date_format($date,"d F Y");?>
                                        </time>
                                    </span>
                                </header>
                                <p class=""><?= substr($row['content'], 0, 100)?>...</p>
                                <p class="view-all">
                                    <a href="post.php?type=<?=$type?>&id=<?= $row['id']?>">Read More &GT;</a>
                                </p>
                            </article>
                            <?php if($idx%3==2): ?>
                        <!-- </div> -->
                        <?php 
                                endif;
                                $idx++;
                            endwhile;
                        ?>
                        </div>
                    </div>
                </section>
                <?php
                include "pagination.php";
            ?>
            </div>
        </div>
    </section>
    <!-- footer -->
</body>