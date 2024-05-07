<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white vh-100" id="application">
        <h1>User Information</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="u of users">
                    <td>{{u.fullname}}</td>
                    <td>{{u.email}}</td>
                    <td>Encrypted(md5 to word) = {{u.password}}</td>
                    <td>{{u.role == 1 ? 'Admin' : 'Task Users'}}</td>
                    <td>{{u.status == 1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{ getDateToString(u.created_at) }}</td>
                </tr>
            </tbody>
        </table>
        <hr class="border border-5 border-black">
        <h1>Request Information</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Department</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Concern</th>
                    <th scope="col">Issue</th>
                    <th scope="col">Assigned By</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Status</th>
                    <th scope="col">created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="r of requests">
                    <td>{{r.department}}</td>
                    <td>{{r.name}}</td>
                    <td>{{r.email}}</td>
                    <td>{{r.concern}}</td>
                    <td>{{r.issue}}</td>
                    <td>{{r.assigned}}</td>
                    <td>{{r.priority}}</td>
                    <td>{{r.status == 1 ? 'Pending' : 'Approved'}}</td>
                    <td>{{ getDateToString(r.created_at) }}</td>
                </tr>
            </tbody>
        </table>
        <hr class="border border-5 border-black">
        <h1>Order Information</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Department</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Description</th>
                    <th scope="col">Assigned</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="o of orders">
                    <td>{{o.department}}</td>
                    <td>{{o.name}}</td>
                    <td>{{o.email}}</td>
                    <td>{{ getDateToString(o.deadline) }}</td>
                    <td>{{o.issue}}</td>
                    <td>{{o.assigned}}</td>
                    <td>{{o.priority}}</td>
                    <td>{{o.status == 1 ? 'Approved' : 'Pending'}}</td>
                    <td>{{ getDateToString(o.created_at) }}</td>
                </tr>
            </tbody>
        </table>
        <button class="no-print btn btn-sm float-end btn-info" @click="printAndReset">Print This and Reset</button>
    </div>

    <script src="../../assets/js/jquery-3.5.1.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="../../assets/js/vendor.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../assets/js/color.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="../../assets/js/googlet.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../vue/vues/axios.js"></script>
    <script src="../../vue/vues/vue.js"></script>
    <script src="../../vue/vues/vue.3.js"></script>
    <script src="../../vue/admin/wiseconcern/reset.js"></script>
</body>

</html>