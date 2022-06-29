<?php
if(isset($_POST['comment'])){
$comment = $_POST['comment'];
echo $comment;
}

if(isset($_POST['name'])){
$comment = $_POST['name'];
echo $name;
}

try {
    // DB接続
    $pdo = new PDO(
        // ホスト名、データベース名
        'mysql:host=localhost;dbname=testdb;',
        // ユーザー名
        'root',
        // パスワード
        '',
        // レコード列名をキーとして取得させる
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );

    // SQL文をセット
    $stmt = $pdo->prepare('INSERT INTO users (name, comment) VALUES(:name, :comment)');

    // 値をセット
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':comment', $comment);

    // SQL実行
    $stmt->execute();

} catch (PDOException $e) {
    // エラー発生
    echo $e->getMessage();

} finally {
    // DB接続を閉じる
    $pdo = null;
}
 ?>
