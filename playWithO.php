<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>基本</title>
</head>
<body>
  <?php
    print "<p>おい　ジャンケンするぞ　F5を押せ　その度グーチョキパーのどれかを出す</p>";
    print "<img src='halloWorldO.png'>";
    print "<br>";
    $a = rand(1,4);
    if ($a == 1){
      print "<img src = 'guO.png'>";
    }elseif ($a == 2){
      print "<img src = 'chokiO.png'>";
    }elseif($a == 3){
      print "<img src = 'paO.png'>";
    }else{
      print "<img src = 'kusoO.png'>";
    }
  ?>
</body>
</html>
