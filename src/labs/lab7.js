$(document).ready(() => {
    $("#form").submit(event => {
        event.preventDefault();
        const value = $("#search-field").val();
        $.get(`lab7_script.php?value=${value}`, data => {
            $("#products").html(data);
        }).fail(e => {
            $("#products").html(e.responseText);
        });
    });
})