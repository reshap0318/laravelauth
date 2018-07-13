@extends('blank')

{{-- Menu Breadcrumb --}}
@section('breadcrumb')
<a class="btn" href="{{ route('akses.createf',['user-role']) }}"><i class="icon-plus"></i> Add Data</a>
@endsection

{{-- Content Utama --}}
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#tableheader" aria-expanded="true">
                            <i class="fa fa-align-justify"></i>List RoleUser
                    </div>
                    <div class="card-body collapse show" id="tableheader" style="">
                        <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 20px">No</th>
                                    <th class="text-center">User Name</th>
                                    <th class="text-center">Model Type</th>
                                    <th class="text-center">Role Name</th>
                                    <th class="text-center" style="width: 90px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; ?>
                                    @foreach($roleusers as $roleuser)
                                        <tr>
                                            <td class="text-center" style="width: 20px">{{ ++$no }}</td>
                                            <td>{{ $roleuser->userid->username }}</td>
                                            <td class="text-center">{{ $roleuser->model_type }}</td>
                                            <td class="text-center">{{ $roleuser->roleid->name }}</td>
                                            <td class="text-center">
                                                <button onclick="event.preventDefault();confirmDeletion('{{ route('akses.deletef', ['user-role',$roleuser->roleid->name,$roleuser->userid->id]) }}');" class="btn btn-sm btn-outline-danger">
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
        if(confirm('Anda yakin akan menghapus ROLE USER ini? ')){
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



