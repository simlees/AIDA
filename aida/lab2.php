<?php
$title = "Lab 2 - Classes and Objects";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->

<h3>Built-in Functions</h3>
<?php
$strvar = "apples";
$intvar = 19;
$floatvar = 27.579;
$product_array = array("id"=>234, "description"=>"apples", "type"=>"bramley");
$url = "www.somesite.com";
?>

<ol>
    <?php
    print "<li>Length of string 'Apples' = ".strlen($strvar)."</li>";
    print "<li>Apples to uppercase = ".strtoupper($strvar)."</li>";
    print "<li>Substring 'some' in www.somesite.com starts at index position = ".strpos($url, "some")."</li>";
    print "<li>Apples hashed with MD5 = ".md5($strvar)."</li>";
    print "<li>Get variable type of 19 = ".gettype($intvar)."</li>";
    print "<li> Is 27.579 numeric? The answer will be 1(true) or 0(false) = ".is_numeric($floatvar)."</li>";
    print "<li>Format the number 27.579 to 1 decimal place = ".number_format($floatvar, 1)."</li>";
    print "<li>Print product_array = </li>";
    print_r($product_array);
    print "<li>Number of items in product array = ".count($product_array)."</li>";
    print "<li>Is Apples in the array? = ".in_array($strvar, $product_array)."</li>";
    print "<li>Add 'price'=>2.45 onto the product array and display.</li>";
    $product_array['price'] = 2.45;
    print_r($product_array);
    $somesitearray = explode(".",$url);
    print "<li>Explode www.somesite.com into an array (separated by '.') and display = </li>";
    print_r($somesitearray);
    print "<li>Today's date = ".date("D jS F Y")." </li>";
    ?>
</ol>


<h3>Create Classes and Objects</h3>

<?php


$blueCar1 = new Vehichle(1, 4, "blue", 150);
$blueCar1->setMaxSpeed(200);
echo "<p>New Max Speed = ".$blueCar1->getMaxSpeed()."</p>";

?>

  <!-- CONTENT END -->
<?php
include 'template/content-footer.php';
include 'template/footer.php';
?>
