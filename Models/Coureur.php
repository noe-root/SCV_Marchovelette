<?php
class Coureur {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll(): array {
        $stmt = $this->db->query("SELECT * FROM coureurs ORDER BY nom ASC");
        return $stmt->fetchAll();
    }

    public function getById(int $id): ?object {
        $stmt = $this->db->prepare("SELECT * FROM coureurs WHERE coureur_ID = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }

    public function getByCategorie(string $categorie): array {
        $stmt = $this->db->prepare("SELECT * FROM coureurs WHERE categorie = ? ORDER BY nom ASC");
        $stmt->execute([$categorie]);
        return $stmt->fetchAll();
    }

    public function getPalmares(int $coureurId): array {
        $stmt = $this->db->prepare("
            SELECT p.*, e.nom AS evenement_nom, e.date_evenement
            FROM palmares p
            JOIN evenements e ON p.evenement_ID = e.evenement_ID
            WHERE p.coureur_ID = ?
            ORDER BY e.date_evenement DESC
        ");
        $stmt->execute([$coureurId]);
        return $stmt->fetchAll();
    }
}