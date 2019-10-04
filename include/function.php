<?php
    function headerAddress(){
        return "https://localhost/pemwebuts/";
    }

    function headTo($url){
        header("Location: https://localhost/pemwebuts/".$url);
    }
?>