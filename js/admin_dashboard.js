$(".sidebar ul li").on('click', function () {
    $(".sidebar ul li.active").removeClass('active')
    $(this).addClass('active')
    $('.content').addClass('content-hidden').removeClass('content-open');
    $(this).each(function () {
        let id = $(this).data('id');
        $('.content[data-id="' + id + '"]').removeClass('content-hidden').addClass(
            'content-open');

    });
});
//product bar chart
var productCanvas = document.getElementById("product_chart")
var config1 = {
    type: "bar",
    data: {
        labels: ["Category_1", "Category_2", "Category_3", "Category_4"],

        datasets: [{
            label: "T-shirt",
            backgroundColor: "#023e8a",
            data: [4.1, 2.5, 3.8, 4.8]
        },
        {
            label: "Polo",
            backgroundColor: "#ca6702",
            data: [2.5, 4.8, 1.8, 3]
        },
        {
            label: "Hoody",
            backgroundColor: "#ccc5b9",
            data: [2, 2, 3, 7]
        },
        ]
    }
}


var product_chart = new Chart(productCanvas, config1)

//Order bar chart
var orderCanvas = document.getElementById("order_chart")
var config2 = {
    type: "bar",
    data: {
        labels: ["Category_1", "Category_2", "Category_3", "Category_4"],

        datasets: [{
            label: "T-shirt",
            backgroundColor: "#023e8a",
            data: [4.2, 2.3, 3.5, 4]
        },
        {
            label: "Polo",
            backgroundColor: "#ca6702",
            data: [2.8, 4.1, 1.6, 3.2]
        },
        {
            label: "Hoody",
            backgroundColor: "#ccc5b9",
            data: [2.5, 2.8, 3.5, 5]
        },
        ]
    }
}
var order_chart = new Chart(orderCanvas, config2)
//Account bar chart
var accountCanvas = document.getElementById("account_chart")
var config3 = {
    type: "bar",
    data: {
        labels: ["Category_1", "Category_2", "Category_3", "Category_4"],

        datasets: [{
            label: "Bank Transfer",
            backgroundColor: "#023e8a",
            data: [5, 7, 9, 10]
        },
        {
            label: "Cash",
            backgroundColor: "#ca6702",
            data: [2, 4, 8, 5]
        },
        {
            label: "Online Payment",
            backgroundColor: "#ccc5b9",
            data: [6, 5, 5, 7]
        },
        ]
    }
}

var account_chart = new Chart(accountCanvas, config3)