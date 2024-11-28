<?php
// app/models/loans.php
require_once '../config/database.php';

class Loan {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllLoans() {
        $query = $this->db->query("SELECT * FROM loans");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllBooks() {
        $query = $this->db->query("SELECT * FROM books");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }    

    public function find($id_pinjam) {
        $query = $this->db->prepare("SELECT * FROM loans WHERE id_pinjam = :id_pinjam");
        $query->bindParam(':id_pinjam', $id_pinjam, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_pinjam, $id_buku, $buku, $peminjam, $tanggal_pinjam, $tanggal_kembali) {
        $query = $this->db->prepare("INSERT INTO loans (id_pinjam, id_buku, buku_yang_dipinjam, peminjam, tanggal_pinjam, tanggal_kembali) 
            VALUES (:id_pinjam, :id_buku, :buku_yang_dipinjam, :peminjam, :tanggal_pinjam, :tanggal_kembali)");
        
        $query->bindParam(':id_pinjam', $id_pinjam);
        $query->bindParam(':id_buku', $id_buku);
        $query->bindParam(':buku_yang_dipinjam', $buku);
        $query->bindParam(':peminjam', $peminjam);
        $query->bindParam(':tanggal_pinjam', $tanggal_pinjam);
        $query->bindParam(':tanggal_kembali', $tanggal_kembali);
        
        return $query->execute();
    }

    public function update($id_pinjam, $data) {
        $query = "UPDATE loans 
            SET buku_yang_dipinjam = :buku_yang_dipinjam, peminjam = :peminjam, 
                tanggal_pinjam = :tanggal_pinjam, tanggal_kembali = :tanggal_kembali
            WHERE id_pinjam = :id_pinjam";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pinjam', $id_pinjam);
        $stmt->bindParam(':buku_yang_dipinjam', $data['buku_yang_dipinjam']);
        $stmt->bindParam(':peminjam', $data['peminjam']);
        $stmt->bindParam(':tanggal_pinjam', $data['tanggal_pinjam']);
        $stmt->bindParam(':tanggal_kembali', $data['tanggal_kembali']);
        return $stmt->execute();
    }

    public function delete($id_pinjam) {
        $query = "DELETE FROM loans WHERE id_pinjam = :id_pinjam";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pinjam', $id_pinjam);
        return $stmt->execute();
    }
}
