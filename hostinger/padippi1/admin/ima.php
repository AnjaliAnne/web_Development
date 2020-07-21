<?php
  session_start();
  if(isset($_SESSION['log'])){
?>
<?php
if(isset($_POST['fileuploadsubmit1']))
    {
      include "../conn.php";
      $name=$_POST['name'];
      $link=$_POST['link'];
      $code=$_GET['p1'];
      $auther_name=$_GET['p2'];
      $type=$_GET['p3'];
      $date = date("Y-m-d");
      $sql = "INSERT INTO `content_table`(`name`, `link`, `type`, `auther_name`, `date`, `subject_code`) VALUES ('$name', '$link', '$type', '$auther_name', '$date', '$code')";
      $qry = mysqli_query($conn, $sql);
      $select = "SELECT * FROM `content_table` ORDER BY id DESC";
      $query = mysqli_query($conn, $select) ;
      $row = mysqli_fetch_array($query);
      $id = $row['id'];
      $code = "KTU".$row['subject_code'].$row['id'];
      $sql1 = "UPDATE `content_table` SET content_id = '$code' WHERE id = '$id'";
      mysqli_query($conn, $sql1); 
    //   $bas = "SELECT `table_name`, `nooftb` from `login` where id = '$name'";
    //   $que = mysqli_query($conn, $bas);
    //   $row = mysqli_fetch_array($que);
    //   $yui = $row['table_name'];
    //   $no = $row['nooftb'];
    //   if($yui != ''){
    //     $yui = "$code##$yui";
    //     $no = $no + '1';
    //   }
    //   else{
    //     $yui = $code;
    //     $no = '1';
    //   }
    //   $bast = "UPDATE `login` SET table_name = '$yui', nooftb = '$no' where id = '$name'";
    //   $quet = mysqli_query($conn, $bast);
       $sql = "INSERT INTO `content_comment`(`content_id`, `name`, `comment`, `date`) VALUES ('$code', 'Padippi boy', 'We are evaluating the quality of this material through this comment box. So please provide your valuable suggestion to improve this material. And also please inform us any kind of issues related with this document(copyright)', '$date')";
      $qry = mysqli_query($conn, $sql);
    if($qry){
      $result=mysqli_query($conn,"SELECT * FROM `login_table` WHERE `name`='$auther_name'");
      $row = mysqli_fetch_array($result);
      $id = $row['id'];
      echo "<script>alert('Successfully Uploaded')</script>";
      header("refresh:1;url=selection.php?p1=$id");
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Padippi.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
    include "../head.php";
  ?>

</head>

<body>
<!--Header-->
  <?php
  include "../navbar.php";
  ?>
  <div style="background: #f5f8fd;">
  <div class="container" style="background: #f5f8fd;">

  <br><br><br><br><br><br><br><br><br>
    
  <?php
  if(isset($_POST['fileuploadsubmit']))
  {
        $type=$_POST['type'];
        $subjcode=$_POST['Subject'];
  }
    ?>

    
<?php
    $id = $_GET['p1'];
    include "../conn.php";
    $result=mysqli_query($conn,"SELECT * FROM `login_table` WHERE `id`='$id'");
  	$row = mysqli_fetch_array($result);
    $auther_name = $row['name'];
    ?>
 <div class="container">
        <h1 class="hd"><b>Upload Your Files</b></h1>
        <br>
        <p>Click on the below UPLOAD button to open "File bucket".<br>
        Place your PDF files inside this. And you can create folders inside file bucket.<br>
        After uploading PDF make sure that the permission is labelled as "anyone can view" in the share option.</p>
        <br>
        
        <a href="https://drive.google.com/open?id=<?php echo $ee;?>"><img src="images/Capture.PNG" style="padding-bottom: 15px;"></a>
        <p>After uploading provide appropriate name to the file in the below box.<br>
        And also place the id of the content to the below box.</P>
        <div class="contenty">
            <form method="POST" action="ima.php?p1=<?php echo "$subjcode"; ?>&p2=<?php echo "$auther_name"; ?>&p3=<?php echo "$type"; ?>" enctype="multipart/form-data">
                <div>
                <p><span class="erro">* All  fields required</span></p>
                    <textarea 
                        id="text" 
                        cols="30" 
                        rows="1" 
                        name="name" 
                        placeholder="Enter the Name of file"></textarea>
                </div>
                <div>
                    <textarea 
                        id="text" 
                        cols="30" 
                        rows="1" 
                        name="link" 
                        placeholder="Enter the link of file"></textarea>
                </div>
                <div>
                    <input class="btt" type="submit" name="fileuploadsubmit1" value="Upload" />
                </div>
            </form>
        </div>
    </div>
                    


    <!--Footer-->
    <?php
    include "../footer.php";
    ?>
  </div></div>

</body>
</html>


<?php
  }
  else{
    echo "Invalid Username or Password";
	header("refresh:2;url=index.php");
  }
  ?>