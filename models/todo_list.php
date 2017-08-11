<?php
class todo_list {
    private $listID;
    private $title;
    public function __construct() {
        $this->listID = 0;
        $this->title = '';
    }
    public function getID() {
        return $this->listID;
    }
    public function setID($value) {
        $this->listID = $value;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($value) {
        $this->title = $value;
    }
}
?>
