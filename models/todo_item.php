<?php
class todo_item {
    private $itemID;
    private $listID;
    private $item_title;
    private $status;
    public function __construct() {
        $this->listID = 0;
        $this->itemID = 0;
        $this->item_title = '';
        $this->status = 0;
    }
    public function getItemID() {
        return $this->itemID;
    }
    public function setItemID($value) {
        $this->itemID = $value;
    }
    public function getListID() {
        return $this->listID;
    }
    public function setListID($value) {
        $this->listID = $value;
    }
    public function getItemTitle() {
        return $this->item_title;
    }
    public function setItemTitle($value) {
        $this->item_title = $value;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($value) {
        $this->status = $value;
    }
    public function isDone() {
        return $this->status=='complete';
    }
}
?>


