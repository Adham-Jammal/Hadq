{{-- footer --}}

<footer class="footer">
    <div class="container">
        <div class="row ">
            <div class="col-md-2 logo d-flex justify-content-center">
                <img src="{{ Voyager::image($data->logo) }}" alt="logo">

            </div>
            <div class="col-md-3 social-media-links" style="float:right">
                <p style="text-align:left">
                     " Good design is good business " 
                     <br> <small>
                        Thomas Watson Jr
                        </small> 
                </p>
                <div class="social-media">
                    {{-- <i class="fa fa-envelope" aria-hidden="true"></i>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <i class="fa fa-envelope" aria-hidden="true"></i> --}}
                </div>
            </div>
            <div class="col-1">

            </div>
            <div hidden class="col-md-2 footer-contact d-flex col-info justify-content-center" >
                <h5>معلومات التواصل </h5>
                <div class="footer-emails">

                    <p>{{ $data['email_1'] }}</p>
                    <p>{{ $data['email_2'] }}</p>



                </div>
                <div class="footer-fax-tel">
                    <p>{{ $data['phone_1'] }}</p>
                    <p>{{ $data['phone_2'] }}</p>

                </div>
            </div>
            <div class="col-md-2 footer-address d-flex justify-content-center">
                <h5>يمكنكم متابعتنا على </h5>
                <div class="row">

                    <div  class=" col-2">
                        <div class="contact">
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-linkedin"></i>
                              </a>
                        </div>
                       
                    </div>

                    <div  class=" col-2">
                        <div class="contact">
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-instagram"></i>
                              </a>
                        </div>
                       
                    </div>

                    
                    <div  class=" col-2">
                        <div class="contact">
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-twitter"></i>
                              </a>
                        </div>
                       
                    </div>

          
                
                  
                   
       
                  

                  </div>

            </div>
            <div class="col-md-3 rights d-flex justify-content-center">
                <h5>© 2022 Hadq . All Rights Reserved</h5>
                <h5>Powered by <a href="https://sand.business/#Packages"><span class="sand">SAND</span></a>  </h5>
            </div>
        </div>
    </div>
    {{-- <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <a href="#">{{__('index.group')}}</a>

                </div>
                <div class="col-md-6 logo">
                    <img src="{{ Voyager::image($data->logo) }}" alt="logo">

                </div>
            </div>
        </div>
    </div> --}}
</footer>
