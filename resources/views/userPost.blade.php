@extends('layouts.frontEnd.app')

@section('title','BDLG')

@push('frontCSS')
<link href="{{ asset('frontEnd/css/categoryPost/styles.css')}}" rel="stylesheet">
<link href="{{ asset('frontEnd/css/categoryPost/responsive.css')}}" rel="stylesheet">
<style>
    .favoriteList{
        color: orangered;
    }
    .titleImage {
        height: 400px;
        width: 100%;
        background-size: cover;
        margin: 0;
        background-image: url( '{{asset('storage/category') }}');

    }
    .aboutAuthorImage{
        margin-top: 0 !important;
        width: 250px !important;
        height: 225px !important;
        border-radius: 200px 200px 0 0 !important;
    }
    .aboutAuthorBio{
        padding: 0px 25px;
    }
</style>
@endpush

@section('main-content')

<div class="slider display-table center-text">
		<h1 class="title display-table-cell"><b>Bangladesh Local Guides</b></h1>
	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="row">
                        @foreach ($posts as $post)
                            
                            <div class="col-md-6 col-sm-12">
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
                                                                })" ><i class="ion-like"></i>{{ $post->favoriteToUser()->count()}}</a>
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
                            </div><!-- col-md-6 col-sm-12 -->
                        @endforeach
					</div><!-- row -->

                    {{ $posts->links() }}    


				</div><!-- col-lg-8 col-md-12 -->
{{-- about author side bar --}}
				<div class="col-lg-4 col-md-12 ">

					<div class="single-post info-area ">

						<div class="about-area">
                            <a class="avatar aboutAuthorImage" href="#"><img src="{{ asset('storage/profileImage') }}/{{$post->user->image}}" alt="Profile Image"></a>

                            <h4 class="title"><b>ABOUT AUTHOR</b></h4>

                            <h3 class="aboutAuthorBio capitalize">{{ucwords($post->user->name)}}</h3>
                            <div class="heading">
                                <h5>Total Post: <b> <span class=" badge badge-primary">{{$posts->count()}}</span></b></h5>
                                <h6>BDLG Point: <b> <span class=" badge badge-primary">{{$posts->count()*5+10}}</span></b></h6>
                            </div>
							<p class="aboutAuthorBio">{{$post->user->about}}</p>
						</div>
						
					</div><!-- info-area -->

				</div><!-- col-lg-4 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- section -->

@endsection

@push('frontJS')



@endpush