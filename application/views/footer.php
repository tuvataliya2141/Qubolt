<!-- Footer Start -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header">
                <!--<h5 class="modal-title" id="exampleModalCenterTitle">Get in touch </h5>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bg-white p-3 rounded box-shadow">
                    <form class="login-form" action="home/mail_data" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group position-relative">                                                                                   
                                    <input type="text" class="form-control" placeholder="Name" name="name" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative">                                    
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative">                                               
                                    <input type="text" class="form-control" placeholder="Mobile" name="mobile" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative">                                    
                                    <input type="text" class="form-control" placeholder="Zipcode" name="zipcode" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative">                                   
                                    <i class="mdi mdi-paste ml-3 icons"></i>
                                    <select class="form-control" name="category" required="">
                                        <option>Category</option>
                                        <option value="Logo Design">Logo Design</option>
                                        <option value="SEO">SEO</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Brand Identity">Brand Identity</option>
                                        <option value="Animations">Animations</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button id="send_msg" class="btn btn-success w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
</div>
<footer class="footer">    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a class="logo-footer" href="#"><img src="<?php echo base_url("assets/images/logo.png"); ?>"></a>
                <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Company</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Features</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> FAQ</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Usefull Links</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Protection</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Safe Payments</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Newsletter</h4>
                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe form-group position-relative">
                                <label>Write your email <span class="text-danger">*</span></label>
                                <i class="mdi mdi-email ml-3 icons"></i>
                                <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary w-100" value="Subscribe">
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<hr>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="Javascript:;" target="_blank" class="text-success">Crab Infosys</a>.</p>
                </div>
            </div>

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled payment-cards text-sm-right mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/american-ex.png" title="American Express" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/discover.png" title="Discover" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/master-card.png" title="Master Card" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/paypal.png" title="Paypal" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/visa.png" title="Visa" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
    <i class="mdi mdi-chevron-up d-block"> </i> 
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/scrollspy.min.js'); ?>"></script>
<!-- SLIDER -->
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/owl.init.js'); ?>"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/isotope.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/portfolio.init.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/magnific.init.js'); ?>"></script> 
<!-- Typed -->
<script src="<?php echo base_url('assets/js/typed.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/typed.init.js'); ?>"></script>
<!--FLEX SLIDER-->
<script src="<?php echo base_url('assets/js/jquery.flexslider-min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/flexslider.init.js'); ?>"></script>
<!-- Counter -->
<script src="<?php echo base_url('assets/js/counter.init.js'); ?>"></script>
<!-- maintenance -->
<script src="<?php echo base_url('assets/js/jquery.countdown.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/maintenance.init.js'); ?>"></script>
<!-- Parallax -->
<script src="<?php echo base_url('assets/js/parallax.js'); ?>"></script>
<!-- Main Js -->
<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<?php
$msg = $this->session->userdata('error');
$msgs = $this->session->userdata('success');
if (isset($msg)) {
    echo "<script>
        $.toast( {
            text: '" . $msg . "', // Text that is to be shown in the toast
            heading: 'Note', // Optional heading to be shown on the toast
            icon: 'error', // Type of toast icon
            showHideTransition: 'fade', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 15000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            textAlign: 'left', // Text alignment i.e. left, right or center
            loader: true, // Whether to show loader or not. True by default
            loaderBg: '#9EC600', // Background color of the toast loader
            beforeShow: function () {}, // will be triggered before the toast is shown
            afterShown: function () {}, // will be triggered after the toat has been shown
            beforeHide: function () {}, // will be triggered before the toast gets hidden
            afterHidden: function () {}  // will be triggered after the toast has been hidden
        });
    </script> ";
}
$this->session->unset_userdata('error');

if (isset($msgs)) {
    echo "<script>
        $.toast( {
            text: '" . $msgs . "', // Text that is to be shown in the toast
            heading: 'Note', // Optional heading to be shown on the toast
            icon: 'success', // Type of toast icon
            showHideTransition: 'fade', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 15000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            textAlign: 'left', // Text alignment i.e. left, right or center
            loader: true, // Whether to show loader or not. True by default
            loaderBg: '#9EC600', // Background color of the toast loader
            beforeShow: function () {}, // will be triggered before the toast is shown
            afterShown: function () {}, // will be triggered after the toat has been shown
            beforeHide: function () {}, // will be triggered before the toast gets hidden
            afterHidden: function () {}  // will be triggered after the toast has been hidden
        });
    </script> ";
}
$this->session->unset_userdata('success');
?>
</body>
</html>