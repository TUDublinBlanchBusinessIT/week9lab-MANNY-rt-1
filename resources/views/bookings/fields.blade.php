<!-- Bookingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::text('bookingdate', null, ['class' => 'form-control','id'=>'bookingdate']) !!}
</div>

<!-- Starttime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starttime', 'Starttime:') !!}
    {!! Form::text('starttime', null, ['class' => 'form-control']) !!}
</div>

<!-- Endtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endtime', 'Endtime:') !!}
    {!! Form::text('endtime', null, ['class' => 'form-control']) !!}
</div>

<!-- Memberid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memberid', 'Memberid:') !!}
    <select name="memberid" class="form-control">
    @foreach($members as $members)
        <option value='{{$members->id}}'>{{$members}}</option>
    @endforeach
    </select>
</div>

<!-- Courtid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courtid', 'Courtid:') !!}
    <select name="courtid" class="form-control">
    @foreach($courts as $courts)
        <option value='{{$courts->id}}'>{{$courts}}</option>
    @endforeach
    </select>
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>