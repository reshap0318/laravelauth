@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
<a class="btn" href="{{ route('role.create') }}"><i class="icon-plus"></i> Add Data</a>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#tableheader" aria-expanded="true">
                            <i class="fa fa-align-justify"></i>List Role
                    </div>
                    <div class="card-body collapse show" id="tableheader" style="">
                        <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 20px">No</th>
                                    <th class="text-center">Role Name</th>
                                    <th class="text-center">Role Guard</th>
                                    <th class="text-center" style="width: 90px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; ?>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td class="text-center" style="width: 20px">{{ ++$no }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td class="text-center">{{ $role->guard_name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('role.edit', [$role->id]) }}" class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-pencil"> </i>
                                                </a>
                                                <button onclick="event.preventDefault();confirmDeletion('{{ route('role.destroy', [$role->id]) }}');" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa fa-trash"> </i>
                                                </button>
                                                
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
    LIST OF VEHICHLE
@endsection

@push('javascript')
<script>
    function confirmDeletion(url){
        if(confirm('Anda yakin akan menghapus Role ini? ')){
            form = document.querySelector('#form-delete');
            form.action = url;
            form.submit();
        }
    }

    $(document).ready(function() {
        $('#table').DataTable( {
            "info":     false,
            "order": [[ 0, "asc" ]]
        } );
    } );
</script>
@endpush



