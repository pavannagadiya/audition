<main class="site-content" role="main">

	<!-- end about section -->
	<section class="">
		<h1 class="reg-banner-name">Dhvani Add Groups</h1>
		<img src="<?= RES_URL; ?>newClient/reg/banner2.jpg">
		<!-- <div class="" style="padding-right: 50%;">
                            <div class="">
                                <h2 class="">Registration</h2>
                            </div>
                        </div> -->
	</section>

	  <div id="about" class="about-area area-padding reg-about">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>REGISTER YOURSELF</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="<?= RES_URL; ?>newClient/reg/client.webp" style="width: 100%;">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
<!--               <a href="#">
                <h4 class="sec-head">Social Marketer</h4>
              </a> -->
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
	<!-- Contact section -->
	<div id="contact" class="contact-area reg-background">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>REGISTRATION FORM</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start  contact -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form contact-form">
              <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div> -->
              <form id="reg">

                  <div class="form-group row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Your Name</label>
                	<span class="span-error">*</span>
                  <input type="text" name="user_name" class="form-control inputshape" placeholder="Your Name" required>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Your Email</label>
                	<span class="span-error">*</span>
                  <input type="text" name="user_email" class="form-control inputshape" placeholder="Contact Email" required>
                  <div class="validation"></div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Your Contact Number</label>
                	<span class="span-error">*</span>
                  <input type="text" name="user_contact" class="form-control inputshape" placeholder="Contact Number" required>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>State</label>
                	<span class="span-error">*</span>
                  <input type="text" name="user_state" class="form-control inputshape" placeholder="State" required>
                  <div class="validation"></div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>District</label>
                	<span class="span-error">*</span>
                  <input type="text" name="district" class="form-control inputshape" placeholder="District/City" required>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Taluka</label>
                	<span class="span-error">*</span>
                  <input type="text" name="taluko" class="form-control inputshape" placeholder="Taluko" required>
                  <div class="validation"></div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Qualification</label>
                	<span class="span-error">*</span>
                  <input type="text" name="qualification" class="form-control inputshape" placeholder="Qualification" required>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Experience (In Years)</label>
                	<span class="span-error">*</span>
                  <input type="text" name="experience" class="form-control inputshape" placeholder="Experience (In Years)" required>
                  <div class="validation"></div>
                </div>
              </div>
<!--            <div class="col-lg-6">
                <div class="input-field form-group">
                  <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                </div>
              </div> -->
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                  <label for="user_image[]"><b>Image Upload</b></label>
                  <span class="span-error">*</span>
                  <input type="file" name="user_image[]" required>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field form-group">
                	<label>Your Address</label>
                	<span class="span-error">*</span>
                	<textarea class="form-control inputshape" name="user_address" rows="5" required>
                  </textarea>
                </div>
              </div>
            </div>
          <div class="form-group row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                  <input type="hidden" name="user_categories" class="form-control inputshape" placeholder="categories" readonly="true" id="textbx">
                </div>
              </div>
              
            </div>
<div class="form-group row">
              <div class="col-lg-12">
              	<label>Categories *</label>
                <div class="input-field form-group">
                	<label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress1" tabIndex="1" onClick="ckChange(this)" value="actor">Actor 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress2" tabIndex="1" onClick="ckChange(this)" value="actress">Actress 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress3" tabIndex="1" onClick="ckChange(this)" value="villain">Villain 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress4" tabIndex="1" onClick="ckChange(this)" value="singer">Singer 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progres5" tabIndex="1" onClick="ckChange(this)" value="dancer">Dancer 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress6" tabIndex="1" onClick="ckChange(this)" value="child_artist">Child Artist 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress7" tabIndex="1" onClick="ckChange(this)" value="model">Model 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress8" tabIndex="1" onClick="ckChange(this)" value="ancor">Ancor 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress9" tabIndex="1" onClick="ckChange(this)" value="script_writer">Script Writer 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx'  name="progress" id="progress10" tabIndex="1" onClick="ckChange(this)" value="comedian">Comedian 
                    </label>

                </div>
              </div>
            
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <div class="input-field form-group">
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress11" tabIndex="1" onClick="ckChange(this)" value="musician">Musician 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress12" tabIndex="1" onClick="ckChange(this)" value="set_decorator">Set Decorator 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress13" tabIndex="1" onClick="ckChange(this)" value="editor">Editor 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress14" tabIndex="1" onClick="ckChange(this)" value="director">Director 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress15" tabIndex="1" onClick="ckChange(this)" value="screenwriter">Screenwriter 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress16" tabIndex="1" onClick="ckChange(this)" value="makeup_artist">Makeup Artist 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress17" tabIndex="1" onClick="ckChange(this)" value="costume_designer">Costume Designer 
                    </label>
                    
                </div>
              </div>
            
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <div class="input-field form-group">
                  
                <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress18" tabIndex="1" onClick="ckChange(this)" value="cinematographer">Cinematographer 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress19" tabIndex="1" onClick="ckChange(this)" value="stunt_coordinator">Stunt Coordinator 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress20" tabIndex="1" onClick="ckChange(this)" value="choreographer">Choreographer 
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" class='chkbx' name="progress" id="progress21" tabIndex="1" onClick="ckChange(this)" value="other">Other 
                    </label>

                </div>
              </div>
            
            </div>
                <div class="text-center"><button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
	<!-- end Contact section -->
</main>
<?php $this->load->view('newClient/script'); ?>
<script type="text/javascript">
	 $('#reg').on('submit',function (e) {
				  e.preventDefault();
				  var form = $('#reg');
					var form_data = new FormData($(form)[0]);
					console.log(form_data);
						$.ajax({
						url:"<?=site_url('era/user/create_user')?>",
						type:'post',
						dataType:'json',
						data : form_data,
						contentType: false,
						processData: false,
						
						success: function (data) {
							/* (data.status === true)?swal("Good job!", "Your Registrations is Successfully", "success"):swal("This Email-id or Phone Number is Already Registered.!", "Please try again", "error"); */
              
              if (data.status) {
					var totalAmount = 100;
          var user_id = data.id;
					// var product_id = $(this).attr("data-id");
					var options = {
						"key": "<?= RZP_KEY_ID; ?>",
						"amount": (totalAmount * 100), // 2000 paise = INR 20
						"name": "Test",
						"description": "Payment",
						"handler": function(response) {
							$.ajax({
								url: "<?= site_url('site/razorPaySuccess') ?>",
								type: 'post',
								dataType: 'json',
								data: {
									razorpay_payment_id: response.razorpay_payment_id,
									totalAmount: totalAmount,
                  user_id:  user_id
								},
								success: function(msg) {
									swal("Good job!", "Your Registrations is Successfully", "success");
								}
							});

						},

						"theme": {
							"color": "#528FF0"
						}
					};
					var rzp1 = new Razorpay(options);
					rzp1.open();
					e.preventDefault();
				} else {
					swal("Payment !", "Please try again", "error");
				}
							
						},
						error:function () {
							console.log('error');
						}
					});
				});
</script>
<script type="text/javascript">
	$('.chkbx').click(function(){
    var text = "";
    $('.chkbx:checked').each(function(){
        text += $(this).val()+',';
    });
    text = text.substring(0,text.length-1);
    
    $('#textbx').val(text);
});
	function ckChange(ckType) {
  var ckName = document.getElementsByName(ckType.name);

  for (var i = 0; i < ckName.length; i++) {
    if (!ckType.checked) {
      ckName[i].disabled = false;
    } else {
      if (!ckName[i].checked) {
        ckName[i].disabled = true;
      } else {
        ckName[i].disabled = false;
      }
    }
  }

}
</script>