<?php
// This section gets the weather for the city

$url = "http://api.openweathermap.org/data/2.5/weather?q=".urlencode($property['city']);

// Create a stream
$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n",
    'X-Api-Key'=>"109b0f8b1d75676485c1c84f0f197ac6"
  )
);

$context = stream_context_create($options);

// Open the file using the HTTP headers set above
$file = file_get_contents($url, false, $context);


//$file = file_get_contents("https://restcountries.eu/rest/v1/name/estonia",false,$context);


echo $file;

?>

<div class="browse-item-wrapper">
    <div class="browse-item">
        <div class="browse-item-main-content">
            <h3 class="browse-item-name"><?=$property['title']?></h3>
            <h4 class="browse-item-location tooltips" data-tooltip-content="#browse_item_tooltip_<?=$property['id']?>"><?=$property['city']?>, <?=$property['country']?></h4>
    
            <!--<span class="tooltip_templates" id="tooltip_content"> <strong>This is the content of my tooltip!</strong></span>-->
            <div class="tooltip_templates">
                <span id="browse_item_tooltip_<?=$property['id']?>">
                    <img src="myimage.png" /> <strong>This is the content of my tooltip!</strong>
                </span>
            </div>
            <span class="browse-item-sleeps"><?=$property['capacity']?></span>
            <span class="browse-item-price">£<?=$property['price']?></span>
            <div class="browse-item-buttons">
                <a href="#" class="btn btn-success">Rent</a>
                <a href="#" class="btn btn-default">Compare</a>
            </div>
        </div>
        <div class="browse-item-image" style="background-image: url('assets/images/properties/<?=$property['imagepath']?>')">
        </div>
    </div>
</div>