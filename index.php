<?
include __DIR__ . '/src/layout.php';
include __DIR__ . '/src/config.php';

$block = $_GET['block'] ?? $defaultBlock;

if (!isset($blocks[$block])) {
	$block = $defaultBlock;
}
?>
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
    <nav>
        <?
			foreach ($blocks as $key => $content) {
				$isActive = ($key === $block) ? ' class="active"' : '';
				echo '<a href="?block=' . $key . '"' . $isActive . '>' . normalizeString($content['title']) . '</a>';
			}
			?>
    </nav>
    <div class="page">
        <h2><?= normalizeString($blocks[$block]['title']); ?></h2>
        <?
include $blocks[$block]['file'];
endLesson();
?>
    </div>
</body>

</html>