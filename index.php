<?php
require('models/database.php');
require('models/todo_list.php');
require('models/todo_list_db.php');

$list_DB = new todo_list_DB();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_tasks';
    }
}  
if ($action == 'list_tasks') {
    $listID = filter_input(INPUT_GET, 'listID', FILTER_VALIDATE_INT);
    if ($listID == NULL || $listID == FALSE) {
        $listID = $list_DB->getFirstList()->getID();
    } 
    $current_list = $list_DB->getList($listID);
    $lists = $list_DB->getLists();
    include('views/lists.php');
} else if ($action == 'add_list') { 
    $title = filter_input(INPUT_POST, 'title'); 
    if ($title == NULL || $title == FALSE) {
        $error = "Error: Please provide a valid list title";
    } else { 
        $list_DB::addList($title);
        $current_list = $list_DB->getAddedList($title);
        $lists = $list_DB->getLists();
    }
    include('views/lists.php');
}
?>
