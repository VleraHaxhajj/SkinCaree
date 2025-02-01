<?php
class UserRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerUser($user) {
        $stmt = $this->db->getConnection()->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $user->getName(), $user->getEmail(), $user->getPassword());
        $stmt->execute();
        $stmt->close();
    }

    public function getUserByEmail($email) {
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); 
    }
}
?>
