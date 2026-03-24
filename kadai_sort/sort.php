<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <p>

<?php
function sort_2way(array $array, bool $order): array
{
    if ($order === true) {
        echo "昇順にソートします\n";
        sort($array, SORT_NUMERIC);
    } else {
        echo "降順にソートします\n";
        rsort($array, SORT_NUMERIC);
    }

    foreach ($array as $v) {
        echo $v . "<br>";
    }

    return $array;
}

// 実行
$nums = [15, 4, 18, 23, 10];
sort_2way($nums, true);   // 昇順
sort_2way($nums, false); // 降順
?>

    </p>
</body>

</html>