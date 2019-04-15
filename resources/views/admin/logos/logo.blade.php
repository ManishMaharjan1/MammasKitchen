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
                    @if(count($logos) == 1)
                        @foreach($logos as $logo)
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Logo</h4>
                            </div>
                            <div class="card-content">
                                <form method="POST" action="{{ route('logo.update',$logo->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Image</label> <br>
                                            @if ($logo->image)
                                                <img src="../uploads/logo/{{$logo->image}}" style="width:90px; height:90px">
                                            @else
                                                <p>No image found</p>
                                            @endif
                                            <input type="file" name="image" value="{{ $logo->image }}">
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
                                <form method="POST" action="{{ route('logo.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Image</label>
                                            <input type="file" name="image">
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