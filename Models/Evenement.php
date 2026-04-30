<?php
class Evenement {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll(): array {
        $stmt = $this->db->query("SELECT * FROM evenements ORDER BY date_evenement ASC");
        return $stmt->fetchAll();
    }

    public function getProchains(int $limit = 5): array {
        $stmt = $this->db->prepare("
            SELECT * FROM evenements
            WHERE date_evenement >= CURDATE()
            ORDER BY date_evenement ASC
            LIMIT ?
        ");
        $stmt->execute([$limit]);
        return $stmt->fetchAll();
    }

    public function getPasses(int $limit = 10): array {
        $stmt = $this->db->prepare("
            SELECT * FROM evenements
            WHERE date_evenement < CURDATE()
            ORDER BY date_evenement DESC
            LIMIT ?
        ");
        $stmt->execute([$limit]);
        return $stmt->fetchAll();
    }

    public function getById(int $id): ?object {
        $stmt = $this->db->prepare("SELECT * FROM evenements WHERE evenement_ID = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }
}