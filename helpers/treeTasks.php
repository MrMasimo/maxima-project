<?php

function getTreeTasks($tasks = [], $selectId = null) {
    $notes = array_filter($tasks, function($item) use ($selectId){
        return $item['parent_id'] == $selectId;
    });
    if(count($notes)){
        foreach ($notes as $note){
            echo '<ul>';
            echo '<li>'. $note['name'] . '</li>';
            getTreeTasks($tasks, $note['id']);
            echo '</ul>';
            }
    }
}
