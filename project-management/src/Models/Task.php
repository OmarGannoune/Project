class Task {
    private $id;
    private $title;
    private $description;
    private $status;
    private $priority;
    private $projectId;
    private $assignedTo;
    private $createdAt;
    private $updatedAt;

    public function __construct($title, $description, $status, $priority, $projectId, $assignedTo) {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->priority = $priority;
        $this->projectId = $projectId;
        $this->assignedTo = $assignedTo;
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function getProjectId() {
        return $this->projectId;
    }

    public function getAssignedTo() {
        return $this->assignedTo;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function updateTask($title, $description, $status, $priority) {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->priority = $priority;
        $this->updatedAt = date('Y-m-d H:i:s');
    }
}