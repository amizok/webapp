<?php namespace App\Controllers;
use App\Models\TasksModel;

class Task extends BaseController
{
    // get
    public function index()
    {
        $tasksModel = new TasksModel();
        $task_list = $tasksModel->getTaskAll();
        $data = [
            'task_list' => $task_list,
        ];

        return $this->view('task/list', $data);
    }

    // get(:id)
    public function show($id)
    {
        $tasksModel = new TasksModel();
        $task = $tasksModel->getTaskById($id);
        $data = [
            'task' => $task,
        ];
        return $this->view('task/show', $data);
    }

    // post
    public function create()
    {
        // CodeIgniter\HTTP\IncomingRequest
        $title       = $this->request->getPostGet('title');
        $description = $this->request->getPostGet('description');
        $end_date    = $this->request->getPostGet('end_date');

        if (empty($title) || empty($description)) {
            error_log('[LOG]:'.__METHOD__.':'.__LINE__.':' . var_export('入力項目が不足', true));
            return redirect()->to('/task');
        }

        $data = [
            'title'       => $title,
            'description' => $description,
            'end_date'    => $end_date,
            'completed'   => 0,
            'weight'      => 1,
        ];

        // DBに登録
        $tasksModel = new TasksModel();
        $tasksModel->saveTask($data);

        return redirect()->to('/task');
    }

    // put(:id)
    public function update($id)
    {
        // CodeIgniter\HTTP\IncomingRequest
        $title       = $this->request->getPostGet('title');
        $description = $this->request->getPostGet('description');
        $end_date    = $this->request->getPostGet('end_date');
        $completed   = $this->request->getPostGet('completed');
        $data = [
            'id'          => $id,
            'title'       => $title,
            'description' => $description,
            'end_date'    => $end_date,
        ];

        if (isset($completed)) {
            $completed = ($completed == TasksModel::COMPLETED_DONE) ?
                TasksModel::COMPLETED_WIP : TasksModel::COMPLETED_DONE;
            $data['completed'] = $completed;
        }

        // DBに登録
        $tasksModel = new TasksModel();
        $tasksModel->saveTask($data);

        return redirect()->to('/task');
    }

    // delete(:id)
    public function delete($id)
    {
        // DBに登録
        $tasksModel = new TasksModel();
        $tasksModel->deleteTask($id);

        return redirect()->to('/task');
    }

    public function new()
    {
        return $this->view('task/new');
    }
}
