<html>
  <head>
    <title>Output</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <section class="section">
    <div class="container">
  
<?php

$input = $_POST['words'];


// slit each line into an array
$lines = preg_split("/\r\n|\n|\r/", $input);


foreach ($lines as $words) {

  echo "<div class='columns'>";

  // split the words into an array
  $words = explode(' ', $words);


  // loop through the array and print each word
  foreach ($words as $word) {


    // check api https://www.latein.me/_API_QUE.php?q=<word>
    $url = 'https://www.latein.me/_API_QUE.php?q=' . $word;

    // get the json data
    $data = file_get_contents($url);
    // nox (Substantiv)///CgD///noctis, f.///Nacht///Lokativ Singular, Femininum%%%Ablativ Singular, Femininum%%%Dativ Singular, Femininum%%%///$$$
    // split the data into an array


    $data_new = explode('$$$', $data);

    $simple = explode('///', $data);

    
    ?>

    <div class="column">
    <div class="word" title="<?php  echo $simple[3];  ?>"><?php  echo $word ?>
      <span class="box">
    <?php


    // loop through the array and print each translated word
    foreach ($data_new as $type) {

      $type = explode('///', $type);

      // // word one
      // echo $type[3];

      // check if $type[0] is empty
      if (empty($type[0])) {
        // do nothing
      } else {
        echo $type[0];
        echo ": ";
        echo $type[3];
        echo "<br>";
      }

    }
    echo "</span>";

    echo "</div><br>";
    echo "</div>";

  }

  echo "</div>";

}
?>
    </div>
  </section>


</html>
