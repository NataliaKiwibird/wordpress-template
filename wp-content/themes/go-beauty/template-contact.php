<?php 

/* Template Name: Contact
*/

?>

<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>



<?php get_header();?>

<section class="page-wrap">

        <h1> <?php the_title();?> </h1>

        <div class="container">

                <form action="<?php the_permalink(); ?>" id="contactForm" method="post" class="contact">
                
                        <div class="contact-top">
                            <!-- <label for="contactName">Name:</label> -->
                            <input type="text" name="contactName" id="contactName" value="" placeholder="Your name" class="contact-top-item" />
                        
                            <!-- <label for="email">Email:</label> -->
                            <input type="text" name="email" id="email" value="" placeholder="Your email" class="contact-top-item" />
                        </div>
                    
                        <!-- <label for="commentsText">Message:</label> -->
                        
                        <textarea name="comments" id="commentsText" rows="10" cols="56" placeholder="Your message" class="contact-textarea"></textarea>
                        
                        <button type="submit" class="btn contact-btn">Send email</button>
                    


                    <input type="hidden" name="submitted" id="submitted" value="true" />
                </form>

            </section>
    </div>
</section>


<?php get_footer();?>

