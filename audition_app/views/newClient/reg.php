<style type="text/css">
  label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    margin-left: 2%;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #3ec1d5;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#search-text-input{
    border-top:thin solid  #e5e5e5;
    border-right:thin solid #e5e5e5;
    border-bottom:0;
    border-left:thin solid  #e5e5e5;
    box-shadow:0px 1px 1px 1px #e5e5e5;
    float:left;
    height:17px;
    margin:.8em 0 0 .5em; 
    outline:0;
    padding:.4em 0 .4em .6em; 
    width:183px; 
}
  
#button-holder{
    background-color:#f1f1f1;
    border-top:thin solid #e5e5e5;
    box-shadow:1px 1px 1px 1px #e5e5e5;
    cursor:pointer;
    float:left;
    height:35px;
    margin:11px 0 0 0;
    text-align:center;
    width:50px;
}
  
#button-holder img{
    margin:4px;
    width:20px; 
}
.search-div{
	position: absolute;
    right: 0;
}
.search-div input{
	height:auto !important;
}
</style>
<main class="site-content" role="main">
  <a href="<?= site_url('site/index') ?>">
<button id="myBtn" title="Go to Home"><i class="fa fa-home" aria-hidden="true"></i> Home</button>
    
  </a>
	<!-- end about section -->
	<section class="">
	<div class="search-div">
	<form id="search-date">
		<input type='text' maxlength="10" pattern="[1-9]{1}[0-9]{9}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" name="mobile" placeholder='Search...' id='search-text-input' />
			<button type="submit" id='button-holder'>
    			<img src='https://png.pngtree.com/png-clipart/20190516/original/	pngtree-find-vector-icon-png-image_3725277.jpg' />
			</button>
	</form>
	</div>
    
		<h1 class="reg-banner-name">Dhvani Add Groups</h1>
		<img  src="<?= RES_URL; ?>newClient/reg/banner2.jpg">
		<!-- <div class="" style="padding-right: 50%;">
                            <div class="">
                                <h2 class="">Registration</h2>
                            </div>
                        </div> -->
                        
	</section>
<div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center about-dhvani-font-weight">
            <h4>પ્રસ્તુત છે, એક અનોખી પ્રેમ કથા</h4><br><h3>Bakka Ni Love Story</h3><br><h4>હસીના ના ફુવારા સાથે એક રોમાંચક કહાની,</h4>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 5%;">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well text-left about-dhvani-font-weight">
              <p>
              For the upcoming new gujarati  movie : “Bakka Ni Love Story" a cute love story. For which Auditions are now open.   It’s a golden chance to prove yourself and also to make a Grand career in the film industries. 
              </p>
              <P>
               The selected from audition will be get a way of opportunity to become a rising star,  through the upcoming gujarati movie . Fill the your all personal details as like name, age, address, occupation and contact details. And don't forget to to fill the contact details which is very important,  to you and our official team who will contact you for further as soon.
              </P>
            </div>
          </div>
        </div>
        <!-- End col-->
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
             <img src="<?= RES_URL; ?>newClient/img/reg-image.jpg" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
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
                  <input type="text" name="user_contact" class="form-control inputshape" placeholder="Contact Number" required maxlength="10" pattern="[1-9]{1}[0-9]{9}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
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
                  <input type="text" name="experience" class="form-control inputshape" placeholder="Experience (In Years)" required onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
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
<!--               <div class="col-lg-6">
                <div class="input-field form-group">
                  <label for="user_image[]"><b>Image Upload</b></label>
                  <span class="span-error">*</span>
                  <input type="file" name="user_image[]" required>
                  <div class="validation"></div>
                </div>
              </div> -->
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
              	<label>Categories</label>
                <span class="span-error">*</span>
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
          <div class="row">
              <div class="col-lg-6">
                <div class="input-field form-group">
                    <label class="">
                      <input type="checkbox" class='' name="" id=""  onClick="EnableSubmit(this)" value="conditions"> <b>I Have Read and Agree to The Terms & Conditions </b>
                    </label>

                </div>
              </div>
              <div class="col-lg-6 text-right">
                <div class="input-field form-group">
                    <div class="footer-icons">
                    <ul class="reg-social">
                      <li>
                        <a href="http://www.facebook.com/Dhvaniaddgroups/"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="http://www.instagram.com/dhvaniaddgroups/"><i class="fa fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                      </li>
                      <li>
                        <a href="http://www.youtube.com/channel/UChc9LPpX99H_KuAMu2R8LUg"><i class="fa fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
  </div>
	<!-- end Contact section -->

                </div>
              </div>
            
            </div>
                <div class="text-center"><button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                  <button type="submit" class="btn btn-blue btn-effect" onclick="this.form.reset();">Clear</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
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
					var totalAmount = 200;
					// var product_id = $(this).attr("data-id");
					var options = {
						"key": "<?= RZP_KEY_ID; ?>",
						"amount": (totalAmount * 100), // 2000 paise = INR 20
						"name": "Test",
						"description": "Payment",
						"handler": function(response) {
							console.log(response);
							form_data.append('razorpay_payment_id',response.razorpay_payment_id);
							form_data.append('totalAmount',totalAmount);
							$.ajax({
								url: "<?= site_url('era/user/razorPaySuccess') ?>",
								type: 'post',
								dataType: 'json',
								data: form_data,
								contentType: false,
								processData: false,

								success: function(msg){
									console.log(response);
                            swal({
                                title: "Success!",
                                text:  "You are now following",
                                type: "success",
                                timer: 3000,
                                showConfirmButton: false
                            });
                        window.setTimeout(function(){ } ,3000);
                        location.reload();

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
					swal("Check details", "Please give correct details.", "error");
				}
							
						},
						error:function () {
							console.log('error');
						}
					});
				});

				$('#search-date').on('submit',function (e) {
				  e.preventDefault();
				  var form = $('#search-date');
					var form_data = new FormData($(form)[0]);
						$.ajax({
						url:"<?=site_url('era/user/checkDate')?>",
						type:'post',
						dataType:'json',
						data : form_data,
						contentType: false,
						processData: false,
						
						success: function (data) {
							if (data.data) {
							swal("Your date is", data.data, "success");
							} else {
							swal("Date not assign yet", "Sorry !", "error");
							}
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
<script type="text/javascript">
  EnableSubmit = function (val) {
    var sbmt = document.getElementById("submit");

    if (val.checked == true) {
        sbmt.disabled = false;
    } else {
        sbmt.disabled = true;
    }
}

EnableSubmit({checked:0});

document.getElementById("reg").reset();
</script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
