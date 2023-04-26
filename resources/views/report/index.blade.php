@extends('layouts.admin_layout')

@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <h2 class="admin-heading text-center">Rapports</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('reports.date_wise') }}" class="card-link">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center d-flex align-items-center justify-content-center"">
                                <h5 class="card-title mb-0 font-weight-bold">Rapport par date</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('reports.month_wise') }}" class="card-link">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center d-flex align-items-center justify-content-center"">
                                <h5 class="card-title mb-0 font-weight-bold">rapport mensuel</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('reports.not_returned') }}" class="card-link">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center d-flex align-items-center justify-content-center"">
                                <h5 class="card-title mb-0 font-weight-bold">Non Retouné</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
