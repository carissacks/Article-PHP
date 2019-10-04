<?php
    function headerAddress(){
        return "http://localhost/utspemweb/";
    }

    function headTo($url){
        header("Location: http://localhost/utspemweb/".$url);
    }
?>