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

<?php  $this->load->view('admin/include/header'); ?>


<?php  $this->load->view('admin/include/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 302px;">
    <section class="content-header">
        <ul class="breadcrumb"><li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
<li><a href="<?php echo base_url() ?>">Student</a></li>
<li><a href="<?php echo base_url() ?>admin/student/list">Student List</a></li>
<li class="active"><a href="<?php echo base_url() ?>admin/student/create">Create New Student</a></li>
</ul> 
<h1>
            <i class="fa fa-plus-globe"></i> Country <small>  <a href="" class="btn btn-warning" data-toggle="modal" data-target="#addModal"> <i class="fa fa-plus-square" > Add New</i></a> </small>        </h1>   
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				    <form class="form-horizontal">
              <div class="modal-body">
                <div class="form-group">
                  <label for="country" class="col-sm-3 control-label">Country Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="country" placeholder="india" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
				  </div>
				</div>



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
                  <label for="country" class="col-sm-3 control-label">Country Name</label>

                  <div class="col-sm-9">
                    <input type="text"  id="disabledTextInput" class="form-control" id="country" placeholder="india" disabled>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>


          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Modal</h4>
              </div>
              <form class="form-horizontal">
              <div class="modal-body">
                <div class="form-group">
                  <label for="country" class="col-sm-3 control-label">Country Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="country" value="india" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
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
                  <th>Country Id</th>
                  <th>Country Name</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
	            <tr>
                  <td>102</td>
                  <td>India</td>
                  <td> <a href="<?php echo base_url(); ?>admin/config/country/view/1"  class="btn btn-primary btn-sm">View</a></td>                 
                 <td> <a href="<?php echo base_url(); ?>admin/config/country/edit/1"  class="btn btn-success btn-sm">Edit</a></td>             
                 <td> <a href="<?php echo base_url(); ?>admin/config/country/delete/1"  class="btn btn-danger btn-sm">Delete</a></td>             
                </tr>
                  <tr>
                  <td>102</td>
                  <td>candia</td>
                   <td> <a href=""  class="btn btn-primary btn-sm">View</a></td>                 
                 <td> <a href=""  class="btn btn-success btn-sm">Edit</a></td>             
                 <td> <a href=""  class="btn btn-danger btn-sm">Delete</a></td>            
				</div>
                </tr>    
                </tbody>
                <tfoot>
                <tr>
                 <th>Country Id</th>
                  <th>Country Name</th>
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

 
<?php  $this->load->view('admin/include/footer'); ?>
</body>
</html>
