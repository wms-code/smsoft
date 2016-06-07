<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Edit</title>
  <?php $this->load->view('admin/studentlist'); ?>

<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');

    });
</script>
</head>
<body>


<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-info-circle"></i> Personal Details</h4>
        </div>
        <div class="modal-body">
          
<section class="content">
 

<div class="box-body">

    <form id="stu-master-form" action="" method="post">
    
    <div class="row">
      <div class="col-md-4">
      <div class="form-group">
      <label>Roll / Admission No</label>
      <input type="text" class="form-control" name="roll_no">
      <div class="help-block"></div>
      </div>      
    </div>

  
      <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Title</label>
            <select name="title" class="form-control">
            <option value="">---Select---</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
            </select>
            <div class="help-block"></div>
          </div>      
      </div>
  </div>
  
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
      <label>Student First Name</label>
      <input type="text" class="form-control" name="first_name">
      <div class="help-block"></div>
      </div> 
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label>Student Last Name</label>
      <input type="text" class="form-control" name="last_name">
      <div class="help-block"></div>
      </div> 
      </div>

      <div class="col-md-4">
      <div class="form-group">
     <label>Mobile No</label>
      <input type="text" class="form-control" name="mobile">
      <div class="help-block"></div>
      </div> 
      </div>
  </div>
  
  <div class="row">

    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Gender</label>
            <select name="gender" class="form-control">
            <option value="">---Select---</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Transgender">Transgender</option>
            </select>
            <div class="help-block"></div>
          </div>      
      </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Email ID</label>
      <input type="text" class="form-control" name="email_id">
      <div class="help-block"></div>
      </div> 
    </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Date of Birth</label>
      <input type="date" name="dob" class="form-control">
      <div class="help-block"></div>
      </div> 
    </div>

  </div>
  
 
  <h2 class="page-header edusec-page-header-1"><i class="fa fa-info-circle"></i> Admission Details  </h2>
  
  <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Admission Category</label>
            <select name="adm_category" class="form-control">
            <option value="">---Select---</option>
            <?php foreach($adm->result() as $adm1) { ?>
            <option value="<?=$adm1->adm_category?>"><?=$adm1->adm_category?></option> 
            <?php } ?>
            </select>
            <div class="help-block"></div>
          </div>      
      </div>

    <div class="col-md-4">
      <div class="form-group">
      <label>Admission Date</label>
      <input type="date" class="form-control" name="adm_date">
      <div class="help-block"></div>
      </div> 
    </div>

<div class="col-md-4">
      <div class="form-group">
      <label>Entry Level</label>
      <select name="entry_level" class="form-control">
        <option value="">---Select---</option>
        <?php foreach($entrys->result() as $entrys1) { ?>
        <option value="<?=$entrys1->entry_level?>"><?=$entrys1->entry_level?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>

  </div>

    <div class="row">

    <div class="col-md-4">
      <div class="form-group">
      <label>Degree</label>
      <select name="degree" class="form-control">
        <option value="">---Select---</option>
        <?php foreach($degr->result() as $degre) { ?>
        <option value="<?=$degre->degree_name?>"><?=$degre->degree_name?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>

    <div class="col-md-4">
      <div class="form-group">
      <label>Department</label>
      <select name="course" class="form-control">
        <option value="">---Select---</option>
        <?php foreach($cours->result() as $course) { ?>
        <option value="<?=$course->course_name?>"><?=$course->course_name?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Section</label>
      <input type="text" class="form-control" name="section">
      <div class="help-block"></div>
      </div> 
    </div>
    </div>

<h2 class="page-header edusec-page-header-1"><i class="fa fa-info-circle"></i> Fees Details  </h2>
  
  <div class="row">
<?php foreach($fees->result() as $fee)  ?>
    <div class="col-md-4">
      <div class="form-group">
      <label>College Fees</label>
      <input type="text" class="form-control" name="college_fee">
      <div class="help-block"></div>
      </div> 
    </div>

    <div class="col-md-4">
      <div class="form-group">
      <label>Transport Fees</label>
      <input type="text" class="form-control" name="transport_fee">
      <div class="help-block"></div>
      </div> 
    </div>

    <div class="col-md-4">
      <div class="form-group">
      <label>Hostel Fees</label>
      <input type="text" class="form-control" name="hostel_fee">
      <div class="help-block"></div>
      </div> 
    </div>

  </div>

<div class="row">

    <div class="col-md-4">
      <div class="form-group">
      <label>Tution Fees</label>
      <input type="text" class="form-control" name="tution_fee">
      <div class="help-block"></div>
      </div> 
    </div>

    <div class="col-md-4">
      <div class="form-group">
      <label>Others Fees</label>
      <input type="text" class="form-control" name="fee" placeholder="specify the category">
      <div class="help-block"></div>
      </div> 
    </div>

    <div class="col-md-4">
      <div class="form-group"><label>&nbsp;</label>
       <input type="text" class="form-control" name="other_fee">
      <div class="help-block"></div>
      </div> 
    </div>
    
  </div>


  
    </section>


        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary btn-create" name="submit"></div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</form>

</html>