<?php
class todo_item_DB {
    public function getItemsByList($listID) {
        $db = Database::getDB();
        $query = "SELECT * FROM todo_item WHERE listID = '$listID' ORDER BY itemID";
        $result = $db->query($query); 
        $items = array(); 
        foreach ($result as $row) {
            $todo_item = new todo_item();
            $todo_item->setItemID($row['itemID']);
            $todo_item->setListID($row['listID']);
            $todo_item->setItemTitle($row['item_title']);
            $todo_item->setStatus($row['status']); 
            $items[] = $todo_item;
        }
        return $items; 
    }
    public function addItem($title, $status, $listID) {
        $db = Database::getDB();
        $query = "INSERT INTO todo_item (item_title , status , listID) VALUES ('$title' , '$status' , '$listID')";
        $db->exec($query);
    }
    public function renameItem($itemID, $item_title) {
        $db = Database::getDB();
        $query = "UPDATE todo_item SET item_title = '$item_title' WHERE itemID = '$itemID'"; 
        $db->exec($query);
    }
    public function toggleItem($itemID, $status) {
        $db = Database::getDB();
        $query = "UPDATE todo_item SET status = '$status' WHERE itemID = '$itemID'"; 
        $db->exec($query);
    }
}
?>
