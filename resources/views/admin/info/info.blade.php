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
                    @if(count($infos) == 1)
                        @foreach($infos as $info)
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Information</h4>
                            </div>
                            <div class="card-content">
                                <form method="POST" action="{{ route('info.update',$info->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">StreetName</label>
                                                <input type="text" class="form-control" name="streetname" value="{{ $info->streetname }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Number</label>
                                                <input type="text" class="form-control" name="number" value="{{ $info->number }}"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{ $info->email }}">
                                            </div>
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
                                <form method="POST" action="{{ route('info.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">StreetName</label>
                                                <input type="text" class="form-control" name="streetname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Number</label>
                                                <input type="text" class="form-control" name="number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
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