$(document).ready(() => {
    $("#form").submit(event => {
        event.preventDefault();
        const ip = $("#ip").val();
        $.get(`lab8-process-data-xml.php`, data => {
            $("#result-xml").html(data);
        });
        $.post(`lab8-process-data-json.php`,
            {ip},
            data => {
                $("#result-json").html(data);
            });
    });
})