<?php
    if($type == 'featured'){
        $tabelDatabase = "ms_category_featured";
        $category= "Featured";
    }
    else if($type == 'events'){
        $tabelDatabase = "ms_category_events";
        $category= "Events";
    }
    else if($type == 'news'){
        $tabelDatabase = "ms_category_news";
        $category= "News";
    }
    else if($type == 'articles'){
        $tabelDatabase = "ms_category_articles";
        $category= "Articles";
    }
    else if($type == 'photos'){
        $tabelDatabase = "ms_category_photos";
        $category= "Photos";
    }
    else if($type == 'accountingupdate'){
        $tabelDatabase = "ms_category_accountingupdate";
        $category= "Accounting Update";
    }
    else if($type == 'research'){
        $tabelDatabase = "ms_category_research";
        $category= "Research";
    }
    else if($type == 'bookreview'){
        $tabelDatabase = "ms_category_bookreview";
        $category= "Book Review";
    }
    else{
        headTo("pagenotfound.php");
        // header("Location: ".headerAddress()."interface/pagenotfound.php");
    }

?>