<?php
$dsn = 'mysql:dbname=user;host=127.0.0.1;';
$user = 'sugiharayuto';
$password = '12344649aA';
try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from sugihara";
    $result = $dbh->query($sql);

    
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP SAMPLE</title>
</head>
<body>

<div class="container">
    <?php foreach( $result as $value) {
        echo "<h1>$value[id] $value[name] $value[age]</h1>"
    }?>
</div>
    
</body>
</html>