<?php




function page(){
     $string1 = 'Hello';
$string2 = 'World!';
    $text = "$string1". '' . "$string2";
echo ("$text");
print ($text);

};

page();

?>
<H1 style = "font-size: "45px" color: "red" >
<?= "Test" ?></H1>

echo htmlentities "hello \"itis"\";