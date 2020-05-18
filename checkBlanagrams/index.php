<?php
function checkBlanagrams($word1, $word2)
{
    $array1=str_split($word1);
    $array2=str_split($word2);
    sort($array1);sort($array2);
    $result=array_diff($array1,$array2);
    echo (sizeof($result)==1) ? "<p>$word1 & $word2 = true</p>" : "<p>$word1 & $word2 = false</p>";
    var_dump($array1);echo "<br>";
    var_dump($array2);echo "<br>";
    var_dump($result);
}

checkBlanagrams("tangram", "anagram");
checkBlanagrams("tangram", "pangram");
checkBlanagrams("silent", "listen");
checkBlanagrams("x", "y");
checkBlanagrams("z", "z");
checkBlanagrams("aba","bab");

$numero=-1;
if(is_integer($numero) && $numero>=0){
    echo "<p>si</p>";
}else{
    
}