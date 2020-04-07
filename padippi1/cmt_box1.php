<div style="background: #f5f8fd;">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
<style>
    .error {
        color: #FF0000;
        }
    .tr {
        margin-bottom: 5px;
        margin-top: 5px;
        font-family: 'Anton', sans-serif;
      }
      .comment {
      height: 60px;
      width: 98%;
      margin-bottom: -4px;
      margin-top: 5px;
      border-radius: 5px;
      }
      .comm {
        width: 98%;
        margin-bottom: 1px;
        border-radius: 5px;
      }
      .pp {
        font: cursive;
        font-size: 22px;
        background-color: #0792d5;
        border: aliceblue;
        margin-bottom: 10px;
      }
      .zx {
        padding-left: 0px;
      }
      .div1 {
        border: 1px solid darkgray;
        margin-bottom: 3px;
        padding-bottom: 5px;
        padding-left: 5px;
        padding-right: 5px;
        padding-top: 5px;
      }
      .div2 {
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 5px;
      }

      .buttonfx{
        color: black; /* button text color */
        outline: none;
        background: #259f6c;
        border: none;
        border-bottom: 4px solid #eee;
        letter-spacing: 0.0625em;
        padding: 0px 9px;
        border-radius: 8px;
        text-transform: uppercase;
        font: bold 16px 'Bitter', sans-serif; /* use google font */
        line-height: 2;
        position: relative;
          display: inline-block;
        margin-right: 20px;
        margin-bottom: 20px;
        cursor: pointer;
          text-decoration: none; /* remove underline if using A instead of BUTTON tag */
        overflow: hidden;
        transition: all .5s;
      }     
      
      .buttonfx:before,
      .buttonfx:after{
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        background: #259f6c; /* onhover background color */
        z-index: -1;
        transform: translate3D(0,-100%,0); /* move elements above button so they don't appear initially */
        transition: all .5s;
      }

      .buttonfx:before{
        background: #fafcd6; /* button default background color */
        z-index: -2;
        transform: translate3D(0,0,0);
      }

      .buttonfx:hover{
          color: white;
      }

      .buttonfx:hover:after{
        transform: translate3D(0,0,0);
        transition: all .5s;
      }

      /* //// Curtain Up  //// */
      .curtaindown{
  border: 1px solid #eee;
  border-bottom: 4px solid #eee;
}

.curtaindown:before,
.curtaindown:after{
  background: #259f6c;
  transform: translate3D(0,-100%,0);
}

.curtaindown:after{
  transform: translate3D(0,100%,0);
}

.curtaindown:hover:before,
.curtaindown:hover:after{
  transform: translate3D(0,-50%,0);
  transition: all .5s;
}

.curtaindown:hover:after{
  transform: translate3D(0,50%,0);
}


      .curtainup{
        transform-style: preserve-3d;
      }

      .curtainup:before,
      .curtainup:after{
        transform-origin: center center;
        transform: scale(1,0);
      }


      .curtainup:hover:before,
      .curtainup:hover:after{
        transform: scale(1);
        border-radius: 0;
      }





</style>

<div class="zx">
        <?php
          // define variables and set to empty values
          $nameErr = $emailErr = $genderErr= $rew = $websiteErr = "";
          $name = $email = $gender = $comment = $website = "";

          if (isset($_POST["submit"])) 
          {
            if (empty($_POST["name"])) 
            {
              $nameErr = "Name is required";
            }
            else 
            {
              $name = test_input($_POST["name"]);
            }
            if (empty($_POST["comment"])) 
            {
              $rew = "Comment is required";
            } 
            else 
            {
              $comment = test_input($_POST["comment"]);
            }
          }
          function test_input($data) 
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>
        <div class="comment_box">
          <h3 class="tr">Comments</h3>
          <form method="POST" action="<?php echo "$link";?>">  
            <div>
              <input class="comm" type="text" name="name" placeholder="Name">
              <span class="error"><?php echo $nameErr;?></span>
              <br>
              <textarea class="comment" name="comment" placeholder="Type your comment here."></textarea>
              <span class="error"><?php echo $rew;?></span>
              <br>
            </div>
              <input class="buttonfx curtaindown" type="submit" name="submit" value="Post" style="margin-top: 5px;">
          </form>
        </div>
      </div>
      <div class="zx">
      <?php
        require "conn.php";
        if(!empty($comment) && !empty($name))
        {
          $cname = $_POST["name"];
          $comment = $_POST["comment"];
          $date = date("Y-m-d");
          $r1 = "INSERT INTO `content_comment`(`name`, `comment`, `date`, `content_id`) VALUES ('$cname', '$comment', '$date', '$content_id')";
          $w1 = mysqli_query($conn, $r1);
        }
        $r1 = "SELECT * FROM `content_comment` where `content_id` = '$content_id' ORDER BY `id` DESC";
        $w1 = mysqli_query($conn, $r1);
        while($row1 = mysqli_fetch_array($w1))
        {
          
      ?>
      <div class = "div1">
        <?php
        ?>
      <div class = "div2">
        <?php
          echo $row1['name'];
          echo "<br>";
          echo $row1['date']."<br>";
        ?>
      </div>
        <?php
          echo $row1['comment'];
          echo "<br>";
        ?>
      </div>
      <?php
      }
      ?>
    </div>