<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <?php
      // ソートする関数を宣言
      function sort_2way($array,$order){
        if($order === true){
          sort($array);
          echo '昇順にソートします。<br>';
        } else{
          rsort($array);
          echo '降順にソートします。<br>';
        }
        foreach($array as $value){
          echo $value.'<br>';
        }
      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10 ];

      sort_2way($nums,true);
      sort_2way($nums,false);
    ?>
  </body>
</html>