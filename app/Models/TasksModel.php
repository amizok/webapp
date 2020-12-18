<?php namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'tb_tasks';
    protected $allowedFields = ['title', 'description', 'end_date', 'completed', 'weight'];

    /**
     * 全件取得
     */
    public function getTaskAll()
    {
        return $this->findAll();
    }

    /**
     * 1件取得
     * @param int $id タスクID
     */
    public function getTaskById($id)
    {
        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * saveメソッドはレコードが存在しなければinsert, 存在すればupdateを実行.
     * @param array $data $this->allowedFields
     * @note  $dataにidを含めた場合はupdate
     */
    public function saveTask($data)
    {
        return $this->save($data);
    }

    // FIXME 完了/ 未完了フラグ更新向けの処理を作る. できればトグルで.

    /**
     * 1件削除
     * @param int $id タスクID
     */
    public function deleteTask($id)
    {
        return $this->delete($id);
    }

}
