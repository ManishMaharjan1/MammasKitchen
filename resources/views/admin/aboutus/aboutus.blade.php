@extends('layouts.app')

@section('title','Create')

@push('css')

@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    @if(count($aboutuses) == 1)
                        @foreach($aboutuses as $aboutus)
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">About Us</h4>
                            </div>
                            <div class="card-content">
                                <form method="POST" action="{{ route('aboutus.update',$aboutus->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" name="description">{{$aboutus->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Image</label> <br>
                                            @if($aboutus->image)
                                                <img src="../uploads/item/{{$aboutus->image}}" style="width:90px; height:90px">
                                            @else
                                                <p>No image found</p>
                                            @endif 
                                            <input type="file" name="image" value=" $aboutus->image ">
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="card-content">
                                <form method="POST" action="{{ route('aboutus.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Image</label> 
                                            <input type="file" name="image" >
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush