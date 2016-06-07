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
            <i class="fa fa-plus-globe"></i> Degree <small>  <a href="" accesskey="n" class="btn btn-warning" data-toggle="modal" data-target="#addModal"> <i class="fa fa-plus-square" > Add New</i></a> </small>        </h1> 


    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Degree</h4>
              </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/config/degree'); ?> ">
              <div class="modal-body">
                <div class="form-group">
                  <label for="degree" class="col-sm-3 control-label">Degree Name</label>

                  <div class="col-sm-9">
                    <input name="degree" type="text" class="form-control" id="degree" placeholder="degree name" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="degree" class="col-sm-3 control-label">Degree Alias</label>

                  <div class="col-sm-9">
                    <input name="degree_alias" type="text" class="form-control" id="degree" placeholder="degree alias" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Degree</button>
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
                  <label for="degree" class="col-sm-3 control-label">Degree Name</label>
                  <div class="col-sm-9">
                    <input type="text"   id="disabledTextInput" class="form-control" id="degree" placeholder="<?php echo $degree->degree_name ?>" disabled>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="degree" class="col-sm-3 control-label">Degree Alias</label>
                  <div class="col-sm-9">
                    <input type="text"   id="disabledTextInput" class="form-control" id="degree" placeholder="<?php echo $degree->degree_alias ?>" disabled>
                 
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
                  <label for="degree" class="col-sm-3 control-label">degree</label>

                  <div class="col-sm-9">
                    <input type="hidden" name="degree_id"  value="<?php echo $degree->degree_id ?>" >
                    <input type="text" name="degree_alias" class="form-control" id="degreeedit" value="<?php echo $degree->degree_name ?>" >
                  </div>
                </div>
                 <div class="form-group">
                  <label for="degree" class="col-sm-3 control-label">Degree Alias</label>

                  <div class="col-sm-9">
                    <input type="hidden" name="degree_id"  value="<?php echo $degree->degree_id ?>" >
                    <input type="text" name="degree_alias" class="form-control" id="degreeedit" value="<?php echo $degree->degree_alias ?>" >
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
                  <th>Degree Id</th>
                  <th>Degree Name</th>
                  <th>Alias</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($degrees as $degree) {
                  $burl=base_url()."admin/config/degree/";
                  echo <<<EOT

                  <tr>
                  <td>  $degree->degree_id  </td>
                  <td>  $degree->degree_name </td>
                  <td>  $degree->degree_alias </td>
                  <td> <a href="{$burl}view/{$degree->degree_id}"  class="btn btn-primary btn-sm">View</a></td>
                  <td> <a href="{$burl}edit/{$degree->degree_id}"  class="btn btn-success btn-sm">Edit</a></td>
                  <td> <a href="{$burl}delete/{$degree->degree_id}" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
EOT;
                }

                ?>  
                </tbody>
                <tfoot>
                <tr>
                  <th>Degree Id</th>
                  <th>Degree Name</th>
                  <th>Alias</th>
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
