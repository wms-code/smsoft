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


<section class="content" style="min-height: 567px;">
        <!----------------------------------------------------------------------->
<section class="content-header">
<div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
    <i class="fa fa-user"></i> Employee Profile   <div class="pull-right">
            <a id="export-pdf" class="btn-sm btn btn-warning" href="/index.php?r=employee%2Fexport-data%2Femployee-profile-pdf&amp;eid=17" target="blank"><i class="fa fa-file-pdf-o"></i> Generate PDF</a>        </div>
  </h2>
  </div><!-- /.col -->
</div>
</section>

<section class="content edu-user-profile" style="min-height: 567px;">
<div class="row">
  <div class="col-md-3 table-responsive edu-pf-border no-padding eduArLangCss" style="margin-bottom:15px">
    <div class="col-md-12 text-center">
      <img class="img-circle edu-img-disp" src="<?php echo base_url() ?>dist/img/emp-no-photo.png" alt="No Image">    <div class="photo-edit">
            <a class="photo-edit-icon" href="/index.php?r=employee%2Femp-master%2Femp-photo&amp;eid=17" title="Change Profile Picture" data-toggle="modal" data-target="#basicModal"><i class="fa fa-pencil"></i></a>          </div>
    </div>
    <table class="table table-striped">
      <tbody><tr>
        <th>Employee ID</th>
        <td><?=$emp_id ?></td>
      </tr>
      <tr>
        <th>Name</th>
        <td> <?= $first_name?> <?= $last_name?></td>
      </tr>
      <tr>
        <th>Department</th>
        <td><?= $course?></td>  
      </tr>
      <tr>
        <th>Designation</th>
        <td><?= $designation?></td>     
      </tr>
      <tr>
        <th>Category</th>
        <td><?= $app_category?></td>    
      </tr>
      <tr>
        <th><label for="empinfo-emp_mobile_no">Mobile No</label></th>
        <td><?= $mobile?></td>
      </tr> 
      <tr>
        <th><label for="empinfo-emp_email_id">Email ID</label></th>
        <td><?= $email_id?></td>
      </tr>
      <tr>
        <th>Status</th>
        <td>
                    <span class="label label-success"><?= $status?> </span>
                  </td>
      </tr>
    </tbody></table>
  </div>

  <div class="col-md-9 profile-data">
    <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="profileTab">
      <li class="active" id="personal-tab"><a href="#personal" data-toggle="tab" aria-expanded="true"><i class="fa fa-street-view"></i> Personal</a></li>
      <li id="guardians-tab" class=""><a href="#guardians" data-toggle="tab" aria-expanded="false"><i class="fa fa-user"></i> Guardians</a></li>
      <li id="address-tab" class=""><a href="#address" data-toggle="tab" aria-expanded="false"><i class="fa fa-home"></i> Address</a></li>
      <li id="academic-tab" class=""><a href="#otherinfo" data-toggle="tab" aria-expanded="false"><i class="fa fa-cogs"></i>
 Other Info</a></li>
      <li id="documents-tab" class=""><a href="#documents" data-toggle="tab" aria-expanded="false"><i class="fa fa-file-text"></i> Documents</a></li>
    </ul>
     <div id="content" class="tab-content responsive hidden-xs hidden-sm">
      <div class="tab-pane active" id="personal">
        <div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Personal Details  <div class="pull-right">
      <a id="update-data" class="btn btn-primary btn-sm" href="/index.php?r=employee%2Femp-master%2Fupdate&amp;empid=17&amp;tab=personal"><i class="fa fa-pencil-square-o"></i> Edit</a></div>
      </h2>
  </div><!-- /.col -->
</div>


<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Title</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"><?= $title?></div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
       <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">First Name</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?= $first_name?></div>
       </div>
       <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Last Name</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?= $last_name?></div>
       </div>
   </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Middle Name</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?= $middle_name?></div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Name Alias</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
    
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Joining Date</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text">Not</div>
      </div>
       <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row"> 
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Emp Date of Birth</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?php echo date("d-m-Y",strtotime($dob)); ?></div>
      </div>
    
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Gender</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?= $gender?></div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Birth Place</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Department</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$course?></div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Designation</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Category</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$app_category?></div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Total Experience</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$experience?></div>
    
      </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Blood Group</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Marital Status</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$marital_status?></div>
      </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Nationality</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$nationality_name?></div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edu-bg-row">
      <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Religion</div>
      <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
  </div>

