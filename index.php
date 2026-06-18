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
        <title>Основной учебник PHP8+</title>
        <link rel="stylesheet" href="./resources/css/app.css">
    </head>
    <body>
        <div class="page">
            <h1>Основной учебник PHP8+</h1>
            <h2><?= normalizeString($blocks[$block]['title']); ?></h2>
            <nav>
                <?
                foreach ($blocks as $key => $content) {
                    if ($key !== $block) {
                        echo '<a href="?block=' . $key . '">' . normalizeString($content['title']) . '</a>' . "\n";
                    }
                }
                ?>
            </nav>
            <? include $blocks[$block]['file']; ?>
        </div>
    </body>
</html>
