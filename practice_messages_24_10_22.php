<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "messenger";

try {
	$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	// set the PDO error mode to exception
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

$messages = $connection->query("SELECT * FROM messages")->fetchAll(); //Когда мы вызываем функцию query у класса pdo, которая лежит в переменной connection, после этого мы вызываем функцию fetchAll, которая вернет массив из массивов , в каждом из которых лежат данные и ляжет в переменную DATA
$users = $connection->query("SELECT * FROM users")->fetchAll();
// and somewhere later:
foreach ($messages as $message) {
	$receiverId = $message['receiver_id'];
	$receiverName = '';
	$senderId = $message['sender_id'];
	$senderName = '';
	$text = $message['message'];


	foreach ($users as $user) {
		if ($user['user_id'] == $receiverId) {
			$receiverName = $user['name'];
		}
		if ($user['user_id'] == $senderId) {
			$senderName = $user['name'];
		}
	}
	//var_dump($text);
	//var_dump($receiverName);
	//var_dump($senderName);

	echo $senderName . ' -> ' . $receiverName . ': ' . $text . '<br>';
}
