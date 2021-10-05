<?php

$arr = array("-", "", ".");

$rg = array("52.262.225-2", "458.721.278-47");

$rgFinal = str_replace($arr, "", implode(" ", $rg)); 

echo $rgFinal;