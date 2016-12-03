<?php
//$ini_array=parse_ini_file("config.ini",true);

class oopCrud{

 private $host="Localhost";
 private $user="root";
 private $db="reverse_auctions";
 private $pass="";
 private $conn;
/*private $host="Localhost";
 private $user="twixlab";
 private $db="twixlab_db_actors";
 private $pass="B6t)lpobByn5";
 private $conn;*/

 public function __construct(){

 $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
 }

 public function getByCount($type){
  if($type=='month'){
 $sql="SELECT * FROM `tbl_actors` WHERE _type='performer' 
 AND `_create_date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)";
}


  if($type=='week'){
 $sql="SELECT * FROM `tbl_actors` WHERE _type='performer' 
 AND `_create_date` >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)";
}
 $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
$data=$q->rowCount();
 return $data;
 }

 public function getAllCount($type){

 $sql="SELECT * FROM `tbl_actors` WHERE _type='$type'";
 $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
$data=$q->rowCount();
 return $data;
 }

public function point_table($tid){
    $sql="SELECT c._company_name, s._time, sum(s._price) as price
  FROM reverse_auctions.ra_score s
       left JOIN reverse_auctions.ra_company c ON (s._company_id = c._id)
       where s._tender_id=$tid
       group by c._company_name
       order by price, _time asc";

        $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;
 }
 return $data;
}

 public function getByRshow($type){
  if($type=='month'){
 $sql="SELECT * FROM `tbl_actors` WHERE _type='performer' 
 AND `_create_date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)";
}
  if($type=='week'){
 $sql="SELECT * FROM `tbl_actors` WHERE _type='performer' 
 AND `_create_date` >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)";
}
 $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;
 }
 return $data;
 }

 public function showData($table){

 $sql="SELECT * FROM $table";
 $q = $this->conn->query($sql) or die("failed!");

 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;
 }
 return $data;
 }

 public function showDataSearch($data){

//print_r($data);
extract($data);
$wh="";
if (!empty($height)) {
$str = isset($height)?$height:NULL;
$ukey=explode("-",$str);
//print_r($ukey);
  $wh.="and (_height >= ".$ukey[0]." AND  _height <=".$ukey[1].")";
}

if (!empty($weight)) {
    $str = isset($weight)?$weight:NULL;
    $ukey=explode("-",$str);
    $wh.="AND (_weight BETWEEN ". $ukey[0] ." AND ".$ukey[1].")";
}
if (!empty($ethinicity)) {
      $wh.=" AND _cultural_diversity like '%".$ethinicity."%'";
}
if (!empty($gender)) {
      $wh.=" And _sex ='".$gender."'";
}

if (!empty($hair_colour)) {
      $wh.=" And _hair_color ='".$hair_colour."'";
}

if (!empty($eye_colour)) {
      $wh.=" And _eye_color ='".$eye_colour."'";
}

if (!empty($specialskills)) {
      $wh.=" And _special_skills like '%".$specialskills."%'";
}
$sql="SELECT * FROM `vw_actors_info` WHERE 1=1 ".$wh;
 $q = $this->conn->query($sql) or die("failed!");

 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;
 }
 return $data;
 }

 public function showDataDetails($id){

 $sql="SELECT *  FROM ra_company WHERE md5(_id) = '$id'";
 $q = $this->conn->query($sql) or die("failed!");

 $data = $q->fetch(PDO::FETCH_ASSOC);
 return $data;
 }

 public function showDataDetailsauctions($id){

 $sql="SELECT 
 _id, _c_id, _title, _description, _attach_file, _defult_price, _start_time, _end_time,
 DATE_FORMAT(_start_time,'%b %d %Y %h:%i:%s') as _start_timef,
  DATE_FORMAT(_end_time,'%b %d %Y %h:%i:%s') as _end_timef, _create_date, _update_date, _status
   FROM ra_tender WHERE md5(_id) = '$id'";
 $q = $this->conn->query($sql) or die("failed!");

 $data = $q->fetch(PDO::FETCH_ASSOC);
 return $data;
 }

  public function get_extend_minuts($id){
     $sql="SELECT sum(_time_extend) as ext_min
   FROM ra_score WHERE _tender_id = '$id'";
 $q = $this->conn->query($sql) or die("failed!");

 $data = $q->fetch(PDO::FETCH_ASSOC);
$ext_minuts=$data['ext_min'];
if ($ext_minuts>10) {
  return 10;
}else{
  return $ext_minuts;
}
  }
 
 public function getById($id,$table,$field){

 $sql="SELECT * FROM $table WHERE ".$field." = '$id'";
 $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
 $data = $q->fetch(PDO::FETCH_ASSOC);
 return $data;
 }

 public function getByIdAll($id,$table,$field){
$data= array();
 $sql="SELECT * FROM $table WHERE ".$field." = '$id'";
 $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;
 }
 if (!empty($data)) {
    return $data;
 }
