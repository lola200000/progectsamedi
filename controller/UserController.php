<?php
require_once 'model/User.php';

class UserController {
    public function show() {
        $user = new User("Jean Dupont");
        require 'view/userView.php';
    }
}