<?php  include('include/head.php') ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php  $this->load->view('admin/include/header'); ?>


<?php  $this->load->view('admin/include/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 302px;">
     <section class="content-header">
        <h1><i class="fa fa-plus-square"></i> Students List <small> All Students </small></h1>
        <ul class="breadcrumb"><li><a href="<?php echo base_url() ?>admin"><i class="fa fa-home"></i>Home</a></li>
<li><a href="<?php echo base_url() ?>admin/student">Student</a></li>
<li><a href="<?php echo base_url() ?>admin/student/plist">Students List</a></li>
</ul>    </section>

   <section class="content">
      <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>crolling.</p>
      </div>
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <table>
              <tr><td width="90%"><h3 class="box-title">Students List</h3></td>
              <td width="10%">
              <a href="<?php echo base_url() ?>admin/student/create" accesskey="n">Add New Record</a>
              </td></tr>
              </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Roll No</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Section</th>
                  <th>Admission Category</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                $i=0;               
                foreach($query1->result() as $row) 
                { 
                  $i=$i+1; ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row->roll_no?></td>
                  <td><?=$row->title?>&nbsp;<?=$row->first_name?>&nbsp;<?=$row->middle_name?>&nbsp;<?=$row->last_name?></td>
                  <td><?=$row->course?></td>
                  <td><?=$row->section?></td>
                  <td><?=$row->adm_category?></td>
                  <td><?=$row->mobile?></td>
                  <td><?=$row->email_id?></td>
                  <td>
                  <a href="<?php echo base_url('admin/student/studentedit') ?>/<?=$row->roll_no?>" class="fa fa-fw fa-edit"></a>
                  <a href="<?php echo base_url('admin/student/studentremove') ?>/<?=$row->roll_no?>" class="fa fa-fw fa-remove"></a>
                  </td>
                </tr>
                <?php } ?>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
      </div>
          <!-- /.box -->
    </section>
</div>
  <!-- /.content-wrapper -->

 
<?php $this->load->view('admin/include/footer'); ?>
</body>
</html>
