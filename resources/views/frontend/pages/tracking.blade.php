
@extends('frontend.frontend_master')
@section('content')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact_form_title"><h3>Order Status</h3></div>

                <div class="progress">
                    @if ($tracking->status==0)
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment one" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                @elseif ($tracking->status==1)
                <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment one" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-primary" role="progressbar" aria-label="Segment two" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                @elseif ($tracking->status==2)
                <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment one" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Segment two" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment three" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    @elseif ($tracking->status==2)
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment one" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Segment two" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment three" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Segment three" style="width: 35%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    @else
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment one" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                @endif

                  </div>
            </div>

            <div class="col-md-5">
                <div class="contact_form_title"><h3>Order Details</h3></div>

            </div>
        </div>
    </div>
</div>


@endsection
