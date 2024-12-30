class User {
    private $id;
    private $username;
    private $password;
    private $email;
    private $role;

    public function __construct($id, $username, $password, $email, $role) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function save() {
        // Code to save user to the database
    }

    public function delete() {
        // Code to delete user from the database
    }

    public static function findById($id) {
        // Code to find user by ID
    }

    public static function findByUsername($username) {
        // Code to find user by username
    }
}