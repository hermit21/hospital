$(document).ready(function () {

    $("#pracownik_panel").click(function () {
        $(".panel_form_pacjenci").hide();
        $(".panel_form_pracownicy").show("slow");
    })
    $("#pacjent_panel").click(function(){
        $(".panel_form_pracownicy").hide();
        $(".panel_form_pacjenci").show("slow");
    });

    $("#first_plansza").click(function() {
        $(".plansza1").hide();
        $(".plansza2").show("slow");
    })
    $("#second_plansza").click(function() {
        $(".plansza2").hide();
        $(".plansza3").show("slow")
    })
    $("#first_plansza_back").click(function() {
        $(".plansza2").hide();
        $(".plansza1").show("slow");
    })
    $("#second_plansza_back").click(function() {
        $(".plansza3").hide();
        $(".plansza2").show("slow");
    })

});