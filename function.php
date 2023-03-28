<?php
// $a = 1;
// $b = 2;
// $sumNum = $a + $b;

// echo $sumNum;

// function funcAdd($intA, $intB){
//     $sumNum = $intA + $intB;
//     return $sumNum;
// }

// echo funcAdd(3,4)."\n". funcAdd(1, 1);

// 빼기
function funcSutr($intA, $intB){
    $sutrNum = $intA - $intB;
    return $sutrNum;
}

// 나누기
function funcDivi($intA, $intB){
    $diviNum = $intA / $intB;
    return $diviNum;
}

// 곱하기
function funcMulp($intA, $intB){
    $mulpNum = $intA * $intB;
    return $mulpNum;
}

echo "1. 5-4 = ".funcSutr(5,4). "\n2. 8/4 = " . funcDivi(8,4). "\n3. 2*3 = " . funcMulp(2,3). "\n";

//소수인지 아닌지
function additionalPrac($a, $b){
    if ($a % $b == 0) {
        return "소수가 아닙니다";
    }else{
        $result = $a / $b;
        // return $devidResult;
        //소수점만 출력
        return $result - floor($result);
    }
};

echo "소수점 아래만 구하기 \n5나누기2 = ". additionalPrac(5,2)."\n4나누기2 = ". additionalPrac(4, 2) . "\n";

// function func_args_add(){
//     $args = func_get_args();
//     $sum = 0;
//     foreach ($args as $val){
//         $sum += $val;
//     }
//     return $sum;
// }
// echo func_args_add(1, 3, 4, 2);

// function sumArray()
// {
//     $integers = func_get_args();
//     return array_sum($integers);
// }
// echo sumArray(1, 2, 3, 4);

// function func_args_substract($first_val, ...$last){
//     $args = func_get_args();
//     $result = $first_val;
//     foreach ($args as $val){
//         $result -= $val;
//     }
//     return $result;
// }
// echo func_args_substract(1, 3, 4, 2);

function func_args_substract()
{
    $args = func_get_args();
    $result = array_shift($args);
    foreach ($args as $val) {
        $result -= $val;
    }
    return $result;
}
echo func_args_substract(1, 3, 4, 2)."\n";

function func_args_substract2(...$numbers)
{
    $result = $numbers[0];
    for ($i=1; $i < count($numbers) ; $i++) {
        $result -= $numbers[$i];
    }
    return $result;
}
echo func_args_substract2(1, 3, 4, 2) . "\n";

function func_args_substract3()
{
    $args = func_get_args();
    $result = $args[0];
    for ($i = 1; $i < count($args); $i++) {
        $result -= $args[$i];
    }
    return $result;
}
echo func_args_substract3(1, 3, 4, 2) . "\n";

//array_shift 배열의 첫번째 값을 삭제하고 그 값을 리턴값으로 돌려주는 함수

//함수는 값을 입력받아서 작동하기 때문에
//함수가 작동하기 위해 받는 입력값을 파라미터라고 한다.
//가변 파라미터는 그 값이 계속 변한다는 뜻이다.

function func_args_multipl()
{
    $args = func_get_args();
    $result = array_shift($args);
    foreach ($args as $val) {
        $result *= $val;
    }
    return $result;
}
echo func_args_multipl(1, 3, 4, 2) . "\n";

function func_args_divid()
{
    $args = func_get_args();
    $result = array_shift($args);
    foreach ($args as $val) {
        $result /= $val;
    }
    return $result;
}
echo func_args_divid(1, 3, 4, 2) . "\n";

function repeatMultipl($i) {
            if ($i > 0) {
                return $i * repeatMultipl($i - 1);
            }
            return 1;
        }
echo repeatMultipl(5)."\n";

function repeatSum($i)
{
    if ($i > 0) {
        return $i + repeatSum($i - 1);
    }
    return 0;
}
echo repeatSum(5) . "\n";


$fruits = [
    '사과' => 10,
    '배' => 5,
    '수박' => 2,
    '포도' => 0,
];

function checkFruit(&$fruits, $fruitName)
{
    if (array_key_exists($fruitName, $fruits)) {
        if ($fruits[$fruitName] > 0) {
            $fruits[$fruitName] --;
            echo "{$fruitName} 한 개를 꺼냈습니다. 남은 수량: {$fruits[$fruitName]}\n";
        } else {
            echo "{$fruitName}은(는) 더 이상 남아있지 않습니다.\n";
        }
    } else {
        echo "{$fruitName}은(는) 존재하지 않는 과일입니다.\n";
    }
}

checkFruit($fruits, '사과');
checkFruit($fruits, '배');
checkFruit($fruits, '수박');
checkFruit($fruits, '포도');
checkFruit($fruits, '망고');

checkFruit($fruits, '사과');


?>