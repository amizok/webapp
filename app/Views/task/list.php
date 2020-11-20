<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<body>
    <h1>タスク一覧</h1>
    <table border="1">
        <tr>
            <th>タイトル</th>
            <th>詳細</th>
            <th>期限</th>
            <th>ステータス</th>
        </tr>
        <?php
            if (!empty($task_list)) {
                foreach ($task_list as $task) {
                    echo '<tr>';
                    echo "<td><a href='/task/{$task['id']}'>{$task['title']}</a></td>";
                    echo "<td>{$task['description']}</td>";
                    echo "<td>{$task['end_date']}</td>";
                    echo "<td>";
                    echo $task['completed'] ? '完了' : '未完了';
                    echo "</td>";
                    echo '</tr>';
                }
            }
        ?>
    </table>

    <form method="post" action="/task">
        <input type="submit" value="create test">
    </form>

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
</body>
</html>
