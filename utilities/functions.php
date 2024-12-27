<?php

function printArray(array $arr){
    foreach($arr as $key => $value){
        echo "<p>$key => $value</p>";
    }
}