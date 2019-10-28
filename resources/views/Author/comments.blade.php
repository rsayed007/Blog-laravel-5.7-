@extends('layouts.backEnd.app')

@section('title','Comment')

@push('backCSS')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('backEnd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <style>
        .media-right{
            padding-right: 20px;
        }
    </style>
@endpush
@section('main-content')
<section class="content">
        <div class="container-fluid">
                
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{-- table --}}
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="card">
                                        <div class="header">
                                            <h2>
                                                Favorite Lists
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Comment Author Info</th>
                                                            <th>Post Info</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Comment Author</th>
                                                            <th>Post Info</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @foreach ($posts as  $key=>$post) 
                                                            @foreach ($post->comments as $comment)
                                                                
                                                                <tr>
                                                                    <td class="col-sm-5">
                                                                        <div class="media ">
                                                                            <div class="media-right">
                                                                                <a href="{{route('post.details',$comment->post->slug)}} ">
                                                                                    <img src="{{asset('storage/profileImage') }}/{{$comment->user->image}}" width="50" height="50" alt="{{$comment->user->image}}">
                                                                                </a>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="{{route('post.details',$comment->post->slug)}}">
                                                                                    <h4 class="media-heading">{{$comment->user->name}} <br><small>{{$comment->created_at->diffForHumans()}}</small></h4>
                                                                                </a>
                                                                                <p>{{str_limit($comment->comment,20)}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="col-sm-5">
                                                                        <div class="media ">
                                                                            <div class="media-right">
                                                                                <a href="{{route('post.details',$comment->post->slug)}} ">
                                                                                    <img src="{{asset('storage/postImage') }}/{{$comment->post->image}}" width="50" height="50" alt="{{$comment->post->image}}">
                                                                                </a>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="{{route('post.details',$comment->post->slug)}}">
                                                                                    <h4 class="media-heading">{{str_limit($comment->post->title,40)}} <br><small>{{$comment->post->created_at->diffForHumans()}}</small></h4>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" onclick="deleteComment({{$comment->id}})" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                                        <form id="comment_delete_form_{{$comment->id}}" action="{{route('author.comment.destroy',$comment->id)}}" method="post" style="display :none;" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                <hr>
                                                            @endforeach

                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        {{-- Table End --}}

                    </div>

                </div>
                
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    

@endsection

@push('backJS')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('backEnd/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('backEnd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backEnd/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <script src="{{ asset('backEnd/js/pages/tables/jquery-datatable.js')}}"></script>

    <script>
        function deleteComment(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('comment_delete_form_'+id).submit()
            }
            })
        }
    </script>

@endpush