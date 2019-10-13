@extends('layouts.backEnd.app')

@section('title','Admin')

@push('backCSS')
    
@endpush
@section('main-content')

<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-6  col-md-12  col-xs-12 col-lg-auto ">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Category
                                <small>Update Your Tag</small>
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="category" name="category" class="form-control" value="{{$category->category}}">
                                        <label class="form-label">Category</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="file" id="image" name="image" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    

@endsection

@push('backJS')


@endpush