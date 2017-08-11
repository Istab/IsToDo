<?php
class todo_list_DB {
    public function addList($title) {
        $db = Database::getDB();
        $query = "INSERT INTO todo_list (title) VALUES ('$title')";
        $db->exec($query);
    }
    public function deleteList($listID) {
        $db = Database::getDB();
        $query = "DELETE FROM todo_list WHERE listID = '$listID'";
        $db->exec($query);
    }
    public function getAddedList($title) {
        $db = Database::getDB();
        $query = "SELECT * FROM todo_list WHERE title = '$title'";
        $statement = $db->query($query);
        $row = $statement->fetch();
        $todo_list = new todo_list();
        $todo_list->setID($row['listID']);
        $todo_list->setTitle($row['title']);
        return $todo_list;
    }
    public function getFirstList() {
        $db = Database::getDB();
        $query = 'SELECT * FROM todo_list LIMIT 1';
        $statement = $db->query($query);
        $row = $statement->fetch();
        $list = new todo_list();
        $list->setID($row['listID']);
        $list->setTitle($row['title']);
        return $list;
    }
    public function getList($listID) {
        $db = Database::getDB();
        $query = "SELECT * FROM todo_list WHERE listID = '$listID'";
        $statement = $db->query($query);
        $row = $statement->fetch();
        $list = new todo_list();
        $list->setID($row['listID']);
        $list->setTitle($row['title']);
        return $list;
    }
    public function getLists() {
        $db = Database::getDB();
        $query = 'SELECT * FROM todo_list ORDER BY listID';
        $result = $db->query($query);
        $lists = array();
        foreach ($result as $row) {
            $list = new todo_list();
            $list->setID($row['listID']);
            $list->setTitle($row['title']);
            $lists[] = $list;
        }
        return $lists;
    }
    public function renameList($listID, $title) {
        $db = Database::getDB();
        $query = "UPDATE todo_list SET title = '$title' WHERE listID = '$listID'";
        $db->exec($query);
    }
}
