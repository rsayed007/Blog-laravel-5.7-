@extends('layouts.backEnd.app')

@section('title','Admin')

@push('backCSS')
    
@endpush
@section('main-content')

<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12  col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Tag
                                <small>Update Your Tag</small>
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.tag.update',$tag->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="tag" name="tag" class="form-control" value="{{$tag->tag}}">
                                        <label class="form-label">Tag</label>
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