<?php
error_reporting(0);
?>
<?php
  $msg = "";
  
  if (isset($_POST['uploadfiles'])) {
  
    $filename = $_FILES["upload"]["name"];
    $tempname = $_FILES["upload"]["tmp_name"];    
        $folder = "image/".$filename;
          
    $con = mysqli_connect("localhost", "root", "", "myproject");
  
        $sql = "INSERT INTO users (upload) VALUES ('$upload')";
  
        mysqli_query($con, $sql);
          
        
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($con, "SELECT * FROM users");
while($data = mysqli_fetch_array($result))
{
  
      ?>
<img src="<?php echo $data['Filename']; ?>">
  
<?php
}
?>
  
