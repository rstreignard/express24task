<?php 

class Calculation {

    public function sumArrayNumbers($arr1, $arr2) {

        $result = [];
        
        $carry = 0;
        $i = 0;

        while (isset($arr1[$i]) || isset($arr2[$i]) || $carry) {

            $arr1_value = isset($arr1[$i]) ? $arr1[$i] : 0;
            $arr2_value = isset($arr2[$i]) ? $arr2[$i] : 0;

            $sum = $arr1_value + $arr2_value + $carry;

            $carry = ($sum > 9) ? 1 : 0;

            $result[$i] = $sum%10;

            $i++;
        }

        return $result;
    }
}

$calculation = new Calculation();

$arr1 = [2,4,3];
$arr2 = [5,6,4];

$arr3 = [0];
$arr4 = [0];

$arr5 = [9,9,9,9,9,9,9];
$arr6 = [9,9,9,9];

$result1 = $calculation->sumArrayNumbers($arr1, $arr2);
$result2 = $calculation->sumArrayNumbers($arr3, $arr4);
$result3 = $calculation->sumArrayNumbers($arr5, $arr6);

echo '[2,4,3] & [5,6,4]';
echo '<pre>';
print_r($result1);
echo '</pre>';

echo '[0] & [0]';
echo '<pre>';
print_r($result2);
echo '</pre>';

echo '[9,9,9,9,9,9,9] & [9,9,9,9]';
echo '<pre>';
print_r($result3);
echo '</pre>';