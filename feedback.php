<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
// code for Inactive  employee    
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$sql = "update tblemployees set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:manageemployee.php');
}



//code for active employee
if(isset($_GET['id']))
{
$id=$_GET['id'];
$status=1;
$sql = "update tblemployees set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:manageemployee.php');
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
<?php $sql = "Select feedback.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,feedback.Escalation,feedback.Non_Flexibility,feedback.Non_Productivity,feedback.Non_Pro_Active,feedback.Non_On_Time,feedback.Followup_Required,feedback.Appreciation,feedback.Flexibility,feedback.Attitude,feedback.Pro_Active,feedback.Responsibility,feedback.Time,feedback.Ownership,(feedback.Responsibility+feedback.Attitude+feedback.Appreciation+feedback.Flexibility+feedback.Time+feedback.Ownership) as TotalA,(feedback.Escalation+feedback.Non_Flexibility+feedback.Non_Productivity+feedback.Non_Pro_Active+feedback.Non_On_Time+feedback.Followup_Required) as TotalE from feedback join tblemployees on feedback.empid=tblemployees.EmpId order by lid desc";
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
                                            <td><a href="edit.php?empid=<?php echo htmlentities($result->id);?>" target="_blank">
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