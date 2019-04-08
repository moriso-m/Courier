<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 20/01/2019
 * Time: 01:57
 */

?>
<div class="footer">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mvcenter" id="contact">
            <h4 class="head" id="our_contact">Contact Us</h4>
            <a href="contact" >Contact</a>
            <p class="text-block footer-content footer-content-contact">
                <address>
                <span class="fa fa-phone"></span> TEL:+9910154875<br>
                <span class="fa fa-envelope-o"></span> info@kcador.com<br>
                </address>

            </p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mvcenter">
            <h4 class="head">Location</h4>
                <address>
                    <h5 class="head">Head offices</h5>
                   <span class="fa fa-map-marker"></span> Eldoret, iten road <br>
                    P.O BOX -30100, Eldoret<br><br>
                    Nairobi, mlolongo road <br>
                    P.O BOX   -00100 Nairobi
                </address>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mvcenter" id ="about">
            <h4 id="info_company" class="head">About Us</h4>
            <ul class="list-unstyled footer-content footer-content-about">
                <li><a href="services">Services</a></li>
                <li><a href="about">Who we are</a></li>
                <li><a href="terms">Terms and conditions</a></li>
                <li><a href="reviews">Reviews</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mvcenter" id="quick">
            <h4 class="head" id="links">Working Hours</h4>
            <ul class="list-unstyled footer-content footer-content-links" >
                <li class="text-block">Weekdays(Mon - Fri) 8.00 AM - 5.00 PM</li>
                <li class="text-block">Weekends(Sat) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.00 AM - 12.00 PM</li>
            </ul>
        </div>
    </div>
        <div class="row">
            <h5 class="col-md-4 col-ld-4 col-sm-4 col-xs-12 mvcenter">&copy;copyright 2018-<?php echo date("Y");?> </h5>
            <div class="col-md-4 col-ld-4 col-sm-4 col-xs-12 mvcenter">
                <h5 class="col-sm-9" >Follow us:</h5>
                <div class="col-sm-9">
                    <a href="#"><i class="fa fa-facebook-square fa-lg fa-2x"></i></a>&nbsp;&nbsp;
                    <a href="#" ><i class="fa fa-twitter-square fa-lg fa-2x"></i></a>&nbsp;&nbsp;
                    <a href="#" ><i class="fa fa-google-plus fa-lg "></i></a>&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-linkedin fa-lg fa-2x"></i></a>
                </div>
            </div>
            <h5 class="col-md-4 col-ld-4 col-sm-4 col-xs-12 mvcenter">Powered by chayyim net</h5>
        </div>
</div>

<div id="list-builder"></div>
<div id="popup-box">
    <span id="popup-close" class="close">&times</span>
    <div id="popup-box-content">
        <h3>Subscribe to Ethan courier Newsletter</h3>
        <p>
        </p>
        <form id="popup-form" action="newsletter.php" class="form-inline">
            <input type="hidden" name="list" value="key_list_etc" />
            <input type="text" name="name" placeholder="Full Name" class="form-control"/>
            <input type="text" name="email" placeholder="Email Address" class="form-control" />
            <button type="button" name="subscribe" class="btn btn-success">Subscribe</button>
        </form>
    </div>
</div>


<script src="main.js"></script>