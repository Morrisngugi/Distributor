<!-- Begin Header -->
<?php include 'header.php';?>
<!-- End Header -->

<!-- Begin Left Sidebar -->
<?php include 'sidebar-left.php';?>
<!-- End Left Sidebar -->


<!-- Begin Content  -->
<div class="row">
            <div class="col-md-12">
              <div class="panel panel-defaultt">
                <div class="panel-heading">
                  <h3>Masks Types</h3>
                </div>
                <div class="panel-body">
                  <form action="#" novalidate="" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">First Name</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="date" placeholder="Enter First Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Surname</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="date" placeholder=" Enter Surname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Mobile Phone</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="phone" placeholder="254" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Date of Birth</label>
                      <div class="col-sm-6">
                        <input type="date" data-mask="Calender" placeholder="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email Address</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="phone-int" placeholder="Email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Pin</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="taxid" placeholder="Enter Pin" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" data-mask="Password" placeholder="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Confirm Password</label>
                      <div class="col-sm-6">
                        <input type="password" data-mask="Password" placeholder="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">User Type</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="product-key" placeholder="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-1 col-md-offset-6">
                              <Button class="btn-Success" name="btn" > Save</button>
                          </div>

                          <div class="col-md-2 ">
                              <Button class="btn-Default" name="btn" > Cancel</button>
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
