<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>webapp</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    <!-- mui.css -->
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <div class="menu">
        <ul>
            <li class="title"><b>sws-webapp</b></li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="/">Home</a></li>
            <li class="menu-item hidden"><a href="/task">Task Manager</a></li>
            <li class="menu-item hidden"><a href="https://ci-trans-jp.gitlab.io/user_guide_4_jp/" target="_blank">Docs</a></li>
            <li class="menu-item hidden"><a href="https://www.muicss.com/" target="_blank">MUI Docs</a></li>
        </ul>
    </div>
</header>

<div class="wrap">
