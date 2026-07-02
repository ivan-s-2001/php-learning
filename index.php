<?

include __DIR__ . '/src/Layout.php';
include __DIR__ . '/src/helpers.php';
include __DIR__ . '/src/config.php';

ob_start();
$block = $_GET['block'] ?? $defaultBlock;

if (!isset($blocks[$block])) {
    $block = $defaultBlock;
}

includeTemplate('templates/page.php', [
    'pageTitle' => $pageTitle,
    'blocks' => $blocks,
    'block' => $block,
]);
ob_end_flush();