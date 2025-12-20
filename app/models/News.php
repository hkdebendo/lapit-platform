<?php
namespace App\Models;

use Core\Model;

class News extends Model
{
    /**
     * Récupère toutes les actualités (les plus récentes en tête)
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT 
                id,
                title,
                summary,
                date_posted,
                photo_path
             FROM news
             ORDER BY date_posted ASC, created_at ASC"
        );
    }

    /**
     * Récupère une actualité par son ID
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        return $this->fetch(
            "SELECT 
                id,
                title,
                content_full,
                date_posted,
                photo_path
             FROM news
             WHERE id = :id",
            ['id' => $id]
        );
    }

    public function getLatest(int $limit = 3): array
    {
        return $this->fetchAll(
            "SELECT 
                id,
                title,
                summary,
                date_posted,
                photo_path
             FROM news
             ORDER BY date_posted ASC, created_at ASC
             LIMIT :limit",
            ['limit' => $limit]
        );
    }
}
