<?php
include 'dbconnect.php';
?>
<html>

<head>
    <title>NITD | CMS</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!--MAIN MENU STARTS HERE-->
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <div class="container">
            <img class="navbar-brand" src="logo\nitdlogo.png" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-dark justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link active text-dark" href="#home">
                            <h2 style="padding:10px 10px;">Home</h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#aboutus">
                            <h2 style="padding:10px 10px;">About Us</h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#classes">
                            <h2 style="padding:10px 10px;">Classes</h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#contactus">
                            <h2 style="padding:10px 10px;">Contact Us</h2>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN MENU ENDS HERE-->

    <header>
        <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
            <div class="carousel-item active">
                    <img src="images/campus11.jpg" alt="NITD CAMPUS" class="d-block w-100 img-thumbnail">
                    <div class="carousel-caption">
                        <h3 class="animated zoomIn" style="animation-delay: 0.5s">NEW CAMPUS</h3>
                        <h4 class="animated zoomIn" style="animation-delay: 1s">National Institute of
                            Technology , Delhi </h4>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/classroom.jpg" alt="CLASSROOMS" class="d-block w-100 img-thumbnail">
                    <div class="carousel-caption">
                        <h3 class="animated zoomIn" style="animation-delay: 0.5s">NITD Classrooms</h3>
                        <h4 class="animated zoomIn" style="animation-delay: 1s">The classrooms are a blend of
                            traditional learning methods</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/library3.jpg" alt="LIBRARY" class="d-block w-100 img-thumbnail">
                    <div class="carousel-caption">
                        <h3 class="animated zoomIn" style="animation-delay: 0.5s">Central Library</h3>
                        <h4 class="animated zoomIn" style="animation-delay: 1s">The Library remain closed on Sunday and
                            all Gazetted Holidays.</h4>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </header>
    <div class="section">
        <div class="col-sm text-center h1 pb-5" id="aboutus">About Us
        </div>
        <div class="container p-1">
            <?php 
                $insert = $link->query("SELECT * FROM images WHERE id=1");
                while($row = mysqli_fetch_array($insert)){
            ?>
                 
            <div class="image-section img-thumbnail">
                <img src="<?php echo $row['img']; ?>" alt="aboutus">
            </div>
            <div class="content-section">
                <div class="title">
                    <h1><?php echo $row['heading']; ?></h1>
                </div>
                <div class="content">
                    <p><?php echo $row['content']; ?>.</p>
                </div>
            </div>
        </div>
        <?php } ?>  
    </div>
    <div class="section px-5 pt-5 pb-0"> 
        <div class="form" >
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username"><h3>Heading</h3></label>
                <input type="text" class="form-control" id="username" name="h1" aria-describedby="emailHelp">	
		    </div>

		    <div class="form-group">
		    	<label for="password"><h2>Description</h2></label>
		    	<input type="text" class="form-control"
		    	id="password" name="des1">
		    </div>

		    <div class="form-group">
            <label class="form-label" for="customFile"><h2>Image <small>(size : 318*159)</small></h2></label>
            
            <input type="file" name="files[]"  class="form-control" />
		    </div>	

		    <button type="submit" class="btn btn-primary"  name="upload1">
                <h3>Upload</h3>
		    </button>
            </form>
        </div>
    </div>

    <div class="container p-2" id="classes">
        <div class="col-sm text-center h1 pb-5">Classes
        </div>
        <div class="card-deck">
        <?php    
            $insert = $link->query("SELECT * FROM images WHERE id=2");
            while($row = mysqli_fetch_array($insert)){
        ?>
            <div class="card ">
                <img class="card-img-top img-thumbnail" src="<?php echo $row['img']; ?>"
                    alt="Antennawavepropogation">
                <div class="card-body justify-content-center text-align-center">
                    <h4 class="card-title"><?php echo $row['heading']; ?></h4>
                    <h5 class="card-text"><?php echo $row['content']; ?>.</h5>
                    <?php } ?>  
                    <div class="section px-5 py-4"> 
                        <div class="form">
                        <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username"><h3>Heading</h3></label>
                                    <input type="text" class="form-control" id="username" name="h2" aria-describedby="emailHelp">	
		                        </div>
	                
		                        <div class="form-group">
		                        	<label for="password"><h2>Description</h2></label>
		                        	<input type="text" class="form-control"
		                        	id="password" name="des2">
		                        </div>
	                
		                        <div class="form-group">
                                <label class="form-label" for="customFile"><h2>Image <small>(size : 280*180)</small></h2></label>
                               

                                <input type="file" name="files[]"  class="form-control" />
		                        </div>	
	                
		                        <button type="submit" class="btn btn-primary" name="upload2">
                                    <h3>Upload</h3>
		                        </button>
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php     
                $insert = $link->query("SELECT * FROM images WHERE id=3");
                while($row = mysqli_fetch_array($insert)){
            ?>
            <div class="card ">
                <img class="card-img-top img-thumbnail" src="<?php echo $row['img']; ?>"
                    alt="Microprocessor and Microcontroller">
                <div class="card-body justify-content-center text-align-center">
                    <h4 class="card-title"><?php echo $row['heading']; ?></h4>
                    <h5 class="card-text"><?php echo $row['content']; ?>.</h5>
                    <?php } ?>  
                    <div class="section px-5 py-4"> 
                        <div class="form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username"><h3>Heading</h3></label>
                                    <input type="text" class="form-control" id="username" name="h3" aria-describedby="emailHelp">	
		                        </div>
	                
		                        <div class="form-group">
		                        	<label for="password"><h2>Description</h2></label>
		                        	<input type="text" class="form-control"
		                        	id="password" name="des3">
		                        </div>
	                
		                        <div class="form-group">
                                <label class="form-label" for="customFile"><h2>Image <small>(size : 280*180)</small></h2></label>
                               

                                <input type="file" name="files[]"  class="form-control" />
		                        </div>	
	                
		                        <button type="submit" class="btn btn-primary"  name="upload3">
                                    <h3>Upload</h3>
		                        </button>
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php     
                $insert = $link->query("SELECT * FROM images WHERE id=4");
                while($row = mysqli_fetch_array($insert)){
            ?>
            <div class="card">
                <img class="card-img-top img-thumbnail" src="<?php echo $row['img']; ?>"
                    alt="Digitalcommunication">
                <div class="card-body justify-content-center text-align-center">
                    <h4 class="card-title"><?php echo $row['heading']; ?></h4>
                    <h5 class="card-text"><?php echo $row['content']; ?></h5>
                    <?php } ?> 
                    <div class="section px-5 py-4"> 
                        <div class="form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username"><h3>Heading</h3></label>
                                    <input type="text" class="form-control" id="username" name="h4" aria-describedby="emailHelp">	
		                        </div>
	                
		                        <div class="form-group">
		                        	<label for="password"><h2>Description</h2></label>
		                        	<input type="text" class="form-control"
		                        	id="password" name="des4">
		                        </div>
	                
		                        <div class="form-group">
                                <label class="form-label" for="customFile"><h2>Image <small>(size : 280*180)</small></h2></label>
                                <input type="file" name="files[]"  class="form-control" />
		                        </div>	
	                
		                        <button type="submit" class="btn btn-primary" name="upload4">
                                    <h3>Upload</h3>
		                        </button>
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php    
                $insert = $link->query("SELECT * FROM images WHERE id=5");
                while($row = mysqli_fetch_array($insert)){
            ?>
            <div class="card">
                <img class="card-img-top img-thumbnail" src="<?php echo $row['img']; ?>" alt="IC Applications">
                <div class="card-body justify-content-center text-align-center">
                    <h4 class="card-title"><?php echo $row['heading']; ?></h4>
                    <h5 class="card-text"><?php echo $row['content']; ?></h5>
                    <?php } ?>
                    <div class="section px-5 py-4"> 
                        <div class="form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username"><h3>Heading</h3></label>
                                    <input type="text" class="form-control" id="username" name="h5" aria-describedby="emailHelp">	
		                        </div>
	                
		                        <div class="form-group">
		                        	<label for="password"><h2>Description</h2></label>
		                        	<input type="text" class="form-control"
		                        	id="password" name="des5">
		                        </div>
	                
		                        <div class="form-group">
                                <label class="form-label" for="customFile"><h2>Image <small>(size : 280*180)</small></h2></label>
                                <input type="file" name="files[]"  class="form-control" />
		                        </div>	
	                
		                        <button type="submit" class="btn btn-primary" name="upload5">
                                    <h3>Upload</h3>
		                        </button>
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container footer" id="contactus">
        <div class="row p-2">
            <div class="col-sm text-center h1 pb-3">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3><b>Address: </b>
                    <p class="text-muted">National Institute of Technology , Delhi.
                        <br>First Floor, Mini Campus <br>
                        Plot No. FA7, Zone P1 GT Karnal Road, Delhi-110036, INDIA<br>
                        Tele: +911133861173(O); +919899320887 (M)</p>
                </h3>
                <h3><b>Email: </b>
                    <div class="text-muted">secretary@nitdelhi.ac.in</div>
                </h3>
                <h3><b>Contact: </b>
                    <p class="text-muted">011 33861005 / 1007 || +9111-27787503</p>
                </h3>
                <h3><b>Follow us : </b>
                <div class="d-flex pt-2 align-items-left justify-content-center">
                    <a class="btn px-2 mx-3 bg-info btn-outline-light btn-social" href="https://twitter.com/NITDofficial" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn px-2 mx-3 bg-primary btn-outline-light btn-social" href="https://www.facebook.com/nitdelhiofficialpage" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn px-2 mx-3 bg-danger btn-outline-light btn-social" href="https://www.youtube.com/channel/UCw-vO6XOu6wd8U9BmoQ9ovQ" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="btn px-2 mx-3 btn-outline-light btn-social" style="background-color: #962fbf" href="https://www.instagram.com/nitdelhiofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn px-2 mx-3 bg-primary btn-outline-light btn-social" href="https://www.linkedin.com/company/officialnitdelhi/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                
            </div>
            <div class="col-md-6">
				<form>
                    <div class="form-group py-2">
					    <input type="name" class="form-control" style="font-size:18px;"  id="exampleInputName"
                         placeholder="Your Full Name...">
				    </div>
                    <div class="form-group py-2">
					    <input type="email" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" style="font-size:18px;" placeholder="Your Email Address...">
				    </div>
				    <div class="form-group py-2">
                        <input type="name" class="form-control" style="font-size:18px;"  id="exampleInputsubject"
                         placeholder="Subject...">
				    </div>
                    <div class="form-group py-2">
                      <textarea class="form-control" aria-label="With textarea" style="font-size:18px;" placeholder="Message..."></textarea>
                    </div>
				    <button type="submit" class="btn btn-warning btn-lg btn-block">Send Message</button>
				</form>
			</div>
        </div>
    </div>
    <div class="col-md-12 pt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.8172502371626!2d77.13157691394709!3d28.814519382574147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b1923ada2e3%3A0x1169930518add2fe!2sNational%20Institute%20of%20Technology%20Delhi!5e0!3m2!1sen!2sin!4v1659000415231!5m2!1sen!2sin" 
        width="100%" height="450" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>

