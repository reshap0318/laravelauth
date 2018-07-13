@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
    <a class="btn" onclick="event.preventDefault();confirmDeletion('{{ route('pemilik.destroy', [$pemiliks->id]) }}');"><i class="icon-trash"></i> DELETE</a>
    <a class="btn" href="{{ route('pemilik.edit', [ $pemiliks->id]) }}"><i class="icon-pencil"></i> EDIT</a>
    <a class="btn" href="{{ route('pemilik.index') }}"><i class="icon-list"></i> LIST</a>

    <form style="display: none" action="#" method="post" id="form-delete">
        @csrf
        @method('delete')
    </form>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12">
        
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i>GROUND HANDLING AGENT
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">GROUND HANDLING AGENT</label>
                        <div class="col-md-9">
                            <p class="col-form-label">{{ $pemiliks->namaKepemilikan }}</p>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('judul')
    DETAILS {{ $pemiliks->namaKepemilikan }}
@endsection

@push('javascript')
<script>
    function confirmDeletion(url){
        if(confirm('Anda yakin akan menghapus pemiliks ini? ')){
            form = document.querySelector('#form-delete');
            form.action = url;
            form.submit();
        }
    }
</script>