<?php

interface Message {
    public function getId() : string;
    public function getAuthor() : Author;
    public function getMessage() : string;
    public function getTimeOfCreation() : string;
}