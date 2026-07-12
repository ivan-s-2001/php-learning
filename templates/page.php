<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="./resources/css/app.css">
</head>
<body>
<header class="header">
    <h1><?= $pageTitle ?></h1>
</header>
<nav class="theme-nav">
    <? foreach ($blocks as $key => $content): ?>
        <a href="?block=<?= $key ?>"<?= (($key === $block) ? ' class="active"' : '') ?>><?= normalizeString($content['title']) ?></a>
    <? endforeach; ?>
</nav>
<div class="page">
    <h2><?= normalizeString($blocks[$block]['title']); ?></h2>
    <? include $blocks[$block]['file']; ?>
    <? endLesson(); ?>
</div>
<?
includeTemplate('templates/navigation.php'); ?>
</body>
</html>