@extends('layouts.frontEnd.app')

@push('frontCSS')
    <link href="{{ asset('frontEnd/css/home/styles.css')}}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/home/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('frontEnd/catSlider/style.css')}}" rel="stylesheet">
    <style>
        .favoriteList{
            color: orangered;
        }
        .body-cat-slider{
            position:relative;
            margin:0 auto;
            top:0px;
            left:0px;
            width:980px;
            height:80px;
            overflow:hidden;
            visibility:hidden;
        }
        .cat-slider{
            cursor:default;
            position:relative;
            top:0px;
            left:0px;
            width:980px;
            height:80px;
            overflow:hidden;
        }
        
        
    </style>
@endpush

@section('main-content')
{{-- main slider --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('storage/107th.jpg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hello</h5>
            <p>Hello Good People</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('storage/hello.jpg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hello</h5>
            <p>Hello Good People</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('storage/107th.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hello</h5>
            <p>Hello Good People</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('storage/hello.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hello</h5>
            <p>Hello Good People</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
{{-- main slidaer end --}}
{{-- category slidaer  --}}
<!-- partial:index.partial.html -->
<div id="jssor_1" class="body-cat-slider">
    <!-- Loading Screen -->
    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" class="cat-slider" >
        @foreach ($categories as $category)
            <div>
                <a  href="{{route('category.post',$category->slug)}}"><img data-u="image" <img src="{{ asset('storage/category/slider') }}/{{$category->image}}"  alt="{{$category->category}}" /></a>
            </div>
            
        @endforeach
                
    </div>
</div>
<!-- partial -->
{{-- category slider end --}}

<div>
    
    {{-- <div class="main-slider">
        <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="true"
            data-swiper-speed="500" data-swiper-autoplay="1000" data-swiper-margin="0" data-swiper-slides-per-view="4"
            data-swiper-breakpoints="true" data-swiper-loop="true" >
            <div class="swiper-wrapper">
                @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <a class="slider-category" href="{{route('category.post',$category->slug)}}">
                            <div class="blog-image"><img src="{{ asset('storage/category/slider') }}/{{$category->image}}" alt="Blog Image"></div>
    
                            <div class="category">
                                <div class="display-table center-text">
                                    <div class="display-table-cell">
                                        <h3><b>{{$category->category}}</b></h3>
                                    </div>
                                </div>
                            </div>
    
                        </a>
                    </div><!-- swiper-slide -->
                @endforeach
            </div><!-- swiper-wrapper -->
        </div><!-- swiper-container -->
    </div><!-- slider --> --}}

    <section class="blog-area section">
        <div class="container">

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                <div class="blog-image"><img src="{{asset('storage/postImage') }}/{{$post->image}}" title="{{$post->title}}" alt="{{$post->title}}"></div>

                                <a class="avatar" href="#"><img src="{{ asset('storage/profileImage') }}/{{$post->user->image}}" alt="Profile Image"></a>

                                <div class="blog-info">

                                    <h4 class="title"><a href="{{route('post.details',$post->slug)}}"><b>{{$post->title}}</b></a></h4>

                                    <ul class="post-footer">
                                        <li>
                                            @guest
                                                <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. you need to login first','Info',{
                                                    closeButton:true,
                                                    progressBar: true,
                                                })" ><i class="ion-heart"></i>{{ $post->favoriteToUser()->count()}}</a>
                                            @else
                                                <a href="javascript:void(0);" onclick="document.getElementById('favorite-post-{{$post->id}}').submit();"
                                                    class="{{!Auth::user()->favoriteToPost->where('pivot.post_id', $post->id)->count() == 0 ? 'favoriteList': ''}}">
                                                    <i class="ion-heart"></i>
                                                    {{ $post->favoriteToUser()->count()}}
                                                </a>
                                                <form id="favorite-post-{{$post->id}}" style='display:none' action="{{route('favorite.post',$post->id)}}" method="post">
                                                    @csrf
                                                </form>
                                            @endguest

                                        
                                        </li>
                                        <li><a href="#"><i class="ion-chatbubble"></i>{{$post->comments->count()}}</a></li>
                                        <li><a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a></li>
                                    </ul>

                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforeach    
            </div><!-- row -->

            {{ $posts->links() }}

        </div><!-- container -->
    </section><!-- section -->
</div>    
@endsection

@push('frontJS')
    <script src="{{ asset('frontEnd/common-js/swiper.js')}}"></script>
    <script src="{{ asset('frontEnd/catSlider/script.js')}}"></script>
@endpush