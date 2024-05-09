<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IT Administration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">

    <link href="../../assets/plugin/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../../assets/plugin/responsive.bootstrap5.min.css" rel="stylesheet" />

</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>

    <div id="app" class="app app-header-fixed app-sidebar-fixed">

        <div id="header" class="app-header">

            <div class="navbar-header">
                <a href="dashboard.php" class="navbar-brand">
                    <img src="../../assets/img/logo/wiselogo.png" alt="">
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
                                <div class="menu-text">Logout</div>
                            </a>
                        </div>
                        <div class="menu-divider m-0"></div>
                    </div>
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item py-1">
                        <a href="#" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-sitemap" aria-hidden="true"></i>
                            </div>
                            <div class="menu-text">Dashboard</div>
                        </a>
                    </div>
                    <div class="menu-item py-1">
                        <a href="#" class="menu-link">
                            <div class="menu-icon">
                                <i class="fas fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="menu-text">Users Account</div>
                        </a>
                    </div>
                    <div class="menu-item has-sub active">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="menu-text">Wise Department</div>
                            <div class="menu-caret"></div>
                        </a>


                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="concern.php?department000=Reception" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Reception</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="concern.php?department000=Documentation" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Documentation</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="concern.php?department000=Accounting" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Accounting</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="concern.php?department000=Human Resource" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Human Resource</div>
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

    </div>
    </div>

    <div id="content" class="app-content">

        <div class="d-flex justify-content-between">
            <h1 class="page-header">Four Seasons <small>Concern and Orders</small></h1>
            <div class="col-2">
                <select name="selection" id="selection" class="form-control ">
                    <option value="2">Concern</option>
                    <option value="1">Job Order</option>
                </select>
            </div>
        </div>

        <div class="panel panel-inverse">

            <div class="panel-heading">
                <h4 class="panel-title" id="concernTitle">Four Seasons - Table - Concern</h4>
                <h4 class="panel-title visually-hidden" id="jobOrderTitle">Four Seasons - Table - Job</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <table id="data-table-default" class="table table-striped table-bordered align-middle w-100 text-nowrap">

                    <thead class="first" id="concernTableHead">
                        <tr>
                            <th width="1%">ID's</th>
                            <th width="15%" data-orderable="false">Fullname</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Concern</th>
                            <th class="text-nowrap">Message</th>
                            <th class="text-nowrap">Priority</th>
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Created</th>
                            <th width="15%">View Pictures</th>
                        </tr>
                    </thead>
                    <thead class="visually-hidden" id="jobOrderTableHead">
                        <tr>
                            <th width="1%">ID's</th>
                            <th width="15%" data-orderable="false">Fullname</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Deadline</th>
                            <th class="text-nowrap">Priority</th>
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Created</th>
                            <th width="15%">View Pictures</th>
                        </tr>
                    </thead>

                    <tbody class="first" id="concernTableBody">
                        @foreach($concern as $depart)
                        <tr class="odd gradeX">
                            <td width="1%" class="fw-bold">Concern {{ str_pad($depart->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $depart->name }}</td>
                            <td>{{ $depart->email }}</td>
                            <td>{{ $depart->concern }}</td>
                            <td>{{ $depart->message }}</td>
                            <td>{{ $depart->priority }}</td>
                            <td class="{{ $depart->status != 1 ? 'text-primary' : 'text-danger' }}">
                                {{ $depart->status != 1 ? 'Done' : 'Pending' }}
                                <a href="{{ route('admin-done-request-four', ['value' => $depart->id] ) }}">Change</a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($depart->created_at)->format('l F j Y \a\t H:i:s') }}</td>
                            <td>
                                <a href="#concernid{{ $depart->id }}" class="btn col-12" data-bs-toggle="modal">View</a>
                                <div class="modal fade" id="concernid{{ $depart->id }}">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-dialogLabel">Pictures for Concern {{ str_pad($depart->id, 3, '0', STR_PAD_LEFT) }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body row">
                                                <div id="carouselExample{{ $depart->id }}" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach($depart->userfiles as $key => $picture)
                                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                            <img src="{{ asset('storage/' . $picture->pictures) }}" class="d-block w-100" height="450" alt="Picture">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $depart->id }}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $depart->id }}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tbody class="visually-hidden" id="jobOrderTableBody">
                        @foreach($ticket as $depart)
                        <tr class="odd gradeX">
                            <td width="1%" class="fw-bold">Concern {{ str_pad($depart->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $depart->name }}</td>
                            <td>{{ $depart->email }}</td>
                            <td>{{ \Carbon\Carbon::parse($depart->deadline)->format('l F j Y') }}</td>
                            <td>{{ $depart->priority }}</td>
                            <td class="{{ $depart->status != 1 ? 'text-primary' : 'text-danger' }}">
                                {{ $depart->status != 1 ? 'Done' : 'Pending' }}
                                <a href="{{ route('admin-done-order-four', ['value' => $depart->id] ) }}">Change</a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($depart->created_at)->format('l F j Y \a\t H:i:s') }}</td>
                            <td>
                                <a href="#ticketid{{ $depart->id }}" class="btn col-12" data-bs-toggle="modal">View</a>
                                <div class="modal fade" id="ticketid{{ $depart->id }}">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-dialogLabel">Pictures for Concern {{ str_pad($depart->id, 3, '0', STR_PAD_LEFT) }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body row">
                                                <div id="carouselExamples{{ $depart->id }}" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach($depart->userfiles2s as $key => $picture)
                                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                            <img src="{{ asset('storage/' . $picture->pictures) }}" class="d-block w-100" height="450" alt="Picture">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamples{{ $depart->id }}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExamples{{ $depart->id }}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
            </div>


        </div>

    </div>

    <script src="../../assets/js/vendor.min.js"></script>
    <script src="../../assets/js/color.min.js"></script>

    <script src="../../assets/plugin/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugin/dataTables.bootstrap5.min.js"></script>
    <script src="../../assets/plugin/dataTables.responsive.min.js"></script>
    <script src="../../assets/plugin/responsive.bootstrap5.min.js"></script>
    <script src="../../assets/plugin/table-manage-default.demo.js"></script>
    <script src="../../assets/plugin/highlight.min.js"></script>
    <script src="../../assets/plugin/render.highlight.js"></script>
    <script src="../../vue/vues/axios.js"></script>
    <script src="../../vue/vues/vue.js"></script>
    <script src="../../vue/vues/vue.3.js"></script>
    <script src="../../vue/admin/wiseconcern/dashboard.js"></script>

    <script>
        $(document).ready(function() {
            $('#selection').on('change', function() {
                var selectedOption = $(this).val();

                if (selectedOption == 1) {
                    $('#concernTableBody').addClass('visually-hidden');
                    $('#jobOrderTableBody').removeClass('visually-hidden');

                    $('#concernTitle').addClass('visually-hidden');
                    $('#jobOrderTitle').removeClass('visually-hidden');

                    $('#concernTableHead').addClass('visually-hidden');
                    $('#jobOrderTableHead').removeClass('visually-hidden');
                } else if (selectedOption == 2) {
                    $('#concernTableBody').removeClass('visually-hidden');
                    $('#jobOrderTableBody').addClass('visually-hidden');

                    $('#concernTitle').removeClass('visually-hidden');
                    $('#jobOrderTitle').addClass('visually-hidden');

                    $('#concernTableHead').removeClass('visually-hidden');
                    $('#jobOrderTableHead').addClass('visually-hidden');
                }
            });
        });
    </script>
    <script type="9dd2961859eb1e28de60110d-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y3Q0VGQKY3');
    </script>
    <script src="{{ asset('js/rocketloader.min.js') }}" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>