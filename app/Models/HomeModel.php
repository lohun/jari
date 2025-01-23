<?php

namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\Exceptions\DatabaseException;

class HomeModel extends Model
{

    protected $table = "mail";
    protected $allowedFields = [
        'name', 'msg', 'subject',
    ];

    protected $useTimestamps = false;

    public function getAllUsers($id):array
    {
        try {
            $sql = "SELECT * from users WHERE id <> ?";
            $query = $this->db->query($sql, [$id]);
            return $query->getResult();
        } catch (DatabaseException $e) {
            return [];
        }
    }


    public function addMail($name, $subject, $msg): bool
    {
        try {
            $this->db->transStart();
            $this->db->query("INSERT INTO mail (name, subject, msg, date) VALUE(?, ?, ?, CURDATE())", [$name, $subject, $msg]);
            $this->db->transComplete();
            if ($this->db->transStatus() === false) {
                $this->db->transRollback();
                return false;
            } else {
                $this->db->transCommit();
                return true;
            }
        } catch (DatabaseException $e) {
            return false;
        }
    }

    public function getAllMessages(): array
    {
        try {
            $query = $this->db->query("SELECT id, date, name, subject FROM mail ORDER BY date DESC");
            return $query->getResult();
        } catch (DatabaseException $e) {
            return [];
        }
    }

    public function getAMessage(int $id): object
    {
        try {
            $query = $this->db->query("SELECT * FROM mail WHERE id = ?", [$id]);
            return $query->getRow();
        } catch (DatabaseException $e) {
            return (object)[];
        }
    }

    public function getAllMedia(): array
    {
        // still add order after everything works
        try {
            $query = $this->db->query("SELECT * FROM media");
            return $query->getResult();
        } catch (DatabaseException $e) {
            return [];
        }
    }

    public function deleteMedia(int $id): bool
    {
        try{
            $this->db->transStart();
            $query = $this->db->query("SELECT * FROM media WHERE id = ?", [$id]);
            $data = $query->getRow();
            if($data) {
                unlink(ROOTPATH.'public/'.$data->thumbnail);
                unlink(ROOTPATH.'public/'.$data->media);
            }
            $this->db->query("DELETE FROM media WHERE id = ?", [$id]);
            $this->db->transComplete();
            if ($this->db->transStatus() === false) {
                $this->db->transRollback();
                return false;
            } else {
                $this->db->transCommit();
                return true;
            }
        }catch (DatabaseException $e){
            return false;
        }
    }

    public function addMedia($thumbnail, $media, $type, $description): bool
    {
        try {
            $this->db->transStart();
            $this->db->query("INSERT INTO media (thumbnail, media, type, description) VALUE(?, ?, ?, ?)", [$thumbnail, $media, $type, $description]);
            $this->db->transComplete();
            if ($this->db->transStatus() === false) {
                $this->db->transRollback();
                return false;
            } else {
                $this->db->transCommit();
                return true;
            }
        } catch (DatabaseException $e) {
            return false;
        }
    }
}
