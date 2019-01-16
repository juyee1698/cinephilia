<?php
// Array with names
$a[] = "The Shawshank Redemption";
$a[] = "The Godfather";
$a[] = "Fight Club";
$a[] = "Memento";
$a[] = "V for Vendetta";
$a[] = "Django Unchained";
$a[] = "12 Monkeys";
$a[] = "A simple Favour";
$a[] = "Get Out";
$a[] = "The Prestige";
$a[] = "The Nun";
$a[] = "Inception";
$a[] = "The Departed";
$a[] = "Marley and Me";
$a[] = "Superbad";
$a[] = "Hangover";
$a[] = "Safety not guaranteed";
$a[] = "Good Will Hunting";
$a[] = "Whiplash";
$a[] = "Lady Bird";
$a[] = "I,Tonya";
$a[] = "Begin Again";
$a[] = "Three Billboards Outside Ebbing,Missouri";
$a[] = "Inglorious Basterds";
$a[] = "The Notebok";
$a[] = "Donnie Darko";
$a[] = "Atomic Blonde";
$a[] = "A beautiful mind";
$a[] = "Shutter Island";
$a[] = "500 days of summer";
$a[] = "Fault in our stars";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "No Suggestions" : $hint;
?>