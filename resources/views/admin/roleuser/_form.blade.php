
<div class="form-group">
    <label for="model_id">User :</label>
    {{ Form::select('model_id', $users,null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="role_id">Role :</label>
    {{ Form::select('role_id',$roles, null, ['class' => 'form-control'])}}
</div>
