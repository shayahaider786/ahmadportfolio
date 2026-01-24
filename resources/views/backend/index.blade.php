@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $projectCount }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-briefcase icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Projects</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $contactCount }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-account-multiple icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Contacts</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $projectSubmissionCount }}</h3>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                    <span class="mdi mdi-file-document icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Project Submissions</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Line chart</h4>
                        <canvas id="lineChart" style="height:250px"></canvas>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (window.Chart) {
                                    var lineCtx = document.getElementById('lineChart').getContext('2d');
                                    var lineChart = new Chart(lineCtx, {
                                        type: 'line',
                                        data: {
                                            labels: ['Projects', 'Contacts', 'Project Submissions'],
                                            datasets: [{
                                                label: 'Counts',
                                                data: [{{ $projectCount }}, {{ $contactCount }}, {{ $projectSubmissionCount }}],
                                                backgroundColor: [
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 2,
                                                fill: false
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            scales: {
                                                y: {
                                                    beginAtZero: true,
                                                    precision: 0
                                                }
                                            },
                                            plugins: {
                                                legend: {
                                                    display: false
                                                }
                                            }
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bar chart</h4>
                        <canvas id="barChart" style="height:230px"></canvas>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (window.Chart) {
                                    var barCtx = document.getElementById('barChart').getContext('2d');
                                    var barChart = new Chart(barCtx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Projects', 'Contacts', 'Project Submissions'],
                                            datasets: [{
                                                label: 'Counts',
                                                data: [{{ $projectCount }}, {{ $contactCount }}, {{ $projectSubmissionCount }}],
                                                backgroundColor: [
                                                    'rgba(54, 162, 235, 0.7)',
                                                    'rgba(75, 192, 192, 0.7)',
                                                    'rgba(255, 159, 64, 0.7)'
                                                ],
                                                borderColor: [
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            scales: {
                                                y: {
                                                    beginAtZero: true,
                                                    precision: 0
                                                }
                                            },
                                            plugins: {
                                                legend: {
                                                    display: false
                                                }
                                            }
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
