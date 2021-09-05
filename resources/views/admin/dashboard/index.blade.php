@extends('admin.partial.layout')
@section('page-title')
    Beranda
@endsection
@section('top-left-content')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">attach_money</i>
                        </div>
                        <p class="card-category">Saldo Estimasi</p>
                        <h3 class="card-title">Rp. 1.000</h3>

                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">paid</i>
                        </div>
                        <p class="card-category">Saldo Aktif</p>
                        <h3 class="card-title">Rp. 1.000</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header card-header-success md-bg-purple">
                        <div class="ct-chart" id="dailySalesChart_clone_1"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title md-text-purple font-weight-bold">1</h4>
                        <p class="card-category">
                            <span class="md-text-purple">Paket Belum Diekspedisi</span></p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header card-header-success md-bg-yellow">
                        <div class="ct-chart" id="dailySalesChart_clone_2"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title md-text-yellow font-weight-bold">1</h4>
                        <p class="card-category">
                            <span class="md-text-yellow">Paket Dalam Pengiriman</span></p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header card-header-success md-bg-green">
                        <div class="ct-chart" id="dailySalesChart_clone_3"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title md-text-green font-weight-bold">1</h4>
                        <p class="card-category">
                            <span class="md-text-green">Paket Selesai</span></p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header card-header-success md-bg-red">
                        <div class="ct-chart" id="dailySalesChart_clone_4"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title md-text-red font-weight-bold">10</h4>
                        <p class="card-category">
                            <span class="md-text-red">Paket Return</span></p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header card-header-success md-bg-gray">
                        <div class="ct-chart" id="dailySalesChart_clone_5"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title md-text-gray font-weight-bold">1</h4>
                        <p class="card-category">
                            <span class="md-text-gray">Dibatalkan</span></p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header card-header-success md-bg-orange">
                        <div class="ct-chart" id="dailySalesChart_clone_6"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title md-text-orange font-weight-bold">1</h4>
                        <p class="card-category">
                            <span class="md-text-orange">Paket Bermasalah</span></p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terupdate Bulan ini
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Tasks:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                            <i class="material-icons">bug_report</i> Bugs
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                            <i class="material-icons">code</i> Website
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                            <i class="material-icons">cloud</i> Server
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="messages">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="settings">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Employees Stats</h4>
                        <p class="card-category">New employees on 15th September, 2016</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Country</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dakota Rice</td>
                                <td>$36,738</td>
                                <td>Niger</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Minerva Hooper</td>
                                <td>$23,789</td>
                                <td>Curaçao</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sage Rodriguez</td>
                                <td>$56,142</td>
                                <td>Netherlands</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Philip Chaney</td>
                                <td>$38,735</td>
                                <td>Korea, South</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function (){
            init_sidebar_active('sidebar_menu_dashboard')
        })
    </script>

    <script>
        $(document).ready(function (){
            dataDailySalesChart = {
                labels: [
                    '1-10 ',
                    '11-20',
                    '20<',
                ],
                series: [
                    [
                        {meta: '1 - 10 Agustus', value: 0},
                        {meta: '11 - 20 Agustus', value: 3},
                        {meta: 'Sesudah 20 Agustus', value: 10},
                    ],
                ]
            };

            plugin={
                plugins: [
                    Chartist.plugins.tooltip()
                ]
            }

            optionsDailySalesChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            }

            var dailySalesChart1 = new Chartist.Line('#dailySalesChart_clone_1', dataDailySalesChart, plugin, optionsDailySalesChart);
            var dailySalesChart2 = new Chartist.Line('#dailySalesChart_clone_2', dataDailySalesChart, plugin, optionsDailySalesChart);
            var dailySalesChart3 = new Chartist.Line('#dailySalesChart_clone_3', dataDailySalesChart, plugin, optionsDailySalesChart);
            var dailySalesChart4 = new Chartist.Line('#dailySalesChart_clone_4', dataDailySalesChart, plugin, optionsDailySalesChart);
            var dailySalesChart5 = new Chartist.Line('#dailySalesChart_clone_5', dataDailySalesChart, plugin, optionsDailySalesChart);
            var dailySalesChart6 = new Chartist.Line('#dailySalesChart_clone_6', dataDailySalesChart, plugin, optionsDailySalesChart);

            md.startAnimationForLineChart(dailySalesChart1);
            md.startAnimationForLineChart(dailySalesChart2);
            md.startAnimationForLineChart(dailySalesChart3);
            md.startAnimationForLineChart(dailySalesChart4);
            md.startAnimationForLineChart(dailySalesChart5);
            md.startAnimationForLineChart(dailySalesChart6);
        })
    </script>
@endsection
