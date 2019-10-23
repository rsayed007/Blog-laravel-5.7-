@extends('layouts.backEnd.app')

@section('title','Admin')

@push('backCSS')
<link href="{{asset('backEnd/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

@endpush
@section('main-content')

<section class="content">
    <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
            <div class="container-fluid">
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-8  col-md-12  col-xs-12 col-lg-auto ">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Create New Post
                                    <small>write your feelings</small>
                                </h2>
                            </div>
                            <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="title" name="title" class="form-control" value="">
                                        <label class="form-label">Post Title</label>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <label for="image">Fetucher Image</label>
                                    <input type="file" name="image" ><br>
                                </div>
                              
                                <div class="form-group">
                                    <input class=" filled-in" type="checkbox" id="publish" name="status" value="1" >
                                    <label class="form-check-label" for="publish" > <h6>Publish</h6></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-12  col-xs-12 col-lg-auto ">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Category & Tag
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <p>
                                        <b>Category</b>
                                    </p>
                                    <select class="form-control show-tick {{ $errors->has('catagories')? 'focusd error': ''}}" name="categories[]" id='categories' multiple>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="row clearfix">
                                    <p>
                                        <b>Tag</b>
                                    </p>
                                    <select class="form-control show-tick {{$errors->has('tags')? 'focusd error' : ''}}" name="tags[]" id="tags" multiple>
                                            @foreach ($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->tag}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Exportable Table -->
            </div>
            <section >
                <div class="container-fluid">
                    <!-- TinyMCE -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <textarea id="tinymce" name="body">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# TinyMCE -->
                </div>
            </section>
        </form>

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