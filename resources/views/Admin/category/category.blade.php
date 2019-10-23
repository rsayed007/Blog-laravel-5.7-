@extends('layouts.backEnd.app')

@section('title','Category')

@push('backCSS')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('backEnd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush
@section('main-content')

<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{-- table --}}
                    <div class="row">
                        <div class="col-sm-7">
                                <div class="card">
                                        <div class="header">
                                            <h2>
                                                CATEGORY LIST
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @foreach ($categories as $category) 
                                                            <tr>
                                                                <td>{{$category->category}}</td>
                                                                <td>{{$category->created_at->format('d-m-Y')}}</td>
                                                                <td>
                                                                    <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-success">
                                                                        <i class="material-icons">edit</i>
                                                                    </a>
                                                                    
                                                                    <button type="button" onclick="deleteTag({{$category->id}})" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                                    <form id="category_delete_form_{{$category->id}}" action="{{route('admin.category.destroy',$category->id)}}" method="post" style="display :none;" >
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
                        {{-- tag form --}}
                        <div class="col-sm-4" style="box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);">
                            <h3 class="card-inside-title">Create New Category</h3>
                            <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}">
                                            <label class="form-label">Category name</label>
                                        </div>
                                        <div><br></div>
                                        <div class="form-line">
                                            <input type="file" name="image" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}">
                                            
                                        </div>
                                        @if ($errors->has('category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class=" btn-block btn btn-lg btn-success">Save</button>
                            </form>
                            
                        </div>
                        {{-- tag form --}}

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
                document.getElementById('category_delete_form_'+id).submit()
            }
            })
        }
    
    </script>

@endpush