<?php

$str = 'This is some text. I will be using PHP string functions to change it.';
$str_lower = strtolower($str);
$str_camel = ucwords($str);
$str_first = lcfirst($str);
$str_replace = str_replace("PHP", "HTML", $str);
$str_strrev = strrev($str);
$str_toup = strtoupper($str);
$str_shuf = str_shuffle($str);
$str_word = str_word_count($str);
$str_character = strlen($str);
$str_pos = strpos($str, "PHP");
$str_repeat = str_repeat($str, 2);
?>

<b>output:</b>

<?php
echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_camel . '</p>';
echo '<p>' . $str_first . '</p>';
echo '<p>' . $str_replace . '</p>';
echo '<p>' . $str_strrev . '</p>';
echo '<p>' . $str_toup . '</p>';
echo '<p>' . $str_shuf . '</p>';
?>

<b>Aantal worden:</b>

<?php
echo '<p>' . $str_word . '</p>';
?>

<b>Aantal characters:</b>
<?php
echo '<p>' . $str_len . '</p>';
?>

<b>Waar het woord PHP staat:</b>
<?php
echo '<p>' . $str_pos . '</p>';
?>

<b>herhaalt de string:</b>
<?php
echo '<p>' . $str_repeat . '</p>';
