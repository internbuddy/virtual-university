
<?php
  include "connection.php";
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://nicesnippets.com/demo\\\\/easy_slide.js"></script>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

<style>

.slider_circle_10{
  
  width:600px;
  margin: 0 auto;
  user-select: none;  
  padding: 0px 0px 0px 0px;
}
.slider_circle_10 div img{
  width:100%;
}
.slider_circle_10 .slider-desc{
  position:absolute;
  bottom:55px;
  display:none;
  width:100%;
  text-align: center;
}
.slider_circle_10 .active .slider-desc{
  display: block;
}
.slider_circle_10 .slider-desc h3{
  font-size:20px;
  font-weight:800;
  font-family: 'Source Sans Pro', sans-serif;
  color:white;

}
.slider_circle_10 .slider-desc p{
  font-size:20px;
  color:#a2a2a2;
  margin:5px 0px 5px 0px;
}
.slider_circle_10 .slider-desc a i{
  font-size: 20px;
  padding-left:10px;
  color:#7B8D8E;
  text-align: center;
  padding:10px;
  height:15px;
  width:15px;
  margin:0px 5px;
}
.slider_circle_10 > div .img{
  border-radius: 50%;
  background: #fff;
  text-align: center;
  box-sizing: border-box;
  box-shadow: 0px 0px 25px #000;
}
.slider_circle_10 > div .img,
.slider_circle_10 .hidden .img{
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 1px;
  height: 1px;
  z-index: 0;
  overflow: hidden;
  transform: translate(-50%, -50%);
}
.slider_circle_10 .active .img{
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  z-index: 10;
}

.slider_circle_10 .prev1 .img,
.slider_circle_10 .next1 .img{
  opacity: 0.9;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-left: -65px;
  width: 60px;
  height: 60px;
  z-index: 9;
}
.slider_circle_10 .next1 .img{
  margin-left: 65px;
}

.slider_circle_10 .next2 .img{
  opacity: 0.7;
  position: absolute;
  top:50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-left: -220px;
  width: 40px;
  height: 40px;
  z-index: 8;
  padding-top:-100px; 
}
.slider_circle_10 .prev2 .img{
  opacity: 0.7;
  position: absolute;
  top:50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-left: -110px;
  width: 40px;
  height: 40px;
  z-index: 8;
  padding-top:-100px; 
}
.slider_circle_10 .next2 .img{
  margin-left: 110px;
}

.next_button,
.prev_button {
  position: absolute;
  left: 105%;
  top: 50%;
  transform: translateX(-50%);
  cursor: pointer;
  color:black;
}
.prev_button {
  position: absolute;
  left: -5%;
}  
.next_button:hover,
.prev_button:hover {
  opacity: 1;
}
    </style>
</head>
<body>
 <div class="slider slider_circle_10"> 
  <?php

  $sql_package="SELECT * FROM vu_campus_master where campus_status='1'";

  $result_package=mysqli_query($conn,$sql_package) or die('Problem with query'.mysqli_errno($conn));
  
  while($row_package=mysqli_fetch_array($result_package)){

      ?>
  <div>

    <a class="img" target="_parent" href="service-2.php?campus_id=<?= $row_package["campus_id"] ?>"><?php echo "<img style='height:100%;' src='../images/{$row_package['campus_image']}'>"; ?></a>
    <div class="slider-desc">
        <h3><?= $row_package["campus_name"]; ?></h3>     
        
    </div>
  </div>
  <?php } ?>
  <div class="next_button"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>  
  <div class="prev_button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>  
 </div>
 <h4 class="h4-xs" style="font-size:20px;color:white;font-family:'Source Sans Pro', sans-serif;">Book Appointment:</h4><br><br><br><br><br><br><br><br>
 <h4 class="h4-xs" style="font-size:18px;color:white;font-family:'Source Sans Pro', sans-serif;align:center;">Click to Check Doctor's Availability</h4>

 <!-- <table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 7:00 PM</td>
									    </tr>
									     <tr>
									      	<td>Thursday</td>
									      	<td>-</td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									    <tr>
									      	<td>Friday</td>
									      	<td>-</td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">Closed</td>
									   	 </tr>
									  </tbody>
								</table> -->
 <script>
     $(document).ready(function() {
     $('.slider_circle_10').EasySlides({'autoplay': true, 'show': 5})
   });
     </script>
</body>
</html>