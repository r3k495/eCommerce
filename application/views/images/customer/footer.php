 
 <!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'customer/signup';?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" required class="form-control" placeholder="Ex: Thilini Rathnasooriya">
        </div>
        <div class="form-group">
          <label>NIC</label>
            <!-- <div class="col-md-4 mb-3"> -->
              <input type="number" name="nic" required class="form-control" placeholder="Ex:934560112">
            <!-- </div> -->
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" required class="form-control" placeholder="Ex: No:120/2, Thibirigasyaye.">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required class="form-control" placeholder="Ex: thi@gmail.com">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="number" name="pnumber" required class="form-control" placeholder="Ex: 0719289192">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" id="p1" required class="form-control" placeholder="Enter the password here">
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" id="p2" required class="form-control" placeholder="Re-Enter the password">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
      </div>
    </div>
  </div>
</div>

 <!--  Login Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'customer/login';?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">LogIn</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  search Modal -->
 <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'customer/search';?>">
        <div class="form-group">         
          <input name="search" type="search" class="form-control" id="examplesearch" aria-describedby="searchHelp" placeholder="Search here...">
        </div>     
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js';?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url().'assets/js/popper.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url().'assets/vendors/revolution/js/jquery.themepunch.tools.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/jquery.themepunch.revolution.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.video.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js';?>"></script>
        <!-- Extra plugin css -->
        <script src="<?php echo base_url().'assets/vendors/counterup/jquery.waypoints.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/counterup/jquery.counterup.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/owl-carousel/owl.carousel.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/bootstrap-selector/js/bootstrap-select.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/image-dropdown/jquery.dd.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/smoothscroll.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/isotope/imagesloaded.pkgd.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/isotope/isotope.pkgd.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/magnify-popup/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/vertical-slider/js/jQuery.verticalCarousel.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/jquery-ui/jquery-ui.js';?>"></script>
        
        <script src="<?php echo base_url().'assets/js/theme.js';?>"></script>
    </body>
</html>