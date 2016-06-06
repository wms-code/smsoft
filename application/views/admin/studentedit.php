<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <?php $this->load->view('admin/include/head'); ?>

<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');

    });
</script>
</head>
<body>

<?php $this->load->view('admin/studentlist'); ?>
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
 
<?php foreach($query->result() as $row)  ?>
<div class="box-body">

    <form id="stu-master-form" action="" method="post">
    
    <div class="row">
      <div class="col-md-4">
      <div class="form-group">
      <label>Student Roll / Admission No</label>
      <input type="text" class="form-control" name="roll_no" value="<?=$row->roll_no?>" readonly>
      <div class="help-block"></div>
      </div>      
    </div>

      
    </div>
    
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Title</label>
            <select name="title" class="form-control">
            <option value="<?=$row->title?>"><?=$row->title?></option>
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
      <input type="text" class="form-control" name="first_name" value="<?=$row->first_name?>">
      <div class="help-block"></div>
      </div> 
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label>Student Middle Name</label>
      <input type="text" class="form-control" name="middle_name" value="<?=$row->middle_name?>">
      <div class="help-block"></div>
      </div> 
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label>Student Last Name</label>
      <input type="text" class="form-control" name="last_name" value="<?=$row->last_name?>">
      <div class="help-block"></div>
      </div> 
      </div>
  </div>
  
  <div class="row">

    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Gender</label>
            <select name="gender" class="form-control">
            <option value="<?=$row->gender?>"><?=$row->gender?></option>
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
      <input type="text" class="form-control" name="email_id" value="<?=$row->email_id?>">
      <div class="help-block"></div>
      </div> 
    </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Mobile No</label>
      <input type="text" class="form-control" name="mobile" value="<?=$row->mobile?>">
      <div class="help-block"></div>
      </div> 
    </div>

  </div>
  
  <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control" value="<?=$row->dob?>">
            <div class="help-block"></div>
          </div>      
      </div>


    

  </div>
  <h2 class="page-header edusec-page-header-1"><i class="fa fa-info-circle"></i> Academic Details  </h2>
  
  <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Admission Category</label>
            <select name="adm_category" class="form-control">
            <option value="<?=$row->adm_category?>"><?=$row->adm_category?></option>
            <option value="Counselling">Counselling</option>
            <option value="Merit">Merit</option>
            <option value="Management">Management</option>
            <option value="Others">Others</option>
            </select>
            <div class="help-block"></div>
          </div>      
      </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Course</label>
      <input type="text" class="form-control" name="course" value="<?=$row->course?>">
      <div class="help-block"></div>
      </div> 
    </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Section</label>
      <input type="text" class="form-control" name="section" value="<?=$row->section?>">
      <div class="help-block"></div>
      </div> 
    </div>

  </div>
    <div class="row">
    <div class="col-md-4">
      <div class="form-group">
      <label>Admission Date</label>
      <input type="date" class="form-control" name="adm_date" value="<?=$row->adm_date?>">
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
</body>
<?php $this->load->view('admin/include/footer'); ?>
</html>