else{
  return 0;
}
 }

 function dbRowInsert($table_name, $form_data)
{
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";

     $q = $this->conn->prepare($sql);
 $q->execute() or die(print_r($q->errorInfo()));
 return $this->conn->lastInsertId();

}

// again where clause is left optional
function dbRowUpdate($table_name, $form_data, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
     $q = $this->conn->prepare($sql);
 
 return $q->execute() or die(print_r($q->errorInfo()));
}
 function dbloginCheck($user_login, $pwd)
{
    // retrieve the keys of the array (column titles)
 $sql="SELECT * FROM ra_company WHERE _email = :email AND _password=:passwword";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':email'=>$user_login, ':passwword'=>md5($pwd))) or die(print_r($q->errorInfo()));
 $totalrow=$q->rowCount();
 if($totalrow==1){
 $data = $q->fetch(PDO::FETCH_ASSOC);
 return $data;
}
 else{
  return 0;
 }
}

// the where clause is left optional incase the user wants to delete every row!
function dbRowDelete($table_name, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;

    // run and return the query result resource
         $q = $this->conn->prepare($sql);
 
 return $q->execute() or die(print_r($q->errorInfo()));
}

function _mailsend($mailsubject, $mailto='', $mailbody){
//require_once('mail/PHPMailerAutoload.php');
//$mail = new PHPMailer();
//$mail->isSendmail();
//$mail->setFrom("Profile casting");
//$mail->addReplyTo($mailto);
//$mail->addAddress(addcc);
//$mail->AddBCC(bcc);
//$mail->Subject = $mailsubject;
//$mail->Body = $mailbody;
//$mail->IsHTML(true);
//$mail->send();
$from="BGELITE.COM";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Transfer-Encoding: 7bit\r\n";
$headers .= "From: " . $from . "\r\n";
$mailsent = mail($mailto, $mailsubject, $mailbody, $headers);
if ($mailsent) {
return 1;
}
else{
  return 0;
}
}



function addtocart($pid, $id,$name){
   // if($pid<1 or $id<1) return;
    //echo $pid;
    if(is_array($_SESSION['cart'])){

      echo $this->product_exists($pid);
        if($this->product_exists($pid)) return;
        $max=count($_SESSION['cart']);
        $_SESSION['cart'][$max]['email']=$pid;
        $_SESSION['cart'][$max]['name']=$name;
        $_SESSION['cart'][$max]['id']=$id;
    }
    else{
        $_SESSION['cart']=array();
        $_SESSION['cart'][0]['email']=$pid;
        $_SESSION['cart'][0]['name']=$name;
        echo $_SESSION['cart'][0]['id']=$id;
    }
    return $_SESSION['cart'];
}

function product_exists($pid){
    //$pid=$pid;
    $max=count($_SESSION['cart']);
    $flag=0;
    for($i=0;$i<$max;$i++){
        if($pid==$_SESSION['cart'][$i]['email']){
            $flag=1;
            break;
        }
    }
    return $flag;
}

function remove_product($pid){
    $pid=intval($pid);
    $max=count($_SESSION['cart']);
    for($i=0;$i<$max;$i++){
        if($pid==$_SESSION['cart'][$i]['email']){
            unset($_SESSION['cart'][$i]);
            break;
        }
    }
    $_SESSION['cart']=array_values($_SESSION['cart']);
}
}
$obj=new oopCrud;
?>
