<?php

class User {
    public $username;
    public $email;
    public $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public static function check_password($password) {
        $hasUppercase = preg_match('/[A-Z]/', $password);
        $hasLowercase = preg_match('/[a-z]/', $password);
        $hasSpecialChar = preg_match('/[\W_]/', $password); 
        $isLongEnough = strlen($password) >= 12;

        return $hasUppercase && $hasLowercase && $hasSpecialChar && $isLongEnough;
    }

    public static function validate_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function copy_with($newUsername = null, $newEmail = null, $newPassword = null) {
        return new User(
            $newUsername ?? $this->username,
            $newEmail ?? $this->email,
            $newPassword ?? $this->password
        );
    }

    public function save_to_db($connection) {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        $query = $connection->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $query->bind_param("sss", $this->username, $this->email, $hashedPassword);

        $query->execute();

        if ($query->affected_rows > 0) {
            return [
                "status" => "Successful",
                "message" => "User created successfully.",
                "user_id" => $query->insert_id, 
            ];
        } else {
            return [
                "status" => "Failed",
                "message" => "Could not create user. Error: " . $query->error,
            ];
        }
    }
}



?>