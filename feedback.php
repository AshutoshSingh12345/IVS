<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=intval($_GET['empid']);
if(isset($_POST['update']))
{

$appreciation=$_POST['appreciation'];
$sql = "update feedback set Appreciation=:appreciation  WHERE empid=:eid";
$query = $dbh->prepare($sql);
$query->bindParam(':appreciation',$appreciation,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query -> execute();
$msg="Employee record updated Successfully";
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Manage Employees</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="../assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
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

.hover {
    text-decoration: underline;
	

}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 2px; /* Location of the box */
    left: 10%;
    top: 20%;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
	
    width: 80%;
}

/* The Close Button */
.close {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
    </head>
    <body>
       <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">All Employees</div>
                    </div>
					
					<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <form id="example-form" method="post" name="updatemp">
                                    <div>
                                        <section>
                                            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                                <div class="row">
  <?php
  $sql = "Select feedback.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,feedback.Escalation,feedback.Non_Flexibility,feedback.Non_Productivity,feedback.Non_Pro_Active,feedback.Non_On_Time,feedback.Followup_Required,feedback.Appreciation,feedback.Flexibility,feedback.Attitude,feedback.Pro_Active,feedback.Responsibility,feedback.Time,feedback.Ownership,(feedback.Responsibility+feedback.Attitude+feedback.Appreciation+feedback.Flexibility+feedback.Time+feedback.Ownership) as TotalA,(feedback.Escalation+feedback.Non_Flexibility+feedback.Non_Productivity+feedback.Non_Pro_Active+feedback.Non_On_Time+feedback.Followup_Required) as TotalE from feedback join tblemployees on feedback.empid=tblemployees.EmpId order by lid desc";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
    <span class="close">&times;</span>
    <center><p><strong>Employee Feedback Form</strong></p></center>
	<div class="input-field col m6 s12">
<label for="empcode">Employee ID</label>
<input  name="empcode" id="empcode" value="<?php echo htmlentities($result->EmpId);?>" type="text" readonly  required>
</div>
<div class="input-field col m6 s12">
<label for="empcode">Employee Name</label>
<input  name="empcode" id="empcode" value="<?php echo htmlentities($result->FirstName);?>&nbsp;<?php echo htmlentities($result->LastName);?>" type="text" readonly required>
</div>
<div class="col m6">
<div class="row"> 
 <fieldset>
<legend><h5>Positive</h5></legend>

<div class="input-field col m6 s12">
<label for="appreciation">Appreciation</label>
<input id="appreciation" name="appreciation"  value="<?php echo htmlentities($result->Appreciation);?>" type="text" required>
</div>

<div class="input-field col m6 s12">
<label for="lastName">Flexibility</label>
<input id="lastName" name="lastName" value="<?php echo htmlentities($result->Flexibility);?>"  type="text" autocomplete="off" required>
</div>

<div class="input-field col m6 s12">
<label for="email">Attitude</label>
<input  name="email" type="text" id="email" value="<?php echo htmlentities($result->Attitude);?>" autocomplete="off" required> 
</div>

<div class="input-field col m6 s12">
<label for="phone">Pro-Active</label>
<input id="phone" name="mobileno" value="<?php echo htmlentities($result->Pro_Active);?>" type="tel" maxlength="10" autocomplete="off" >
 </div>
 
 <div class="input-field col m6 s12">
<label for="wmobileno">Additional Responsibility</label>
<input id="wmobileno" name="wmobileno" value="<?php echo htmlentities($result->Responsibility);?>" type="tel" maxlength="10" autocomplete="off"  >
 </div>
 
  <div class="input-field col m6 s12">
<label for="ext">On Time</label>
<input id="ext" name="ext" value="<?php echo htmlentities($result->Time);?>" type="tel" maxlength="10" autocomplete="off" >
 </div>
 


<div class="input-field col m6 s12">
<label for="bg">Ownership Taken</label>
<input id="bg" name="bg" value="<?php echo htmlentities($result->Ownership);?>" type="tel" maxlength="10" autocomplete="off" >
 </div>
</fieldset> 
</div>
</div> 
<div class="col m6">
<div class="row"> 
<fieldset >
<legend><h5>Negative</h5></legend>

<div class="input-field col m6 s12">
<label for="firstName">Escalation</label>
<input id="firstName" name="firstName"  value="<?php echo htmlentities($result->Escalation);?>" type="text" required>
</div>

<div class="input-field col m6 s12">
<label for="lastName">Non Flexibility</label>
<input id="lastName" name="lastName" value="<?php echo htmlentities($result->Non_Flexibility);?>"  type="text" autocomplete="off" required>
</div>

<div class="input-field col m6 s12">
<label for="email">Non Productivity</label>
<input  name="email" type="text" id="email" value="<?php echo htmlentities($result->Non_Productivity);?>" autocomplete="off" required>
</div>

<div class="input-field col m6 s12">
<label for="phone">Non Pro-Active</label>
<input id="phone" name="mobileno" value="<?php echo htmlentities($result->Non_Pro_Active);?>" type="tel" maxlength="10" autocomplete="off" >
 </div>
 
 
  <div class="input-field col m6 s12">
<label for="ext">Non On Time</label>
<input id="ext" name="ext" value="<?php echo htmlentities($result->Non_On_Time);?>" type="tel" maxlength="10" autocomplete="off" >
 </div>
 


<div class="input-field col m6 s12">
<label for="bg">Followup Required</label>
<input id="bg" name="bg" value="<?php echo htmlentities($result->Followup_Required);?>" type="tel" maxlength="10" autocomplete="off" >
 </div>
</fieldset> 
</div>
</div>
<?php $cnt++;} }?>
<div>
<button type="submit" name="update"  id="update" class="waves-effect waves-light btn indigo m-b-xs">UPDATE</button>

