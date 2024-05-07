<?php
$current_month = date('F');
$current_day = date('l');
$current_year = date('Y');
include('../../app/session/setSession.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wise Immersion and Study Services</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />

    <link href="../../assets/plugin/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../../assets/plugin/responsive.bootstrap5.min.css" rel="stylesheet" />
    <style>
        #resetButton {
            transform: 1s ease-in-out;
        }

        #resetButton:hover {
            color: red
        }
    </style>
</head>

<body>
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <div id="app" class="app app-header-fixed app-sidebar-fixed main-background">
        <div id="application">
            <div id="header" class="app-header">

                <div class="navbar-header">
                    <a href="dashboard.php" class="navbar-brand">
                        <img src="../../assets/img/logo/wiselogo.png" alt="">
                        <b class="me-3px">W I S E </b>
                    </a>
                    <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

            </div>

            <div id="sidebar" class="app-sidebar" data-bs-theme="dark">

                <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                    <div class="menu">
                        <div class="menu-profile">
                            <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                                <div class="menu-profile-cover with-shadow"></div>
                                <div class="menu-profile-image">
                                    <img src="../../assets/img/logo/wiselogo.png" alt />
                                </div>
                                <div class="menu-profile-info">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            IT Administration
                                        </div>
                                        <div class="menu-caret ms-auto"></div>
                                    </div>
                                    <small>IT Office</small>
                                </div>
                            </a>
                        </div>
                        <div id="appSidebarProfileMenu" class="collapse">
                            <div class="menu-item pt-5px">
                                <a href="#" class="menu-link">
                                    <div class="menu-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    <div class="menu-text" onclick="logout()">Logout</div>
                                </a>
                            </div>
                            <div class="menu-divider m-0"></div>
                        </div>
                        <div class="menu-header">Navigation</div>
                        <div class="menu-item py-1 active">
                            <a href="dashboard.php" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                                </div>
                                <div class="menu-text">Dashboard</div>
                            </a>
                        </div>
                        <div class="menu-item py-1">
                            <a href="account.php" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="menu-text">Users Account</div>
                            </a>
                        </div>
                        <div class="menu-item has-sub">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="menu-text">Wise Department</div>
                                <div class="menu-caret"></div>
                            </a>


                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="concern.php?department000=Admin" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Admin</div>
                                        <div :class="parseInt(totalPendingAdmin) || parseInt(totalDoneAdmin) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingAdmin) || parseInt(totalDoneAdmin) !== 0 ? parseInt(totalPendingAdmin) + parseInt(totalDoneAdmin) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Documents" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Documents</div>
                                        <div :class="parseInt(totalPendingDocumentation) || parseInt(totalDoneDocumentation) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingDocumentation) || parseInt(totalDoneDocumentation) !== 0 ? parseInt(totalPendingDocumentation) + parseInt(totalDoneDocumentation) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Accounting" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Accounting</div>
                                        <div :class="parseInt(totalPendingAccounting) || parseInt(totalDoneAccounting) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingAccounting) || parseInt(totalDoneAccounting) !== 0 ? parseInt(totalPendingAccounting) + parseInt(totalDoneAccounting) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Human Resource" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Human Resource</div>
                                        <div :class="parseInt(totalPendingHuman) || parseInt(totalDoneHuman) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingHuman) || parseInt(totalDoneHuman) !== 0 ? parseInt(totalPendingHuman) + parseInt(totalDoneHuman) : '' }}
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="concern.php?department000=Sales" class="menu-link">
                                        <div class="menu-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="menu-text">Sales</div>
                                        <div :class="parseInt(totalPendingSalesByDay) || parseInt(totalDoneSalesByDay) !== 0 ? 'text-end text-danger' : 'text-end'">
                                            {{ parseInt(totalPendingSalesByDay) || parseInt(totalDoneSalesByDay) !== 0 ? parseInt(totalPendingSalesByDay) + parseInt(totalDoneSalesByDay) : '' }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-item d-flex">
                            <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="app-sidebar-bg" data-bs-theme="dark"></div>
            <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>

            <div id="content" class="app-content">

                <div class="modal fade" id="resetModal" tabindex="1" aria-labelledby="resetModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="resetModalLabel">Reset System</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to reset the system?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Don't</button>
                                <button type="button" class="btn btn-primary" @click="reset">Yes, Please</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="page-header">Dashboard <small>Ticketing Application</small></h1>

                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="widget widget-stats bg-blue">
                            <div class="stats-icon"><i class="fa fa-users"></i></div>
                            <div class="stats-info">
                                <h4>TOTAL REQUEST</h4>
                                <p>{{ totalRequest }}</p>
                            </div>
                            <div class="stats-link">
                                <a href="concern.php?department000=Admin">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="widget widget-stats bg-info">
                            <div class="stats-icon"><i class="fa fa-users"></i></div>
                            <div class="stats-info">
                                <h4>TOTAL JOB</h4>
                                <p>{{ totalOrder }}</p>
                            </div>
                            <div class=" stats-link">
                                <a href="concern.php?department000=Admin">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="widget widget-stats bg-orange">
                            <div class="stats-icon"><i class="fas fa-times"></i></div>
                            <div class="stats-info">
                                <h4>Total's Pending</h4>
                                <p>{{ totalDailyPendingRequest + totalDailyPendingOrder }}</p>
                            </div>
                            <div class=" stats-link">
                                <a href="concern.php?department000=Admin">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="widget widget-stats bg-red">
                            <div class="stats-icon"><i class="fas fa-check"></i></div>
                            <div class="stats-info">
                                <h4>Totals Done</h4>
                                <p>{{ totalDailyDoneRequest + totalDailyDoneOrder  }}</p>
                            </div>
                            <div class="stats-link">
                                <a href="concern.php?department000=Admin">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <h1 class="my-4 mt-5">Daily ( <span class="text-primary"><?php echo $current_day; ?></span> )</h1>
                    <div class="col-xl-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Concern and Request Analytics (Daily)</h4>
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <canvas id="interactive-chart2" height="230"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Department Pending ( Daily Total ) - <?php echo $current_day; ?></h4>
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-panel align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Departments</th>
                                            <th class="text-end">Request and Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin</td>
                                            <td :class="totalPendingAdmin == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalPendingAdmin }}</td>
                                        </tr>
                                        <tr>
                                            <td>Documentation</td>
                                            <td :class="totalPendingDocumentation == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalPendingDocumentation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Human Resource</td>
                                            <td :class="totalPendingHuman == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalPendingHuman }}</td>
                                        </tr>
                                        <tr>
                                            <td>Accounting</td>
                                            <td :class="totalPendingAccounting == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalPendingAccounting }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sales</td>
                                            <td :class="totalPendingSalesByDay == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalPendingSalesByDay }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Department Done ( Daily Total ) - <?php echo $current_day; ?></h4>
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-panel align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Departments</th>
                                            <th class="text-end">Request and Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin</td>
                                            <td :class="totalDoneAdmin == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalDoneAdmin }}</td>
                                        </tr>
                                        <tr>
                                            <td>Documentation</td>
                                            <td :class="totalDoneDocumentation == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalDoneDocumentation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Human Resource</td>
                                            <td :class="totalDoneHuman == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalDoneHuman }}</td>
                                        </tr>
                                        <tr>
                                            <td>Accounting</td>
                                            <td :class="totalDoneAccounting == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalDoneAccounting }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sales</td>
                                            <td :class="totalDoneSalesByDay == 0 ? 'text-end' : 'text-end text-danger' ">{{ totalDoneSalesByDay }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <h1 class="my-4 mt-5">Month of <span class="text-primary"><?php echo $current_month ?></span></h1>
                    <div class="col-xl-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Department Pending ( Monthly Total ) - <?php echo $current_month ?></h4>
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-panel align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Departments</th>
                                            <th class="text-end">Request and Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin Department</td>
                                            <td class="text-end">{{ totalPendingAdminByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Documentation Department</td>
                                            <td class="text-end">{{ totalPendingDocumentationByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Human Resource Department</td>
                                            <td class="text-end">{{ totalPendingHumanByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Accounting Department</td>
                                            <td class="text-end">{{ totalPendingAccountingByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sales Department</td>
                                            <td class="text-end">{{ totalPendingSalesByMonth }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h4 class="panel-title">Department Done ( Monthly Total ) - <?php echo $current_month ?></h4>
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-panel align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Departments</th>
                                            <th class="text-end">Request and Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin Department</td>
                                            <td class="text-end">{{ totalDoneAdminByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Documentation Department</td>
                                            <td class="text-end">{{ totalDoneDocumentationByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Human Resource Department</td>
                                            <td class="text-end">{{ totalDoneHumanByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Accounting Department</td>
                                            <td class="text-end">{{ totalDoneAccountingByMonth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sales Department</td>
                                            <td class="text-end">{{ totalDoneSalesByMonth }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="theme-panel">
                    <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fas fa-cog"></i></a>
                    <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                        <h5> App Settings </h5>

                        <div class="theme-panel-divider"></div>

                        <div class="row mt-10px">
                            <div class="col-8 control-label text-body fw-bold">
                                <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
                                <div class="lh-14">
                                    <small class="text-body opacity-50">
                                        Adjust the appearance to reduce glare and give your eyes a break.
                                    </small>
                                </div>
                            </div>
                            <div class="col-4 d-flex">
                                <div class="form-check form-switch ms-auto mb-0">
                                    <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
                                    <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                                </div>
                            </div>
                        </div>

                        <div class="theme-panel-divider"></div>

                        <div class="row mt-10px">
                            <div class="col-8 control-label text-body fw-bold">
                                <div>Reset Back To Default</div>
                                <div class="lh-14">
                                    <small class="text-body opacity-50">
                                        Reseting back to default where the only user is the admin.
                                    </small>
                                </div>
                            </div>
                            <div class="col-4 d-flex">
                                <div class="form-check form-switch mb-0">
                                    <i class="fa fa-refresh" data-bs-toggle="modal" data-bs-target="#resetModal" style="font-size: 16px; cursor: pointer" id="resetButton" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery-3.5.1.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="../../assets/js/vendor.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../assets/js/color.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="../../assets/js/googlet.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../vue/vues/axios.js"></script>
    <script src="../../vue/vues/vue.js"></script>
    <script src="../../vue/vues/vue.3.js"></script>
    <script src="../../vue/admin/wiseconcern/dashboard.js"></script>
    <script>
        const values = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        const xValues = ['Month', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        let sum = 1;

        new Chart("interactive-chart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: values
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 1,
                            max: sum + 10
                        }
                    }],
                }
            }
        });


        function logout() {
            window.location.href = '../../app/session/logout.php';
        }
    </script>
    <script type="9dd2961859eb1e28de60110d-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y3Q0VGQKY3');
    </script>
    <script src="../../assets/js/rocketloader.min.js" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>