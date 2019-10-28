@extends('layouts.frontEnd.app')

@section('title','BDLG')

@push('frontCSS')
<link href="{{ asset('frontEnd/css/singlePost/styles.css')}}" rel="stylesheet">
<link href="{{ asset('frontEnd/css/singlePost/responsive.css')}}" rel="stylesheet">
<style>
    .favoriteList{
        color: orangered;
    }
    .titleImage {
        height: 400px;
        width: 100%;
        background-size: cover;
        margin: 0;
        background-image: url( '{{asset('storage/postImage') }}/{{$posts->image}}' );
    }
</style>
@endpush

@section('main-content')

<div class="image_body">
    <div class="titleImage"></div>
</div>

<section class="post-area section">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-12 no-right-padding">

                <div class="main-post">

                    <div class="blog-post-inner">

                        <div class="post-info">

                            <div class="left-area">
                                <a class="avatar" href="#"><img src="{{ asset('storage/profileImage') }}/{{$posts->user->image}}" alt="Profile Image"></a>
                            </div>

                            <div class="middle-area">
                                <a class="name" href="#"><b>{{$posts->user->name}}</b></a>
                                <h6 class="date">on {{$posts->created_at->diffForHumans()}}</h6>
                            </div>

                        </div><!-- post-info -->

                        <h3 class="title"><a href="#"><b>{{ $posts->title }}</b></a></h3>

                        <div class="para">
                            {!! html_entity_decode($posts->body ) !!}
                        </div>
                        <ul class="tags">
                            @foreach ($posts->tags as $tag)
                                <li><a href="#">{{$tag->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- blog-post-inner -->

                    <div class="post-icons-area">
                        <ul class="post-icons">
                            <li>
                                    @guest
                                        <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. you need to login first','Info',{
                                            closeButton:true,
                                            progressBar: true,
                                        })" ><i class="ion-heart"></i>{{ $posts->favoriteToUser()->count()}}</a>
                                    @else
                                        <a href="javascript:void(0);" onclick="document.getElementById('favorite-post-{{$posts->id}}').submit();"
                                            class="{{!Auth::user()->favoriteToPost->where('pivot.post_id', $posts->id)->count() == 0 ? 'favoriteList': ''}}">
                                            <i class="ion-heart"></i>
                                            {{ $posts->favoriteToUser()->count()}}
                                        </a>
                                        <form id="favorite-post-{{$posts->id}}" style='display:none' action="{{route('favorite.post',$posts->id)}}" method="post">
                                            @csrf
                                        </form>
                                    @endguest
                            </li>
                            <li><a href="#post_comment"><i class="ion-chatbubble"></i>{{$posts->comments->count()}}</a></li>
                            <li><a ><i class="ion-eye"></i>{{$posts->view_count}}</a></li>
                        </ul>

                        <ul class="icons">
                            <li>SHARE : </li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-pinterest"></i></a></li>
                        </ul>
                    </div>

                </div><!-- main-post -->
            </div><!-- col-lg-8 col-md-12 -->

            <div class="col-lg-4 col-md-12 no-left-padding">

                <div class="single-post info-area">

                    <div class="sidebar-area about-area">
                        <h4 class="title"><b>ABOUT AUTHOR</b></h4>
                        <p>{{$posts->user->about}}</p>
                    </div>

                    <div class="tag-area">

                        <h4 class="title"><b>CATEGORY</b></h4>
                        <ul>
                            @foreach ($posts->categories as $category)
                            <li><a href="#">{{$category->category}}</a></li>
                                
                            @endforeach
                        </ul>

                    </div><!-- subscribe-area -->

                </div><!-- info-area -->

            </div><!-- col-lg-4 col-md-12 -->

        </div><!-- row -->

    </div><!-- container -->
</section><!-- post-area -->


<section class="recomended-area section">
    <div class="container">
        <div class="row">


            @foreach ($randomPost as $post)
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

    </div><!-- container -->
</section>

<section class="comment-section" id="post_comment">
    <div class="container">
        <h4><b>POST COMMENT</b></h4> <br>
        <div class="row">

            <div class="col-lg-8 col-md-12">

                @if ($posts->comments->count() > 0)
                    <h4><b>COMMENTS({{$posts->comments->count()}})</b></h4>
                    @foreach ($posts->comments as $comment)
                        <div class="commnets-area ">

                            <div class="comment">

                                <div class="post-info">

                                    <div class="left-area">
                                        <a class="avatar" href="#"><img src="{{asset('storage/profileImage') }}/{{$comment->user->image}}" alt="Profile Image"></a>
                                    </div>

                                    <div class="middle-area">
                                        <a class="name" href="#"><b>{{$comment->user->name}}</b></a>
                                        <h6 class="date">on {{$comment->created_at->diffForHumans()}}</h6>
                                    </div>


                                </div><!-- post-info -->

                                <p>{{$comment->comment}}</p>

                            </div>

                        </div><!-- commnets-area -->
                    @endforeach
                @else
                    <a class="more-comment-btn" href="#"><b>Give the First Comment</b></a>
                @endif

                {{-- comment form start --}}
                <div class="comment-form">
                        <form method="post" action="{{route('add.comment',$posts->id)}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea name="comment" rows="2" class="text-area-messge form-control"
                                        placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
                                </div><!-- col-sm-12 -->
                                <div class="col-sm-12">
                                    <button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
                                </div><!-- col-sm-12 -->
    
                            </div><!-- row -->
                        </form>
                    </div><!-- comment-form -->

            </div><!-- col-lg-8 col-md-12 -->

        </div><!-- row -->

    </div><!-- container -->
</section>


@endsection

@push('frontJS')



@endpush