<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
if(isset($_POST['apply']))
{
$empid=$_SESSION['eid'];
 $account=$_POST['account'];
 $track=$_POST['track'];
 $task=$_POST['task'];
$fromdate=$_POST['fromdate']; 
$count=$_POST['count'];
$hours=$_POST['hours']; 
$description=$_POST['description'];  
$status=0;
$isread=0;
$sql="INSERT INTO tableipt(Account,Track_Name,Task,Date,Count,Hrs,Comments,Status,IsRead,empid) VALUES(:account,:track,:task,:fromdate,:count,:hours,:description,:status,:isread,:empid)";
$query = $dbh->prepare($sql);
$query->bindParam(':account',$account,PDO::PARAM_STR);
$query->bindParam(':track',$track,PDO::PARAM_STR);
$query->bindParam(':task',$task,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':count',$count,PDO::PARAM_STR);
$query->bindParam(':hours',$hours,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Leave applied successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>IVS| IPT</title>
        
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
                        <div class="page-title"><h3><b>Individual Productivity Tracker</b></h3></div>
                    </div>
                    <div class="col s12 m12 l8">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="addemp">
                                    <div>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m12">
                                                        <div class="row">
     <?php if($error){?><div class="errorWrap"><strong>ERROR </strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


 <div class="input-field col m6 s12">
<select  name="account" autocomplete="off">
<option value="">Select Account...</option>
<?php $sql = "SELECT  DepartmentName from tbldepartments";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                                            
<option value="<?php echo htmlentities($result->DepartmentName);?>"><?php echo htmlentities($result->DepartmentName);?></option>
<?php }} ?>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="track" autocomplete="off">
<option value="">Select Track...</option>
<?php $sql = "SELECT  DepartmentName from tbldepartments";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                                            
<option value="<?php echo htmlentities($result->DepartmentName);?>"><?php echo htmlentities($result->DepartmentName);?></option>
<?php }} ?>
</select>
</div>
<div class="input-field col  s12">
<select  name="task" autocomplete="off">
<option value="">Task...</option>                                          
<option value="Test Case Execution">Test Case Execution</option>
<option value="POC">POC</option>
<option value="Automation">Automation</option>
</select>
</div>
<div class="input-field col  s12">
<label for="fromdate">Date</label>
<input placeholder="" id="mask1" name="fromdate" class="masked" type="text" data-inputmask="'alias': 'date'" required>
</div>

<div class="input-field col m6 s12">
<label for="birthdate">Count</label>    
<textarea id="textarea2" name="count" class="materialize-textarea" length="500" required></textarea>
</div><div class="input-field col m6 s12">
<label for="birthdate">Hours</label>    
<textarea id="textarea2" name="hours" class="materialize-textarea" length="500" required></textarea>
</div>
<div class="input-field col m12 s12">
<label for="birthdate">Remarks</label>    

<textarea id="textarea1" name="description" class="materialize-textarea" length="500" required></textarea>
</div>
</div>
      <button type="submit" name="apply" id="apply" class="waves-effect waves-light btn indigo m-b-xs">Apply</button>                                             

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
          <script src="../assets/js/pages/form-input-mask.js"></script>
                <script src="../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    </body>
</html>
<?php } ?> 