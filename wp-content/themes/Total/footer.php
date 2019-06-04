<?php
/**
 * The template for displaying the footer.
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 4.3
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
 <section id="demo">
        <input type="button" name="chatopen" id="chatopen" class="chatnowbtnopen" value=""> 
         <input type="button" name="chatclose" id="chatclose" class="chatnowbtnclose" value=""> 
	   
		<div class="chatbot-wrapper">
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
								<p>powered by : <span>BlinkInteract</span></p>
								<a href="#" class="upperchatnowbtnclose" ><i class="fa fa-close"></i></a>	
		                            <form action="" method="GET" class="hidden">
                                        <input type="text" data-conv-question="Welcome to BlinkInteract!" data-no-answer="true">
	                                <select data-conv-question="We are a team of awesome designers, thinkers, engineers, web and social media solution provider who help you build your brand online." name="first-question">
	                                    <option value="yes">Ok</option>
	                                   <!-- <option value="sure">Sure!</option>-->
	                                </select>
                                        
	                               	<select name="programmer" data-callback="storeState" data-conv-question="Do you need our help?.">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">No</option>
	                                </select>
	                                <div data-conv-fork="programmer">
	                                    <div data-conv-case="yes">
	                                     <select name="multi[]" data-conv-question="Are You a:?<span class='tips'>(Select Your Options Below And Click On Send)</span>" multiple>
	                                    <option value="Travel Agent">Travel Agent</option>
	                                    <option value="Hotel Or Restaurant Owner">Hotel Or Restaurant Owner </option>
	                                    <option value="Event Management Company">Event Management Company</option>
	                                    <option value="Education Institution">Education Institution</option>
										 <option value="Other">Other</option>
	                                 </select>
					               <!--<input type="text" data-conv-question="Thank You" data-no-answer="true">-->
									
                                    <select name="multi[]" data-conv-question="Thank You ! What do you want to get done?<span class='tips'>(Select Your Options Below And Click On Send)</span>" multiple>
                                             <option value="Website Design">Website Design</option>
                                             <option value="App Development">App Development</option>
											 <option value="Search Engine Optimization">Search Engine Optimization</option>
											 <option value="Social Media Marketing">Social Media Marketing</option>
											 <option value="E-commerce Platform">E-commerce Platform</option>
											 <option value="Augmented Reality">Augmented Reality</option>
											 <option value="Virtual Reality">Virtual Reality</option>
											<option value="Virtual Reality">Others</option>
	                                </select>
	                                
                                <!--<input type="text" data-conv-question="Okay" data-no-answer="true">-->
					      <input data-conv-question="What's your budget, in dollars?" type="rang" name="rang" required placeholder="Okay ! What's your budget, in dollars?"  data-no-answer="true" >
							 <script>var str ="$";</script> 				
	                      <input type="text" data-pattern="[0-9]+$" id="email" data-conv-question='<input type="range" name="range" id="range_weight" value="5" min="1" max="7203.25" oninput="userInput.value= str + range_weight.value;">'>  
	                                 
						<select type="text" name="name" data-conv-question="Is your project urgent?.">
                                                 <option value="yes">Yes</option>
                                                  <option value="no">No</option>
                                                </select>			
	                                <!--<input type="text" data-conv-question="Okay" data-no-answer="true">-->
					<input type="text" data-pattern="[A-Za-z\\s]*" name="name" data-conv-question="Okay! First, tell me your full name, please.">
	                                <input data-conv-question="And, finally your email address" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
					<input type="text" data-conv-question="Thanks for your time" data-no-answer="true">
                                        <input type="text" data-conv-question="<img src='<?php echo get_template_directory_uri(); ?>/image/coffee.png' style='width: 100%'>" data-no-answer="true">
	                                <select data-conv-question="You are in safe hands! Just relax and sip a coffee">
	                                   <option value="">Absolutely!</option>
									   </select>
                                         <input type="text" name="brochure" data-conv-question="Please check our brochure" data-no-answer="true">
                                         <input type="text" name="brochure1" data-conv-question="<a  href='<?php echo get_template_directory_uri(); ?>/image/onepager.pdf' target='blank' download>Click To Download Brochure</a>" data-no-answer="true">
                                         <input type="text" name="bye" data-conv-question="Bye. You will hear from us soon." id="">
                                         
	                                    </div>
										
	                                </div>
                            <!-- For in case of no-->
					<div data-conv-fork="programmer">
	                                    <div data-conv-case="no">					
						<select name="thought" data-conv-question="Okay! Feel free to drop us a mail, if you need our assistance">
		                                    	<option value="yes">Ok</option>
		                                   </select>
                                                 <input type="text" name="brochure" data-conv-question="Please check our brochure" data-no-answer="true">
               <input type="text" name="brochure1" data-conv-question="<a  href='<?php echo get_template_directory_uri(); ?>/image/onepager.pdf' target='blank' download>Click To Download Brochure</a>" data-no-answer="true">
						<input type="text" name="bye" data-conv-question="Bye.">
	                                    </div>
	                                </div>
									
									
									
				                                    
	                            </form>
	                          
	                    </div>
	             
	            </div>
	       
	    </div>
			
	</section>

			<?php wpex_hook_main_bottom(); ?>

		</main><!-- #main-content -->

		<?php wpex_hook_main_after(); ?>

		<?php wpex_hook_wrap_bottom(); ?>

	</div><!-- #wrap -->

	<?php wpex_hook_wrap_after(); ?>

</div><!-- #outer-wrap -->

<?php wpex_outer_wrap_after(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/autosize.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/jquery.convform.js"></script>

<?php wp_footer(); ?>
<script>
	
	jQuery(document).ready(function(){
<?php if(is_page('thank-you')) { ?>	    
	    setTimeout(function () {
   window.location.href= 'http://www.blink-interact.com'; // the redirect goes here

},3000); // 5 seconds
<?php } ?>	    
	jQuery(".es_textbox_class").attr("placeholder", "Enter your Email");
		
		jQuery('#menu-primary-menu li').each(function(){
    if(jQuery(this).children().hasClass('mPS2id-highlight')) {
        jQuery(this).addClass("active");
    } 
	else{
	jQuery(this).removeClass("active");	
	}
			
});
	setTimeout(function() {
  jQuery('#es_shortcode_msg').fadeOut();
}, 10000 );		
	
});

  jQuery(window).load(function(){
        var _mPS2id_options=jQuery(document).data("mPS2id");
        if(_mPS2id_options){
            _mPS2id_options.onStart=function(){
				
               jQuery('.sidr-class-dropdown-menu li a').each(function(){
				    
				     jQuery('body').removeClass('sidr-open sidr-main-open');
			      jQuery('#sidr-main, .wpex-sidr-overlay').hide();
				   jQuery('#sidr-main').removeClass('show-sidebar');
				  jQuery('.mobile-menu-toggle').removeClass('wpex-active');
				   jQuery('this').parent().addClass("active");
				
				 
			});
				jQuery('.sidr-class-wpex-close a ').click(function(){
				    
				     jQuery('body').removeClass('sidr-open sidr-main-open');
			      jQuery('#sidr-main, .wpex-sidr-overlay').hide();
				   jQuery('#sidr-main').removeClass('show-sidebar');
				  jQuery('.mobile-menu-toggle').removeClass('wpex-active');
				   jQuery('this').parent().addClass("active");
				 
				 
			});
		
            };
        }
	  	jQuery('.mobile-menu-toggle').click(function(){ 
			jQuery('body').addClass('sidr-open sidr-main-open');
					jQuery('#sidr-main, .wpex-sidr-overlay').show();
					jQuery('#sidr-main').addClass('show-sidebar');
					jQuery('.mobile-menu-toggle').addClass('wpex-active');
					
			    });
	  jQuery('.sidr-class-wpex-close a ').click(function(){
				    
				     jQuery('body').removeClass('sidr-open sidr-main-open');
			      jQuery('#sidr-main, .wpex-sidr-overlay').hide();
				   jQuery('#sidr-main').removeClass('show-sidebar');
				  jQuery('.mobile-menu-toggle').removeClass('wpex-active');
				   jQuery('this').parent().addClass("active");
				 
				 
			});
	 
	  	 
	
    });		
	
</script>

	<script>
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
	
			rollbackTo = stateWrapper.current;
			//console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				//console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				//console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
                $("#chatclose").hide();
               $('.no-border').removeClass('card');
			 $('#chat').hide();
                setTimeout(function () {
                   convForm = $('#chat').convform();
                    $("#chatclose").show();
                     $("#chat").show();
					 $('.no-border').addClass('card');
					$('#chat').show();
                 }, 5000);
                 
                  $(".chatnowbtnopen").click(function() {
					$('.no-border').addClass('card');
				   $('#chat').show();
                    $('.no-border').removeClass('chatbox');
					  
                     $("#chat").show();
                    $("#chatclose").show();
                    $("#chatopen").hide();
                    convForm = $('#chat').convform();   
                   
                  });	
                  
                  $(".chatnowbtnclose").click(function() {
				    $('#chat').hide();
                    $('.no-border').addClass('chatbox');
                    $("#chatopen").show();
                    $("#chatclose").hide();
                    $('.no-border').removeClass('card');
                  });	
			
				  $(".upperchatnowbtnclose").click(function() {
				    $('#chat').hide();
                    $('.no-border').addClass('chatbox');
                    $("#chatopen").show();
                    $("#chatclose").hide();
                    $('.no-border').removeClass('card');
                  });		
                  
		});
	</script>
</body>
</html>