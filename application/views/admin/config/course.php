<?php  $this->load->view('admin/include/head'); ?>
<?php if ($this->uri->segment(4)=='view') { ?>

<script type="text/javascript">
    $(window).load(function(){
        $('#viewModal').modal('show');

    });
</script>


<?php } elseif ($this->uri->segment(4)=='edit') {?>
<script type="text/javascript">
    $(window).load(function(){
        $('#editModal').modal('show');
    });
</script>
<?php } ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php  $this->load->view('include/header'); ?>


<?php  $this->load->view('include/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 302px;">
    <section class="content-header">
        <ul class="breadcrumb"><li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
<li><a href="<?php echo base_url() ?>">Student</a></li>
<li><a href="<?php echo base_url() ?>admin/student/list">Student List</a></li>
<li class="active"><a href="<?php echo base_url() ?>admin/student/create">Create New Student</a></li>
</ul> 
<h1>
            <i class="fa fa-plus-globe"></i> Course <small>  <a href="" accesskey="n" class="btn btn-warning" data-toggle="modal" data-target="#addModal"> <i class="fa fa-plus-square" > Add New</i></a> </small>        </h1> 


    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Add Course</h4>
				      </div>
				    <form class="form-horizontal" method="post" action="<?php echo base_url('admin/config/course'); ?> ">
              <div class="modal-body">
                <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Name</label>

                  <div class="col-sm-9">
                    <input name="course" type="text" class="form-control" id="course" placeholder="course" >
                  </div>
                </div>
                 <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Alias</label>

                  <div class="col-sm-9">
                    <input name="course_alias" type="text" class="form-control" id="course" placeholder="course" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Intake</label>

                  <div class="col-sm-9">
                    <input name="course_intake" type="text" class="form-control" id="course" placeholder="Course Intake" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add course</button>
              </div>
            </form>
            </div>
				  </div>
				</div>

<?php if ($this->uri->segment(4)=='view') { ?>
           <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">View Modal</h4>
              </div>
              <form class="form-horizontal">
              <div class="modal-body">
                <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Name</label>

                  <div class="col-sm-9">
                    <input type="text"   id="disabledTextInput" class="form-control" id="course" placeholder="<?php echo $course->course_name ?>" disabled>
                  </div>
                </div>
              </div>
               <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Alias</label>

                  <div class="col-sm-9">
                    <input  type="text" class="form-control" id="course" placeholder="<?php echo $course->course_alias ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Intake</label>

                  <div class="col-sm-9">
                    <input name="course_intake" type="text" class="form-control" id="course" placeholder="<?php echo $course->course_intake ?>" disabled>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </form>
            </div>
          </div>
        </div>

<?php } elseif ($this->uri->segment(4)=='edit') {?>
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Modal</h4>
              </div>
              <form class="form-horizontal" method="post" action="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">Course Name</label>

                  <div class="col-sm-9">
                    <input type="hidden" name="course_id"  value="<?php echo $course->course_id ?>" >
                    <input type="text" name="course_name" class="form-control" id="courseedit" value="<?php echo $course->course_name ?>" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">course Alias</label>

                  <div class="col-sm-9">
                    <input name="course_alias" type="text" class="form-control" id="course" value="<?php echo $course->course_alias ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="course" class="col-sm-3 control-label">course Intake</label>

                  <div class="col-sm-9">
                    <input name="course_intake" type="text" class="form-control" id="course" value="<?php echo $course->course_intake ?>" >
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
<?php } ?>
</section>

   <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Id</th>
                  <th>Course Name</th>
                  <th>Alias</th>
                  <th>course Intake</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($courses as $course) {
                  $burl=base_url()."admin/config/course/";
                  echo <<<EOT

                  <tr>
                  <td>  $course->course_id  </td>
                  <td>  $course->course_name </td>
                   <td>  $course->course_alias </td>
                   <td>  $course->course_intake </td>
                  <td> <a href="{$burl}view/{$course->course_id}"  class="btn btn-primary btn-sm">View</a></td>
                  <td> <a href="{$burl}edit/{$course->course_id}"  class="btn btn-success btn-sm">Edit</a></td>
                  <td> <a href="{$burl}delete/{$course->course_id}" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
EOT;
                }

                ?>  
                </tbody>
                <tfoot>
                <tr>
                 <th>Course Id</th>
                  <th>Course Name</th>
                  <th>Alias</th>
                  <th>course Intake</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>
  <!-- /.content-wrapper -->

 
<?php  $this->load->view('include/footer'); ?>
</body>
</html>
