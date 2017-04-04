<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="fruit" /> <br>
    <input type="submit" name="submit" value="klik" />

</form>
<h1>pear apple banana</h1>
<?php


$fruit = $_POST['fruit'];

switch($fruit){
    case "pear";
        echo "<h1>this is not a pear?</h1>";
        echo "<img src=\"img_10.jpg\"/>";
          break;
    case 'apple';
        echo '<h1>thats one nice apple you got there</h1>';
        echo "<img src=\"img_10.jpg\"/>";
        break;
    case 'banana';
        echo '<h1>yasssss banananaaa</h1>';
        echo "<img src=\"banana-dolphin-3_med_hr.jpeg\">";
        break;
    default;
        echo 'I dont know';

}
?>
<br>
<br>
<p>
    $fruit = $_GET["fruit"];<br>
    <br>
    switch($fruit){<br>
    case "pear";<br>
    echo "<.p>this is not a pear?</.p>";<br>
echo "<.img src=\"img_10.jpg\"/>";<br>
break;<br>
case 'apple';<br>
echo '<.p>thats one nice apple you got there</.p>';<br>
echo "<.img src=\"img_10.jpg\"/>";<br>
break;<br>
case 'banana';<br>
echo '<.p>yasssss banananaaa</.p>';<br>
echo "<.img src=\"banana-dolphin-3_med_hr.jpeg\">";<br>
break;<br>
default;<br>
echo 'I dont know';<br>

}</p>
