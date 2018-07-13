<div class="form-group">
    <label for="role_id">Role :</label>
    {{ Form::select('role_id',$roles, null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="permission_id">Permission :</label>
    {{ Form::select('permission_id', $permisions,null, ['class' => 'form-control'])}}
</div>

