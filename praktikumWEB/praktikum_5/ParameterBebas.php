<?php
function get_max() 
{
    if (func_num_args() == 0) {
        return false;
        } else {
        $max = 0;
        foreach (func_get_args() as $arg) {
            if($max < $arg){
                $max = $arg;
            }
        }
        return $max;
    }
}
    echo get_max(10, 20).'<br>'; // Output: 20
    echo get_max(10, 20, 30).'<br>'; // Output: 30
    echo get_max(10, 20, 30, 40); // Output: 40
?>