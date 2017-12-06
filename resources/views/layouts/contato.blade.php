<section id="contact">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contate-nos</h2>
                <hr class="star-light">
                      
                <form method="post" action="{{url('/contacts')}}"> 

                        {{csrf_field()}}

                  
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Name</label>
                            <input type="text"
                                class="form-control"
                                placeholder="Name"
                                id="name"
                                name="name"
                                required
                                data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                 
                   
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Email Address</label>
                            <input type="email"
                                class="form-control"
                                placeholder="Email Address"
                                id="email"
                                name="email"
                                required
                                data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
      

                   
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="message">Message</label>
                            <textarea rows="5"
                                    class="form-control"
                                    placeholder="Message"
                                    id="body"
                                    name="body"
                                    required
                                    data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
        

                    <br>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit"
                                    class="btn btn-success btn-lg">Enviar
                            </button>
                        </div>

                    </div>
                </form>
              </div>

        </div>
        <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                  
                      
            </div>
    </div>

</section>