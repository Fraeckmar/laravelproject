<?php
/**
 * 
 * EXERCISE 1
 * 
 */
$string = "The quick brown fax";
$words_arr = explode(' ', $string);
$new_words = [];
foreach($words_arr as $word){
    $exclude_first = substr($word, 1);
    $first_char = strtolower($word[0]);
    $new_words[] = $exclude_first.$first_char."ay";    
}
echo '<h4>Exercise 1</h4>';
echo ucfirst(implode(' ', $new_words));



/**
 * 
 * EXERCISE 2
 * 
 */
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$arr1_2 = array_combine($arr1, $arr2);
$alt_arr = [];

foreach($arr1 as $idx => $arr){
    $alt_arr[] = $arr;
    $alt_arr[] = $arr2[$idx];
}
echo '<h4>Exercise 2</h4>';
echo "<pre>";
print_r($alt_arr);
echo "</pre>";

/**
 * 
 * EXERCISE 3
 * 
 */

function get_total_points($numbers){
    $total_points = 0;
    foreach($numbers as $number){
        if( $number == 8 ){
            $total_points += 5;
        }elseif( $number % 2 == 0 ){
            $total_points += 1;
        }else{
            $total_points += 3;
        }
    }
    return $total_points;
}
echo '<h4>Exercise 3</h4>';
echo 'Input: [1,2,3,4,5]<br/>';
echo 'Output: '.get_total_points([1,2,3,4,5]).'<br/>';
echo 'Input: [8,5,2]<br/>';
echo 'Output: '.get_total_points([8,5,2]);




/**
 * 
 * EXERCISE 4
 * 
 */
function sort_multidem_array($a, $b){
    $str = $a['grade'] - $b['grade'];
    $str.= strcmp($a['name'],  $b['name']);
    return $str;
}
$students = [
    [
        'name' => 'Ana',
        'grade' => 1
    ],
    [
        'name' => 'Ernie',
        'grade' => 1
    ],
    [
        'name' => 'Bert',
        'grade' => 1
    ],
    [
        'name' => 'Andy',
        'grade' => 2
    ],
    [
        'name' => 'David',
        'grade' => 2
    ],
    [
        'name' => 'Bob',
        'grade' => 2
    ],
];
usort($students, 'sort_multidem_array');
$categorize_students = [];
foreach($students as $student){
    $categorize_students['Grade '.$student['grade']][] = $student['name'];
}
echo '<h4>Exercise 4</h4>';
echo "<pre>";
print_r($categorize_students);
echo "</pre>";




/**
 * 
 * EXERCISE 5
 * 
 */
echo '<h4>Exercise 5</h4>';
$max_count = 0;
$d_arr = ['Hello', 'word', 'in', 'a', 'frame'];
$arr_count = count($d_arr);
foreach( $d_arr as $idx => $str ){
    if($idx == 0 || $idx == $arr_count-1){
        if($idx == 0){
            echo str_pad('', $arr_count+3, '*', STR_PAD_RIGHT)."<br/>";
            echo "* ".str_pad($str, $arr_count, ' ', STR_PAD_RIGHT)." *<br/>";
            continue;
        }else{
            echo "* ".str_pad($str, $arr_count, ' ', STR_PAD_RIGHT)." *<br/>";
            echo str_pad('', $arr_count+3, '*', STR_PAD_RIGHT)."<br/>";
            continue;
        }
        
    }
    echo "* ".str_pad($str, $arr_count, '_', STR_PAD_RIGHT)." *<br/>";
}
echo '<pre>';
print_r();
echo '</pre>';