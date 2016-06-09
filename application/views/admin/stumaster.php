<?php  $this->load->view('include/head'); ?>
<style type="text/css">
  .edu-img-disp {
  border: 5px solid #fff;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.25);
  width:135px;
  height:135px;
  margin: 15px;
}
.photo-edit {
    font-size: 15px;
    position: relative;
    top: -42px;
}
.photo-edit-icon {
  background: none repeat scroll 0 0 #fff;
  border-radius: 50%;
  padding: 5px 8px;
}
.edu-user-profile .nav-tabs {
    border-bottom: 3px solid #00C0EF;
}

.edu-user-profile .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
   background:#00C0EF;
   color:#fff;  
}
.edu-user-profile .nav > li > a:hover, .edu-user-profile .nav > li > a:focus {
   
    border:1px solid #00C0EF;
}
.edu-profile-label {
    background: #F4F4F4;
    border-bottom: 1px solid #ddd;
    padding:12px;
    word-wrap: break-word;
}
.edu-profile-text {
    background: #fff;
    border-bottom: 1px solid #ddd;
    padding:12px;
    word-wrap: break-word;
}

.edu-profile-text:empty:before {
    content: '\00a0';
}

.edu-stu-emg-gur .form-group {
    float:right;
    margin-bottom:0;
}
.edu-emg-ct-label {
   float: left;
   font-weight: bold;
   margin-right: 5px;
   margin-top: 4px;
}
.edu-border-bottom-warning {
  border-bottom: 1px solid #f39c12;
}
.edu-profile-title-1 {
  font-size:17px;
}
.edu-pf-bg {
  background-color: #f4f4f4;
}
.edu-pf-border {
  border: 1px solid #ececf0;
  box-shadow: 0 0 6px 1px #ececf0;
}

@media (max-width: 600px) {
  .disp-doc {
    overflow: auto;
  }
}
@media (min-width: 600px) {
  .disp-doc {
    overflow: visible;
  }
}
@media (max-width: 992px) {
  .profile-data {
    padding: 0px !important;
  }
}


</style>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php  $this->load->view('include/header'); ?>


