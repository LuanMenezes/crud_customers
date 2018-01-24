@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Customer
                        <a class="pull-right" href="{{url('customers')}}">List Customers</a>
                    </div>
                    @if(Request::is('*/edit'))
                        {!! Form::model($customer, ['method' => 'PATCH', 'url' => 'customers/'.$customer->id]) !!}
                    @else
                        {!! Form::open(['url'=> 'customers/save']) !!}
                    @endif
                    <div class="panel-body">
                        @if(Session::has('msg_success'))
                            <div class="alert alert-success">
                                {{Session::get('msg_success')}}
                            </div>
                        @endif

                        {!! Form::label('name','Name') !!}
                        {!! Form::input('text','name',null,['class'=>'form-control','auto-focus','placeholder'=>'Name']) !!}

                        {!! Form::label('address','Address') !!}
                        {!! Form::input('text','address',null,['class'=>'form-control','','placeholder'=>'Address']) !!}

                        {!! Form::label('number','Number') !!}
                        {!! Form::input('text','number',null,['class'=>'form-control','','placeholder'=>'Number']) !!}
                    </div>
                    <div class="panel-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
