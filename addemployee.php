<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
if(isset($_POST['add']))
{
$empid=$_POST['empcode'];
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];   
$email=$_POST['email']; 
$password=md5($_POST['password']); 
$gender=$_POST['gender']; 
$dob=$_POST['dob']; 
$department=$_POST['department']; 
$address=$_POST['address']; 
$city=$_POST['city']; 
$country=$_POST['country']; 
$mobileno=$_POST['mobileno']; 
$wmobileno=$_POST['wmobileno'];
$ext=$_POST['ext'];
$bg=$_POST['bg']; 
$agile=$_POST['agile'];
$ps=$_POST['ps'];
$com=$_POST['com'];
$pay=$_POST['pay'];
$atd=$_POST['atd'];
$ben=$_POST['ben'];
$rail=$_POST['rail'];
$ptc=$_POST['ptc'];
$track=$_POST['track'];
$role=$_POST['role'];
$jl=$_POST['jl'];
$oo=$_POST['oo'];
$sc=$_POST['sc'];
$twe=$_POST['twe'];
$ijd=$_POST['ijd'];
$sa=$_POST['sa'];
$pmi=$_POST['pmi'];
$pmn=$_POST['pmn'];
$pri=$_POST['pri'];
$prn=$_POST['prn'];
$cmi=$_POST['cmi'];
$crn=$_POST['crn'];
$ia=$_POST['ia'];
$iad=$_POST['iad'];
$aa=$_POST['aa'];
$da=$_POST['da'];
$status=1;

