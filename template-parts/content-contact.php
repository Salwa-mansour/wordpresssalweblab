<?php
 //https://wpmudev.com/blog/how-to-build-your-own-wordpress-contact-form-and-why/
  //response generation function
 
   

      
  
  // if(isset($_POST['contact-form-submit'])) {
  //   massege_sending();
//   echo('meh');
  // }
//   else{
//    $GLOBALS['contact-form-submit']=0;
//   }
   
   
   
?>
<div id="respond">
                <!-- <?php //echo $response.'--woo'; ?> -->
                <!-- <h2>conatct us</h2> -->

                <form action="<?php home_url();  ?>" method="post">
                   
                        <!-- <label for="name">Name: <span>*</span> </label> -->
                        <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" placeholder="name" >
                    
                        
                       
                             <!-- <label for="message_email">Email: <span>*</span> </label> -->
                        <input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" placeholder="email">
                         
                          
                      
                            <!-- <label for="message_text">Message: <span>*</span> </label> -->
                        <textarea type="text"  name="message_text" placeholder="massege" ><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                       
                             
                       
                                <!--
                                     <label for="message_human">Human Verification: <span>*</span></label>
                        <span><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</span>
                                 -->
                    
                       
                                
                        <!-- <input type="hidden" name="submitted" value="1"> -->
                        <input type="hidden" name="action" value="contactform_action" />
                        <input type="submit" name="contact-form-submit" value="Submit">
                        
                </form>
            </div>