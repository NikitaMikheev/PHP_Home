<?php // ЗАДАЧА 1.
/*     $count = 0;
    $str = 3;
?>

<?php while($count<$str): ?>
    <p>Привет Мир!</p>  
<?php
    $count++;
    endwhile;  */
?>

<?php // ЗАДАЧА 2.
/*     $count = 1;
    $value = 4;

    while($count<=$value):
?>
    <p>Абзац <?=$count?></p>

<?php
    $count++;
    endwhile; */
?>

<?php // ЗАДАЧА 3.
/*     $start_point_money = 1000;
    $end_point_money = 10;
    $days = 0;
    
    while($start_point_money>=$end_point_money) {
        $start_point_money /= 2;
        $days++;
    }

    echo $days; */
?>

<?php // ЗАДАЧА 4.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86];
    asort($user_rate);
    foreach($user_rate as $user):
?>

<table>
    <tr><th><?=key($user_rate)?></th><td><?=$user?></td></tr>
</table>

<?php
    next($user_rate);
    endforeach; */
?>

<?php // ЗАДАЧА 5.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86];
    $summ = 0;

    foreach($user_rate as $user) {
        $summ += $user;
    }

    echo "Сумма рейтингов пользователей --------> " .$summ; */
?>

<?php // ЗАДАЧА 6.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86, 'Дмитрий' => 0, 'Дарья' => 95];
    $summ = 0;
    $count = 0;

    foreach($user_rate as $user) {
        if($user) {
            $summ +=$user;
            $count++;
        } 
    }

    echo "Средний рейтинг пользователей -------> " .$summ/$count; */
?>

<?php // ЗАДАЧА 7.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86, 'Дмитрий' => 0, 'Дарья' => 95, 'Елена' => 125];

    foreach($user_rate as &$user) {
        if($user>100) {
            $user = 100;
        }
    }

    print_r($user_rate); */

?>

<?php // ЗАДАЧА 8.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86, 'Дмитрий' => 0, 'Дарья' => 95, 'Елена' => -39];

    foreach($user_rate as &$user) {
        if($user<0) {
            $user = 0;
        }
    }

    print_r($user_rate); */

?>

<?php // ЗАДАЧА 9.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86, 'Дмитрий' => 0, 'Дарья' => 95, 'Елена' => -29];

    foreach($user_rate as $key => $user) {
        if($user>50) {
            echo "\n\n\nПользователь: " .$key . "\nРейтинг пользователя: " .$user;
        }
    } */
?>

<?php // ЗАДАЧА 10.
/*     $user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86, 'Дмитрий' => 0, 'Дарья' => 95, 'Елена' => -29];

    foreach($user_rate as $key => $user) {
        if($user<=30) {
            $status = "новичок";
        }

        elseif($user>30 && $user<=60) {
            $status = "мастер";
        }

        elseif($user>60) {
            $status = "грандмастер";
        }

        echo "Пользователь {$key} имеет рейтинг: {$user}. Статус - {$status}" .PHP_EOL;
    }  */
?>

<?php // ЗАДАЧА 11. 
// Первый способ
/*     $first_user_rate = ['Андрей' => 39, 'Семен' => 23, 'Петр' => 43, 'Екатерина' => 86, 'Дмитрий' => 0, 'Дарья' => 95, 'Елена' => -29];
    $second_user_rate = ['Семен' => 33, 'Александр' => 63, 'Екатерина' => 86, 'Петр' => 80, 'Дарья' => 15, 'Павел' => -219];

    foreach($first_user_rate as $first_key_arr => $first_arr_user) {
        foreach($second_user_rate as $second_key_arr => $second_arr_user) {
            if($first_key_arr===$second_key_arr) {
                unset($first_user_rate[$first_key_arr]);
            }
        }
    }
    
    print_r($first_user_rate); */

// Второй способ. Не работает с русскими буквами.

/* $first_user_rate = ['Andrew' => 39, 'Semen' => 23, 'Pete' => 43, 'Kate' => 86, 'Dima' => 0, 'Darya' => 95, 'Elena' => -29];
$second_user_rate = ['Semen' => 33, 'Alex' => 63, 'Kate' => 86, 'Pete' => 80, 'Darya' => 15, 'Pavel' => -219];

$a = array_diff($first_user_rate, $second_user_rate);
print_r($a); */
?>

<?php // ЗАДАЧА 12.
/* $row_count = 15;

for ($i=1; $i <= $row_count; $i++):
?>

<table> 
    <?php
        if($i%2===0):
    ?>
    <tr><td class="green"><?="{$i}. "?>Цвет</td></tr>
    <style type="text/css">
        .green {
            color: green;
        }
    </style>
    <?php
        endif;
    ?>

    <?php
        if($i%2!==0):
    ?>
    <tr><td class="blue"><?="{$i}. "?>Цвет</td></tr>
    <style type="text/css">
        .blue {
            color: blue;
        }
    </style>
    <?php
        endif;
    ?>
</table>

<?php 
    endfor */
?> 