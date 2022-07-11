
@extends('frontend.frontend_master')
@section('content')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="card col-md-8">
                <table class="table table-bordered ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th >3</th>
                        <td >Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
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
