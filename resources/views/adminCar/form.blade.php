<div class="row">
    {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
    {{--<div class="form-group">--}}
    {{--<strong>Booking_id:</strong>--}}
    {{--{!! Form::text('id', null, array('placeholder' => 'Booking_id','class' => 'form-control')) !!}--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Car_name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Car name','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Car_model:</strong>
            {!! Form::text('car_model', null, array('placeholder' => 'Car model','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Car_price:</strong>
            {!! Form::text('price', null, array('placeholder' => 'Car price','class' => 'form-control')) !!}
        </div>
    </div>

    {{--{!! Form::model($cars_add_detail, ['method' => 'PATCH','route' => ['adminCar.update', $cars_add_detail->id]]) !!}--}}
    <div class="form-=group">
        {!! Form::label('status', 'Status') !!}
        <select name="status" id="form-control">
            <option>{{$cars_add_detail->status}}</option>
            <option>Available</option>
            <option>Unavailable</option>
        </select>
    </div>
    {{--<button class="btn btn-success" type="submit">Change</button>--}}
    {{--{!! Form::close() !!}--}}


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

