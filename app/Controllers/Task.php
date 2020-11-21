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
        // FIXME ここ失敗するよ。
        // エラー修正できるひと求む
        // FIXME codeigniterが提供しているクラスを利用する事でよりセキュアな実装ができます。
        // 時間があれば試してください。
        $title       = $_POST['title'];
        $description = $_POST['description'];
        $end_date    = $_POST['end_date'];
        if (empty($title) || empty($description) || empty($end_date)) {
            error_log('[LOG]:'.__METHOD__.':'.__LINE__.':' . var_export('入力項目が不足', true));
            return redirect()->to('/task');
        }

        $data = [
            'title' => $title,
            'description' => $description,
            'end_date' => $end_date,
            'completed' => 0,
            'weight' => 1,
        ];

        // DBに登録
        $tasksModel = new TasksModel();
        $tasksModel->setTask($data);

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

    public function new()
    {
        return view('task/new');
    }
}
