<?php 
include($_SERVER['DOCUMENT_ROOT'].'/task/db/db.php');

class testcontroller extends db
{
public function insertData($data)
{
  $sql_ins = "INSERT INTO sample (firstname, lastname, dob, address1, address2, country, state, city, pincode, comments) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['address1']."','".$_POST['address2']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['comments']."')";

  
  if ($this->conn->query($sql_ins) === TRUE) {
    header("Location: ./records.php?message=New record created successfully");
    } else {
      echo "Try Later";
    }
}
public function slectData()
{
  $sql = 'SELECT * FROM sample';
  return mysqli_query( $this->conn, $sql);
}

public function editData($id)
{
  $sql = 'SELECT * FROM sample where id="'.$id.'"';
  $tbvalues = mysqli_query( $this->conn, $sql);
  return mysqli_fetch_assoc($tbvalues);
}
public function updateData($id, $up)
{
  $sql = 'UPDATE sample SET firstname="'.$up['fname'].'",  lastname="'.$up['lname'].'", dob="'.$up['dob'].'", address1="'.$up['address1'].'", address2="'.$up['address2'].'", country="'.$up['country'].'", state="'.$up['state'].'", city="'.$up['city'].'", pincode="'.$up['pincode'].'", comments="'.$up['comments'].'" where id="'.$id.'"';
  $tbvalues = mysqli_query( $this->conn, $sql);
  header("Location: ./records.php?message=Record Updated successfully");
}

public function deleteData($id)
{
    $sql_del = 'DELETE FROM sample WHERE id="'.$id.'"';
    if ($this->conn->query($sql_del) === TRUE) {
      header("Location: ./records.php?message=Record Deleted successfully");
      } else {
      echo "Try Later";
      }	
}

//
public function exportExcel()
{
    $fileName = "members_export_data-" . date("Y-m-d h:i:sa") . ".xls"; 
    
    $fields = array('SR.N.', 'firstname', 'lastname', 'dob', 'address1', 'address2','country', 'state', 'city', 'pincode', 'comments'); 
    
    $excelData = implode("\t", array_values($fields)) . "\n"; 
    
    $query = $this->conn->query("SELECT * FROM sample"); 
    if($query->num_rows > 0){ 
        $i=0; 
        while($row = $query->fetch_assoc()){ $i++; 
            $rowData = array($i, $row['firstname'], $row['lastname'], $row['dob'], $row['address1'], $row['address2'], $row['country'], $row['state'], $row['city'], $row['pincode'], $row['comments']); 
            $excelData .= implode("\t", array_values($rowData)) . "\n"; 
        } 
    }else{ 
        $excelData .= 'No records found...'. "\n"; 
        
    } 
    header("Content-Disposition: attachment; filename=\"$fileName\""); 
    header("Content-Type: application/vnd.ms-excel"); 
    echo $excelData; 
}
}
$control = new testcontroller();
?>