<?php
//\\/\//\\/\//\\/\//\\/\//\\/\//*\\/\//\\/\//\\/\//\\/\//\\/\//\\/\//\\/\//\
// The author of this project is AunePVP.   https://github.com/AunePVP   \\
//\\/\//\\/\//\\/\//\\/\//\\/\//*\\/\//\\/\//\\/\//\\/\//\\/\//\\/\//\\/\//\
require_once 'jsonconversion.php';
use AunePVP\jsonconversion;

$data = json_decode(file_get_contents("https://cdn.muehlhaeusler.online/test.json"));
$json = "";
foreach ($data->description->extra as $extra) {
    $color = $extra->color;
    $json .= (new jsonconversion)->convertcolor($color);
    $json .= $extra->text;
}
echo $json;