</div> <!---Main Row Div--->
  
      </div>
      <div class="tab-pane" id="guardians">
        <div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Guardian Info   <div class="pull-right"><a id="update-data" class="btn btn-primary btn-sm" href="/index.php?r=employee%2Femp-master%2Fupdate&amp;empid=17&amp;tab=guardians"><i class="fa fa-pencil-square-o"></i> Edit</a></div>
    </h2>
  </div><!-- /.col -->
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Full Name</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"><?=$first_name?></div>
  </div>
  
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Qualification</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text">Not Set</div>
  </div>

  <div class="col-md-12  col-xs-12 col-sm-12">
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Relation</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Occupation</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not set</div>
      </div>
  </div>

  <div class="col-md-12  col-xs-12 col-sm-12">
     <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
         <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Total Income</div>
         <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Mobile No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$mobile?></div>
      </div>
  </div>
  <div class="col-md-12  col-xs-12 col-sm-12">
     <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
         <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Phone No</div>
         <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Email ID</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$email_id?></div>
      </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Office Address</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text">Not Set</div>

  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Home Address</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"><?=$address?></div>

  </div>

</div>


  
      </div>
      <div class="tab-pane" id="address">
        <div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
    <i class="fa fa-info-circle"></i> Address Info          <div class="pull-right"><a id="update-data" class="btn btn-primary btn-sm" href="/index.php?r=employee%2Femp-master%2Fupdate&amp;empid=17&amp;tab=address"><i class="fa fa-pencil-square-o"></i>Edit</a></div>

        
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
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"><?=$address?></div>
    </div>

   <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-md-6 col-sm-6 col-xs-6 edu-profile-label eduArLangCss">City/Town</div>
    <div class="col-md-6 col-sm-6 col-xs-6 edu-profile-text"><?=$city?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-md-6 col-xs-6 edu-profile-label eduArLangCss">State/Province</div>
    <div class="col-md-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Country</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$country?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">House No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">2Not Set</div>
    </div>
  </div>
  
  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Pincode</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Phone No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
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
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text"><?=$address?></div>

  </div>
  <div class="col-md-12  col-xs-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">City/Town</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$city?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">State/Province</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
  </div>
  
  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Country</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text"><?=$country?></div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">House No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
  </div>

  <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Pincode</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Phone No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
    </div>
  </div>
</div>

  
      </div>
      <div class="tab-pane" id="otherinfo">
        <div class="row">
  <div class="col-xs-12">
  <h2 class="page-header">  
  <i class="fa fa-info-circle"></i> Other Info    <div class="pull-right"><a id="update-data" class="btn btn-primary btn-sm" href="/index.php?r=employee%2Femp-master%2Fupdate&amp;empid=17&amp;tab=otherinfo"><i class="fa fa-pencil-square-o"></i> Edit</a></div>
    </h2>
  </div><!-- /.col -->
</div>

<div class="row">
  <div class="col-md-12  col-xs-12">
     <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Attendance Card ID</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Bank Account No</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
  </div>
  <div class="col-md-12  col-xs-12">
     <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Mother Name</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
     </div>
     <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
    <div class="col-lg-6 col-xs-6 edu-profile-label eduArLangCss">Reference</div>
    <div class="col-lg-6 col-xs-6 edu-profile-text">Not Set</div>
      </div>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Specialization</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text">Not Set</div>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Languages</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text">Not Set</div>
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-3 col-sm-3 col-xs-6 edu-profile-label eduArLangCss">Hobbies</div>
    <div class="col-md-9 col-sm-9 col-xs-6 edu-profile-text">Not Set</div>
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
  <th class="text-center"><label for="empdocs-emp_docs_category_id">Category</label></th>
  <th class="text-center"><label for="empdocs-emp_docs_details">Document Details</label></th>
  <th class="text-center"><label for="empdocs-emp_docs_status">Status</label></th>
  <th class="text-center " style="width: 34%;">Action</th>
