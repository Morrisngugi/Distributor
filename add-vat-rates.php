<!-- Begin Header -->
<?php include 'header.php';?>
<!-- End Header -->

<!-- Begin Left Sidebar -->
<?php include 'sidebar-left.php';?>
<!-- End Left Sidebar -->


<!-- Begin Content  -->
<div class="am-content">
        <div class="page-head">
          <h2>VAT Rates</h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active">VAT Rates</li>
          </ol>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="title">Add VAT Rates</div>
                  
                </div>
                <div class="panel-body">
                  <form action="#" novalidate="" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Code:</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="date" placeholder="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Name:</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="date" placeholder="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Rate:</label>
                      <div class="col-sm-6">
                        <input type="textarea" data-mask="phone" placeholder="" class="form-control">
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2 col-md-offset-6">
                              <Button class="btn btn-primary" name="btn" > Save</button>
                          </div>

                          <div class="col-md-2 ">
                              <Button class="btn btn-default" name="btn" > Cancel</button>
                          </div>

                      </div>
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
