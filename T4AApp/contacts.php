<?php
session_start();
require_once './config.php';
include './header.php';
try {
   $sql = "SELECT * FROM tbl_contacts WHERE 1 AND contact_id = :cid";
   $stmt = $DB->prepare($sql);
   $stmt->bindValue(":cid", intval($_GET["cid"]));
   
   $stmt->execute();
   $results = $stmt->fetchAll();
} catch (Exception $ex) {
  echo $ex->getMessage();
}
?>

<div class="row">
  <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active"><?php echo ($_GET["m"] == "update") ? "Edit" : "Add"; ?> Entries</li>
    </ul>
</div>

  <div class="row">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo ($_GET["m"] == "update") ? "Edit" : "Add"; ?> New Entry</h3>
      </div>
      <div class="panel-body">

        <form class="form-horizontal" name="contact_form" id="contact_form" enctype="multipart/form-data" method="post" action="process_form.php">
          <input type="hidden" name="mode" value="<?php echo ($_GET["m"] == "update") ? "update_old" : "add_new"; ?>" >
          <input type="hidden" name="cid" value="<?php echo intval($results[0]["contact_id"]); ?>" >
          <input type="hidden" name="pagenum" value="<?php echo $_GET["pagenum"]; ?>" >
          <fieldset>
            <div class="form-group">
              <label class="col-lg-4 control-label" for="Vertical"><span class="required">*</span>Vertical:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["Vertical"] ?>" placeholder="Vertical" id="Vertical" class="form-control" name="Vertical"><span id="Vertical_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="Client"><span class="required">*</span>Client:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["Client"] ?>" placeholder="Client" id="Client" class="form-control" name="Client"><span id="Client_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="Conclusion"><span class="required">*</span>Conclusion:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["Conclusion"] ?>" placeholder="Conclusion" id="Conclusion" class="form-control" name="Conclusion"><span id="Conclusion_err" class="error"></span>
              </div>
            </div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label" for="email"><span class="required">*</span>Responsible Person:</label>
				<div class="col-lg-5">
					<select class="form-control" id="sel1" name="email">
					<option value="">None</option>
						<option value="fraserm@trackingforafrica.com">Fraser</option>
						<option value="hilda@trackingforafrica.com">Hilda</option>
						<option value="john@trackingforafrica.com">John</option>
						<option value="michelle@trackingforafrica.co.za">Michelle</option>
						<option value="nelial@trackingforafrica.com">Nelia</option>
						<option value="pierre@trackingforafrica.com">Pierre</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label" for="email2">Responsible Person 2:</label>
				<div class="col-lg-5">
					<select class="form-control" id="sel1" name="email2">
					<option value="">None</option>
						<option value="fraserm@trackingforafrica.com">Fraser</option>
						<option value="hilda@trackingforafrica.com">Hilda</option>
						<option value="john@trackingforafrica.com">John</option>
						<option value="michelle@trackingforafrica.co.za">Michelle</option>
						<option value="nelial@trackingforafrica.com">Nelia</option>
						<option value="pierre@trackingforafrica.com">Pierre</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label" for="email3">Responsible Person 3:</label>
				<div class="col-lg-5">
					<select class="form-control" id="sel1" name="email3">
					<option value="">None</option>
						<option value="fraserm@trackingforafrica.com">Fraser</option>
						<option value="hilda@trackingforafrica.com">Hilda</option>
						<option value="john@trackingforafrica.com">John</option>
						<option value="michelle@trackingforafrica.co.za">Michelle</option>
						<option value="nelial@trackingforafrica.com">Nelia</option>
						<option value="pierre@trackingforafrica.com">Pierre</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label" for="email4">Responsible Person 4:</label>
				<div class="col-lg-5">
					<select class="form-control" id="sel1" name="email4">
					<option value="">None</option>
						<option value="fraserm@trackingforafrica.com">Fraser</option>
						<option value="hilda@trackingforafrica.com">Hilda</option>
						<option value="john@trackingforafrica.com">John</option>
						<option value="michelle@trackingforafrica.co.za">Michelle</option>
						<option value="nelial@trackingforafrica.com">Nelia</option>
						<option value="pierre@trackingforafrica.com">Pierre</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label" for="authoremail"><span class="required">*</span>Author:</label>
				<div class="col-lg-5">
					<select class="form-control" id="sel1" name="authoremail">
					<option value="">None</option>
						<option value="fraserm@trackingforafrica.com">Fraser</option>
						<option value="hilda@trackingforafrica.com">Hilda</option>
						<option value="john@trackingforafrica.com">John</option>
						<option value="michelle@trackingforafrica.co.za">Michelle</option>
						<option value="nelial@trackingforafrica.com">Nelia</option>
						<option value="pierre@trackingforafrica.com">Pierre</option>
					</select>
				</div>
			</div>

			
			<div class="form-group">
              <label class="col-lg-4 control-label" for="Date"><span class="required">*</span>Date:</label>
              <div class="col-lg-5">
                <input type="Date" value="<?php echo $results[0]["Date"] ?>" placeholder="Allocate Date" id="Date" class="form-control" name="Date"><span id="Date_err" class="error"></span>
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-lg-4 control-label" for="Time"><span class="required">*</span>Time:</label>
              <div class="col-lg-5">
                <input type="Time" value="<?php echo $results[0]["Time"] ?>" placeholder="Allocate Time" id="Time" class="form-control" name="Time"><span id="Time_err" class="error"></span>
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-lg-4 control-label" for="Notes">Notes:</label>
              <div class="col-lg-5">
                <input type="text" value="<?php echo $results[0]["Notes"] ?>" placeholder="Notes" id="Notes" class="form-control" name="Notes"><span id="Notes_err" class="error"></span>
              </div>
            </div>
           
            
            
            <div class="form-group">
              <div class="col-lg-5 col-lg-offset-4">
                <input class="btn btn-primary" type="submit" name="submit"></input> 
              </div>
            </div>
          </fieldset>
        </form>		
      </div>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function() {
	
	// the fade out effect on hover
	$('.error').hover(function() {
		$(this).fadeOut(200);  
	});
	
	
	$("#contact_form").submit(function() {
		$('.error').fadeOut(200);  
		if(!validateForm()) {
            // go to the top of form first
            $(window).scrollTop($("#contact_form").offset().top);
			return false;
		}     
		return true;
    });

});

