$(document).ready(function () {
    $("#app_studio").on("click", function () {
        $.ajax({
            url: "/studio/app/overview",
            method: "GET", // default is 'GET'
            success: function (response) {
                
                console.log("Success:", response);
                $('#parent-main').html(response);
            },
            error: function (xhr, status, error) {
                // handle errors
                console.error("Error:", error);
            },
        });
    });
});
