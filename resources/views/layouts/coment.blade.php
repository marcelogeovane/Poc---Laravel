<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Comente</h2>
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><h5>EM MANUTENÇÃO</h5>

                    <form method="post" action="{{url('/posts')}}"> 

                    {{csrf_field()}}

                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nome</label>
                                <input type="text"
                                    class="form-control"
                                    placeholder="Nome"
                                    id="name"
                                    name="name"
                                    required
                                    data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        
                       
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="exampleInputPassword1">Mensagem</label>
                                <textarea rows="5"
                                        class="form-control"
                                        placeholder="Mensagem"
                                        id="message"
                                        name="message"
                                        required
                                        data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        
                        <br>
                        
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Comentar </button>
                            </div>
                        </div>
                    </form>
                    @include('layouts.errors')
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                  
                      
            </div>
        </div>
    </section>