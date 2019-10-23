@extends('layouts.frontEnd.app')

@push('frontCSS')
    <link href="{{ asset('frontEnd/css/home/styles.css')}}" rel="stylesheet">
    <link href="{{ asset('frontEnd/css/home/responsive.css')}}" rel="stylesheet">
    <style>
        .favoriteList{
            color: orangered;
        }
    </style>
@endpush

@section('main-content')

<div>
        <div class="main-slider">
            <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
                data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
                data-swiper-breakpoints="true" data-swiper-loop="true" >
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                        <div class="swiper-slide">
                            <a class="slider-category" href="#">
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
        </div><!-- slider -->
    
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

                                    <h4 class="title"><a href="#"><b>{{$post->title}}</b></a></h4>

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
                                        <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                        <li><a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a></li>
                                    </ul>

                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforeach    
    
                </div><!-- row -->
    
                <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>
    
            </div><!-- container -->
        </section><!-- section -->
    </div>    
@endsection

@push('frontJS')
    <script src="{{ asset('frontEnd/common-js/swiper.js')}}"></script>
@endpush