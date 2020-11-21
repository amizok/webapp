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
    <h2>新規登録フォーム</h2>
    <form method="post" action="/task">
        タイトル:<input type="textarea" name="title"><br />
        詳細:<input type="textarea" name="description"><br />
        期日:<input type="date" name="end_date"><br />
        <input type="submit" value="登録">
    </form>
    <br />
    <a href="/task">戻る</a>
</body>
</html>

