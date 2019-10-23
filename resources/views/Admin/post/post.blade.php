@extends('layouts.backEnd.app')

@section('title','POst')

@push('backCSS')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('backEnd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush
@section('main-content')
<section class="content">
        <div class="container-fluid">
            <div> 
                <a href="{{route('admin.post.create')}}" class="btn btn-success"><i class="material-icons">add</i>Add New Post</a> </br></br>
            </div>
                
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{-- table --}}
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="card">
                                        <div class="header">
                                            <h2>
                                                Post LIST
                                                <span class=" badge bg-deep-orange" >{{ $posts->count() }}</span>
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Author</th>
                                                            <th>View</th>
                                                            <th>Created At</th>
                                                            <th>Status</th>
                                                            <th>Is Publish</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Author</th>
                                                            <th>View</th>
                                                            <th>Created At</th>
                                                            <th>Status</th>
                                                            <th>Is Publish</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @foreach ($posts as $post) 
                                                            <tr>
                                                                <td>{{$post->title}}</td>
                                                                <td>{{$post->user->name}}</td>
                                                                <td>{{$post->view_count}}</td>
                                                                <td>{{$post->created_at}}</td>
                                                                <td>
                                                                    @if ($post->status == true)
                                                                        <span class=" badge bg-blue">Pilsish </span>
                                                                    @else
                                                                        <span class=" badge bg-pink">Panding </span>
                                                                        
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($post->is_approved == true)
                                                                        <span class=" badge bg-green">Approved </span>
                                                                    @else
                                                                        <span class=" badge bg-pink">Panding </span>
                                                                        
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('admin.post.show',$post->id)}}" class="btn btn-warning">
                                                                        <i class="material-icons">visibility</i>
                                                                    </a>
                                                                    <a href="{{route('admin.post.edit',$post->id)}}" class="btn btn-success">
                                                                        <i class="material-icons">edit</i>
                                                                    </a>
                                                                    
                                                                    <button type="button" onclick="deleteTag({{$post->id}})" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                                    <form id="post_delete_form_{{$post->id}}" action="{{route('admin.post.destroy',$post->id)}}" method="post" style="display :none;" >
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </td>
                                                            </tr>
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

    <script  type="text/javascript" >
        function deleteTag(id){
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
                document.getElementById('post_delete_form_'+id).submit()
            }
            })
        }
    
    </script>

@endpush