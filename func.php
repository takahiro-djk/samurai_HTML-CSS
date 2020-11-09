<?php
$file_list = [];
function add_list($name){
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list, $file_name);
}

add_list("function");
var_dump($file_list);
# => array(1) {
#      [0]=>
#      string(12) "function.php"
#    }と表示される
add_list("hello");
var_dump($file_list);
# => array(2) {
#      [0]=>
#      string(12) "function.php"
#      [1]=>
#      string(9) "hello.php"
#    }と表示される
?>
