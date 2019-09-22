<?php
    if($type == 'featured'){
        $tabelDatabase = "ms_category_featured";
    }
    else if($type == 'events'){
        $tabelDatabase = "ms_category_events";
    }
    else if($type == 'news'){
        $tabelDatabase = "ms_category_news";
    }
    else if($type == 'articles'){
        $tabelDatabase = "ms_category_articles";
    }
    else if($type == 'photos'){
        $tabelDatabase = "ms_category_photos";
    }
    else if($type == 'accountingupdate'){
        $tabelDatabase = "ms_category_accountingupdate";
    }
    else if($type == 'research'){
        $tabelDatabase = "ms_category_research";
    }
    else if($type == 'bookreview'){
        $tabelDatabase = "ms_category_bookreview";
    }

?>