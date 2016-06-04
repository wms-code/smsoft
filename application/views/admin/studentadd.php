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
        <ul class="breadcrumb"><li><a href="/"><i class="fa fa-home"></i>Home</a></li>
<li><a href="/student/default/index">Student</a></li>
<li><a href="/student/stu-master/index">Student List</a></li>
<li class="active">Create New Student</li>
</ul>    </section>

    <section class="content">
                
<div class="box box-primary">
  



<div class="box-body">

    <form id="stu-master-form" action="" method="post">
    <h2 class="page-header edusec-page-header-1">
    <i class="fa fa-info-circle"></i> Personal Details  </h2>
    
    <div class="row">
      <div class="col-sm-4 col-xs-9">
        <div class="form-group field-stuinfo-stu_unique_id required">
<label class="control-label" for="stuinfo-stu_unique_id">Student ID</label>
<input type="text" id="stuinfo-stu_unique_id" class="form-control" name="" value="01" readonly="">

<div class="help-block"></div>
</div>      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_title">
<label class="control-label" for="stuinfo-stu_title">Title</label>
<select id="stuinfo-stu_title" class="form-control" name="StuInfo[stu_title]">
<option value="">---Select Title ---</option>
<option value="Mr.">Mr.</option>
<option value="Mrs.">Mrs.</option>
<option value="Ms.">Ms.</option>
</select>

<div class="help-block"></div>
</div>      </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">Name</label>
<input type="text" id="stuinfo-stu_first_name" class="form-control" name="StuInfo[stu_first_name]" style="cursor: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">

<div class="help-block"></div>
</div>      </div>
      <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Middle Name</label>
<input type="text" id="stuinfo-stu_middle_name" class="form-control" name="StuInfo[stu_middle_name]">

<div class="help-block"></div>
</div>      </div>
      <div class="col-sm-4">
        <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Last Name</label>
<input type="text" id="stuinfo-stu_last_name" class="form-control" name="StuInfo[stu_last_name]">

<div class="help-block"></div>
</div>    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Gender</label>
<select id="stuinfo-stu_gender" class="form-control" name="StuInfo[stu_gender]">
<option value="">--- Select Gender ---</option>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>
</select>

<div class="help-block"></div>
</div>    </div>
    <div class="col-sm-4">
      <div class="form-group field-stuinfo-stu_email_id required">
<label class="control-label" for="stuinfo-stu_email_id">Email ID</label>
<input type="text" id="stuinfo-stu_email_id" class="form-control" name="StuInfo[stu_email_id]" maxlength="60">

<div class="help-block"></div>
</div>    </div>
    <div class="col-sm-4">
      <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mobile No</label>
<input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="StuInfo[stu_mobile_no]" maxlength="12">

<div class="help-block"></div>
</div>    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Date of Birth</label>
<input type="date" id="stuinfo-stu_dob" class="form-control hasDatepicker" name="StuInfo[stu_dob]" size="10">


<div class="help-block"></div>
</div>    </div>
    <div class="col-sm-4">
      <div class="form-group field-stumaster-stu_master_category_id">
<label class="control-label" for="stumaster-stu_master_category_id">Admission Category</label>
<select id="stumaster-stu_master_category_id" class="form-control" name="StuMaster[stu_category_id]">
<option value="">---Select Category---</option>
<option value="1">NTSF</option>
<option value="2">OBC</option>
<option value="3">NRI</option>
<option value="4">OPEN</option>
<option value="5">ST</option>
</select>

<div class="help-block"></div>
</div>    </div>
    <div class="col-sm-4">
      <div class="form-group field-stumaster-stu_master_nationality_id">
<label class="control-label" for="stumaster-stu_master_nationality_id">Nationality</label>
<select id="stumaster-stu_master_nationality_id" class="form-control" name="StuMaster[stu_nationality_id]">
<option value="">---Select Nationality---</option>
<option value="1">Indian</option>
<option value="2">American</option>
<option value="3">Australian</option>
<option value="4">Other</option>
</select>

<div class="help-block"></div>
</div>    </div>
  </div>
  
  <h2 class="page-header edusec-page-header-1">
    <i class="fa fa-info-circle"></i> Academic Details  </h2>
  
  <div class="row">

    <div class="col-sm-4">
            <div class="form-group field-stumaster-stu_master_academic_year_id required">
<label class="control-label" for="stumaster-stu_master_academic_year_id">Academic Year</label>
<select id="stumaster-stu_master_academic_year_id" class="form-control" name="StuMaster[stu_academic_year_id]" onchange="$.get( &quot;/dependent/get-academic-courses&quot;, { yid : $(this).val() })
          .done(function(data) {
            $( &quot;#stumaster-stu_master_course_id&quot;).html(data);
        });">
<option value="">---Select Academic Year---</option>
<option value="4" selected="">2016 Summer Intake</option>
<option value="3">2017-18</option>
<option value="2">2016-17</option>
<option value="1">2015-16</option>
</select>

<div class="help-block"></div>
</div>    </div>
    <div class="col-sm-4">
      <div class="form-group field-stumaster-stu_master_course_id required">
<label class="control-label" for="stumaster-stu_master_course_id">Course</label>
<select id="stumaster-stu_master_course_id" class="form-control" name="StuMaster[stu_course_id]" onchange="$.get( &quot;/dependent/get-academic-section&quot;, { cid : $(this).val() })
          .done(function(data) {
            $( &quot;#stumaster-stu_master_section_id&quot;).html(data);
        });">
<option value="">--Select Course--</option>
<option value="6">Master of Business Application</option>
</select>

<div class="help-block"></div>
</div>    </div>

    <div class="col-sm-4">
      <div class="form-group field-stumaster-stu_master_section_id required">
<label class="control-label" for="stumaster-stu_master_section_id">Section</label>
<select id="stumaster-stu_master_section_id" class="form-control" name="StuMaster[stu_section_id]">
<option value="">---Select Section---</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select>

<div class="help-block"></div>
</div>    </div>
  </div>

    <div class="row">
      <div class="col-sm-4">
      <div class="form-group field-stuinfo-stu_admission_date required">
<label class="control-label" for="stuinfo-stu_admission_date">Admission Date</label>
<input type="date" id="stuinfo-stu_admission_date" class="form-control hasDatepicker" name="StuInfo[stu_admission_date]" size="10">


<div class="help-block"></div>
</div>    </div>
  </div>
</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary btn-create">Create</button>  <a class="btn btn-default btn-create" href="/student/stu-master/index">Cancel</a></div><!-- /.box-footer-->

</div>
  </form>
    </section>
</div>
  <!-- /.content-wrapper -->

 
<?php  include('include/footer.php') ?>
</body>
</html>
