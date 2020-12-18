<div class="contents-navi">
    <a href="/task">タスク一覧</a>詳細
</div>

<form class="mui-form" method="post" action="/task/<?= $task['id'] ?>">
  <input type="hidden" name="_method" value="PUT">
  <legend>タスク詳細</legend>
  <div class="mui-textfield">
    <input type="text" name="title" placeholder="title" value="<?= $task['title'] ?>">
  </div>
  <div class="mui-textfield">
    <textarea placeholder="description" name="description"><?= $task['description'] ?></textarea>
  </div>
  <div class="mui-textfield">
    end date
    <input type="datetime-local" name="end_date" value="<?= date('Y-m-d\TH:i:s', strtotime($task['end_date'])) ?>"><br />
  </div>
  <button type="submit" class="mui-btn mui-btn--small mui-btn--primary">update</button>
</form>

<form method="post" action="/task/<?= $task['id'] ?>">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="mui-btn mui-btn--small mui-btn--danger">delete</button>
</form>