<?php  $this->load->view('include/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 302px;">
     <section class="content-header">
        <h1><i class="fa fa-user"></i> Student  <small> Profile </small></h1>
        <ul class="breadcrumb"><li><a href="<?php echo base_url() ?>admin"><i class="fa fa-home"></i>Home</a></li>
<li><a href="<?php echo base_url() ?>admin/student">Student</a></li>
<li><a href="<?php echo base_url() ?>admin/student/plist">Students List</a></li>
</ul>    </section>

   <section class="content edu-user-profile" style="min-height: 567px;">
<div class="row">
  <div class="col-lg-3 table-responsive edu-pf-border  eduArLangCss" style="margin-bottom:15px">
    <div class="col-md-12 text-center">
      <img class="img-circle edu-img-disp" src="<?php echo base_url() ?>/dist/img/no-photo.png" alt="No Image">    <div class="photo-edit">
            <a class="photo-edit-icon" href="/edu/index.php?r=student%2Fstu-master%2Fstu-photo&amp;sid=16" title="Change Profile Picture" data-toggle="modal" data-target="#photoup"><i class="fa fa-pencil"></i></a>          </div>
    </div>
    <table class="table table-striped">
      <tbody><tr>
        <th>Student ID</th>
        <td><?= $roll_no ?></td>
      </tr>
      <tr>
        <th>Name</th>
        <td><?= $first_name ?> <?=$last_name ?></td>
      </tr>
      <tr>
        <th>Course</th>
        <td><?=$course ?></td>
      </tr>
      <tr>
        <th>Degree</th>
        <td><?=$degree?></td>
      </tr>
      <tr>
        <th>Email ID</th>
        <td><?=$email_id?></td>
      </tr>
      <tr>
        <th>Mobile No</th>
        <td><?=$mobile?></td>
      </tr>
      <tr>
        <th>Status</th>
        <td>
                    <span class="label label-success"><?=$status?></span>
                  </td>
      </tr>
    </tbody></table>
  </div>

  <div class="col-lg-9 profile-data">
    <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="profileTab">
      <li class="active" id="personal-tab"><a href="#personal" data-toggle="tab" aria-expanded="true"><i class="fa fa-street-view"></i> Personal</a></li>
      <li id="academic-tab" class=""><a href="#academic" data-toggle="tab" aria-expanded="false"><i class="fa fa-graduation-cap"></i> Academic</a></li>
      <li id="guardians-tab" class=""><a href="#guardians" data-toggle="tab" aria-expanded="false"><i class="fa fa-user"></i> Guardians</a></li>
      <li id="address-tab" class=""><a href="#address" data-toggle="tab" aria-expanded="false"><i class="fa fa-home"></i> Address</a></li>
      <li id="documents-tab" class=""><a href="#documents" data-toggle="tab" aria-expanded="false"><i class="fa fa-file-text"></i> Documents</a></li>
              <li id="fees-tab" class=""><a href="#fees" data-toggle="tab" aria-expanded="false"><i class="fa fa-inr"></i> Fees</a></li>
          </ul>
     <div id="content" class="tab-content responsive hidden-xs hidden-sm">
      <div class="tab-pane active" id="personal">
        

<div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Personal Details  <div class="pull-right">
      <a id="update-data" class="btn btn-primary btn-sm" href="/edu/index.php?r=student%2Fstu-master%2Fupdate&amp;sid=16&amp;tab=personal"><i class="fa fa-pencil-square-o"></i> Edit</a>    </div>
  </h2>
  </div><!-- /.col -->
</div>

<div class="row">
  

  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Name</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$title?>&nbsp;<?=$first_name?>&nbsp;<?=$last_name?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Gender</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$gender?></div>
    </div>
  </div>



  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Date of Birth</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?php echo date("d-m-Y",strtotime($dob)); ?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Nationality</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
  </div>


  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Admission Category</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$adm_category?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Religion</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Bloodgroup</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Unknown</div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Birthplace</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>

   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Languages</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"></div>
  </div>

</div> <!---Main Row Div--->
  
      </div>
      <div class="tab-pane" id="academic">
        

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Academic Details  <div class="pull-right">
      <a id="update-data" class="btn-sm btn btn-primary text-warning" href="/edu/index.php?r=student%2Fstu-master%2Fupdate&amp;sid=16&amp;tab=academic"><i class="fa fa-pencil-square-o"></i>Edit</a>    </div>
  </h2>
  </div><!-- /.col -->
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <div class="col-md-4 col-xs-4 edu-profile-label eduArLangCss">Course</div>
  <div class="col-md-8 col-xs-8 edu-profile-text"><?=$course?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <div class="col-md-4 col-xs-4 edu-profile-label eduArLangCss">Batch</div>
  <div class="col-md-8 col-xs-8 edu-profile-text">Not Set</div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <div class="col-md-4 col-xs-4 edu-profile-label eduArLangCss">Section</div>
  <div class="col-md-8 col-xs-8 edu-profile-text"><?=$section?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12 col-md-12 col-lg-12">
  <div class="col-md-4 col-xs-4 edu-profile-label eduArLangCss">Admission Date</div>
  <div class="col-md-8 col-xs-8 edu-profile-text"><?php echo date("d-m-Y",strtotime($adm_date)); ?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <div class="col-md-4 col-xs-4 edu-profile-label eduArLangCss">Student Status</div>
  <div class="col-md-8 col-xs-8 edu-profile-text"><?=$status?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <div class="col-md-4 col-xs-4 edu-profile-label eduArLangCss">Active/InActive</div>
  <div class="col-md-8 col-xs-8 edu-profile-text">Not Set</div>
  </div>
</div>
  
      </div>
      <div class="tab-pane" id="guardians">
        
<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Guardians Details <div class="pull-right">
      <a id="update-guard-data" class="btn-sm btn btn-primary text-warning" href="/edu/index.php?r=student%2Fstu-master%2Faddguardian&amp;sid=16"><i class="fa fa-user-plus"></i> Add Guardian</a>   </div>
  </h2>
  </div><!-- /.col -->
</div>

<table width="100%" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-responsive">
  <tbody><tr>
    <th class="table-cell-title text-center" colspan="4">No Data Available</th>
  </tr>
</tbody></table>
  
      </div>
      <div class="tab-pane" id="address">
        
<div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Address Info  <div class="pull-right">
        <a id="update-data" class="btn btn-primary btn-sm" href="/edu/index.php?r=student%2Fstu-master%2Fupdate&amp;sid=16&amp;tab=address"><i class="fa fa-pencil-square-o"></i>Edit</a>    </div>
  </h2>
  </div><!-- /.col -->
</div>

<!---Start Current Address Block--->
<div class="row">
  <div class="col-xs-12">
  <h4 class="edu-border-bottom-warning page-header edu-profile-title-1">  
    Current Address </h4>
  </div><!-- /.col -->
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Address</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"></div>
    </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-md-6 col-sm-6 col-xs-6 edu-profile-label eduArLangCss">City</div>
    <div class="col-md-6 col-sm-6 col-xs-6 edu-profile-text"></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-md-6 col-xs-6 edu-profile-label eduArLangCss">State</div>
    <div class="col-md-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>

  <div class="col-md-12  col-xs-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Country</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">House No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>

  <div class="col-md-12  col-xs-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Pincode</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Phone No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div> 
 </div>

<!---Start Permenant Address Block--->
<div class="row">
  <div class="col-xs-12">
  <h4 class="edu-border-bottom-warning page-header edu-profile-title-1">  
    Permenant Address </h4>
  </div><!-- /.col -->
</div>



<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Address</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"></div>
  </div>

  <div class="col-md-12  col-xs-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">City</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">State</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>


  <div class="col-md-12  col-xs-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Country</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">House No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>

  <div class="col-md-12  col-xs-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Pincode</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Phone No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"></div>
    </div>
  </div>
</div>


  
      </div>
      <div class="tab-pane" id="documents">
        
<!---Start Permenant Address Block--->
<div class="row">
  <div class="col-xs-12">
  <h4 class="edu-border-bottom-warning page-header edu-profile-title-1">  
    <i class="fa fa-files-o"></i> Uploaded Documents  </h4>
  </div><!-- /.col -->
</div>

<div class="table-responsive disp-doc">

<table class="table table-bordered">
<tbody><tr>
  <th class="text-center"><label for="studocs-stu_docs_category_id">Category</label></th>
  <th class="text-center"><label for="studocs-stu_docs_details">Document Details</label></th>
  <th class="text-center"><label for="studocs-stu_docs_status">Status</label></th>
  <th class="text-center " style="width: 34%;">Action</th>
</tr>
<tr>
  <th class="text-center" colspan="4">No Documents Uploaded..</th>
</tr>   
</tbody></table></div>

<script>
$(document).ready(function(){
     $('input[type=file]').bootstrapFileInput();
});
</script>

<div class="col-xs-12 col-lg-12 no-padding" style="display:block">
  <div class="row">
    <div class="col-xs-12">
      <h4 class="edu-border-bottom-warning page-header edu-profile-title-1">  
    <i class="fa fa-upload"></i> Upload Remaining Documents      </h4>
    </div><!-- /.col -->
  </div>

  <div class="box-default box view-item col-xs-12 col-lg-12">
    <div class="stu-docs-form">       
  <form id="stu-docs-form" action="/edu/index.php?r=student%2Fstu-master%2Fadddocs" method="post" enctype="multipart/form-data">
<input type="hidden" name="_csrf" value="aHJiWkVvemkbIRNrPDgQWl0kBRUnKTskNwJPLjMfFh8jKhMfdjAAIA==">       <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_category_id_temp-1">
<label class="control-label" for="studocs-stu_docs_category_id_temp-1">Category</label><input type="text" id="studocs-stu_docs_category_id_temp-1" class="form-control" name="StuDocs[stu_docs_category_id_temp][1]" value="S.S.C. Marksheet" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_category_id-1 required">
<input type="hidden" id="studocs-stu_docs_category_id-1" class="form-control" name="StuDocs[stu_docs_category_id][1]" value="1">
</div>        </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_details-1">
<label class="control-label" for="studocs-stu_docs_details-1">Document Details</label><input type="text" id="studocs-stu_docs_details-1" class="form-control" name="StuDocs[stu_docs_details][1]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_stu_master_id required">
<input type="hidden" id="studocs-stu_docs_stu_master_id" class="form-control" name="StuDocs[stu_docs_stu_master_id]" value="16">
</div>        </div>

        <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
      <div class="form-group field-studocs-stu_docs_path-1">
<label class="control-label" for="studocs-stu_docs_path-1">Document</label><input type="hidden" name="StuDocs[stu_docs_path][1]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="studocs-stu_docs_path-1" name="StuDocs[stu_docs_path][1]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
        </div>

    </div>
        <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_category_id_temp-2">
<label class="control-label" for="studocs-stu_docs_category_id_temp-2">Category</label><input type="text" id="studocs-stu_docs_category_id_temp-2" class="form-control" name="StuDocs[stu_docs_category_id_temp][2]" value="H.S.C. Marksheet" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_category_id-2 required">
<input type="hidden" id="studocs-stu_docs_category_id-2" class="form-control" name="StuDocs[stu_docs_category_id][2]" value="2">
</div>        </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_details-2">
<label class="control-label" for="studocs-stu_docs_details-2">Document Details</label><input type="text" id="studocs-stu_docs_details-2" class="form-control" name="StuDocs[stu_docs_details][2]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_stu_master_id required">
<input type="hidden" id="studocs-stu_docs_stu_master_id" class="form-control" name="StuDocs[stu_docs_stu_master_id]" value="16">
</div>        </div>

        <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
      <div class="form-group field-studocs-stu_docs_path-2">
<label class="control-label" for="studocs-stu_docs_path-2">Document</label><input type="hidden" name="StuDocs[stu_docs_path][2]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="studocs-stu_docs_path-2" name="StuDocs[stu_docs_path][2]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
        </div>

    </div>
        <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_category_id_temp-3">
<label class="control-label" for="studocs-stu_docs_category_id_temp-3">Category</label><input type="text" id="studocs-stu_docs_category_id_temp-3" class="form-control" name="StuDocs[stu_docs_category_id_temp][3]" value="Leaving Certificate" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_category_id-3 required">
<input type="hidden" id="studocs-stu_docs_category_id-3" class="form-control" name="StuDocs[stu_docs_category_id][3]" value="3">
</div>        </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_details-3">
<label class="control-label" for="studocs-stu_docs_details-3">Document Details</label><input type="text" id="studocs-stu_docs_details-3" class="form-control" name="StuDocs[stu_docs_details][3]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_stu_master_id required">
<input type="hidden" id="studocs-stu_docs_stu_master_id" class="form-control" name="StuDocs[stu_docs_stu_master_id]" value="16">
</div>        </div>

        <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
      <div class="form-group field-studocs-stu_docs_path-3">
<label class="control-label" for="studocs-stu_docs_path-3">Document</label><input type="hidden" name="StuDocs[stu_docs_path][3]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="studocs-stu_docs_path-3" name="StuDocs[stu_docs_path][3]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
        </div>

    </div>
        <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_category_id_temp-4">
<label class="control-label" for="studocs-stu_docs_category_id_temp-4">Category</label><input type="text" id="studocs-stu_docs_category_id_temp-4" class="form-control" name="StuDocs[stu_docs_category_id_temp][4]" value="Bonafied Certificate" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_category_id-4 required">
<input type="hidden" id="studocs-stu_docs_category_id-4" class="form-control" name="StuDocs[stu_docs_category_id][4]" value="4">
</div>        </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_details-4">
<label class="control-label" for="studocs-stu_docs_details-4">Document Details</label><input type="text" id="studocs-stu_docs_details-4" class="form-control" name="StuDocs[stu_docs_details][4]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_stu_master_id required">
<input type="hidden" id="studocs-stu_docs_stu_master_id" class="form-control" name="StuDocs[stu_docs_stu_master_id]" value="16">
</div>        </div>

        <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
      <div class="form-group field-studocs-stu_docs_path-4">
<label class="control-label" for="studocs-stu_docs_path-4">Document</label><input type="hidden" name="StuDocs[stu_docs_path][4]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="studocs-stu_docs_path-4" name="StuDocs[stu_docs_path][4]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
        </div>

    </div>
        <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_category_id_temp-6">
<label class="control-label" for="studocs-stu_docs_category_id_temp-6">Category</label><input type="text" id="studocs-stu_docs_category_id_temp-6" class="form-control" name="StuDocs[stu_docs_category_id_temp][6]" value="Migration Certificate" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_category_id-6 required">
<input type="hidden" id="studocs-stu_docs_category_id-6" class="form-control" name="StuDocs[stu_docs_category_id][6]" value="6">
</div>        </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-studocs-stu_docs_details-6">
<label class="control-label" for="studocs-stu_docs_details-6">Document Details</label><input type="text" id="studocs-stu_docs_details-6" class="form-control" name="StuDocs[stu_docs_details][6]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-studocs-stu_docs_stu_master_id required">
<input type="hidden" id="studocs-stu_docs_stu_master_id" class="form-control" name="StuDocs[stu_docs_stu_master_id]" value="16">
</div>        </div>

        <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
      <div class="form-group field-studocs-stu_docs_path-6">
<label class="control-label" for="studocs-stu_docs_path-6">Document</label><input type="hidden" name="StuDocs[stu_docs_path][6]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="studocs-stu_docs_path-6" name="StuDocs[stu_docs_path][6]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
        </div>

    </div>
      <div class="form-group col-xs-12 col-sm-3 eduArLangCss" style="display:block;margin-top: 10px;">
    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-upload"></i>Upload</button>    </div>
  </form>    </div>
  </div>
</div>
  
      </div>
          <div class="tab-pane" id="fees">
        <!-----Start current batch fees details----->

<div class="row">
  <div class="col-xs-12">
  <h4 class="edu-border-bottom-warning page-header edu-profile-title-1">  
    <i class="fa fa-inr"></i> Current Fees Details  </h4>
  </div><!-- /.col -->
</div>

<div class="box box-solid">
    <div class="box-body table-responsive no-padding">
<div id="w0" class="grid-view"><table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th>Name</th><th>Start Date</th><th>End Date</th><th>Due Date</th><th>Fees Details</th><th>Total Amount</th><th>Total Paid Fees</th></tr>
</thead>
<tbody>
<tr data-key="2"><td>1</td><td>Tuition Fees</td><td>01-06-2015</td><td>30-06-2015</td><td>01-07-2015</td><td><ol><li>Tuition Fees-2015 (25000) </li></ol></td><td>25000</td><td>0</td></tr>
</tbody></table>
</div>    </div>
  </div>
<!-----End current batch fees details----->

<!-----Start student payment history block----->

<div class="row">
  <div class="col-xs-12">
  <h4 class="edu-border-bottom-warning page-header edu-profile-title-1">  
    <i class="fa fa-inr"></i> Student Payment History </h4>
  </div><!-- /.col -->
</div>

<div class="box box-solid">
     <div class="box-body table-responsive no-padding">
<div id="w1"><div id="w2" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th><a class="desc" href="/edu/index.php?r=student%2Fstu-master%2Fview&amp;id=16&amp;sort=fees_pay_tran_id" data-sort="fees_pay_tran_id">Receipt No.</a></th><th><a href="/edu/index.php?r=student%2Fstu-master%2Fview&amp;id=16&amp;sort=fees_pay_tran_date" data-sort="fees_pay_tran_date">Payment Date</a></th><th><a href="/edu/index.php?r=student%2Fstu-master%2Fview&amp;id=16&amp;sort=fees_pay_tran_collect_id" data-sort="fees_pay_tran_collect_id">Fees Collect Name</a></th><th><a href="/edu/index.php?r=student%2Fstu-master%2Fview&amp;id=16&amp;sort=fees_pay_tran_mode" data-sort="fees_pay_tran_mode">Payment Mode</a></th><th><a href="/edu/index.php?r=student%2Fstu-master%2Fview&amp;id=16&amp;sort=fees_pay_tran_cheque_no" data-sort="fees_pay_tran_cheque_no">Cheque No</a></th><th><a href="/edu/index.php?r=student%2Fstu-master%2Fview&amp;id=16&amp;sort=fees_pay_tran_amount" data-sort="fees_pay_tran_amount">Amount</a></th></tr>
</thead>
<tbody>
<tr><td colspan="7"><div class="empty">No fees results found.</div></td></tr>
</tbody></table>
</div></div>     </div>
</div>
<!-----End student payment history block----->
  
      </div>
        </div><div class="panel-group responsive visible-xs visible-sm" id="collapse-profileTab"><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-personal" aria-expanded="true"><i class="fa fa-street-view"></i> Personal</a></h4></div><div id="collapse-personal" class="panel-collapse collapse in" aria-expanded="true"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-academic" aria-expanded="false"><i class="fa fa-graduation-cap"></i> Academic</a></h4></div><div id="collapse-academic" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-guardians" aria-expanded="false"><i class="fa fa-user"></i> Guardians</a></h4></div><div id="collapse-guardians" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-address" aria-expanded="false"><i class="fa fa-home"></i> Address</a></h4></div><div id="collapse-address" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-documents" aria-expanded="false"><i class="fa fa-file-text"></i> Documents</a></h4></div><div id="collapse-documents" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-fees" aria-expanded="false"><i class="fa fa-inr"></i> Fees</a></h4></div><div id="collapse-fees" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div></div>
  </div>
     </div> <!---End Row Div--->
</section>
</div>
  <!-- /.content-wrapper -->

 
<?php $this->load->view('include/footer'); ?>
</body>
</html>
