@extends('layouts.backEnd.app')

@section('title','Admin')

@push('backCSS')
<link href="{{asset('backEnd/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

@endpush
@section('main-content')

<section class="content">
    
    <div class="container-fluid">
        <a href="{{route('author.post.index')}}" class="btn btn-danger"><i class=" material-icons">chevron_left</i> Back</a>
        @if ($post->is_approved == true)
            <button disabled class="btn btn-success pull-right">
                <i class=" material-icons">done</i>
                Publish
            </button>
            <br>
            @else
        <button disabled class="btn btn-danger pull-right">
                <i class=" material-icons">close</i>
                publish
        </button>
        <br>
        @endif
        <!-- Exportable Table -->                
        <br>

        <div class="row clearfix">
            <div class="col-lg-8  col-md-12  col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                                {{ $post->title}}
                        <small>postted by <strong> <a href="#">{{$post->user->name}}</a> </strong> on {{$post->created_at->toFormattedDateString()}}</small>
                        </h2>
                    </div>
                    <div class="body">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4  col-md-12  col-xs-12">
                <div class="card">
                    <div class="header bg-green">
                        <h2>
                            Category
                        </h2>
                    </div>
                    <div class="body">
                        @foreach ($post->categories as $category)
                            <span class=" label  bg-deep-orange"> {{$category->category}}</span>
                        @endforeach
                    </div>
                </div>
                <div class="card">
                    <div class="header bg-deep-orange ">
                        <h2>
                            Tag
                        </h2>
                    </div>
                    <div class="body">
                        @foreach ($post->tags as $tag)
                            <span class=" label  bg-light-blue"> {{$tag->tag}}</span>
                        @endforeach
                    </div>
                </div>
            
                <div class="card">
                    <div class="header bg-deep-purple">
                        <h2>
                            Post Image
                        </h2>
                    </div>
                    <div class="body">
                        <img class=" img-responsive thumbnail" src="{{ asset('storage/postImage') }}/{{$post->image}}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
    

@endsection

@push('backJS')

<script src="{{asset('backEnd/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<script src="{{asset('backEnd/plugins/tinymce/tinymce.js')}}"></script>
 <script type="text/javascript">
     $(function () {
 
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '{{asset("backEnd/plugins/tinymce")}}';
    });
 
 </script>
@endpush