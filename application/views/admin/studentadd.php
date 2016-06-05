<?php  include('include/head.php') ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php  include('include/header.php') ?>


<?php  include('include/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 302px;">
    <section class="content-header">
        <h1>
            <i class="fa fa-plus-square"></i> Create <small> New Student </small>        </h1>
        <ul class="breadcrumb"><li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
<li><a href="<?php echo base_url() ?>">Student</a></li>
<li><a href="<?php echo base_url() ?>admin/student/list">Student List</a></li>
<li class="active"><a href="<?php echo base_url() ?>admin/student/create">Create New Student</a></li>
</ul>    </section>

    <section class="content">
                
<div class="box box-primary">
  



<div class="box-body">

    <form id="stu-master-form" action="" method="post">
    <h2 class="page-header edusec-page-header-1">
    <i class="fa fa-info-circle"></i> Personal Details  </h2>
    
    <div class="row">
      <div class="col-md-4">
      <div class="form-group">
      <label>Student Roll / Admission No</label>
      <input type="text" class="form-control" name="roll_no">
      <div class="help-block"></div>
      </div>      
    </div>

      
    </div>
    
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Title</label>
            <select name="title" class="form-control">
            <option value="">---Select Title ---</option>
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
      <label>Student Middle Name</label>
      <input type="text" class="form-control" name="middle_name">
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
  </div>
  
  <div class="row">

    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Gender</label>
            <select name="gender" class="form-control">
            <option value="">---Select Gender ---</option>
            <option value="Mr.">Male</option>
            <option value="Mrs.">Female</option>
            <option value="Ms.">Transgender</option>
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
      <label>Mobile No</label>
      <input type="text" class="form-control" name="mobile">
      <div class="help-block"></div>
      </div> 
    </div>

  </div>
  
  <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control">
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
            <option value="">---Select Category ---</option>
            <option value="Mr.">Counselling</option>
            <option value="Mrs.">Merit</option>
            <option value="Ms.">Management</option>
            <option value="Ms.">Others</option>
            </select>
            <div class="help-block"></div>
          </div>      
      </div>


    <div class="col-md-4">
      <div class="form-group">
      <label>Course</label>
      <input type="text" class="form-control" name="course">
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
    <div class="row">
    <div class="col-md-4">
      <div class="form-group">
      <label>Admission Date</label>
      <input type="date" class="form-control" name="adm_date">
      <div class="help-block"></div>
      </div> 
    </div>
    </div>
  </div>

<div class="box-footer">
    <input type="submit" class="btn btn-primary btn-create" name="submit"></div><!-- /.box-footer-->

</div>
  </form>
    </section>
</div>
  <!-- /.content-wrapper -->

 
<?php  include('include/footer.php') ?>
</body>
</html>
