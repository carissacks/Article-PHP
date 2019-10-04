<?php
    function headerAddress(){
        return "https://localhost/utspemweb/";
    }

    function headTo($url){
        header("Location: https://localhost/pemweb/uts/".$url);
    }
?>