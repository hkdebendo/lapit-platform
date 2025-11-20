<?php
namespace App\Models;

use Core\Model;

class VideoAlbum extends Model
{
    /**
     * Récupère tous les albums vidéo
     * @return array
     */
    public function getAll(): array
    {
        return $this->fetchAll(
            "SELECT id, title, cover_video_url, created_at
             FROM video_albums
             ORDER BY created_at DESC"
        );
    }

    /**
     * Récupère un album et ses vidéos
     * @param int $id
     * @return array|null  ['album'=>..., 'videos'=>[]]
     */
    public function getById(int $id): ?array
    {
        $album = $this->fetch(
            "SELECT id, title, cover_video_url, created_at
             FROM video_albums
             WHERE id = :id",
            ['id' => $id]
        );
        if (!$album) return null;

        $videos = $this->fetchAll(
            "SELECT id, video_url, caption
             FROM videos
             WHERE album_id = :id",
            ['id' => $id]
        );
        return ['album' => $album, 'videos' => $videos];
    }
}
