class Notification {
    private $id;
    private $userId;
    private $message;
    private $isRead;
    private $createdAt;

    public function __construct($userId, $message) {
        $this->userId = $userId;
        $this->message = $message;
        $this->isRead = false;
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getMessage() {
        return $this->message;
    }

    public function isRead() {
        return $this->isRead;
    }

    public function markAsRead() {
        $this->isRead = true;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public static function createNotification($userId, $message) {
        // Logic to save notification to the database
    }

    public static function getUserNotifications($userId) {
        // Logic to retrieve notifications for a specific user
    }
}