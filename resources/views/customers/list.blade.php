@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Customers
                        <a class="pull-right" href="{{url('customers/new')}}">
                            <span class="glyphicon glyphicon-plus"></span> New Customer
                        </a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('msg_success'))
                            <div class="alert alert-success">
                                {{Session::get('msg_success')}}
                            </div>
                        @endif

                        <table class="table ">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Nº</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->number }}</td>
                                    <td>
                                        {!! Form::model($customer, ['method' => 'DELETE', 'url' => 'customers/'.$customer->id]) !!}
                                        <button type="submit" class="btn btn-default btn-xs pull-left" title="Delete customer">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                        {!! Form::close() !!}

                                        <a href="{{ url('customers/'.$customer->id.'/edit') }}"
                                           class="btn btn-default btn-xs pull-left" title="Update customer">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
