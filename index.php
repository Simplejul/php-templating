<?php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));




// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
//echo $faker->name;
//echo $faker->imageUrl($width = 640, $height = 480);


$template = $twig->load('index.html');
echo $template->render(array(
    'textRandom' => $faker->realText($maxNbChars = 100, $indexSize = 2),
    'company' => $faker->company, 
    'productAdjective' => $faker->shuffle('struchieaad'), 
    'productName' => $faker->shuffle('kioielda'), 
    'productMaterial' => $faker->realText($maxNbChars = 20, $indexSize = 1), 
    'http' => $faker->url, 
    'price' => $faker->randomNumber, 
    'color' => $faker->colorName, 
    'userName' => $faker->userName, 
    'job' => $faker->jobTitle,
    'image' => $faker->imageUrl($width = 286, $height = 180),
    'image2' => $faker->imageUrl($width = 200, $height = 200),
    'email' => $faker->freeEmail
));

?>