<?php
$dir = 'images/';
$images = scandir($dir);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Шкода Кодьяк</title>
</head>
<body>
<? for ($i = 0; $i < count($images); $i++) {
  if ($images[$i] != '.' && $images[$i] != '..') {
    echo '<a href="' . $dir . $images[$i] . '" target="_blank"><img src=' . $dir . $images[$i] . ' style="width: 300px;"></a>';
  }
}
?>
</body>
</html>