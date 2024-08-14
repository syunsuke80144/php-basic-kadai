<?php
// セッションを開始
session_start();

// POSTリクエストから入力データを取得
$employeeName = $_POST['employee_name'];
$employeeAge = $_POST['employee_age'];
$department = $_POST['department'];

// エラーメッセージを格納する配列
$errors = []; // 最初はエラーなし

if(empty($employeeName)) {
  $errors[] = '名前を入力してください。';
}

if(empty($employeeAge)) {
  $errors[] = '年齢を入力してください。';
} elseif(!is_numeric($employeeAge)) {
  $errors[] = '年齢は数字で入力してください。';
}

if(empty($errors)) {
  // セッション変数を保存
  $_SESSION['name'] = $employeeName;
  $_SESSION['age'] = $employeeAge;
  $_SESSION['department'] = $department;

  // クッキーを登録（有効期限は1時間）
  setcookie('name', $employeeName, time() + 3600);
  setcookie('age', $employeeAge, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>確認画面</title>
  </head>
  <body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
      <tr>
        <th>項目</th>
        <th>入力内容</th>
      </tr>
      <tr>
        <td>社員名</td>
        <td><?php echo $employeeName; ?></td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><?php echo $employeeAge; ?></td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td><?php echo $department; ?></td>
      </tr>
    </table>
    <p>
      <button onclick="location.href='complete.php';" id="confirm-btn">確定</button>
      <button onclick="history.back();">キャンセル</button>
    </p>
    <?php
    if(!empty($errors)){
      foreach($errors as $error) {
        echo '<font color="red">'.$error.'</font>'.'<br>';
      }
      echo '<script>document.getElementById("confirm-btn").disabled = true;</script>';
    }
    ?>
  </body>
</html>