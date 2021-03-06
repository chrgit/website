<?php if(!empty($view_component_data->meetup)): ?>
<article role="details">
  <h2 class="type"><?=$view_component_data->meetup?></h2>
  <h2 class="date"><?=$view_component_data->date?></h2>
  <h2 class="venue"><?=$view_component_data->venue['name']?></h2>
  <h2 class="location"><?=$view_component_data->location?></h2>
  <h2 class="time"><?=$view_component_data->time?></h2>
</article>
<p class="synopsis extra"><?=$view_component_data->tagline?></p>
<div class="map iframe">
  <iframe width="425" height="350" frameBorder="0" src="http://a.tiles.mapbox.com/v3/multipack.map-vyj6asqh.html#16/<?=$view_component_data->venue['latitude']?>/<?=$view_component_data->venue['longitude']?>"></iframe>
</div>

<div class="map mapimage">
  <a href="<?=$view_component_data->map_url?>"><img src="http://a.tiles.mapbox.com/v3/multipack.map-vyj6asqh/pin-m-star+8aad36(<?=$view_component_data->venue['longitude']?>,<?=$view_component_data->venue['latitude']?>)/<?=$view_component_data->venue['longitude']?>,<?=$view_component_data->venue['latitude']?>,16/425x350.png"></a>
  <p>Maps by <a href="http://mapbox.com/about/maps/">MapBox</a>, using <a href="http://www.openstreetmap.org/">OpenStreetMap</a> data, <a href="http://wiki.openstreetmap.org/wiki/OpenStreetMap_License">&copy; OpenStreetMap and contributors</a> and licensed <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>.</p>
</div>
<nav role="more">
  <ul>
    <li class="findmore"><a href="#">More Info</a></li>
    <li class="eventfocus"><a href="/<?=$view_component_data->url?>">Map &amp; Details</a></li>
    <li><a href="<?=$view_component_data->lanyrd?>">Lanyrd</a></li>
    <li><a href="//twitter.com/<?=$view_component_data->meetup?>">Twitter</a></li>
    <li class="findless"><a href="#">Close</a></li>
  </ul>
</nav>
<?php endif; ?>