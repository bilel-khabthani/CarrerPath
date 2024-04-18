<?php
require '../config.php';


class Offre {
    private int $id;
    private string $title;
    private string $description;
    private date $date_created;
    private date $date_expired;

    public function __construct($id, $title, $description, $date_created,$date_expired) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->date_created = $date_created;
        $this->date_expired= $date_expired;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDateCreated() {
        return $this->date_created;
    }
    public function getDateExpired() {
        return $this->date_expired;
    }
}
?>