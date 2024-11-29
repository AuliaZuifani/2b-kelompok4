<?php
// app/models/User.php
require_once '../config/database.php';//Menghubungkan kedatabase

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();//mengakses database yang diperlukan
    }

    public function getAllUsers() {//Mengambil 
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_user) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id_user = :id_user");
        $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nomor_anggota,$nama, $email,$password) {
        $query = $this->db->prepare("INSERT INTO users (nomor_anggota, nama, email, password) VALUES (:nomor_anggota, :nama, :email, :password)");
   
        $query->bindParam(':nomor_anggota', $nomor_anggota);
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id_user, $user) {
        $query = "UPDATE users SET nomor_anggota = :nomor_anggota, nama = :nama, email = :email , password = :password WHERE id_user = :id_user";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nomor_anggota', $user['nomor_anggota']);
        $stmt->bindParam(':nama', $user['nama']);
        $stmt->bindParam(':email', $user['email']);
        $stmt->bindParam(':password', $user['password']);
        $stmt->bindParam(':id_user', $id_user);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_user) {
        $query = "DELETE FROM users WHERE id_user = :id_user";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_user', $id_user);
        return $stmt->execute();
    }
}
