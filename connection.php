<?php 
$country_id = $_POST['country_id'];
try {
    $connect = new mysqli('localhost','root','','aarya_20');
    $sql = "select * from cities where country_id=$country_id order by id";
    $result = $connect->query($sql);
    $ht = '<option value="">Select City</option>';
    if ($result->num_rows >0 ) {
        while($record= $result->fetch_assoc()){
            $ht .= '<option value=" ' . $record['id'] . '">'. $record['title'].'</option>';
        }
    }
    echo $ht;
} catch (\Throwable $th) {
   die('Error: ' . $th->getMessage());
}
?>