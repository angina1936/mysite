<?php
function getUserData($params){
  require_once('config/database.php');
  $mysqli = new mysqli($host, $username, $password, $database);
  if($mysqli->connect_error){
    error_log($mysqli->connect_error);
    exit;
  }
  $where = [];
  if(!empty($params['name'])){
    $where[] = "name like '%{$params['name']}'";
  }
  if(!empty($params['OS'])){
    $where[] = "OS like '%{$params['OS']}'";
  }
  if(!empty($params['country'])){
    $where[] = "country like '%{$params['country']}'";
  }
  if(!empty($params['price'])){
    $where[] = "#";
  }

  if($where){
    $whereSql = implode('AND', $where);
    $sql = 'select * from phones where '.$whereSql;
  }else{
    $sql = 'select * from phones';
  }

  $phoneDataSet = $mysqli->query($sql);
  $result = [];
  while($row = $phoneDataSet-&gt;fetch_assoc()){
    $result = $row;
  }
  return $result;

}
?>
