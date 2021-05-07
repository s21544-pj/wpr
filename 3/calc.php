<?php
function sum($first,$second){
	return $first+$second;
}

function sub($first,$second){
	return $first-$second;
}

function mul($first,$second){
	return $first*$second;
}

function div($first,$second){
	if ($second!= 0) {
            return $first/$second;
        }else{
            echo "Nie mozna dzielic przez 0!";
        }
}
?>