function validateForm() {
	 var errCnt = 0;
	 
	 var Vertical = $.trim( $("#Vertical").val());
     var Client = $.trim( $("#Client").val());
	 var email_id = $.trim( $("#Conclusion").val());
	 var Responsible_Person = $.trim( $("#Responsible_Person").val());
	 var Responsible_PersonsEmail = $.trim( $("#Responsible_PersonsEmail").val());
	 var AuthorsEmail = $.trim( $("#AuthorsEmail").val());
	 var address = $.trim( $("#Notes").val());
     

	// validate name
	if (Vertical == "" ) {
		$("#Vertical_err").html("Enter your Query.");
		$('#Vertical_err').fadeIn("fast"); 
		errCnt++;
	}  else if (Vertical.length <= 2 ) {
		$("#Vertical_err").html("Do not leave blank.");
		$('#Vertical_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (Client == "" ) {
		$("#Client_err").html("Enter Client name.");
		$('#Client_err').fadeIn("fast"); 
		errCnt++;
	}  else if (Clients.length <= 2 ) {
		$("#Client_err").html("Do not leave blank.");
		$('#Client_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (!isValidEmail(email_id)) {
		$("#email_id_err").html("Enter conclusion.");
		$('#email_id_err').fadeIn("fast"); 
		errCnt++;
	}
    
    if (Responsible_Person == "" ) {
		$("#Responsible_Person_err").html("Enter first contact number.");
		$('#Responsible_Person_err').fadeIn("fast"); 
		errCnt++;
	}  else if (Responsible_Person.length <= 9 || Responsible_Person.length > 10 ) {
		$("#Responsible_Person_err").html("Enter 10 digits only.");
		$('#Responsible_Person_err').fadeIn("fast"); 
		errCnt++;
	} else if ( !$.isNumeric(Responsible_Person) ) {
		$("#Responsible_Person_err").html("Must be digits only.");
		$('#Responsible_Person_err').fadeIn("fast"); 
		errCnt++;
	}
	
	if (!isValidEmail(email_id)) {
		$("#Responsible_PersonsEmail_err").html("Enter Responsible Person Email.");
		$('#Responsible_PersonsEmail_err').fadeIn("fast"); 
		errCnt++;
	}
    
    
	if(errCnt > 0) return false; else return true;
}

function isValidEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
<?php
include './footer.php';
?>