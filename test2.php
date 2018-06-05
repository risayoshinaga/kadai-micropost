<?php
    // Define a function
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
        return $result;
    }

    // Call the function
    $sum1 = sum(1, 9);
    $sum2 = sum(1, 1000);
    $sum3 = sum(1000, 9999);
?>
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour =  (int)date("H");

    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }

        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name"></label>
            <label>年齢: <input type="text" name="target_age"></label>
            <input type="submit" value="送信">
        </form>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん (<?php  print $_POST['target_age']; ?> 歳)</p>
    </body>
</html>