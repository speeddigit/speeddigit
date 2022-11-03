<?php 

try {
  $conn = new PDO("mysql:host=localhost;dbname=hrm", "root");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * from users");
  $stmt->execute();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $arr = $stmt->fetchAll();
  
  $conn->beginTransaction();
  
  foreach($arr as $val) {
	  $id = $val['id'];
	  $str = $val['photo'];
	  $finalStr = str_replace('backend/images', 'images', $str);
	  
	  $conn->prepare("UPDATE `users` SET `photo`='$finalStr' where `id` = $id")->execute();
  }
  
  $conn->commit();
  echo 'Finished';
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;