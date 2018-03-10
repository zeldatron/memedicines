<!-- components/organisms/footer.php -->

<?php 

$location = get_field('footer-location' , 'option'); 
if( !empty($location) ) {

$address = explode(',', $location['address']);	
	
?>

<section class="location">
    <div class="acf-map">
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <div class="row container map-overlay">
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <ul>
                <li>
                    <i class="fa fa-map-marker-alt"></i>
                    <p><a href="https://www.google.com/maps/place/<?php echo $location['address']; ?>" target="_blank"><?php echo str_replace(",","<br />",$location['address']); ?></a></p>
                    <small>(corner of 8th & Riverside)</small>
                </li>
                <li>
                    <i class="fa fa-clock"></i>
                    <p>HOURS</p>
                    <small>
                        Monday-Thursday: 10am &ndash; 8pm<br />
					    Friday &amp; Saturday: 10am &ndash; 9pm<br />
					    Sunday: 12pm &ndash; 7pm
					</small>
			    </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <p>541.816.4800</p>
                </li>
                <li>
                    <i class="fa fa-paper-plane"></i>
                    <p><a href="mailto:info@memedicines.com">info@memedicines.com</a></p>
                </li>
            </ul>    
        </div>
    </div>
</section>

<?php } ?>

<footer id="colophon" class="site-footer">
		<div class="site-info">
            ©2018 Mother Earth Medicines
		</div><!-- .site-info -->
</footer><!-- #colophon -->