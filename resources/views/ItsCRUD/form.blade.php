<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Comment:</strong>
            {!! Form::text('comment', null, array('placeholder' => 'Comment','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{ Form::select('status', [
               'pending' => 'Pending',
               'inProgress' => 'In Progress',
               'unresolve' => 'Unresolve',
               'resolve' => 'Resolve'
               ]
            ) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

