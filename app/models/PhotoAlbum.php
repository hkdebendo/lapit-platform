<?php
// app/models/PhotoAlbum.php
namespace App\Models;

use Core\Model;

class PhotoAlbum extends Model
{
    /**
     * Récupère tous les albums photo
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT id, title, cover_photo_path, created_at
             FROM photo_albums
             ORDER BY created_at DESC"
        );
    }

    /**
     * Récupère un album et ses photos
     * @param int $id
     * @return array|null  ['album'=>..., 'photos'=>[]]
     */
    public function getById(int $id): ?array
    {
        $album = $this->fetch(
            "SELECT id, title, cover_photo_path, created_at
             FROM photo_albums
             WHERE id = :id",
            ['id' => $id]
        );

        if (!$album) {
            return null;
        }

        $photos = $this->fetchAll(
            "SELECT id, photo_path, caption
             FROM photos
             WHERE album_id = :id",
            ['id' => $id]
        );

        return ['album' => $album, 'photos' => $photos];
    }
}
