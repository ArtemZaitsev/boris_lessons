<?php 
// phpinfo();

// $theSamePage = $_SERVER["PHP_SELF"];
// echo $theSamePage;

$length = $_GET["length"];
$width = $_GET["width"];

// $length = $_POST["length"];
// $width = $_POST["width"];

echo $length;
echo $width;


echo '<form action="/index.php" method="GET">';
   echo '<label for="width"> Введите ширину таблицы умножения </label>';
   echo '<input name="width" id="width" type="number">';

   echo '<label for="length"> Введите высоту таблицы умножения</label>';
   echo '<input name="length" id="length" type="number">';

   echo '<button type="submit"> Отправить </button>';
echo '</form>';

echo '<table>';
   echo '<tr>';
   echo '<td>';
   echo '</td>';
   for($i = 1; $i <= $width; $i++){
      echo '<th>';
        echo $i;
      echo '</th>';
   }
   echo '</tr>';

   for($i = 1; $i <= $length; $i++){
     echo '<tr>';
        echo '<th>';
         echo $i;
        echo '</th>';

     for($j=1; $j <= $width; $j++){
        echo '<td>';
	echo $i*$j;
	echo '</td>';
     }
     echo '</tr>';
}



echo '</table>';

echo '</hl>';

$json_url = "http://okopka.ru/r/rybas_t_m/text_0010.shtml"; //change the url to your needs
$data = file_get_contents($json_url); //Get the content from url
$json = json_decode($data, true); //Decodes string to JSON Object
$data_to_save=$json["url"]; //Change url to whatever key you want value of
$file = 'm3u8.txt'; //Change File name to your desire
file_put_contents($file, $data_to_save); //Writes to File