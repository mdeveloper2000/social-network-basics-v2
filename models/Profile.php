<?php

class Profile implements \JsonSerializable {

    private $id;
    private $picture;    
    private $about;
    private $user_id;

    public function __construct() {        
    }

    public function jsonSerialize() : mixed {
        $vars = get_object_vars($this);
        return $vars;
    }

    public function getId() {
        return $this->id;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getAbout() {
        return $this->about;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setPicture($picture): void {
        $this->picture = $picture;
    }

    public function setAbout($about): void {
        $this->about = $about;
    }

    public function setUser_id($user_id): void {
        $this->user_id = $user_id;
    }

}