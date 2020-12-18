<div class="mui--text-title">タスク一覧</div>

<button class="mui-btn mui-btn--small mui-btn--primary">
  <a href="/task/new" class="mui--text-button mui--text-white" style="text-decoration: none;">+ ADD</a>
</button>

<table class="mui-table mui-table--bordered">
  <thead>
    <tr>
      <th>title</th>
      <th>description</th>
      <th>end date</th>
      <th>completed</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($task_list)) :?>
      <?php foreach ($task_list as $task) :?>
        <tr>
          <td><a href='/task/<?= $task['id']?>'><?= $task['title']?></a></td>
          <td><?= $task['description'] ?></td>
          <td><?= $task['end_date'] ?></td>
          <td>
            <?= $task['completed'] ? 'done' : 'wip'; ?>
          </td>
        </tr>
      <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>

