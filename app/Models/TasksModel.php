<?php namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'tb_tasks';
    protected $allowedFields = ['title', 'description', 'end_date', 'completed', 'weight'];

    public function getTaskAll()
    {
        return $this->findAll();
    }

    public function getTaskById($id)
    {
        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }

    public function setTask($data)
    {
        return $this->save($data);
    }
}
