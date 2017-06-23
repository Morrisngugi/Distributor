<!-- Begin Header -->
<?php include 'header.php';?>
<!-- End Header -->

<!-- Begin Left Sidebar -->
<?php include 'sidebar-left.php';?>
<!-- End Left Sidebar -->


<!-- Begin Content  -->
<div class="am-content">
        <div class="page-head">
          <h2>Packaging</h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active">Packaging</li>
          </ol>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="title">Add Packaging Type</div>
                  
                </div>
                <div class="panel-body">
                  <form action="#" data-parsley-validate="" novalidate="">
                    <div class="form-group">
                      <label>Code</label>
                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                    </div>
                    <div class="text-left">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                      <button class="btn btn-space btn-default">Cancel</button>
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
<!-- End Content -->


<!-- Right Sidebar -->
<?php include 'sidebar-right.php';?>
<!-- End Right Sidebar -->

</div>

<!-- Begin Footer -->
<?php include 'footer.php';?>
<!-- End Footer -->