</tr>
<tr>
  <td class="text-center">S.S.C. Marksheet</td>
  <td class="text-center"></td>
    <td class="text-center">    <span class="label label-info">Pendding</span>
      </td>

     <td class="text-center ">
  <div class="col-lg-12 no-padding">
    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4 no-padding">
    <div class="dropdown" style="width:100%">
      <button class="btn-block btn-sm btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        Action        <span class="caret"></span>
      </button>

      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation" style=""><a class="btn btn-success btn-block" href="/index.php?r=employee%2Femp-master%2Fchange-status&amp;emp_doc=23&amp;eid=17&amp;d_status=APPROVED" role="menuitem">Approved</a></li>
        <li role="presentation" style=""><a class="btn btn-warning btn-block" href="/index.php?r=employee%2Femp-master%2Fchange-status&amp;emp_doc=23&amp;eid=17&amp;d_status=DISAPPROVED" role="menuitem">Disapproved</a></li>  

      </ul>
        </div>
  </div>
    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4 no-padding">
    <a class="btn-sm btn btn-block btn-primary" href="/index.php?r=employee%2Femp-master%2Fdocs-download&amp;emp_doc_id=23" title="" data-method="post"><span class="glyphicon glyphicon-download"></span></a> </div>
    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4 no-padding">
    <a class="btn-sm btn btn-danger btn-block" href="/index.php?r=employee%2Femp-master%2Fdelete-doc&amp;emp_doc_id=23" data-confirm="Are you sure you want to delete this item?" data-method="post"><i class="fa fa-trash-o"></i> Delete</a>    </div>
  </div>
    </td>

</tr> 
<tr>
  <td class="text-center">H.S.C. Marksheet</td>
  <td class="text-center">12th Marksheet</td>
    <td class="text-center">    <span class="label label-success">Approved</span>
          </td>

     <td class="text-center ">
  <div class="col-lg-12 no-padding">
    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4 no-padding">
    <div class="dropdown" style="width:100%">
      <button class="btn-block btn-sm btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        Action        <span class="caret"></span>
      </button>

      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation" style="display:none"><a class="btn btn-success btn-block" href="/index.php?r=employee%2Femp-master%2Fchange-status&amp;emp_doc=24&amp;eid=17&amp;d_status=APPROVED" role="menuitem">Approved</a></li>
        <li role="presentation" style="display:block"><a class="btn btn-warning btn-block" href="/index.php?r=employee%2Femp-master%2Fchange-status&amp;emp_doc=24&amp;eid=17&amp;d_status=DISAPPROVED" role="menuitem">Disapproved</a></li> 

      </ul>
        </div>
  </div>
    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4 no-padding">
    <a class="btn-sm btn btn-block btn-primary" href="/index.php?r=employee%2Femp-master%2Fdocs-download&amp;emp_doc_id=24" title="" data-method="post"><span class="glyphicon glyphicon-download"></span></a> </div>
    <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4 no-padding">
    <a class="btn-sm btn btn-danger btn-block" href="/index.php?r=employee%2Femp-master%2Fdelete-doc&amp;emp_doc_id=24" data-confirm="Are you sure you want to delete this item?" data-method="post"><i class="fa fa-trash-o"></i> Delete</a>    </div>
  </div>
    </td>

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
    <i class="fa fa-upload"></i>&nbsp; Upload Remaining Documents      </h4>
    </div><!-- /.col -->
  </div>


<div class="box-default box view-item col-xs-12 col-lg-12">
       <div class="emp-docs-form">       
  <form id="emp-docs-form" action="/index.php?r=employee%2Femp-master%2Fadddocs" method="post" enctype="multipart/form-data">
<input type="hidden" name="_csrf" value="bEswaTd5cy48P30OYxJKAx8JBCUPSDkbHB9CBwZMEEELPVQgZD8mfg==">   <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
    <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-empdocs-emp_docs_category_id_temp-3">
