<?php namespace App\Controllers;
use App\Models\TasksModel;

class Task extends BaseController
{
    // get
    public function index()
    {
        $tasksModel = new TasksModel();
        $task_list = $tasksModel->getTaskAll();
        $view_data = [
            'task_list' => $task_list,
        ];

        return view('task/list', $view_data);
    }

    // get(:id)
    public function show($id)
    {
        $tasksModel = new TasksModel();
        $task = $tasksModel->getTaskById($id);
        $data = [
            'task' => $task,
        ];
        return view('task/show', $data);
    }

    // FIXME ここから途中
    // post
    public function create()
    {
        error_log('[LOG]:'.__METHOD__.':'.__LINE__);
        return redirect()->to('/task');
    }

    // put(:id)
    public function update($id)
    {
        error_log('[LOG]:'.__METHOD__.':'.__LINE__);
        return redirect()->to('/task');
    }

    // delete(:id)
    public function delete($id)
    {
        error_log('[LOG]:'.__METHOD__.':'.__LINE__);
        return redirect()->to('/task');
    }
}
