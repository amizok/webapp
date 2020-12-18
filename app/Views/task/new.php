<div class="contents-navi">
  <a href="/task">タスク一覧</a>新規登録
</div>

<form class="mui-form" method="post" action="/task">
  <legend>新規タスク</legend>
  <div class="mui-textfield">
    <input type="text" name="title" placeholder="title">
  </div>
  <div class="mui-textfield">
    <textarea placeholder="description" name="description"></textarea>
  </div>
  <div class="mui-textfield">
    end date
    <input type="datetime-local" name="end_date"><br />
  </div>
  <button type="submit" class="mui-btn mui-btn--small mui-btn--primary">create new task</button>
</form>

