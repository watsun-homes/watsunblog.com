<?php
/*
Template Name: チャット
*/
?>
<!-----------DBに書き込み--------------->
    <?php
    if(isset($_POST['n'])) {
        
$my_nam=htmlspecialchars($_POST["n"], ENT_QUOTES);
$my_mes=htmlspecialchars($_POST["m"], ENT_QUOTES);
$dsn= "mysql:host=mysql5029.xserver.jp;dbname=homewatsun16_wp1;charset=utf8"; 
$user="homewatsun16_wp1";
$pass="H1348g217";
    
    try{
        
$db = new PDO($dsn,$user,$pass);
$db->query("INSERT INTO `chat-tb` (ban,nam,mes,dat)
            VALUES (NULL,'$my_nam','$my_mes',NOW())");
        
    }catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
              
header("Location: {$_SERVER['PHP_SELF']}");
exit;
    
    }
?>
        <!-----------DBに書き込み--------------->
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<meta name="viewport"　
content="width=device-width, initial-scale=1.0 ">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>watsunchat</title>
    
    
<link rel="stylesheet" href="./style.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <style type="text/css">
        body#chat{
    background-color: #fff;
    margin: 0;
}
.chat-header{
    width: 100%;
    height: 10vh;
    background-color: #31c8dc;
    text-align: center;
    position: relative;
}
        .chat-header-title{
    padding-left: 60px;
    display: flex;
    position: absolute;
    left: 0;
}
.chat-header-title h1{
    margin: 0;
    line-height: 10vh;
    font-size: 2em;
    color: #fff;
}
.chat-header-menu{
    display: flex;
    position: absolute;
    top: 0;
    right: 0;
}
#chat-nav-drawer{
    position: relative;
}
@media(max-width:400px){
    .chat-header-title{
        padding-left: 40px;
    }
    
   .chat-header-title h1{
    font-size: 1.5em;
}
}


.chat-float{
    float: left;
}
.chat-clear:after{
    clear: both;
    display: block;
    content: "";
}


.chat-contain{
    padding: 10px;
}

.chat-submit {
    margin:10px 0 10px;
}
.chat-list{
    text-align: left;
    height: auto;
    max-width: 500px;
    display: block;
}
.chat-name {
    margin-bottom: 10px;
}
.chat-date {
    margin-bottom: 10px;
}

/*チェックボックス等は非表示に*/
.chat-nav-unshown {
  display:none;
}

/*アイコンのスペース*/
#chat-nav-open {
  position: absolute;
  top: 0;
  right: 0;
  padding-right: 60px;
}

/*投稿アイコン*/
#chat-nav-open span {
  color: #fff;
  display: block;
  cursor: pointer;
}
#chat-nav-open span i{
    font-size: 2em;
    line-height: 10vh;
}
@media(max-width:400px){
    #chat-nav-open span i{
    font-size: 1.5em;
}
}

/*閉じる用の薄黒カバー*/
#chat-nav-close {
  display: none;
  position: fixed;
  z-index: 99;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: black;
  opacity: 0;
  transition: .3s ease-in-out;
}

/*中身*/
#chat-nav-content {
  overflow: auto;
  position: fixed;
  top: 0;
  left: 50%;
  z-index: 9999;
  width: 70%;/*右側に隙間を作る（閉じるカバーを表示）*/
  max-width: 330px;
  height: auto;
  background: #1592E6;
  transition: .3s ease-in-out;/*滑らかに表示*/
  -webkit-transform: translateX(-50%) !important;
  transform: translateX(-50%) !important;/*中央に*/
   -webkit-transform: translateY(-100%) !important;
  transform: translateY(-100%) !important;/*上に隠しておく*/
  
}
@media(max-width:400px){
    #chat-nav-content {
        width: 100%;
        max-width: 100%;
    }
}

/*チェックが入ったらもろもろ表示*/
#chat-nav-input:checked ~ #chat-nav-close {
  display: block;/*カバーを表示*/
  opacity: .5;
}

#chat-nav-input:checked ~ #chat-nav-content {
  -webkit-transform: translateY(0%) !important;
  transform: translateY(0%) !important;/*中身を表示（下へスライド）*/
  -webkit-transform: translateX(-50%) !important;
  transform: translateX(-50%) !important;/*中央に*/
  box-shadow: 6px 0 25px rgba(0,0,0,.15);
}




/*固定ナビフッター*/

#footerFloatingMenu {
    display: block;
    width: 100%;
    text-align:center;
    position: fixed;
    left: 0px;
    bottom: 0px;
    z-index: 9999;
    padding: 0 auto;
    background-color: #31c8dc;
    opacity: .8;

    
}
.ffm{
    width:95%;
    margin: 0 auto;
    display: flex;
    content: "";
    clear: both;
}
#footerFloatingMenu a{
    float: left;
    width:25%;
    text-decoration: none;
}
 
#footerFloatingMenu p{
   color: #FFF;
    margin: 5px;
    line-height: 7vh;
    font-weight: bold;
    font-size: 1.3em;
}

#footerFloatingMenu .fas {
    font-size: 1.7em;
    color: #fff;
    padding: 5px 10px 0;
}



