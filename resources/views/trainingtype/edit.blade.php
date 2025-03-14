
    {{Form::model($trainingType,array('route' => array('trainingtype.update', $trainingType->id), 'method' => 'PUT', 'class'=>'needs-validation', 'novalidate')) }}
    <div class="modal-body">

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('name',__('Name'),['class'=>'form-label'])}}<x-required></x-required>
                {{Form::text('name',null,array('class'=>'form-control','required'=> 'required', 'placeholder' => __('Enter Training Type Name')))}}
            </div>
        </div>

    </div>
    </div>

    <div class="modal-footer">
        <input type="button" value="{{__('Cancel')}}" class="btn btn-secondary" data-bs-dismiss="modal">
        <input type="submit" value="{{__('Update')}}" class="btn btn-primary">
    </div>
    {{Form::close()}}

