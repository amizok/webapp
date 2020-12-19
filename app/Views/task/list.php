<div class="mui--text-title">タスク一覧</div>

<button class="mui-btn mui-btn--small mui-btn--primary">
  <a href="/task/new" class="mui--text-button mui--text-white" style="text-decoration: none;">+ ADD</a>
</button>

<table class="mui-table mui-table--bordered">
  <thead>
    <tr>
      <th>-</th>
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
          <td>
            <form class="mui-form" method="POST" action="/task/<?= $task['id'] ?>">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="title" value="<?= $task['title'] ?>">
              <input type="hidden" name="description" value="<?= $task['description'] ?>">
              <input type="hidden" name="end_date" value="<?= $task['end_date'] ?>">
              <input type="hidden" name="completed" value="<?= $task['completed'] ?>">
              <button type="submit" class="mui-btn mui-btn--fab mui-btn--small <?= $task['completed'] ? 'mui-btn--primary' : ''; ?>" >✔</button>
            </form>
          </td>
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

