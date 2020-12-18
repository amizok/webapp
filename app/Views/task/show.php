<div class="contents-navi">
    <a href="/task">タスク一覧</a>詳細
</div>
<h3>タスク詳細</h3>
<form method="post" action="/task/<?= $task['id'] ?>">
    <input type="hidden" name="_method" value="PUT">
    <textarea name="title" style="width:600px; resize:none;font-size:1.2em"><?= $task['title'] ?></textarea><br />
    <textarea name="description" style="width:600px;height:200px;resize: none;"><?= $task['description'] ?></textarea><br />
    期日:<input type="datetime-local" name="end_date" value="<?= date('Y-m-d\TH:i:s', strtotime($task['end_date'])) ?>"><br />
    <br />
    <input type="submit" value="更新">
</form>
<br />

<form method="post" action="/task/<?= $task['id'] ?>">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="削除">
</form>
