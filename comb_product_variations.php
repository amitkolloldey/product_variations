<?php

$data[]= array('small','medium','large');
$data[]= array('red','yellow','black','blue');
$data[]= array('custom','general','extend','2 color');

$combos=possible_combos($data);

//calculate all the possible comobos creatable from a given choices array
function possible_combos($groups, $prefix='') {
    $result = array();
    $group = array_shift($groups);
    foreach($group as $selected) {
        if($groups) {
            $result = array_merge($result, possible_combos($groups, $prefix . $selected. ' '));
        } else {
            $result[] = $prefix . $selected;
        }
    }
    return $result;
}

echo "<pre>";
print_r($combos);
echo "</pre>";