<label class="control-label" for="empdocs-emp_docs_category_id_temp-3">Category</label><input type="text" id="empdocs-emp_docs_category_id_temp-3" class="form-control" name="EmpDocs[emp_docs_category_id_temp][3]" value="Leaving Certificate" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-empdocs-emp_docs_category_id-3 required">
<input type="hidden" id="empdocs-emp_docs_category_id-3" class="form-control" name="EmpDocs[emp_docs_category_id][3]" value="3">
</div>    </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-empdocs-emp_docs_details-3">
<label class="control-label" for="empdocs-emp_docs_details-3">Document Details</label><input type="text" id="empdocs-emp_docs_details-3" class="form-control" name="EmpDocs[emp_docs_details][3]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-empdocs-emp_docs_emp_master_id required">
<input type="hidden" id="empdocs-emp_docs_emp_master_id" class="form-control" name="EmpDocs[emp_docs_emp_master_id]" value="17">
</div>        </div>

        
      <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
          <div class="form-group field-empdocs-emp_docs_path-3">
<label class="control-label" for="empdocs-emp_docs_path-3">Document</label><input type="hidden" name="EmpDocs[emp_docs_path][3]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="empdocs-emp_docs_path-3" name="EmpDocs[emp_docs_path][3]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
     </div>
   </div>
    <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#f4f4f4; border-bottom:2px solid #ddd;margin-bottom:2%;padding:1%">
    <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-empdocs-emp_docs_category_id_temp-5">
<label class="control-label" for="empdocs-emp_docs_category_id_temp-5">Category</label><input type="text" id="empdocs-emp_docs_category_id_temp-5" class="form-control" name="EmpDocs[emp_docs_category_id_temp][5]" value="Experience Certificate" maxlength="100" readonly=""><div class="help-block"></div>
</div>      <div class="form-group field-empdocs-emp_docs_category_id-5 required">
<input type="hidden" id="empdocs-emp_docs_category_id-5" class="form-control" name="EmpDocs[emp_docs_category_id][5]" value="5">
</div>    </div>      

        <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-empdocs-emp_docs_details-5">
<label class="control-label" for="empdocs-emp_docs_details-5">Document Details</label><input type="text" id="empdocs-emp_docs_details-5" class="form-control" name="EmpDocs[emp_docs_details][5]" maxlength="100"><div class="help-block"></div>
</div>      <div class="form-group field-empdocs-emp_docs_emp_master_id required">
<input type="hidden" id="empdocs-emp_docs_emp_master_id" class="form-control" name="EmpDocs[emp_docs_emp_master_id]" value="17">
</div>        </div>

        
      <div class="col-xs-12 col-sm-4 col-lg-4 no-padding">
      <div class="col-lg-10 col-sm-6 col-md-10">
          <div class="form-group field-empdocs-emp_docs_path-5">
<label class="control-label" for="empdocs-emp_docs_path-5">Document</label><input type="hidden" name="EmpDocs[emp_docs_path][5]" value=""><a class="file-input-wrapper btn btn-primary col-xs-12 col-lg-12 "><span>Browse Document</span><input type="file" id="empdocs-emp_docs_path-5" name="EmpDocs[emp_docs_path][5]" title="Browse Document" data-filename-placement="inside"></a><div class="help-block"></div>
</div>      </div>
     </div>
   </div>
     <div class="form-group col-xs-12 col-sm-3 eduArLangCss" style="display:block;margin-top: 10px;">
    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-upload"></i>&nbsp; Upload</button>    </div>
  </form>    </div>
  </div>
</div>  
              
  
      </div>
    </div><div class="panel-group responsive visible-xs visible-sm" id="collapse-profileTab"><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-personal" aria-expanded="true"><i class="fa fa-street-view"></i> Personal</a></h4></div><div id="collapse-personal" class="panel-collapse collapse in" aria-expanded="true"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-guardians" aria-expanded="false"><i class="fa fa-user"></i> Guardians</a></h4></div><div id="collapse-guardians" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-address" aria-expanded="false"><i class="fa fa-home"></i> Address</a></h4></div><div id="collapse-address" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-otherinfo" aria-expanded="false"><i class="fa fa-cogs"></i>
 Other Info</a></h4></div><div id="collapse-otherinfo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse-profileTab" href="#collapse-documents" aria-expanded="false"><i class="fa fa-file-text"></i> Documents</a></h4></div><div id="collapse-documents" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"></div></div></div>
  </div>
     </div> <!---End Row Div--->
</section>



<!-- below code is for fancy box for update photo -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">            
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
    </section>



</div>
  <!-- /.content-wrapper -->

 
<?php $this->load->view('include/footer'); ?>
</body>
</html>
