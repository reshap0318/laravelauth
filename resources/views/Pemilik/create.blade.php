@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
    <a class="btn" href="{{ route('pemilik.index') }}"><i class="icon-list"></i> LIST </a>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12"> 
        <div class="card">
            
            {!! Form::open(['route' => 'pemilik.store', 'method' => 'post'] ) !!}
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> ADD DATA
            </div>
            
            <div class="card-body">
                
                @include('admin.pemilik._form')
                
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> SAVE</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> RESET</button>
            </div>
            
            {{ Form::close() }}
            
        </div>
    </div>
</div>
@endsection

@section('judul')
    CREATE GROUND HANDLING AGENT
@endsection