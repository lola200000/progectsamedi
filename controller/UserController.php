<?php
require_once 'model/User.php';

class UserController {
    public function showUser() {
        $user = new User("Jean Dupont");
        require 'view/userView.php';
    }
}
