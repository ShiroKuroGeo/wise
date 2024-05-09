const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            requestRoute: '0',
            orderRoute: '0',
        }
    },
    methods: {
        selectedRouteRequest() {
            window.location.href = "views/employee/wise/request.php?departmentId001=" + this.requestRoute;
        },
        selectedRouteOrder(){
            window.location.href = "views/employee/wise/order.php?departmentId002=" + this.orderRoute;
        },
    },
    created: function () {

    }
});

login.mount('#page-container');