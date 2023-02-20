<?php
// Задача 1.

/*  $reputation_of_user = ['Иван' => 37, 'Дарья' => 49, 'Петр' => 21];
 print_r($reputation_of_user); */

 // Задача 2.

/*  $users_age = ['Петр' => 32, 'Сергей' => 25, 'Елена' => 49];
 $key = 'Елна';

 if(isset($users_age[$key])) {
    echo $users_age[$key];
 }

 else {
    echo 'Данные не найдены!';
 } */

 // Задача 3.

/*  $word_list = [
    'Кот' => "одно из наиболее популярных домашних животных",
    'Лес' => "экологическая система, биогеоценоз, в которой главной жизненной формой являются деревья",
    'Озеро' => " компонент гидросферы, представляющий собой естественно возникший водоём, заполненный в пределах озёрной чаши"
 ];

 $key = 'Лес';

 if(isset($word_list[$key])) {
    echo $key ." - " .$word_list[$key];
 }

 else {
    echo 'Данные не найдены!';
 } */

 // Задача 4.

//  $reputation_of_user = ['Иван' => 137, 'Дарья' => 49, 'Петр' => 21, 'Александр' => 108];

//  $user_name = 'Александр';

//  if(isset($reputation_of_user[$user_name])) {
//     if($reputation_of_user[$user_name]>100) {
//         $reputation_of_user[$user_name] = 100;
//     }
//  }

//  else {
//     echo "Такого пользователя не существует!";
//  }

// /*  foreach ($reputation_of_user as $key => $items) { АЛЬТЕРНАТИВНЫЙ ВАРИАНТ ЧЕРЕЗ ЦИКЛ
//     if($reputation_of_user[$key]>100) {
//         $reputation_of_user[$key]=100;
//     }
//  } */
//  print_r($reputation_of_user);

// Задача 5.
/* $reputation_of_user = ['Иван' => 137, 'Дарья' => 49, 'Петр' => 21, 'Александр' => 108];
$user = 'Петр';

if(isset($reputation_of_user[$user])) {

    if($reputation_of_user[$user]<=30) {
        echo $user ." - новичок";
    }
    
    elseif($reputation_of_user[$user]>30 && $reputation_of_user[$user]<=60) {
        echo $user ." - мастер";
    }

    elseif($reputation_of_user[$user]>60) {
        echo $user ." - грандмастер";
    }
}

else {
    echo "Такого пользователя не существует!";
} */

// Задача 6. 

/* $rate_of_user = ['Иван' => 137, 'Дарья' => 49, 'Петр' => 21, 'Александр' => 108];
$user = 'Педро';

if(isset($rate_of_user[$user])) {
    $rate_of_user[$user] = $rate_of_user[$user]+1;
}

else {
    $rate_of_user[$user] = 0;
}

print_r($rate_of_user); */

// Задача 7.

/* $reputation_of_user = ['Иван' => 137, 'Дарья' => 49, 'Михаил' => -30, 'Петр' => 21, 'Александр' => 108];
$user = "Михаил";

if(isset($reputation_of_user[$user])) {
    if($reputation_of_user[$user]<0) {
        unset($reputation_of_user[$user]);
    }
}

else {
    echo "Такого пользователя не существует!";
}

print_r($reputation_of_user); */

// Задача 8. 

/* $route = 'C:\ospanel\domains\php4.local';

$route_array = explode('\\', $route);


echo "Имя файла -----> " .$route_array[count($route_array)-1];
echo "\nПапка, в которой хранится файл -----> " .$route_array[count($route_array)-2]; */

// Задача 9.

/* $user_rate = ['Иван' => 30, 'Петр' => 33, 'Алексей' => 25, 'Сергей' => 32, 'Михаил' => 45];
$user_rate_name = $user_rate;
arsort($user_rate_name);
rsort($user_rate);


echo "Наибольший рейтинг у пользователя -----> " .array_key_first($user_rate_name) .' и равен ' .$user_rate[0] .PHP_EOL;
next($user_rate_name);

echo "Второй по рейтингу пользователь -----> " .key($user_rate_name) .' и равен ' .$user_rate[1] .PHP_EOL;
next($user_rate_name);

echo "Третий по рейтингу пользователь -----> " .key($user_rate_name) .' и равен ' .$user_rate[2]; */

// Задача 10.

/* $week_days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$week_days_eng = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$text = 'If you feel like a function should be enabled/disabled, friday if you have any other suggestions, let me know through the comments below or send me an email :)';

echo str_ireplace($week_days_eng, $week_days, $text); */

// Задача 11.
?>
