<?php namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'tb_tasks';

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
