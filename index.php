<?php

  require_once(__DIR__ . '/calender.php');
  $weeks = new Calender();
  $finalWeek = $weeks->days();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHPカレンダー</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3><a href="?ym=<?php echo $weeks->prevMonth; ?>" class="prev">&lt;</a><?php echo $weeks->title; ?><a href="?ym=<?php echo $weeks->nextMonth; ?>" class="next">&gt;</a></h3>
        <table class="table table-bordered">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <?php
                foreach ($finalWeek as $week) {
                  echo $week;
              }
            ?>
        </table>
    </div>
</body>
</html>
  

