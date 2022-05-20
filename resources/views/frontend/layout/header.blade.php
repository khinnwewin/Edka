@include('frontend.layout.css')
<section class="mobile">
    <div class="ed-mob-menu">
           
        <div class="ed-mm-menu">
            <a href="#" class="ed-micon"><i class="fa fa-bars"></i></a>
            <div class="ed-mm-inn">
                <a href="#" class="ed-mi-close"><i class="fa fa-times"></i></a>
                <h4><a href="{{url('/')}}" style="color:#223358;">Home</a></h4>
               
                <h4><a href="{{url('survey')}}" style="color:#223358;">Web Survey Form</a></h4>
                        
        </div>
            </div>
        </div>
    </div>
</section>
<section class="head">
        <div class="top-logo" data-spy="affix" data-offset-top="250" style="">
            <div class="container">
                <div class="row">
                   <div class="col-md-6">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{url('/')}}" style="color:white;">Home</a>
                                </li>
                                
                                <li><a href="{{url('survey')}}" style="color:white;">Web Survey Form</a></li> 
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                          
            </div>
            
        </div>
    </section>
@include('frontend.layout.javascript')
    

  