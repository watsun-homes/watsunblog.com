<?php 

if(isset($_GET['gender']) && isset($_GET['type'])){
    
$gender = $_GET['gender'];
$type = $_GET['type'];
$dsn= "mysql:host=mysql5029.xserver.jp;dbname=homewatsun16_wp1;charset=utf8"; 
$user="homewatsun16_wp1";
$pass="H1348g217";
    
    try{
  
$db = new PDO($dsn,$user,$pass);
$sql = "SELECT name FROM chara WHERE gender = :gender AND type = :type";
$sth = $db -> prepare($sql);
$sth -> bindValue(':gender', $gender, PDO::PARAM_STR);//:genderに対して$genderをセット
$sth -> bindValue(':type', $type, PDO::PARAM_STR);
$sth -> execute();
$aryResult = $sth -> fetchAll(PDO::FETCH_COLUMN);

echo json_encode($aryResult);
        
    }catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
    
//header("Location: {$_SERVER['PHP_SELF']}");
//exit;
        
}else{
    echo [];
}

?>