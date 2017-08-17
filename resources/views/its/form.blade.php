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
               'Pending' => 'Pending',
               'In Progress' => 'In Progress',
               'Unresolved' => 'Unresolved',
               'Resolved' => 'Resolved'
               ]
            ) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

