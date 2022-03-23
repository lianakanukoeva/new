$(function() {
    $(".js-next").on("click", function() {
        $(".step.active").removeClass("active").next().addClass("active");
     });
});