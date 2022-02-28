<?php

  class Movie {
      public string $title;
      public string $director;
      public string $producer;
      public string $genre;
      public bool $watched;
      public $year;
      public $score;
      public $poster;


    //costruttore riceve il punteggio del film e un booleano
      function __construct($_score,$_watched,$_poster){
          var_dump($_score,$_watched);
      }

    //semplice funzione che stampa a schermo tutti i dati del film
      public function printInfo(){
          return $this->title." - ".$this->director." - ".
                 $this->producer." - ".$this->genre." - ".
                 $this->year."<br>";
      }
      
  }

  //primo film
  $Matrix= new Movie("9/10",true,"pictures/matrix1.jpg");

    $Matrix->title="The Matrix";
    $Matrix->director="Andy and Larry Wachowski";
    $Matrix->producer="Warner Bros";
    $Matrix->genre="Scifi";
    $Matrix->year=1999;
    $Matrix->score="9/10";
    $Matrix->watched=true;
    $Matrix->poster="pictures/matrix1.jpg";
    

    //echo $Matrix->printInfo();
  

//secondo film 
    $Matrix2= new Movie("8/10",true,"pictures/matrix1.jpg");

    $Matrix2->title="Matrix Reloaded";
    $Matrix2->director="Lilly and Lana Wachowski";
    $Matrix2->producer="Warner Bros";
    $Matrix2->genre="Scifi";
    $Matrix2->year=2003;
    $Matrix2->score="8/10";
    $Matrix2->watched=true;
    $Matrix2->poster="pictures/matrix2.jpg";

    //echo $Matrix2->printInfo();

//terzo film
    $Matrix3= new Movie("7/10",true,"pictures/matrix1.jpg");

    $Matrix3->title="Matrix Revolutions";
    $Matrix3->director="Lilly and Lana Wachowski";
    $Matrix3->producer="Warner Bros";
    $Matrix3->genre="Scifi";
    $Matrix3->year=2004;
    $Matrix3->score="7/10";
    $Matrix3->watched=true;
    $Matrix3->poster="pictures/matrix3.jpg";

    //echo $Matrix3->printInfo();

//quarto film 
    $Matrix4= new Movie("4.5",false,"pictures/matrix1.jpg");

    $Matrix4->title="Matrix Resurrections";
    $Matrix4->director="Lilly and Lana Wachowski";
    $Matrix4->producer="Warner Bros";
    $Matrix4->genre="Scifi";
    $Matrix4->year=2021;
    $Matrix4->score="4.5/10";
    $Matrix4->watched=false;
    $Matrix4->poster="pictures/matrix4.jpg";

    //echo $Matrix4->printInfo();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Movie O-O-P</title>
</head>
<body>
    
    <div class="container">

    <div class="posters-container">
      <img src="pictures/matrix1.jpg" alt="">
      <img src="pictures/matrix2.jpg" alt="">
      <img src="pictures/matrix3.jpg" alt="">
      <img src="pictures/matrix4.jpg" alt="">
    </div>

    </div>
    
         
       
      

</body>
</html>