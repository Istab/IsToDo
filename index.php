<?php
require('models/database.php');
require('models/todo_list.php');
require('models/todo_list_db.php');

$list_DB = new todo_list_DB();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'index_lists';
    }
}  
if ($action == 'index_lists') {
    $listID = filter_input(INPUT_GET, 'listID', FILTER_VALIDATE_INT);
    $rename_list = filter_input(INPUT_GET, 'rename_list', FILTER_VALIDATE_BOOLEAN);
    if ($listID == NULL || $listID == FALSE) {
        $listID = $list_DB->getFirstList()->getID();
    } 
    $current_list = $list_DB->getList($listID);
} else if ($action == 'add_list') { 
    $title = filter_input(INPUT_POST, 'title'); 
    if ($title == NULL || $title == FALSE) {
        $error = "Error: Please provide a valid list title";
    } else { 
        $list_DB::addList($title);
    }
    $current_list = $list_DB->getAddedList($title);
} else if ($action == 'delete_list') {
    $listID = filter_input(INPUT_POST, 'listID', FILTER_VALIDATE_INT);
    $list_DB::deleteList($listID);
    $current_list = $list_DB->getFirstList();
} else if ($action == 'rename_list') {
    $title = filter_input(INPUT_POST, 'title');
    $listID = filter_input(INPUT_POST, 'listID', FILTER_VALIDATE_INT);
    if ($title != NULL && $title != FALSE) {
        $list_DB::renameList($listID, $title);
    } else {
        $error = "Error: Please provide a valid list title";
    }
    $current_list = $list_DB->getList($listID);
}
$lists = $list_DB->getLists();
include('views/lists.php');
?>
