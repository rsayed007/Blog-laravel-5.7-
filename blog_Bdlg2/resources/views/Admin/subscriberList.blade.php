@extends('layouts.backEnd.app')

@section('title','POst')

@push('backCSS')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('backEnd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
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
                                                Subscriber LIST
                                                <span class=" badge bg-deep-orange" >{{ $subscribers->count() }}</span>
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N.</th>
                                                            <th>Email</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>S.N.</th>
                                                            <th>Email</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @foreach ($subscribers as $subscriber) 
                                                            <tr>
                                                                <td>{{$subscriber->id}}</td>
                                                                <td>{{$subscriber->email}}</td>
                                                                <td>{{$subscriber->created_at->toFormattedDateString()}}</td>
                                                                <td>
                                                                    <button type="button" onclick="deleteSubscriber({{$subscriber->id}})" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                                    <form id="subscriber_delete_form_{{$subscriber->id}}" action="{{route('admin.subscriber.delete',$subscriber->id)}}" method="post" style="display :none;" >
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
        function deleteSubscriber(id){
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
                document.getElementById('subscriber_delete_form_'+id).submit()
            }
            })
        }
    
    </script>

@endpush