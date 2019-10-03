<?php
    function headerAddress(){
        return "https://localhost/pemweb/uts/";
    }

    function headTo($url){
        header("Location: https://localhost/pemweb/uts/".$url);
    }
?>