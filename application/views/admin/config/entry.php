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
            <i class="fa fa-plus-globe"></i>Entry Level<small>  <a href="" accesskey="n" class="btn btn-warning" data-toggle="modal" data-target="#addModal"> <i class="fa fa-plus-square" > Add New</i></a> </small>        </h1> 


    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Entry Level</h4>
              </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/config/entry'); ?> ">
              <div class="modal-body">
                <div class="form-group">
                  <label for="entry_level" class="col-sm-3 control-label">Entry Level</label>

                  <div class="col-sm-9">
                    <input name="entry_level" type="text" class="form-control" id="entry_level" placeholder="Entry level" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Entry level</button>
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
                  <label for="entry_level" class="col-sm-3 control-label">Entry Level</label>

                  <div class="col-sm-9">
                    <input type="text"   id="disabledTextInput" class="form-control" id="entry_level" placeholder="<?php echo $entrylevel->entry_level_id ?>" disabled>
                  </div>
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
                  <label for="entry_level" class="col-sm-3 control-label">Entry Level</label>

                  <div class="col-sm-9">
                    <input type="hidden" name="entry_level_id"  value="<?php echo $entrylevel->entry_level_id ?>" >
                    <input type="text" name="entry_level" class="form-control" id="entry_leveledit" value="<?php echo $entrylevel->entry_level ?>" >
                  </div>
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
                  <th>Entry Level Id</th>
                  <th>Entry Level</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($entry_level as $entry_level) {
                  $burl=base_url()."admin/config/entry/";
                  echo <<<EOT

                  <tr>
                  <td>  $entry_level->entry_level_id  </td>
                  <td>  $entry_level->entry_level </td>
                  <td> <a href="{$burl}view/{$entry_level->entry_level_id}"  class="btn btn-primary btn-sm">View</a></td>
                  <td> <a href="{$burl}edit/{$entry_level->entry_level_id}"  class="btn btn-success btn-sm">Edit</a></td>
                  <td> <a href="{$burl}delete/{$entry_level->entry_level_id}" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
EOT;
                }

                ?>  
                </tbody>
                <tfoot>
                <tr>
                 <th>Entry Level Id</th>
                  <th>Entry level</th>
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