$sql="INSERT INTO tblemployees(EmpId,FirstName,LastName,EmailId,Password,Gender,Dob,Department,Address,City,Country,Phonenumber,Wnumber,Exte,BloodGroup,Agile,peoplesoft,Compensation,Payroll,ATD,Benefits,Rail,PTC,Track,Role,Job,OO,Sub,Twe,Ijd,Space,PreviousManagerID,PreviousManagerName,PreviousReviewerID,PreviousReviewerName,CurrentManager,CurrentReviewer,Insta,Idate,Aawards,Dawards,Status) VALUES(:empid,:fname,:lname,:email,:password,:gender,:dob,:department,:address,:city,:country,:mobileno,:wmobileno,:ext,:bg,:agile,:ps,:com,:pay,:atd,:ben,:rail,:ptc,:track,:role,:jl,:oo,:sc,:twe,:ijd,:sa,:pmi,:pmn,:pri,:prn,:cmi,:crn,:ia,:iad,:aa,:da,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':wmobileno',$wmobileno,PDO::PARAM_STR);
$query->bindParam(':ext',$ext,PDO::PARAM_STR);
$query->bindParam(':bg',$bg,PDO::PARAM_STR);
$query->bindParam(':agile',$agile,PDO::PARAM_STR);
$query->bindParam(':ps',$ps,PDO::PARAM_STR);
$query->bindParam(':com',$com,PDO::PARAM_STR);
$query->bindParam(':pay',$pay,PDO::PARAM_STR);
$query->bindParam(':atd',$atd,PDO::PARAM_STR);
$query->bindParam(':ben',$ben,PDO::PARAM_STR);
$query->bindParam(':rail',$rail,PDO::PARAM_STR);
$query->bindParam(':ptc',$ptc,PDO::PARAM_STR);
$query->bindParam(':track',$track,PDO::PARAM_STR);
$query->bindParam(':twe',$twe,PDO::PARAM_STR);
$query->bindParam(':ijd',$ijd,PDO::PARAM_STR);
$query->bindParam(':role',$role,PDO::PARAM_STR);
$query->bindParam(':jl',$jl,PDO::PARAM_STR);
$query->bindParam(':oo',$oo,PDO::PARAM_STR);
$query->bindParam(':sc',$sc,PDO::PARAM_STR);
$query->bindParam(':sa',$sa,PDO::PARAM_STR);
$query->bindParam(':pmi',$pmi,PDO::PARAM_STR);
$query->bindParam(':pmn',$pmn,PDO::PARAM_STR);
$query->bindParam(':pri',$pri,PDO::PARAM_STR);
$query->bindParam(':prn',$prn,PDO::PARAM_STR);
$query->bindParam(':cmi',$cmi,PDO::PARAM_STR);
$query->bindParam(':crn',$crn,PDO::PARAM_STR);
$query->bindParam(':ia',$ia,PDO::PARAM_STR);
$query->bindParam(':iad',$iad,PDO::PARAM_STR);
$query->bindParam(':aa',$aa,PDO::PARAM_STR);
$query->bindParam(':da',$da,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Employee record added Successfully";
$empid=$_POST['empcode'];
$sql="INSERT INTO feedback(empid) VALUES(:empid)";
$query = $dbh->prepare($sql);
$query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query->execute();
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
        <title>Admin | Add Employee</title>
        
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
    <script type="text/javascript">
function valid()
{
if(document.addemp.password.value!= document.addemp.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.addemp.confirmpassword.focus();
return false;
}
return true;
}
</script>

<script>
function checkAvailabilityEmpid() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'empcode='+$("#empcode").val(),
type: "POST",
success:function(data){
$("#empid-availability").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<script>
function checkAvailabilityEmailid() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#emailid-availability").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>



    </head>
    <body>
  <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Add employee</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="addemp">
                                    <div>
                                        <h3>Employee Info</h3>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m6">
                                                        <div class="row">
     <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<fieldset>
<legend><h5>Personal Details</h5></legend>
 <div class="input-field col m6 s12">
<label for="empcode">Employee ID</label>
<input  name="empcode" id="empcode" onBlur="checkAvailabilityEmpid()" type="text" autocomplete="off" required>
<span id="empid-availability" style="font-size:12px;"></span> 
</div>

<div class="input-field col m6 s12">
<label for="birthdate">Birthdate</label>
<input id="birthdate" name="dob" type="date" class="datepicker" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="firstName">First name</label>
<input id="firstName" name="firstName" type="text" required>
</div>

<div class="input-field col m6 s12">
<label for="lastName">Last name</label>
<input id="lastName" name="lastName" type="text" autocomplete="off" required>
</div>

<div class="input-field col m6 s12">
<label for="email">Email</label>
<input  name="email" type="email" id="email" onBlur="checkAvailabilityEmailid()" autocomplete="off" required>
<span id="emailid-availability" style="font-size:12px;"></span> 
</div>

<div class="input-field col m6 s12">
<label for="phone">Mobile number</label>
<input id="phone" name="mobileno" type="tel" maxlength="10" autocomplete="off" >
 </div>
 
 <div class="input-field col m6 s12">
<label for="wmobileno">Whatsup Number</label>
<input id="wmobileno" name="wmobileno" type="tel" maxlength="10" autocomplete="off" >
 </div>
 
  <div class="input-field col m6 s12">
<label for="ext">Exte</label>
<input id="ext" name="ext" type="tel" maxlength="10" autocomplete="off" >
 </div>
 
 <div class="input-field col m6 s12">
<select  name="gender" autocomplete="off">
<option value="">Gender...</option>                                          
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>

<div class="input-field col m6 s12">
<label for="bg">Blood Group</label>
<input id="bg" name="bg" type="text" autocomplete="off" >
 </div>

<div class="input-field col m6 s12">
<label for="password">Password</label>
<input id="password" name="password" type="password" autocomplete="off" required>
</div>

<div class="input-field col m6 s12">
<label for="confirm">Confirm password</label>
<input id="confirm" name="confirmpassword" type="password" autocomplete="off" required>
</div>
 </fieldset> 
 </div>
<fieldset>
<legend><h5>Certification</h5></legend>
<div class="input-field col m6 s12">
<select  name="agile" autocomplete="off">
<option value="">Agile</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="ps" autocomplete="off">
<option value="">peoplesoft (L100)</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="com" autocomplete="off">
<option value="">Compensation (L200)</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="pay" autocomplete="off">
<option value="">Payroll (L200)</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="atd" autocomplete="off">
<option value="">ATD (L200)</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="ben" autocomplete="off">
<option value="">Benefits (L200)</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
<div class="input-field col m6 s12">
<select  name="rail" autocomplete="off">
<option value="">Rail Road</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
<div class="input-field col m6 s12">
<select  name="ptc" autocomplete="off">
<option value="">PTC</option>                                          
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</fieldset>
</div>                                           
<div class="col m6">
<div class="row"> 
<fieldset>
<legend><h5>Professional Details</h5></legend>                                        
<div class="input-field col m6 s12">
<select  name="department" autocomplete="off">
<option value="">Department...</option>
<?php $sql = "SELECT DepartmentName from tbldepartments";
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
<option value="">Track...</option>
<?php $sql = "SELECT Track_Name from tbletrack";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                                            
<option value="<?php echo htmlentities($result->Track_Name);?>"><?php echo htmlentities($result->Track_Name);?></option>
<?php }} ?>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="role" autocomplete="off">
<option value="">Role...</option>                                          
<option value="O-Ex">O-Ex</option>
<option value="PM">PM</option>
<option value="SE">SE</option>
<option value="SO-Ex">SO-Ex</option>
<option value="SPM">SPM</option>
<option value="SSE">SSE</option>
<option value="ST-Ex">ST-Ex</option>
<option value="STS-Ex">STS-Ex</option>
<option value="TA">TA</option>
<option value="TE">TE</option>
<option value="T-Ex">T-Ex</option>
<option value="TTL">TTL</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="jl" autocomplete="off">
<option value="">Job Level...</option>                                          
<option value="JL2">JL2<option>
<option value="JL3">JL3</option>
<option value="JL4">JL4</option>
<option value="JL5">JL5</option>
<option value="JL6">JL6</option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="oo" autocomplete="off">
<option value="">Onsite/Offshore...</option>                                          
<option value="Offshore">Offshore<option>
<option value="Onsite">Onsite<option>
</select>
</div>

