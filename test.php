<?php
print 
'hello'
;
?>
<?php
$hensuu = "some data";
print $hensuu;
?>
<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;

    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;

    print $ichiniti_no_byousuu;
?>
<?php
    $t = true;
    $f = false;
    var_dump($t);
    var_dump($f);
?>
<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ'];
    print $fruits[0] . PHP_EOL;            // displays リンゴ
?>
<?php
$fruits = [
        'apple' => 'リンゴ',
        'banana' => 'バナナ',
        'orange' => 'オレンジ',
    ];
    var_dump($fruits);
    ?>
    <?php
    $str1 = "文字列1";
    $str2 = " + 文字列2";
    $str = $str1 . $str2;      // $str will become "文字列1 + 文字列2"
    print $str;
?>
<?php
    $result = 1 < 2;
    var_dump($result);
    $result = 1 == 2;
    var_dump($result);
?>
<?php
    // 10 > 5 is true, so this becomes if (true), and {...} is run
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }

    // 10 <= 5 is false, so this becomes if (false), and {...} is not run
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>
<?php
    $number = mt_rand() % 10;

    if ($number < 5) {
        print $number . 'は5より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は5以上の数' . PHP_EOL;
    }
?>
<?php
    // Initialize the variable
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>
<?php
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>
<?php
    for ($i = 0; $i < 10; $i++) {
        print $i . '回目' . PHP_EOL;
    }
?>
<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    foreach ($fruits as $key => $fruit) {
        print $key . '回目: ' . $fruit . PHP_EOL;
    }
?>
<?php
    // Define a function
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        return $result;
    }

    // Call the function
    $sum1 = sum(1, 9);
    $sum2 = sum(1, 1000);
    $sum3 = sum(1000, 9999);
?>
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <?php if (6 <= $now_hour && $now_hour < 12) { ?>
            <p>おはよう、太郎さん</p>
        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
            <p>こんにちは、太郎さん</p>
        <?php } else { ?>
            <p>こんばんは、太郎さん</p>
        <?php } ?>
         <ul>
            <?php for($i = 1; $i < 10; $i++) { ?>
                <li><?php print '3 x ' . $i . ' = ' . (3 * $i);?></li>
            <?php } ?>
        </ul>
    </body>
</html><?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");
?>
