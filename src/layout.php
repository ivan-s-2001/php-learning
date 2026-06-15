<?
function startPage(string $name):void
{
    echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>". $name ."</title>
    <link rel=\"stylesheet\" href=\"./resources/css/app.css\">
</head>
<body>
<div class=\"page\">
    <h1>". $name ."</h1>";
}

function endPage():void
{
    echo "        </div>
    </body>
</html>";
}

function startLesson(string $name):void
{
    echo "<div class=\"lesson\">
        <h2>". $name ."</h2>";
}
function endLesson():void
{
    echo "</div><hr>";
}

function task(int $num,string $task):void
{
    echo "<div class=\"task\">
            <h3>Задание ". $num ."</h3>

            <p>". $task ."</p>
           </div>";
}

function hint(string $hint):void
{
    echo "<div class=\"hint\">". $hint ."</div>";
}
function startResult():void
{
    echo "<div class=\"result\">";
}
function endResult():void
{
    echo "</div>";
}
?>