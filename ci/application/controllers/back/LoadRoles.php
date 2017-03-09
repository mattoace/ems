<?php
require_once("../../config/configRaw.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

switch($action){
    
    case 1:
        $to = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_STRING);
        
        $from = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_STRING);
       
        $message = $_POST['message'];
        
        $message = mysql_real_escape_string($message);
        
        $sqlUser = "SELECT id FROM ems_users WHERE md5(id) = '".$id."'";
        
        $responseUser = mysql_query($sqlUser)or die(mysql_error());
        
        $rowUser = mysql_fetch_assoc($responseUser);
        
        $user = $rowUser['id'];
        
        $sqlInsert = "INSERT INTO ems_chatlog(`user`,`log`,`to`,`from`) VALUES('".$user."','".$message."',(SELECT id FROM ems_users WHERE fname ='".$to."'),(SELECT id FROM ems_users WHERE fname ='".$from."'))";
        
        if(mysql_query($sqlInsert)){
            $response = "Saved!";
        }else{
            $response = mysql_error();
        }       
        
        echo json_encode(array("response"=>$response));
    break;
    case 2:
        
        $selected = filter_input(INPUT_POST, 'selected', FILTER_SANITIZE_STRING);
        
        $sqlUser = "SELECT id FROM ems_users WHERE md5(id) = '".$id."'";
        
        $responseUser = mysql_query($sqlUser)or die(mysql_error());
        
        $rowUser = mysql_fetch_assoc($responseUser);
        
        $user = $rowUser['id'];
        
        $sqlChatLog = "SELECT * FROM ems_chatlog WHERE (ems_chatlog.to = (SELECT id FROM ems_users WHERE fname ='".$selected."') or ems_chatlog.from = (SELECT id FROM ems_users WHERE fname ='".$selected."')) and ems_chatlog.user = '".$user."'";
           
        //var_dump($sqlChatLog);
        
        $resChatlog = mysql_query($sqlChatLog)or die(mysql_error());
        
        while($rowChatlog = mysql_fetch_assoc($resChatlog)){
            $response[] = $rowChatlog['log'];  
        }
        
        $response = implode(" ",$response);
        
        //$response = "test here";
        echo json_encode(array("message"=>$response));
     break;
    default:
    $sql = "SELECT * FROM ems_menu ";
    $resMain = mysql_query($sql) or die("database error:". mysql_error());
    $treeData = [];
    $j = 0;
     while( $rowMain = mysql_fetch_assoc($resMain) ) {
                $sqlSub = "SELECT * FROM ems_submenu WHERE menu_id = '".$rowMain['id']."'";
                $resSub = mysql_query($sqlSub) or die("database error:". mysql_error());
                $nodesChildren = [];
                    $i=0;
                    while( $rowChildren = mysql_fetch_assoc($resSub) ) {  
                       $nodesChildren[] = ['id'=>"sub_".$i."_".$rowChildren['id'], 'text'=>$rowChildren['menu_name'], 'children'=>['id'=>"ch1_".$rowChildren['id'], 'text'=>$rowChildren['menu_name']], 'state'=>['opened'=>true]];
                    $i++;                       
                    }

         $treeData[$j] = array('id'=>"main_".$rowMain['id'], 'text'=>$rowMain['menu_name'], 'children'=>$nodesChildren, 'state'=>['opened'=>true]);
         $j++;
     }     
  echo json_encode(['id'=>0, 'text'=>'Modules', 'children'=>$treeData, 'state'=>['opened'=>true]]);
 // Ref : http://phpflow.com/php/dynamic-tree-with-jstree-php-and-mysql/ 
  break;
  } 
  
  
  
  
?>