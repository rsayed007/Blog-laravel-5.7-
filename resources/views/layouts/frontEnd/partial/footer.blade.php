<footer>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <a class="logo" href="#"><img src="{{ asset('storage/bdlg.png')}}" style="width: 185px; " alt="BDLG"></a>
                    <p class="copyright">BDLG @ 2019. All rights reserved.</p>
                    {{-- <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> --}}
                    <ul class="icons">
                        <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                    <div class="footer-section">
                    <h4 class="title"><b>CATAGORIES</b></h4>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="#">{{strtoupper($category->category)}}</a></li>
                        @endforeach
                    </ul>
                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <h4 class="title"><b>SUBSCRIBE</b></h4>
                    <div class="input-area">
                        <form  action="{{route('user.subscriber')}}"  method="POST">
                            @csrf
                            <input class="email-input" type="text" name="email" placeholder="Enter your email">
                            <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                        </form>
                    </div>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

        </div><!-- row -->
    </div><!-- container -->
</footer>


<!-- SCIPTS -->
<script src="{{ asset('frontEnd/common-js/jquery-3.1.1.min.js')}}"></script>

<script src="{{ asset('frontEnd/common-js/tether.min.js')}}"></script>

<script src="{{ asset('frontEnd/common-js/bootstrap.js')}}"></script>

<script src="{{ asset('frontEnd/common-js/swiper.js')}}"></script>

<script src="{{ asset('frontEnd/common-js/scripts.js')}}"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<script>
@if ($errors->any())
  @foreach ($errors->all() as $error)
      toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
      });
  @endforeach
@endif
</script>