@extends('userView.layout.app')

@section('title.user', 'Dashboard User')

@section('user.content')

    <div class="container mb-5">
        <div class="title-user mb-5" align="center">
            <h3>
                @if (date('H:i:m') < '12:00:00')
                    Pagi ...
                @elseif(date('H:i:m') < '16:00:00')
                    Siang ...
                @elseif(date('H:i:m') != '04:00:00')
                    Malam ...
                @endif
                {{ Auth::user()->name }}
            </h3>
        </div>
        <div class="row d-flex justify-content-between" align="center">
            <div class="col-md-6">
                <div class="card shadow" style="border: none; width: 80%; border-radius: 10px;" align="left">
                    <div class="card-body">
                        <h5>Total Projek Kamu</h3>
                            <span class="text-success">5</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow" style="border: none; width: 80%; border-radius: 10px;" align="left">
                    <div class="card-body">
                        <h5>Status Projek Kamu</h5>
                        <span class="text-warning">Tahap Development</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- card information --}}

        <div class="row d-flex justify-content-between" align="center">
            <div class="col-md-4">
                <div class="card mt-5 mb-5 shadow" style="border: none; width: 70%; border-radius: 10px;" align="left">
                    <ul class="list-group" style="border: none; border-radius: 10px;">
                        <li class="list-group-item"><a href="" class="text-dark"
                                style="text-decoration: none;">Request Projek</a></li>
                        <li class="list-group-item"><a href="" class="text-dark"
                                style="text-decoration: none;">Kontrak Projek</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mt-5 mb-5 shadow" style="border: none; width: 90%; border-radius: 10px;" align="left">
                    <div class="card-body">
                        <div id="userStat"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection
@push('scripts')
    <script>
        Highcharts.chart('userStat', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Browser market shares. January, 2022'
            },
            subtitle: {
                align: 'left',
                text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total percent market share'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Browsers",
                colorByPoint: true,
                data: [{
                        name: "Chrome",
                        y: 63.06,
                        drilldown: "Chrome"
                    },
                    {
                        name: "Safari",
                        y: 19.84,
                        drilldown: "Safari"
                    },
                    {
                        name: "Firefox",
                        y: 4.18,
                        drilldown: "Firefox"
                    },
                    {
                        name: "Edge",
                        y: 4.12,
                        drilldown: "Edge"
                    },
                    {
                        name: "Opera",
                        y: 2.33,
                        drilldown: "Opera"
                    },
                    {
                        name: "Internet Explorer",
                        y: 0.45,
                        drilldown: "Internet Explorer"
                    },
                    {
                        name: "Other",
                        y: 1.582,
                        drilldown: null
                    }
                ]
            }],
            drilldown: {
                breadcrumbs: {
                    position: {
                        align: 'right'
                    }
                },
                series: [{
                        name: "Chrome",
                        id: "Chrome",
                        data: [
                            [
                                "v65.0",
                                0.1
                            ],
                            [
                                "v64.0",
                                1.3
                            ],
                            [
                                "v63.0",
                                53.02
                            ],
                            [
                                "v62.0",
                                1.4
                            ],
                            [
                                "v61.0",
                                0.88
                            ],
                            [
                                "v60.0",
                                0.56
                            ],
                            [
                                "v59.0",
                                0.45
                            ],
                            [
                                "v58.0",
                                0.49
                            ],
                            [
                                "v57.0",
                                0.32
                            ],
                            [
                                "v56.0",
                                0.29
                            ],
                            [
                                "v55.0",
                                0.79
                            ],
                            [
                                "v54.0",
                                0.18
                            ],
                            [
                                "v51.0",
                                0.13
                            ],
                            [
                                "v49.0",
                                2.16
                            ],
                            [
                                "v48.0",
                                0.13
                            ],
                            [
                                "v47.0",
                                0.11
                            ],
                            [
                                "v43.0",
                                0.17
                            ],
                            [
                                "v29.0",
                                0.26
                            ]
                        ]
                    },
                    {
                        name: "Firefox",
                        id: "Firefox",
                        data: [
                            [
                                "v58.0",
                                1.02
                            ],
                            [
                                "v57.0",
                                7.36
                            ],
                            [
                                "v56.0",
                                0.35
                            ],
                            [
                                "v55.0",
                                0.11
                            ],
                            [
                                "v54.0",
                                0.1
                            ],
                            [
                                "v52.0",
                                0.95
                            ],
                            [
                                "v51.0",
                                0.15
                            ],
                            [
                                "v50.0",
                                0.1
                            ],
                            [
                                "v48.0",
                                0.31
                            ],
                            [
                                "v47.0",
                                0.12
                            ]
                        ]
                    },
                    {
                        name: "Internet Explorer",
                        id: "Internet Explorer",
                        data: [
                            [
                                "v11.0",
                                6.2
                            ],
                            [
                                "v10.0",
                                0.29
                            ],
                            [
                                "v9.0",
                                0.27
                            ],
                            [
                                "v8.0",
                                0.47
                            ]
                        ]
                    },
                    {
                        name: "Safari",
                        id: "Safari",
                        data: [
                            [
                                "v11.0",
                                3.39
                            ],
                            [
                                "v10.1",
                                0.96
                            ],
                            [
                                "v10.0",
                                0.36
                            ],
                            [
                                "v9.1",
                                0.54
                            ],
                            [
                                "v9.0",
                                0.13
                            ],
                            [
                                "v5.1",
                                0.2
                            ]
                        ]
                    },
                    {
                        name: "Edge",
                        id: "Edge",
                        data: [
                            [
                                "v16",
                                2.6
                            ],
                            [
                                "v15",
                                0.92
                            ],
                            [
                                "v14",
                                0.4
                            ],
                            [
                                "v13",
                                0.1
                            ]
                        ]
                    },
                    {
                        name: "Opera",
                        id: "Opera",
                        data: [
                            [
                                "v50.0",
                                0.96
                            ],
                            [
                                "v49.0",
                                0.82
                            ],
                            [
                                "v12.1",
                                0.14
                            ]
                        ]
                    }
                ]
            }
        });
    </script>
@endpush