</html>
<?php

if(isset($_POST["upload1"])){
    
    $h1=$_POST['h1'];
    $des1=$_POST['des1'];
    
   $path="uploads/";
 for ($i=0; $i<count($_FILES['files']['name']); $i++) 
 {
    $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
   $path1 = $path . md5(uniqid()) . "." . $ext; 
    move_uploaded_file($_FILES['files']['tmp_name'][$i], $path1);
$path2=$path2.$path1;
 }
        // Check connection
        if($link->connect_error){
            die("Connection failed: " . $link->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
      
        $insert = $link->query("update images set img='$path2',heading='$h1',content='$des1' where id=1");


        
          if($insert){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
         var r= window.confirm('Succesfully inserted..');
    if (r)
    {
      window.location.href='';
    }
    else
   {
    window.location.href='';
       
    }
       </SCRIPT>
       ");
 }else{
            echo '<script language="javascript">';
echo 'alert("File upload failed, please try again.")';
echo '</script>';
           
        } 
}

if(isset($_POST["upload2"])){
    
    $h2=$_POST['h2'];
    $des2=$_POST['des2'];
    
   $path="uploads/";
 for ($i=0; $i<count($_FILES['files']['name']); $i++) 
 {
    $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
   $path1 = $path . md5(uniqid()) . "." . $ext; 
    move_uploaded_file($_FILES['files']['tmp_name'][$i], $path1);
$path2=$path2.$path1;
 }
        // Check connection
        if($link->connect_error){
            die("Connection failed: " . $link->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
      
        $insert = $link->query("update images set img='$path2',heading='$h2',content='$des2' where id=2");


        
          if($insert){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
         var r= window.confirm('Succesfully inserted..');
    if (r)
    {
      window.location.href='';
    }
    else
   {
    window.location.href='';
       
    }
       </SCRIPT>
       ");
 }else{
            echo '<script language="javascript">';
echo 'alert("File upload failed, please try again.")';
echo '</script>';
           
        } 
}


if(isset($_POST["upload3"])){
    
    $h3=$_POST['h3'];
    $des3=$_POST['des3'];
    
   $path="uploads/";
 for ($i=0; $i<count($_FILES['files']['name']); $i++) 
 {
    $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
   $path1 = $path . md5(uniqid()) . "." . $ext; 
    move_uploaded_file($_FILES['files']['tmp_name'][$i], $path1);
$path2=$path2.$path1;
 }
        // Check connection
        if($link->connect_error){
            die("Connection failed: " . $link->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
      
        $insert = $link->query("update images set img='$path2',heading='$h3',content='$des3' where id=3");


        
          if($insert){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
         var r= window.confirm('Succesfully inserted..');
    if (r)
    {
      window.location.href='';
    }
    else
   {
    window.location.href='';
       
    }
       </SCRIPT>
       ");
 }else{
            echo '<script language="javascript">';
echo 'alert("File upload failed, please try again.")';
echo '</script>';
           
        } 
}

if(isset($_POST["upload4"])){
    
    $h4=$_POST['h4'];
    $des4=$_POST['des4'];
    
   $path="uploads/";
 for ($i=0; $i<count($_FILES['files']['name']); $i++) 
 {
    $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
   $path1 = $path . md5(uniqid()) . "." . $ext; 
    move_uploaded_file($_FILES['files']['tmp_name'][$i], $path1);
$path2=$path2.$path1;
 }
        // Check connection
        if($link->connect_error){
            die("Connection failed: " . $link->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
      
        $insert = $link->query("update images set img='$path2',heading='$h4',content='$des4' where id=4");


        
          if($insert){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
         var r= window.confirm('Succesfully inserted..');
    if (r)
    {
      window.location.href='';
    }
    else
   {
    window.location.href='';
       
    }
       </SCRIPT>
       ");
 }else{
            echo '<script language="javascript">';
echo 'alert("File upload failed, please try again.")';
echo '</script>';
           
        } 
}

if(isset($_POST["upload5"])){
    
    $h5=$_POST['h5'];
    $des5=$_POST['des5'];
    
   $path="uploads/";
 for ($i=0; $i<count($_FILES['files']['name']); $i++) 
 {
    $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
   $path1 = $path . md5(uniqid()) . "." . $ext; 
    move_uploaded_file($_FILES['files']['tmp_name'][$i], $path1);
$path2=$path2.$path1;
 }
        // Check connection
        if($link->connect_error){
            die("Connection failed: " . $link->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
      
        $insert = $link->query("update images set img='$path2',heading='$h5',content='$des5' where id=5");


        
          if($insert){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
         var r= window.confirm('Succesfully inserted..');
    if (r)
    {
      window.location.href='';
    }
    else
   {
    window.location.href='';
       
    }
       </SCRIPT>
       ");
 }else{
            echo '<script language="javascript">';
echo 'alert("File upload failed, please try again.")';
echo '</script>';
           
        } 
}
?>
