<div class="row">
    {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
        {{--<div class="form-group">--}}
            {{--<strong>Booking_id:</strong>--}}
            {{--{!! Form::text('id', null, array('placeholder' => 'Booking_id','class' => 'form-control')) !!}--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Booking_suburb:</strong>
            {!! Form::text('suburb', null, array('placeholder' => 'Booking_suburb','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Booking_postcode:</strong>
            {!! Form::text('state', null, array('placeholder' => 'Booking_postcode','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

