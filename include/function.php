<?php
    function headerAddress(){
        return "http://localhost/utspemweb/";
    }

    function headTo($url){
        header("Location: https://localhost/pemweb/uts/".$url);
    }
?>