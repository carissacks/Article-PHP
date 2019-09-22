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
    <!-- header -->
    <section id="article-container" class="container-fluid">
        <div class="container-fluid">
            <div class="child-container container">
                <section id="archive">
                    <div class="row justify-content-center w-100 text-center my-3">
                        <i class="archive-icon icon-block-featured"></i>
                        <h1 class="title"><?=$type?></h1>
                    </div>

                    <div class="archive-items">

                        <?php
                            $query= "SELECT * FROM $tabelDatabase LIMIT 9";
                            $result= $db->query($query);

                            // var_dump($result);
                            $idx=0;

                            // var_dump($result);
                            // if($result>0){
                            //     echo"ok";
                            // }else echo"gakok";

                            while($row= $result->fetch_assoc()):
                                $date=date_create($row['date']);
                                if($idx%3==0):
                        ?>
                        <div class='row py-2'>
                                <?php endif; ?>
                            <article class="col-md-4 col-sm-6 col-xs-12" id="">
                                <header>
                                    <div class="box-image">
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
                                    <a  href="post.php?type=<?=$type?>&id=<?= $row['id']?>">Read More &GT;</a>
                                </p>
                            </article>
                            <?php if($idx%3==2): ?>
                        </div>
                        <?php 
                                endif;
                                $idx++;
                            endwhile;
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- footer -->
</body>