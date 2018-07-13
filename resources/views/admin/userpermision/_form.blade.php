<div class="form-group">
    <label for="model_id">User :</label>
    {{ Form::select('model_id', $users,null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="permission_id">Role :</label>
    {{ Form::select('permission_id',$permisions, null, ['class' => 'form-control'])}}
</div>
