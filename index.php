<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 6</title>
</head>
<body>
  <?php
  $firstname = 'Pauline';
  $lastname = 'Michalowski';
  $age = 23;
  function welcome($text1, $text2, $number1) {
    return 'Bonjour ' . $text1 . ' ' . $text2 . ', tu as ' . $number1 . ' ans.';
  }
  echo welcome($firstname, $lastname, $age);
  ?>
</body>
</html>
