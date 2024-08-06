<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>kadai_016</title>
  </head>
  <body>
    <p>
      <?php
      class Food {
        private $name;
        private $price;

        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }

        public function show_price(int $price){
          echo $price;
        }
      }
      class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name,int $height,int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        public function show_height(int $height){
          echo $height;
        }
      }
      
      $Food_instance = new Food('potato',250);
      print_r($Food_instance);
      echo '<br>';

      $Animal_instance = new Animal('dog',60,5000);
      print_r($Animal_instance);
      echo '<br>';

      $Food_instance->show_price(250);
      echo '<br>';
      $Animal_instance->show_height(60);
      echo '<br>';
      ?>
    </p>
  </body>
</html>