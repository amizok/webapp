<h2>タスク一覧</h2>
<a href="/task/new">新規登録</a>
<table border="1">
    <tr>
        <th>タイトル</th>
        <th>詳細</th>
        <th>期限</th>
        <th>ステータス</th>
    </tr>
    <?php if (!empty($task_list)) :?>
        <?php foreach ($task_list as $task) :?>
            <tr>
                <td><a href='/task/<?= $task['id']?>'><?= $task['title']?></a></td>
                <td><?= $task['description'] ?></td>
                <td><?= $task['end_date'] ?></td>
                <td>
                    <?= $task['completed'] ? '完了' : '未完了'; ?>
                </td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
</table>

<hr>

<form method="post" action="/task/1">
    <!-- method postでこの1行を追加！ -->
    <input type="hidden" name="_method" value="PUT">
    <input type="submit" value="update test">
</form>

<form method="post" action="/task/1">
    <!-- method postでこの1行を追加！ -->
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="delete test">
</form>
