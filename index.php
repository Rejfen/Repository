
<?php 
    require __DIR__ . '/vendor/autoload.php';

    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
    $log->warning('Foo');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>test</title>
</head>
<body>
    <?php
        echo "test";




    ?>
</body>
</html>