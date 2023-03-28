<?php

// $lunchMen =  array("초밥", "유부초밥", "김밥", "냉면", "라면", "돈까스", "쫄면");
// $randMenu = $lunchMen[array_rand($lunchMen)];
// echo $randMenu;

// for ($i=0; $i < 7; $i++) { 
//     echo $lunchMen[$i];
//     echo " ";
// }

// $month = range(1, 12);
// $week = array("일", "월", "화", "수", "목", "금", "토");
// $day = range(1, 31);
// echo $month[array_rand($month)],"월", " ";
// echo $day[array_rand($day)],"일", " ";
// echo $week[array_rand($week)],"요일", "\n";

// 두 날짜 사이의 임의의 날짜를 생성
function randomDate($start_date, $end_date)
{
    // 타임 스탬프로 변환
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // 위에서 얻은 타임 스탬프 값을 사용하여 난수 생성
    $val = rand($min, $max);

    // 원하는 날짜 형식으로 다시 변환
    return date('Y-m-d', $val);
}

$start_date = '2023-04-01';
$end_date = '2023-04-30';

echo "4월달 초밥 먹는 날: ", randomDate($start_date, $end_date), "\n";

// $arrayName = array("key1" => "val1", "key2" => "var2" );
// echo $arrayName["key1"];

$recipe = array(
    "계란초밥" => "계란",
    "새우초밥" => "새우",
    "장어초밥" => "장어",
    "유부초밥" => "유부",
    "연어초밥" => "연어",
    "광어초밥" => "광어",
    "참치초밥" => "참치",
    "날치알초밥" => "날치알",
    "문어초밥" => "문어",
    "가리비초밥" => "가리비",
    "북방조개초밥" => "북방조개"
);

$randomSushi = array_rand($recipe);
$ingredient = $recipe[$randomSushi];
echo "메뉴: ", $randomSushi, ", 주재료: ", $ingredient, "\n";

$multiDimension = array(
    range(1, 20),
    array("못 먹어", "맘껏 먹어"),
    array(
        array(30, 40, 100)
    )
);

$randMulti = $multiDimension[mt_rand(0, count($multiDimension) - 1)];
$index1 = mt_rand(0, count($multiDimension[0]) - 1);
$index2 = mt_rand(0, count($multiDimension[1]) - 1);
$index3 = mt_rand(0, count($multiDimension[2][0]) - 1);

// $randMulti = $multiDimension[0][$index1] . ' ' . $multiDimension[1][$index2] . ' ' . $multiDimension[2][0][$index3];
$randMultiarray = array($multiDimension[0][$index1], $multiDimension[1][$index2], $multiDimension[2][0][$index3]);
$randMulti = array_rand($randMultiarray);
$randMultiVal = $randMultiarray[$randMulti];
echo "먹을 갯수: ", $randMultiVal;

//echo "먹을 갯수: ", $multiDimention[2][0][2];
//arr_temp_3_c = array()

// $arr_dif1 = array("a","b","c");
// $arr_dif2 = array("a","b","d");

// $find_dif = array_diff($arr_dif1, $arr_dif2);
// print_r($find_dif);

$asort_example = array("a", "r", "d", "e", "g", "w", "q");
sort($asort_example);
print_r($asort_example);
rsort($asort_example);
print_r($asort_example);

ksort($recipe);
print_r($recipe);
krsort($recipe);
print_r($recipe);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "color : " . $value . "\n";
}

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $key => $val) {
    echo $key . " : " . $val . "\n";
}

// foreach ($age as $val) {
//     echo "나이 : ".$val."\n";
// }

$arr_ass_del = array(
    "된찌" => "파",
    "볶음밥" => "양파",
    "삭제" => "값값",
    "김치" => "마늘",
    "비빔밥" => "참기름"
);
foreach ($arr_ass_del as $key => $val) {
    if ($key === "삭제") {
        unset($arr_ass_del[$key]);
    } else {
        echo $key . " : " . $val . "\n";
    }
}
var_dump($arr_ass_del);
?>

<!-- foreach문
php에서는 배열에서만 작동하며
매 루프마다 지정된 값을 하나씩 체크하며 넘어간다
배열의 마지막 요소에 닿을 때까지.
---
배열을 반복시키는 쉬운 방법
배열과 객체에서만 작동하며
각 반복문 마다 현재의 요소를 내가 지정해준 $value에 할당된다.

$key를 지정해주면 추가로 현재 요소에 대한 key을 각 반복에 지정해 줄 수 있다.
---
foreach를 쓰면 배열안의 첫 요소부터 마지막 요소 까지 반복시켜 주기 때문에
배열안에 요소가 몇개가 있는지 몰라도 요소를 찾을 수 있다는 장점이 있다!

즉, 내가 지정해준 값으로 원하는 값이 있는지 확인해주고 있으면 뱉어준다.

--- 요소만 가지고 있는 배열
foreach ($array_name as $element) {
// process element here
}

---키와 값을 가진 배열
foreach ($array_name as $key => $value) {
//process element here;
} -->