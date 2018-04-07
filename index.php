<?php 

function isPalindrome($text) {

    $text = mb_strtolower($text);

    $text = trim($text);

    $length     = mb_strlen($text);

    $halfLength = floor($length / 2);

    $lastCharIndex = $length - 1;
    
    for ($i = 0; $i <= $halfLength; $i ++) {

        if ($text[$i] != $text[$lastCharIndex - $i]){
            return false;
        }

    }
    
        return true;
}

function findPolindrome($str, $count = null) {
    
    if (isPalindrome($str)) {
        return $str;
    }
    
    if (empty($count)) {
        $count = mb_strlen($str);
    }
    
    $lenght = mb_strlen($str);
    
    for ($i = 0; $i <= mb_strlen($str)-$count; $i++) {
        
        $sub = substr($str, $i, $count);
        if (isPalindrome($sub)) {
            return $sub;
        }
    }
    
    $count--;
    if ($count > 1) {
        $find = findPolindrome($str, $count);
        if (!empty($find)) return $find; else false;
    } else {
        return false;
    }
}

$result = 'palindrome';
$new = '1234554321';
if (isPalindrome($new)) 
    echo $new. ' - This is ';
else 
    echo $new. ' - This is not ';

echo $result;
echo '<br /><hr /><br />';
$result = 'palindrome';
$new = '1234554321';
$find = findPolindrome($new);

if (!empty($find)) 
    echo 'Find - ' . $find. ' - This is ';
else 
    echo 'Find - ' . $find. ' - This is not ';

echo $result;