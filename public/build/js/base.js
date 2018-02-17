$(document).ready(function () {
    var name = $("#name").val();
    var nameInfo = $("#nameInfo");

    var surname = $("#surname").val();
    var surnameInfo = $("#surnameInfo");

    var address = $("#address").val();
    var addressInfo = $("#addressInfo");

    var pesel = $("#pesel").val();
    var peselInfo = $("#peselInfo");

    var identity_card_number = $("#identity_card_number").val();
    var identity_card_numberInfo = $("#identity_card_numberInfo");

    var telephon_number = $("#telephon_number").val();
    var telephon_numberInfo = $("#telephon_numberInfo");

    var username = $("#username").val();
    var usernameInfo = $("#usernameInfo");

    var password = $("#password").val();
    var passwordInfo = $("#passwordInfo");

    var repeat_password = $("#repeat_password").val();
    var repeat_passwordIngo = $("#repeat_passwordInfo");

    $("#first_plansza").click(function () {
        $(".plansza1").hide();
        $(".plansza2").show("slow");

    })
});
