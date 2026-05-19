@extends('admin.layouts.master')

@section('content')

<!-- eCommerce statistic -->
<div class="row">

    <div class="col-xl-12 col-lg-12 col-12 mb-2">
        <h3>Conference</h3>
    </div>

    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$all_candidates}}</h3>
                            <h6>Total Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$pending_candidates}}</h3>
                            <h6>Pending Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$approve_candidates}}</h3>
                            <h6>Approve Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$reject_candidates}}</h3>
                            <h6>Rejected Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">


    <div class="col-xl-12 col-lg-12 col-12 mb-2">
        <h3>WorkShop</h3>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$all_w_candidates}}</h3>
                            <h6>Total Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$pending_w_candidates}}</h3>
                            <h6>Pending Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$approve_w_candidates}}</h3>
                            <h6>Approve Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$reject_w_candidates}}</h3>
                            <h6>Rejected Candidate</h6>
                        </div>
                        <div>
                            <i class="icon-user-follow success font-large-2 float-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
        <div class="col-xl-12 col-lg-12 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                </div>
            </div>
        </div>
    </div>

    
</div>


@endsection

@section('script')
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
<script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

<script>
window.onload = function() {

var options = {
    title: {
        text: "Conference Student Institue Wise"
    },
    legend: {
        enabled: false // hiding bottom legend
    },
    data: [{
        type: "pie",
        startAngle: 45,
        showInLegend: false,
        indexLabel: "{label} ({y})",   // SHOW COUNT
        dataPoints: @json($chartData)
    }]
};

$("#chartContainer").CanvasJSChart(options);

}
</script>

@endsection