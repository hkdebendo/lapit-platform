<?php
// app/models/Staff.php
namespace App\Models;

use Core\Model;

class Staff extends Model
{
    /**
     * Récupère tous les enseignants-chercheurs
     * @return array
     */
    public function getResearchers(): array
    {
        return $this->fetchAll(
            "SELECT id, first_name, last_name, position, photo_path
             FROM staff
             WHERE role = 'researcher'
             ORDER BY last_name, first_name"
        );
    }

    /**
     * Récupère un enseignant-chercheur par son ID
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        return $this->fetch(
            "SELECT id, first_name, last_name, position, email, phone, photo_path
             FROM staff
             WHERE id = :id",
            ['id' => $id]
        );
    }

    /**
     * Récupère les projets de recherche liés à un enseignant
     * @param int $staff_id
     * @return array
     */
    public function getProjects(int $staff_id): array
    {
        return $this->fetchAll(
            "SELECT p.title, ps.role_in_proj, p.status, p.description_short
             FROM project_staff ps
             JOIN projects p ON p.id = ps.project_id
             WHERE ps.staff_id = :sid",
            ['sid' => $staff_id]
        );
    }

    /**
     * Récupère les encadrements scientifiques
     * @param int $staff_id
     * @return array
     */
    public function getSupervisions(int $staff_id): array
    {
        return $this->fetchAll(
            "SELECT s.project_title AS project_title, stu.first_name, stu.last_name, s.level, s.year, s.description
 FROM encadrements s
 JOIN students stu ON stu.id = s.student_id
 WHERE s.supervisor_id = :sid",

            ['sid' => $staff_id]
        );
    }

    /**
     * Récupère les publications
     * @param int $staff_id
     * @return array
     */
    public function getPublications(int $staff_id): array
    {
        return $this->fetchAll(
            "SELECT pub.title, pub.pub_date, GROUP_CONCAT(a.first_name, ' ', a.last_name SEPARATOR ', ') AS authors, pub.content_full
             FROM publications pub
             JOIN pub_authors pa ON pa.pub_id = pub.id
             JOIN staff a ON a.id = pa.staff_id
             WHERE pa.staff_id = :sid
             GROUP BY pub.id
             ORDER BY pub.pub_date DESC",
            ['sid' => $staff_id]
        );
    }
}
