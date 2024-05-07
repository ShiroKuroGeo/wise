<?php
include('../../components/pages/header.php');
?>
<div class="sidebar pe-4 pb-3 border-end">
    <nav class="navbar bg-light navbar-light">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Task</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="../../assets/inventory/img/userProfile.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{fullname}}</h6>
                <span>Task User</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="list.php" class="nav-item nav-link"><i class="fa fa-tasks me-2"></i>Tasks</a>
            <a href="todolist.php" class="nav-item nav-link"><i class="fa fa-tasks me-2"></i>Completed Task</a>
            <a href="todolist.php" class="nav-item nav-link"><i class="fa fa-tasks me-2"></i>Month Task</a>
        </div>
    </nav>
</div>
<div class="content">
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <span :class="countdown == 'System Restore!' ? 'text-primary' : 'text-danger'">System Will Start At: {{countdown}}</span>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="../../assets/inventory/img/userProfile.png" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{fullname}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="../../app/session/logout.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">All Task ({{tasksUpToFive.length}})</h6>
                        <a href="list.php" class="btn btn-sm">Show All</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2" v-for="t of tasksUpToFive">
                        <img class="rounded-circle flex-shrink-0" src="../../assets/inventory/img/userProfile.png" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">{{t.username}}</h6>
                                <small>{{ getAgo(t.created_at) }}</small>
                            </div>
                            <span class="truncate">{{t.description}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Completed ({{ tasksCompleted.length }})</h6>
                        <a href="todolist.php" class="btn btn-sm">Show All</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2" v-for="t of tasksCompleted">
                        <img class="rounded-circle flex-shrink-0" src="../../assets/inventory/img/userProfile.png" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">{{t.username}}</h6>
                                <small>{{ getAgo(t.created_at) }}</small>
                            </div>
                            <span class="truncate">{{t.description}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calender</h6>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Task</a>, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    Designed By <a href="https://www.facebook.com/kurotoshirogeo">Shiro George Alfeser</a>
                    </br>
                    Distributed By <a class="border-bottom" href="https://www.facebook.com/kurotoshirogeo" target="_blank">Shiro George Alfeser</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../../components/pages/footer.php');
?>