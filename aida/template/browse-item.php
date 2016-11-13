<?php
// This section gets the weather for the city

$url = "http://api.openweathermap.org/data/2.5/weather?q=".urlencode($property['city'])."&APPID=".OPENWEATHERKEY;
$json = file_get_contents($url);
$openWeatherObject = json_decode($json);

$iconURL = "http://openweathermap.org/img/w/".$openWeatherObject->weather[0]->icon.".png";

?>

<div class="browse-item-wrapper">
    <div class="browse-item">
        <div class="browse-item-main-content">
            <h3 class="browse-item-name"><?=$property['title']?></h3>
            <h4 class="browse-item-location tooltips" data-tooltip-content="#browse_item_tooltip_<?=$property['id']?>"><?=$property['city']?>, <?=$property['country']?></h4>
    
            <!--<span class="tooltip_templates" id="tooltip_content"> <strong>This is the content of my tooltip!</strong></span>-->
            <div class="tooltip_templates">
                <span id="browse_item_tooltip_<?=$property['id']?>">
                    <img src="<?=$iconURL?>" /> <strong><?=$openWeatherObject->weather[0]->main?></strong>
                </span>
            </div>
            <span class="browse-item-sleeps">Sleeps: <?=$property['capacity']?></span><br>
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