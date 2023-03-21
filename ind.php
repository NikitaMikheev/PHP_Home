<?php // ЗАДАЧА 1.
   /*  $val = 23491;

    function factorial($val) {
        $valArr = str_split($val);
        $factorial = $valArr[0];
        for ($index = 1; $index<count($valArr); $index++) {
            $factorial*=$valArr[$index];
        }

        return $factorial;
    }

    echo factorial($val); */
?>

<?php // ЗАДАЧА 2.
/*     $val = 997;

    function isNatural($val) {
        $simpleVal = [2,3,4,5,6,7,8,9,10];
        foreach($simpleVal as $item) {
            if($val!== $item && $val%$item == 0) {
                return false;
            }
        }

        return true;
    }

    var_dump(isNatural($val)); */
?>

<?php // ЗАДАЧА 3.
/*     $val1 = 997;
    $val2 = 1000;

    function maximumVal($val1, $val2) {
        if($val1>$val2) {
            return $val1;
        }

        elseif ($val2>$val1) {
            return $val2;
        }

        return "Числа одинаковые!";
    }

    echo maximumVal($val1, $val2); */
?>

<?php // ЗАДАЧА 4.
    /* $val1 = 11211;
    $val2 = 10131200;
    $val3 = 1333;

    function two_maximum_val($val1, $val2) {
        if($val1>$val2) {
            return $val1;
        }

        return $val2;

    }

    function three_maximum_val($val1, $val2, $val3) {
        $new_val = two_maximum_val($val1,$val2);
        if($val3>$new_val) {
            return $val3;
        }

        return $new_val;
    }

    echo three_maximum_val($val1, $val2, $val3); */
?>

<?php // ЗАДАЧА 5.
/* $arr = [10,30,220,40,2,0];

function max_arr($arr) {
    rsort($arr);
    return $arr[0];
}

echo max_arr($arr); */
?>

<?php // ЗАДАЧА 6.
/* $arr = [1, 2, 5, 6, 2, 3, 4];

function max_arr_next($arr) {
    $key = array_search(max($arr), $arr);
    return $arr[$key+1];
}

echo max_arr_next($arr); */
?>

<?php // ЗАДАЧА 7. Первый вариант
/* $arr = ["apple" => 3, "banana" => 5];

function reverse_key_item($arr) {


    return array_flip($arr);
}

print_r(reverse_key_item($arr)); */
?>

<?php // ЗАДАЧА 7. Второй вариант
/* $arr = ["apple" => 3, "banana" => 5];

function reverse_key_item($arr) {

    foreach($arr as $key => $item) {
        $old_key = $key;
        $arr[$item] = $old_key;
        array_shift($arr);
    }

}

reverse_key_item($arr);
print_r($arr); */
?>

<?php // ЗАДАЧА 8. Последняя с занятия.
/* $arr = [30,10,40,23,111,5,97,10];

function sort_arr(&$arr) {

    sort($arr);
    return $arr;

}

sort_arr($arr);
print_r($arr); */
?>