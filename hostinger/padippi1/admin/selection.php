<?php
  session_start();
  if(isset($_SESSION['log'])){
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

    <?php
      $id = $_GET['p1'];
      include "../conn.php";
      $result=mysqli_query($conn,"SELECT * FROM `login_table` WHERE `id`='$id'");
      $row = mysqli_fetch_array($result);
      $name = $row['name'];
    ?>
    <br><br><br><br><br><br><br><br><br>
    <b><h1 style="font-size: 25px;line-height:normal;text-transform:uppercase;font-family: 'Exo 2', sans-serif;text-shadow: 2px 2px 2.5px;">Welcome  "<?php echo "$name"; ?>"</h1>
    <hr/></b>
    <b> <p style="line-height: normal; font-family: Tempus Sans ITC;">Now categorise your file</p></b>
        
    <form method="POST" action="ima.php?p1=<?php echo "$id";?>" enctype="multipart/form-data">
      <div class="container" style="min-width:600px;min-height:200px;">
        <h1 style="font:bold;font-size:20px;">
          <select name="Semester" id="Semester">
          <option value="">Select Semester</option>
          </select>
        </h1><br /><hr/><br/>
        <h1 style="font:bold;font-size:20px;"> 
          <select name="Department" id="Department">
          <option value="">Select Department</option>
          </select>
        </h1><br/><br/><hr/><br/>
        <h1 style="font:bold;font-size:20px;"> 
          <select name="Subject" id="Subject">
          <option value="">Select Subject</option>
          </select>
        </h1><br/><hr/><br/>
        <h1 style="font:bold;font-size:20px;">
          <select name="type">
            <option value="quest">Question Bank</option>
            <option value="notes">Notes</option>   
            <option value="module">previous question paper</option>                     
          </select>
        </h1><br/><hr/><br/>
        <h1 style="font:bold;font-size:medium;"> 
          <input class="btt" type="submit" name="fileuploadsubmit" value="Upload">
        </h1><br/><hr/>
        <p id="content" >
          <h1 style="font-style: italic;font-size: 15px;color: red;">*Before pressing the upload button make sure that you have selected all the fields</h1>
        </p>
      </div>
    </form>


    <!--Footer-->
    <?php
    include "../footer.php";
    ?>
  </div></div>

  <script>
  $(document).ready(function(){

  load_json_data('Semester');

  function load_json_data(id, parent_id)
  {
    var html_code = '';
    $.getJSON('country_state_city.json', function(data){

    html_code += '<option value="">Select '+id+'</option>';
    $.each(data, function(key, value){
      if(id == 'Semester')
      {
      if(value.parent_id == '0')
      {
        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
      }
      }
      else
      {
      if(value.parent_id == parent_id)
      {
        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
      }
      }
    });
    $('#'+id).html(html_code);
    });

  }

  $(document).on('change', '#Semester', function(){
    var country_id = $(this).val();
    if(country_id != '')
    {
    load_json_data('Department', country_id);
    }
    else
    {
    $('#Department').html('<option value="">Select Department</option>');
    $('#Subject').html('<option value="">Select Subject</option>');
    }
  });
  $(document).on('change', '#Department', function(){
    var state_id = $(this).val();
    if(state_id != '')
    {
    load_json_data('Subject', state_id);
    }
    else
    {
    $('#city').html('<option value="">Select city</option>');
    }
  });
  });
</script>

</body>
</html>


<?php
  }
  else{
    echo "Invalid Username or Password";
	header("refresh:2;url=index.php");
  }
  ?>