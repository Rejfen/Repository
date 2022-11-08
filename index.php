<?php 
    require __DIR__ . '/vendor/autoload.php';

    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
    $log->warning('Foo');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <title>test</title>
</head>
<body>
    <div class="border">
        <form>
            <input type="text" name="number">
            <input type="submit" value="Submit">
        </form>
        <br />
        <br />
        <div class="list">
            <table>
                <ul>
                    <li>teśt</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                </ul>
            </table>
        </div>
    </div>
</body>
</html>