</div>
  </div>
                                                    </div>
                                                </div>
                                            
                                        </section>
                                    </div>
                                </form>
</div>
    

					
					
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content" >
                                <span class="card-title">Employees Feedback</span>
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
								<div class="hover" align="right">
									<b><a href="ExportExcel.php">Export to Excel</a></b>
								</div>
								
								<div style="overflow-x:auto">
                                <table id="example" class="table table-inverse" align="center" >
                                    <thead>
                                        <tr >
                                            <th bgcolor="#00FF00">Sr no</th>
                                            <th>Emp Id</th>
                                            <th>Employee Name</th>
											<th>Total Appeciation</th>
											<th>Total Escalation</th>
                                            <th>Appreciation</th>
                                             <th>Flexibility</th>
                                             <th>Attitude</th>
                                            <th>Pro-Active</th>
											<th>Additional Responsibility</th>
											<th>On Time</th>
											<th>Ownership Taken</th>
											<th>Escalation</th>
											<th>Non Flexibility</th>
											<th>Non Productivity</th>
											<th>Non Pro-Active</th>
											<th>Non On Time</th>
											<th>Followup Required</th>
											
                                        </tr>
                                    </thead>
									
                                 
                                    <tbody>
<?php $sql = "Select feedback.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,feedback.Escalation,feedback.Non_Flexibility,feedback.Non_Productivity,feedback.Non_Pro_Active,feedback.Non_On_Time,feedback.Followup_Required,feedback.Appreciation,feedback.Flexibility,feedback.Attitude,feedback.Pro_Active,feedback.Responsibility,feedback.Time,feedback.Ownership,(feedback.Pro_Active+feedback.Responsibility+feedback.Attitude+feedback.Appreciation+feedback.Flexibility+feedback.Time+feedback.Ownership) as TotalA,(feedback.Escalation+feedback.Non_Flexibility+feedback.Non_Productivity+feedback.Non_Pro_Active+feedback.Non_On_Time+feedback.Followup_Required) as TotalE from feedback join tblemployees on feedback.empid=tblemployees.EmpId order by lid desc";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
                                        <tr>
                                            <td> <?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->EmpId);?></td>
                                            <td><a href="#?empid=<?php echo htmlentities($result->id);?>" id="myBtn">
											<?php echo htmlentities($result->FirstName);?>&nbsp;<?php echo htmlentities($result->LastName);?></td>
                                            <td><?php echo htmlentities($result->TotalA);?></td>
											<td><?php echo htmlentities($result->TotalE);?></td>
											<td><?php echo htmlentities($result->Appreciation);?></td>		
											<td><?php echo htmlentities($result->Flexibility);?></td>
											<td><?php echo htmlentities($result->Attitude);?></td>
											<td><?php echo htmlentities($result->Pro_Active);?></td>
											<td><?php echo htmlentities($result->Responsibility);?></td>
											<td><?php echo htmlentities($result->Time);?></td>
											<td><?php echo htmlentities($result->Ownership);?></td>
											<td><?php echo htmlentities($result->Escalation);?></td>
											<td><?php echo htmlentities($result->Non_Flexibility);?></td>
											<td><?php echo htmlentities($result->Non_Productivity);?></td>
											<td><?php echo htmlentities($result->Non_Pro_Active);?></td>
											<td><?php echo htmlentities($result->Non_On_Time);?></td>
											<td><?php echo htmlentities($result->Followup_Required);?></td>
											
                                        </tr>
                                         <?php $cnt++;} }?>
										 
                                    </tbody>
									
                                </table>
								
                            </div>
                        </div>
                    </div>
                </div>
				
            </main>
         
        </div>
		
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
		<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/table-data.js"></script>
        
    </body>
</html>
<?php } ?>