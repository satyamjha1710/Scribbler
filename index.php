<?php
	include("Login.php");
	include("Scribbler_files/Scribbler_index_file/Scribbler_SignUp_file/SignUp.php");
?>
<html>
<head>
	<title> Scribbler </title>
<?php	
include("Scribbler_files/Scribbler_index_file/Scribbler_background_file/index_background.php");
?>
	<LINK REL="SHORTCUT ICON" HREF="Scribbler_files/Scribbler_title_icon/Scribbler.jpg" />
	<link href="Scribbler_files/Scribbler_index_file/Scribbler_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="Scribbler_files/Scribbler_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="Scribbler_files/Scribbler_index_file/Scribbler_js_file/Registration_validation.js"> </script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.Scribbler_join_time.value=time;
	}
</script>
<body>
	<!--login form-->
	<form  method="post">
		<div style="position:absolute; left:57.7%; top:2.2%; font-size:12px; color:#FFFFFF;">   Email </div> 
		<div style="position:absolute; left:57.7%; top:5.18%; font-size:11px; "> <input type="text" name="username" style="width:149.5;"/> </div>
		<div style="position:absolute; left:57.4%; top:8.8%; font-size:12; color:#CCCCCC;">  <input type="checkbox" checked="checked">   Keep me logged in </div>
		<div style="position:absolute;left:69.6%; top:2.2%; font-size:13px; color:#FFFFFF"> Password </div>
		<div style="position:absolute;left:69.6%; top:5.18%; font-size:13px; "> <input type="password" name="password" style="width:149.5;"> </div>
		<div style="position:absolute;left:69.6%; top:9.2%; font-size:12px; color:#CCCCCC;"> <a href="Forgot_Password.php" style="color:#CCCCCC; text-decoration:none;"> Forgot your password? </a> </div>   
		<div style="position:absolute;left:81.8%;top:5.2%; ">   <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
	</form>
	
	<!-- Scribbler left part -->
	
		<!--Left part-->
		<!--Mobile Image--> 	
	<div style="position:absolute; left:5%; top:35%;"> <img src="Scribbler_files/Scribbler_index_file/Scribbler_image_file/Scribbler_quote.jpg" width="700" height="400"> </div>
    <div style="position:absolute; left:7%; top:24%; color:white; font-size:28px;"> <font face="myScribblerFont"> Let's Scribble and Connect </font> </div>
    <div style="position:absolute; left:7%; top:30%; color:white; font-size:28px;"> <font face="myScribblerFont"> Through Scribbler. </font></div>
	
	
	
	<!-- Registration -->
	<form  method="post" onSubmit="return bcheck();" name="Reg">
		<div style="position:absolute;left:58%; top:14.5%; color:white; font-size:25"> <h5> Sign Up </h5> </div>
		<div style="position:absolute;left:58%; top:24.6%; color:#ffffff;">  It's free and always will be.  </div>
		<div style="position:absolute;left:57.3%; top:29.1%; height:1; width:385; background-color:#CCCCCC;"> </div>
        
		<div style="position:absolute;left:59.4%; top:34%; font-size:16px; color:#ffffff">  First Name: </div>
		<div style="position:absolute;left:65.2%;   top:32.8%; "> <input type="text" name="first_name" class="inputbox" maxlength="10"/> </div>
		<div style="position:absolute;left:59.4%; top:41%; font-size:16px; color:#ffffff">  Last Name: </div>
		<div style="position:absolute;left:65.2%;  top:39.8%;  "> <input type="text" name="last_name"  size="25" class="inputbox" maxlength="10" /> </div>
		<div style="position:absolute;left:59.2%; top:48%; font-size:16px; color:#ffffff">  Your Email:  </div>
		<div style="position:absolute;left:65.2%;  top:46.8%; "> <input type="text" name="email"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:55%; font-size:16px; color:#ffffff">  Re-enter Email:  </div>  
		<div style="position:absolute;left:65.2%; top:53.8%; "> <input type="text" name="remail"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:62%; font-size:16px; color:#ffffff"> New Password:  </div>
		<div style="position:absolute;left:65.2%; top:60.8%; "> <input type="password" name="password" size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:62.2%; top:68.5%; font-size:16px; color:#ffffff"> I am:  </div>
		<div style="position:absolute;left:65.2% ;top:67.8%;">		  
		<select name="sex" style="width:120;height:35;font-size:18px;padding:3;">
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>
		
<div style="position:absolute;left:60.28%; top:74.8%; font-size:16px; color:#ffffff">  Birthday:  </div>

	
	<div style="position:absolute;left:65.2%; top:74%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>



	<div style="position:absolute; left:72%; top:74%;">
	<select name="day" style="width:63;font-size:18px;height:32;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	

	<div style='position:absolute;left:77.5%;top:74%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
		<input type="hidden" name="Scribbler_join_time">
		<div style="position:absolute;left:65.2%; top:82%; ">  <input type="submit" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position:absolute;left:57.3%; top:90%; height:1; width:385; background-color:#CCCCCC; "> </div> 
        
 
    
		
<?php
	include("Scribbler_files/Scribbler_index_file/Scribbler_erorr_file/Scribbler_erorr.php");
?>					
</body>
</html>