<?php
// app/controllers/publiserController.php
require_once '../app/models/publiser.php';

class PubliserController {

    public function __construct() {
        $this->publiserModel = new Publiser();
    }

    public function index() {
        $publiser = $this->publiserModel->getAllPubliser();
        require_once '../app/views/publishers/index.php';

    }

    public function create() {
        require_once '../app/views/publishers/create.php';
    }

    public function store() {
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        $this->publiserModel->add($id_penerbit, $nama_penerbit, $alamat, $kontak);
        header('Location: /publiser/index');
    }
    // Show the edit form with the publiser data
    public function edit($id) {
        $publiser = $this->publiserModel->find($id); // Assume find() gets publiser by ID
        require_once __DIR__ . '/../views/publishers/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->publiserModel->update($id, $data);
        if ($updated) {
            header("Location: /publiser/index"); // Redirect to publiser list
        } else {
            echo "Failed to update publiser.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->publiserModel->delete($id);
        if ($deleted) {
            header("Location: /publiser/index"); // Redirect to publiser list
        } else {
            echo "Failed to delete publiser.";
        }
    }
}