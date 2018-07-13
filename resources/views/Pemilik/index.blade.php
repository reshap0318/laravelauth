@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
<a class="btn" href="{{ route('pemilik.create') }}"><i class="icon-plus"></i> ADD DATA</a>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" data-target="#roll" aria-expanded="true">
                                <i class="fa fa-align-justify"></i>GROUND HANDLING AGENT
                        </div>
                        <div class="card-body collapse show" id="roll" style="">
                            <table class="table table-striped table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px">NO</th>
                                        <th class="text-center">GROUND HANDLING AGENT</th>
                                        <th class="text-center">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; ?>
                                @foreach($pemiliks as $pemilik)
                                  <tr>
                                    <td class="text-center" style="width: 50px">{{ ++$no }}</td>
                                    <td>{{ $pemilik->namaKepemilikan }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('pemilik.show', [$pemilik->id]) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"> </i></a>
                                        <a href="{{ route('pemilik.edit', [$pemilik->id]) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-pencil"> </i></a>
                                        <button onclick="event.preventDefault();confirmDeletion('{{ route('pemilik.destroy', [$pemilik->id]) }}');" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"> </i></button>
                                    </td>
                                  </tr>   
                                @endforeach                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<form style="display: none" action="#" method="post" id="form-delete">
    @csrf
    @method('delete')
</form>

@endsection

@section('judul')
    DATA MASTER
@endsection

@push('javascript')
<script>
    function confirmDeletion(url){
        if(confirm('Anda yakin akan menghapus Kepemilikan ini? ')){
            form = document.querySelector('#form-delete');
            form.action = url;
            form.submit();
        }
    }

    $(document).ready(function() {
        $('#table').DataTable( {
            "info":     false,
            "order": [[ 0, "asc" ]],
        } );
    } );
</script>
@endpush



