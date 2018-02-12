<?php
session_start();
error_reporting(0);
include('../Include/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];
if(isset($_POST['update']))
{

$oct=$_POST['oct'];
$nov=$_POST['nov'];
$dec=$_POST['dec'];
$jan=$_POST['jan'];
$feb=$_POST['feb'];
$mar=$_POST['mar'];
$apr=$_POST['apr'];
$may=$_POST['may'];
$jun=$_POST['jun'];
$jul=$_POST['jul'];
$aug=$_POST['aug'];
$sep=$_POST['sep']; 
$sql="update Attend set FirstName=:fname,LastName=:lname,Gender=:gender,Dob=:dob,Department=:department,Address=:address,City=:city,Country=:country,Phonenumber=:mobileno where EmailId=:eid";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$msg="Employee record updated Successfully";
}

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>IVS |Retail/Rail | Update Profile</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>





    </head>
    <body>
  <?php include('../Include/header.php');?>
            
       <?php include('../Include/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Update employee</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="updatemp">
                                    <div>
                                        <h3>Update Employee Info</h3>
                                           <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m6">
                                                        <div class="row">
<?php 
$eid=$_SESSION['eid'];
$sql = "SELECT * from  attend where empid=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid',$eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 
 <div class="input-field col m1 s12">
<label for="oct">Oct</label>
<input  name="oct" id="oct" value="<?php echo htmlentities($result->Oct);?>" type="text" autocomplete="off">
</div>

<div class="input-field col m1 s12">
<label for="nov">Nov</label>
<input  name="nov" id="nov" value="<?php echo htmlentities($result->Nov);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="dec">Dec</label>
<input  name="dec" id="dec" value="<?php echo htmlentities($result->Dece);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="jan">Jan</label>
<input  name="jan" id="jan" value="<?php echo htmlentities($result->Jan);?>" type="text" autocomplete="off" > 
</div>

<div class="input-field col m1 s12">
<label for="feb">Feb</label>
<input  name="feb" id="feb" value="<?php echo htmlentities($result->Feb);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="mar">Mar</label>
<input  name="mar" id="mar" value="<?php echo htmlentities($result->Mar);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="apr">Apr</label>
<input  name="apr" id="apr" value="<?php echo htmlentities($result->Apr);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="may">May</label>
<input  name="may" id="may" value="<?php echo htmlentities($result->May);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="jun">Jun</label>
<input  name="jun" id="jun" value="<?php echo htmlentities($result->Jun);?>" type="text" autocomplete="off"  > 
</div>

<div class="input-field col m1 s12">
<label for="jul">Jul</label>
<input  name="jul" id="jul" value="<?php echo htmlentities($result->Jul);?>" type="text" autocomplete="off"  >
</div>

<div class="input-field col m1 s12">
<label for="aug">Aug</label>
<input  name="aug" id="aug" value="<?php echo htmlentities($result->Aug);?>" type="text" autocomplete="off" >
</div>

<div class="input-field col m1 s12">
<label for="sep">Sep</label>
<input  name="sep" id="sep" value="<?php echo htmlentities($result->Sep);?>" type="text" autocomplete="off"  > 
</div>









</div>
</div>
                                                    
<div class="col m6">
<div class="row">


                                                            

<?php }}?>
                                                        
<div class="input-field col s12">
<button type="submit" name="update"  id="update" class="waves-effect waves-light btn indigo m-b-xs">UPDATE</button>

</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                     
                                    
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/form_elements.js"></script>
        
    </body>
</html>
<?php } ?> 