<div class="input-field col m6 s12">
<select  name="sc" autocomplete="off">
<option value="">Sub Contractor...</option>                                          
<option value="Yes">Yes<option>
<option value="No">No<option>
</select>
</div>

<div class="input-field col m6 s12">
<label for="twe">Total Work Exp</label>
<input id="twe" name="twe" type="text" autocomplete="off" >
</div>
<div class="input-field col m6 s12">
<label for="ijd">Infy Joining Date</label>
<input id="ijd" name="ijd" type="date" class="datepicker" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="address">Location</label>
<input id="address" name="address" type="text" autocomplete="off" required>
</div>

<div class="input-field col m6 s12">
<label for="city">City/Town</label>
<input id="city" name="city" type="text" autocomplete="off" required>
 </div>
   
<div class="input-field col m6 s12">
<label for="country">Country</label>
<input id="country" name="country" type="text" autocomplete="off" required>
</div>
<div class="input-field col m6 s12">
<label for="sa">Space Allocation</label>
<input id="sa" name="sa" type="text" autocomplete="off" >
</div>
</fieldset>
<fieldset>
<legend><h5>ICount</h5></legend>
<div class="input-field col m6 s12">
<label for="pmi">Previous Manager ID</label>
<input id="pmi" name="pmi" type="text" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="pmn">Previous Manager Name</label>
<input id="pmn" name="pmn" type="text" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="pri">Previous Reviewer ID</label>
<input id="pri" name="pri" type="text" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="prn">Previous Reviewer Name</label>
<input id="prn" name="prn" type="text" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="cmi">Current Manager ID</label>
<input id="cmi" name="cmi" type="text" autocomplete="off" >
</div>

<div class="input-field col m6 s12">
<label for="crn">Current Reviewer Name</label>
<input id="crn" name="crn" type="text" autocomplete="off" >
</div>
</fieldset>
<fieldset>
<legend><h5>Awards</h5></legend> 
<div class="input-field col m6 s12">
<label for="ia">No of Insta Awards(17-18)</label>
<input id="ia" name="ia" type="text" autocomplete="off" >
</div>   

<div class="input-field col m6 s12">
<label for="iad">mmm-YY</label>
<input id="iad" name="iad" type="text" autocomplete="off" >
</div>   
<div class="input-field col m6 s12">
<label for="aa">Account level Awards</label>
<input id="aa" name="aa" type="text" autocomplete="off" >
</div>  
<div class="input-field col m6 s12">
<label for="da">DU level Awards</label>
<input id="da" name="da" type="text" autocomplete="off" >
</div>         
</fieldset>      

                                                            


                                                        
<div class="input-field col s12">
<button type="submit" name="add" onclick="return valid();" id="add" class="waves-effect waves-light btn indigo m-b-xs">ADD</button>

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