#footerFloatingMenu .fas:hover {
    color: #5BFF7F;
}
        
    </style>
</head>
    
<body id="chat">
    
    <header>
    <div class="chat-header">
        
            <div class="chat-header-title">
        <h1>WATSUNCHAT</h1>
            </div>
            
        
         <!--ヘッダーメニュー-->
        <div class="chat-header-menu">
            <div id="chat-nav-drawer">
      <input id="chat-nav-input" type="checkbox" class="chat-nav-unshown">
      <label id="chat-nav-open" for="chat-nav-input"><span><i class="fas fa-edit"></i></span></label>
      <label class="chat-nav-unshown" id="chat-nav-close" for="chat-nav-input"></label>
            
      <div id="chat-nav-content">
    <form action="" method="post" onsubmit="return validate()" name="form">
        名前
        <div><input type="text" name="n"></div>
        メッセージ
        <div><textarea name="m"></textarea></div>
        
        <div class="chat-submit">
        <input type="submit" value="送信" name="submit">
        </div>
    </form> 
       </div>
        </div>
            </div>
      <!--ヘッダーメニュー-->
        
        
        
    </div>
    </header>
    
    
    <div class="chat-contain">
    
    <!-----------DBから取り込む--------------->
    <?php  
    $dsn= "mysql:host=mysql5029.xserver.jp;dbname=homewatsun16_wp1;charset=utf8"; 
    $user="homewatsun16_wp1";
    $pass="H1348g217";
    $db = new PDO($dsn,$user,$pass);
    $ps = $db->query("SELECT * FROM `chat-tb` ORDER BY ban DESC");
        

//定数======================================================
define("SECMINUITE", 60);					//1分（秒）
define("SECHOUR",    60 * 60);				//1時間（秒）
define("SECDAY",     60 * 60 * 24);			//1日（秒）
define("SECWEEK",    60 * 60 * 24 * 7);		//1週（秒）
define("SECMONTH",   60 * 60 * 24 * 30);	//1月（秒）
define("SECYEAR",    60 * 60 * 24 * 365);	//1年（秒）
//========================================================
        
    function niceTime($dest,$sour) {      
        $sour = (func_num_args() == 1) ? time() : func_get_arg(1);
        
     $tt = $dest - $sour;
    
 
    if ($tt / SECYEAR  < -1) return abs(round($tt / SECYEAR))    . '年前';
    if ($tt / SECMONTH < -1) return abs(round($tt / SECMONTH))   . 'ヶ月前';
    if ($tt / SECWEEK  < -1) return abs(round($tt / SECWEEK))    . '週間前';
    if ($tt / SECDAY   < -1) return abs(round($tt / SECDAY))     . '日前';
    if ($tt / SECHOUR  < -1) return abs(round($tt / SECHOUR))    . '時間前';
    if ($tt / SECMINUITE < -1)   return abs(round($tt / SECMINUITE)) . '分前';
    if ($tt < 0)                return abs(round($tt)) . '秒前';
    if ($tt / SECYEAR  > +1) return abs(round($tt / SECYEAR))    . '年後';
    if ($tt / SECMONTH > +1) return abs(round($tt / SECMONTH))   . 'ヶ月後';
    if ($tt / SECWEEK  > +1) return abs(round($tt / SECWEEK))    . '週間後';
    if ($tt / SECDAY   > +1) return abs(round($tt / SECDAY))     . '日後';
    if ($tt / SECHOUR  > +1) return abs(round($tt / SECHOUR))    . '時間後';
    if ($tt / SECMINUITE > +1)   return abs(round($tt / SECMINUITE)) . '分後';
    if ($tt > 0)                return abs(round($tt)) . '秒後';
     return '現在';
 }
 //===================================================         
        
        try{
        
   while($r = $ps->fetch()){ 
        
    $beforedest = $r['dat'];
    $dest = strtotime($beforedest);
    $sour = time(); //現在の時刻
        
    $outstr = nicetime($dest,$sour);?>
        
        
        <div class="chat-list">
        <div class="chat-name">
    <?php
    print "{$r['nam']}";?>
        </div>
        
        <div class="chat-date">
    <?php
        echo $outstr;?>
        </div>
        
        <div class="chat-message">
    <?php    
    print nl2br($r['mes']); ?> 
        </div> 
        
        </div><hr>
    <?php }
            
        }catch(Exception $e){
          echo $e->getMessage() . PHP_EOL;
      }
      ?>
        

    </div>
    
    <footer>
    <!--フッター固定ナビ-->
    <div id="footerFloatingMenu">
        <div class="ffm">
        <a href="https://watsunblog.com/wp-content/themes/watsunblog.com/send.php/"><p>ホーム</p></a>
        <a href="https://watsunblog.com/wp-content/themes/watsunblog.com/chat-search.php/"><p>検索</p></a>
        <a href="https://watsunblog.com/wp-content/themes/watsunblog.com/send.php/"><p>掲示板</p></a>
        <a href="https://watsunblog.com/"><p>ブログ</p></a>
        </div>
    </div>
    <!--フッター固定ナビ終わり-->
    </footer>
</body>
</html>
