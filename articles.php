<head></head>
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
</head>

<body>
    <!-- header -->
    <section id="article-container" class="container-fluid">
        <div class="container-fluid">
            <div class="child-container container">
                <section id="archive">
                    <div class="row justify-content-center w-100 text-center my-3">
                        <i class="archive-icon icon-block-featured"></i>
                        <h1 class="title">Featured</h1>
                    </div>

                    <div class="archive-items">

                        <?php
                            $host= "localhost";
                            $dbname= "accumn";
                            $username= "root";
                            $pass= "";

                            $con= new mysqli($host, $username, $pass, $dbname);
                            $query= "SELECT * FROM ms_category_articles LIMIT 9";
                            $result= $con->query($query);

                            // var_dump($result);
                            $idx=0;

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
                                    <h2><a href="#"> <?= $row['title']?></a></h2>
                                    <span class="content-date">
                                        <time class="meta-text" datetime="<?= $row['date']?>">
                                            <?= date_format($date,"d F Y");?>
                                        </time>
                                    </span>
                                </header>
                                <p class=""><?= substr($row['content'], 0, 100)?>...</p>
                                <p class="view-all">
                                    <a href="#">Read More &GT;</a>
                                </p>
                            </article>
                            <?php if($idx%3==2): ?>
                        </div>
                        <?php endif; $idx++;endwhile;?>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- footer -->
</body>