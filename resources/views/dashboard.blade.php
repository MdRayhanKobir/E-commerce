
@extends('frontend.frontend_master')
@section('content')

@php
    $order=DB::table('orders')->where('user_id',Auth::id())->orderBy('id','desc')->limit(10)->get();
@endphp

<div class="contact_form pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="card col-md-8 table-responsive">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th >Payment Type</th>
                        <th >Payment Id</th>
                        <th >Amount</th>
                        <th >Date</th>
                        <th >Status Code</th>
                        <th >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($order as $order )
                     <tr>
                        <td>{{ $order->payment_type }}</td>
                        <td>{{ $order->payment_id }}</td>
                        <td>{{ $order->total }} Taka</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->status_code }}</td>
                        <td>
                            <a href="" class="btn btn-primary">View</a>
                        </td>

                      </tr>

                     @endforeach

                    </tbody>
                  </table>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <img src="{{ asset('backend/logo/logo.png') }}" alt="" class="card-img-top rounded" style="height: 90px; width:90px; margin-left:34%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ Auth::user()->name }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('userpassword.change') }}">Password Change</a></li>
                            <li class="list-group-item">line 1</li>
                            <li class="list-group-item">line 1</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('logout') }}" class="btn btn-sm btn-block btn-danger">Logout</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection
