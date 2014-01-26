
<!-- Footer -->
<div class="usbi-footer">
    <div id="usbimapsite" class="usbi-sitemap">
        <div class="usbi-wrapper">
        	<ul class="nav">
            	<li class="bg-color"><a class="current" href="#sitemap-1"><span>Open Site Map</span></a></li>
            	<li class="bg-color"><a href="#sitemap-2"><img src="<?php print $img_path; ?>errow_bottom.png" width="20" alt="open"></a></li>
            </ul>
            <div class="usbi-clear"></div>
        
            <div class="list-wrap">
            	<div id="sitemap-1" class="usbi-clear"></div>
                <div id="sitemap-2" class="usbi-hide">                	
                    <ul class="usbi-menubawah">
                        <li><a href="#">HOME</a></li>
							<?php 
							$menus = menu_tree_all_data('menu-usbi-menu'); 
								foreach ($menus as $menu) {
							?>
                        <li><?php print $menu['link']['link_title']; ?>
                        	<span>             
													<?php foreach ($menu['below'] as $child) { ?>
                                <a href="<?php print url($child['link']['href']); ?>"><?php print $child['link']['link_title']; ?></a>
													<?php } ?>
                    		</span>                            
                        </li>
							<?php	} ?>
                        <li>
                            <a class="usbi-contact" href="<?php print url("contact-us"); ?>">CONTACT US</a>
                            <a class="usbi-contact" href="<?php print url("visit-usbi"); ?>">VISIT USBI</a>
                        </li>
                    </ul>                  
                    <div class="usbi-clear"></div> 
                    
                    <div class="usbi-clear"></div>                   
                </div>                
            </div>
            </div>
        </div>
    </div>
    
    <div class="usbi-addres">
        <div class="usbi-wrapper">
       		<div class="usbi-left">
            	<a href="#"><img src="<?php print $img_path; ?>img_usbi_logo2.png" height="116" alt="logo" /></a>
            </div>
            <div class="usbi-add-text usbi-left">
            	Mulia Business Park<br />Jl. MT Haryono Kav 58-60<br />Jakarta Selatan 12780
            </div>
          <div class="usbi-newsletter usbi-right">
          		<div class="usbi-nelet-con">
                    <h4>Subscribe to Our Newsletter</h4>
                    <input type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="Your email here" name="" style="margin-top:5px;"><br />
                    <input type="image" src="<?php print $img_path; ?>butt-submit.png" value="Submit" style="margin-top:10px;">
                </div>
                <!--
                <div class="usbi-trmcondition">
                	<a href="#">Terms & Conditions</a>
                </div>
                -->
            </div>
            <div class="usbi-clear"></div>
        </div>
    </div>
    
    <div class="usbi-partner">
    	<div class="usbi-wrapper">
       		<div class="usbi-left">
            	<div class="usbi-part-text">&nbsp;</div>
                <ul>
                	<li><a href="http://www.sampoernafoundation.org/?q=en/sampoerna-academy" target="_blank"><img src="<?php print $img_path; ?>img_seswa_logo.jpg" alt="seswa" /></a></li>
                    <li><a href="http://www.usbi.ac.id" target="_blank"><img src="<?php print $img_path; ?>img_usbi_kcl.jpg" alt="usbi" /></a></li>
                    <li><a href="http://www.siswabangsa.org/KSB/index.html" target="_blank"><img src="<?php print $img_path; ?>img_apa_logo.jpg" alt="apaya" /></a></li>
                    <li><a href="http://www.sampoernafoundation.org/?q=en/school-development-outreach" target="_blank"><img src="<?php print $img_path; ?>img_school_logo.jpg" alt="school" /></a></li>
                    <li><a href="http://www.sahabatwanita.org/" target="_blank"><img src="<?php print $img_path; ?>img_bunda_logo.jpg" alt="bunda" /></a></li>                    
                	<li><a href="http://mekar.biz/" target="_blank"><img src="<?php print $img_path; ?>img_mekar_logo.jpg" alt="mekar" /></a></li>
                    <li><a href="http://www.baitalkamil.org/" target="_blank"><img src="<?php print $img_path; ?>img_hand_logo.jpg" alt="mekar" /></a></li>                   
                    
                    
                    
                    <li style="width: 240px"></li>
                </ul>
            </div>
            <div class="usbi-sampfound usbi-left">
            	<div class="usbi-part-text">An Initiative of</div>
            	<div><a href="http://www.sampoernafoundation.org/" target="_blank"><img src="<?php print $img_path; ?>img_sampurna_logo.jpg" alt="sampurna" /></a></div>
            </div>
            <div class="usbi-clear"></div>
        </div>
    </div>
    
    <div class="usbi-menubwh">
    	<div class="usbi-menubwh-wrapp">        	
       		<ul>
            	<li class="noborder">&nbsp;</li>
            	<!--
            	<li><a href="#">Legal</a></li>
                <li><a href="#">Accessibility Statement</a></li>
                <li><a href="#">Report Security Issue</a></li>
                <li><a href="#">Privacy Statement</a></li>                
                <li><a href="<?php print url("contact-us"); ?>">Contact USBI</a></li>
                -->
            </ul>
            <div class="usbi-menubwh-kopy">
					&copy; 2012 Universitas Siswa Bangsa International. All rights reserved.
			</div>
        </div>
    </div>
   
<div>