<html>
  <head>
    <title>Output</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
      a span {
        display: none;
        position: absolute;
        color: #000;
        background: #fff;
        padding: 5px;
        border: 1px solid #000;
      }
      
      a {
        position: relative;
      }

      a:hover span {
        display: block;
        text-align: center;
      }
    </style>
  </head>
  <section class="section">
    <div class="container">
  
<?php

echo "<div class='match'>";

// check api https://www.latein.me/_API_QUE.php?q=<word>
$url = 'https://www.latein.me/_API_QUE.php?q=senum';

// get the json data
$data = file_get_contents($url);
// senex (Adjektiv)///385j///senis, m.; senis, -is, -e; senior, -or, -us///Greis, alter Mann, alt, greis, betragt///Genitiv Plural, Maskulinum%%%Positiv, Genitiv Plural%%%///$$$senus (Adjektiv)///386y///sena, senum//////Positiv, Akkusativ Singular, Maskulinum%%%Positiv, Vokativ Singular, Neutrum%%%Positiv, Akkusativ Singular, Neutrum%%%Positiv, Nominativ Singular, Neutrum%%%///$$$sex (Zahlwort)///38hC///sextus, -a, -um; seni, -ae, -a; sexies///sechs///Genitiv Plural, MasFem, Distributiv%%%///$$$
// split the data into an array

$data = explode('$$$', $data);

$i = 0;

foreach ($data as $type) {

  // echo $type;
  $i++;

  echo $i;

  $type = explode('///', $type);

  echo $type[3];

  echo "<br>";
  echo "<br>";

}



echo "</div>";

?>

<a href="#">Hover Me!<span class="tooltip">Hello, World!</span></a>



    </div>
  </section>


</html>
