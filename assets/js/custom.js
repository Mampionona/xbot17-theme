(function ($) {
    "use strict";

    $(function() {
        $("#submit_rappel").on("click", function(e) {
            $(".ajaxloader_rappel").css({
                display: "flex"
            });

            var nom_rappel = $("#nom_rappel").val();
            var email_rappel = $("#email_rappel").val();
            var telephone_rappel = $("#telephone_rappel").val();
            var select_pays = $(".form_rappel_popup #select_pays").val();
            var info_rappel = $("#info_rappel").val();
            var data = {
                action: 'demande_rappel',
                nom_rappel: nom_rappel,
                email_rappel: email_rappel,
                telephone_rappel: telephone_rappel,
                info_rappel: info_rappel,
                select_pays: select_pays,
                submit_rappel: $(this).val()
            };

            function onSuccess(reponse) {
                if (nom_rappel && email_rappel && telephone_rappel) {
                    $(".alert_c_rappel").html('<span class="success">' + reponse + '</span>');
                    $("#nom_rappel").val("");
                    $("#email_rappel").val("");
                    $("#telephone_rappel").val("");
                    $("#info_rappel").val("");
                    $(".form_rappel_popup #select_pays").val("");
                    $(".ajaxloader_rappel").hide();
                    gtag_report_conversion && gtag_report_conversion("https://www.xbot17.com/", "rappel");
                } else {
                    $(".alert_c_rappel").html("<span class=\"error\">" + reponse + "</span>");
                    if (!nom_rappel) {
                        $("#nom_rappel").addClass("border_red");
                    }

                    if (!email_rappel) {
                        $("#email_rappel").addClass("border_red");
                    }

                    if (!telephone_rappel) {
                        $("#telephone_rappel").addClass("border_red");
                    }
                    $(".ajaxloader_rappel").hide();
                }
            }

            $.post(xbot17_theme.ajaxurl, data, onSuccess, 'html');

            e.preventDefault();
        });
    });
}) (jQuery);
