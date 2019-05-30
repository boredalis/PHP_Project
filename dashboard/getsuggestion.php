<?php

$languages = array("English"=>"https://www.facebook.com/", "French"=>"https://www.facebook.com/", "German"=>"https://www.facebook.com/", "Korean"=>"https://www.facebook.com/","Estonian"=>"https://www.facebook.com/");

$q = $_REQUEST["q"];


$suggestion = "";

if ($q !== "" && $q[0]!=='/') {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($languages as $lang => $lang_value) {
        if (stristr($q, substr($lang, 0, $len))) {
            if ($suggestion === "") {
                $suggestion ="<a href=$lang_value><div class=\"sug\">$lang</div></a>";
            } else {
                $suggestion .= "<a href=$lang_value><div class=\"sug\">$lang</div></a>";
            }
        }
    }
    echo $suggestion === "" ? "<h3 style=\"color: grey;\">No languages found.</h3>" : $suggestion;
}


define('MYSQL_ASSOC',MYSQLI_ASSOC);
$con = mysqli_connect("localhost","root","","login");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$len2=strlen($q);
$query=substr($q,1,$len2-1);
mysqli_select_db($con,"login");
$sql="SELECT * FROM users WHERE username = '$query'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo "<a><div class=\"sug\">".$row['username']."</div></a>";
}
mysqli_close($con);

?>

<style>
    .sug{
        border-radius: 2px;
        color: gray;
        margin:10px;
        background-color: white;
        min-width: 500px;
        padding: 10px;
        width:60%;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    .sug:hover{
        background-color: #c8f1e8;
        color: black;
    }
</style>