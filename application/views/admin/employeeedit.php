<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Edit</title>
  <?php $this->load->view('admin/employeelist'); ?>

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
<?php foreach($query1->result() as $row)  ?>
    <form id="stu-master-form" action="" method="post">
    
    <div class="row">
      <div class="col-md-4">
      <div class="form-group">
      <label>Employee ID</label>
      <input type="text" class="form-control" name="emp_id" value="<?=$row->emp_id?>" readonly>
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
  
    <div class="col-md-4">
      <div class="form-group">
      <label>Employee First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?=$row->first_name?>">
      <div class="help-block"></div>
      </div> 
      </div>

      <!--<div class="col-md-4">
      <div class="form-group">
      <label>Employee Middle Name</label>
      <input type="text" class="form-control" name="middle_name" value="<?=$row->middle_name?>">
      <div class="help-block"></div>
      </div> 
      </div> -->

      <div class="col-md-4">
      <div class="form-group">
      <label>Employee Last Name</label>
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


    <div class="col-md-4">
      <div class="form-group">
      <label>Marital Status</label>
      <select name="marital_status" class="form-control" >
      <option value="<?=$row->marital_status?>"><?=$row->marital_status?></option>
      <option value="Married">Married</option>
      <option value="Un Married">Un Married</option>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>


  </div>
  <div class="row">

    



   
    <div class="col-md-12">
      <div class="form-group">
      <label>Address</label>
     <textarea class="form-control" name="address"><?=$row->address?></textarea> 
      <div class="help-block"></div>
      </div> 
    </div>

  </div>


    <div class="row">

    <div class="col-md-4">
      <div class="form-group">
      <label>City</label>
      <input type="text" class="form-control" name="city" value="<?=$row->city?>">
      <div class="help-block"></div>
      </div> 
    </div>

   

    <div class="col-md-4">
      <div class="form-group">
      <label>Country</label>
      <select name="country" class="form-control">
        <option value="<?=$row->country?>"><?=$row->country?></option>
        <?php foreach($countr->result() as $country) { ?>
        <option value="<?=$country->country_name?>"><?=$country->country_name?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>

     <div class="col-md-4">
      <div class="form-group">
      <label>Nationality</label>
      <select name="nationality_name" class="form-control">
        <option value="<?=$row->nationality_name?>"><?=$row->nationality_name?></option>
        <?php foreach($nation->result() as $nationality) { ?>
        <option value="<?=$nationality->nationality_name?>"><?=$nationality->nationality_name?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>

    </div>
  <h2 class="page-header edusec-page-header-1"><i class="fa fa-info-circle"></i> Appointment Details  </h2>
  
  <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Appointment Category</label>
            <select name="app_category" class="form-control">
            <option value="<?=$row->app_category?>"><?=$row->app_category?></option>
            <?php foreach($appoint->result() as $appointment) { ?>
            <option value="<?=$appointment->app_category?>"><?=$appointment->app_category?></option> 
            <?php } ?>
            </select>
            <div class="help-block"></div>
          </div>      
      </div>

    <div class="col-md-4">
      <div class="form-group">
      <label>Appointment Date</label>
      <input type="date" class="form-control" name="app_date" value="<?=$row->app_date?>">
      <div class="help-block"></div>
      </div> 
    </div>

 <div class="col-md-4">
      <div class="form-group">
      <label>Experience</label>
      <input type="text" class="form-control" name="experience" value="<?=$row->experience?>">
      <div class="help-block"></div>
      </div> 
    </div>


  </div>

    <div class="row">

    <div class="col-md-4">
      <div class="form-group">
      <label>Degree</label>
      <select name="degree" class="form-control">
        <option value="<?=$row->degree?>"><?=$row->degree?></option>
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
        <option value="<?=$row->course?>"><?=$row->course?></option>
        <?php foreach($cours->result() as $course) { ?>
        <option value="<?=$course->course_name?>"><?=$course->course_name?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>
    
    <div class="col-md-4">
      <div class="form-group">
      <label>Designation</label>
      <select name="designation" class="form-control">
        <option value="<?=$row->designation?>"><?=$row->designation?></option>
        <?php foreach($design->result() as $designation) { ?>
        <option value="<?=$designation->entry_level?>"><?=$designation->entry_level?></option> 
        <?php } ?>
      </select>
      <div class="help-block"></div>
      </div> 
    </div>
    
    

    </div>











  
  <div class="row">

   

    <div class="col-md-4">
      <div class="form-group">
      <label>Salary</label>
      <input type="text" class="form-control" name="salary" value="<?=$row->salary?>">
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