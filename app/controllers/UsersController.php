<?php
// app/controllers/UserController.php
require_once '../app/models/Users.php';

class UsersController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../app/views/users/index.php';

    }

    public function create() {
        require_once '../app/views/users/create.php';
    }

    public function store() {
        $nomor_anggota= $_POST['nomor_anggota'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->add($nomor_anggota, $nama, $email,$password);
        header('Location: /users/index');
    }
    // Show the edit form with the user data
    public function edit($id_user) {
        $user = $this->userModel->find($id_user); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/users/edit.php';
    }

    // Process the update request
    public function update($id_user, $data) {
        $updated = $this->userModel->update($id_user, $data);
        if ($updated) {
            header("Location: /users/index"); // Redirect to user list
        } else {
            echo "Failed to update users.";
        }
    }

    // Process delete request
    public function delete($id_user) {
        $deleted = $this->userModel->delete($id_user);
        if ($deleted) {
            header("Location: /users/index"); // Redirect to user list
        } else {
            echo "Failed to delete users.";
        }
    }
}
