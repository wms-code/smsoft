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
</ul>    
</section>

   <section class="content">
      <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>crolling.</p>
      </div>
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer List</h3>
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
                foreach($query->result() as $row) 
                { 
                  $i=$i+1; ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row->roll_no?></td>
                  <td><?=$row->title?>&nbsp;<?=$row->first_name?>&nbsp;<?=$row->middle_name?>&nbsp;<?=$row->last_name?></td>
                  <td><?=$row->gender?></td>
                  <td><?=$row->customer_mobile?></td>
                  <td><?php if($row->customer_type==0) { echo "Not Specified"; } else if($row->customer_type==1){echo "Whole Seller";}else if($row->customer_type==2){echo "Retailer";}else if($row->customer_type==3){echo "Customer";} ?></td>
                  <td><a href="customer_edit/<?=$row->customer_id?>" class="fa fa-fw fa-edit">Edit</a>&emsp;<a href="customer_delete/<?=$row->customer_id?>" lass="fa fa-fw fa-remove">Remove</a></td>
                </tr>
                <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>City(s)</th>
                  <th>Mobile</th>
                  <th>Customer Type</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
      </div>
          <!-- /.box -->
    </section>
</div>
  <!-- /.content-wrapper -->

 
<?php  include('include/footer.php') ?>
</body>
</html>
