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
    <h1>タスク詳細</h1>
    <textarea style="width:600px; resize:none;font-size:1.2em" readonly><?php echo $task['title']?></textarea>
    <textarea style="width:600px;height:200px;resize: none;" readonly><?php echo $task['description'];?></textarea>
    <br />
    <a href="/task">戻る</a>
</body>
</html>
