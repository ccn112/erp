{{ Form::open(array('url' => 'bugstatus', 'class'=>'needs-validation', 'novalidate')) }}
<div class="modal-body">

    <div class="row">
        <div class="form-group col-12">
            {{ Form::label('title', __('Bug Status Title'),['class'=>'form-label']) }}<x-required></x-required>
            {{ Form::text('title', '', array('class' => 'form-control','required'=>'required', 'placeholder' => __('Enter Bug Status Title'))) }}
        </div>

    </div>
</div>
    <div class="modal-footer">
        <input type="button" value="{{__('Cancel')}}" class="btn  btn-secondary" data-bs-dismiss="modal">
        <input type="submit" value="{{__('Create')}}" class="btn  btn-primary">
    </div>
    {{ Form::close() }}

