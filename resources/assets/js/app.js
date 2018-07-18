/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

$(document).ready(function() {
  var form = $("#contact");

  form.on("submit", function(event) {
    event.preventDefault();

    $.ajax({
      type: "POST",
      url: form.attr("action"),
      data: form.serializeArray()
    })
      .done(function(response) {
        $("#errors").addClass("d-none");
        $("#success")
          .removeClass("d-none")
          .text(response.status);
      })
      .fail(function(response) {
        var errors = response.responseJSON.errors;
        $("#success").addClass("d-none");
        $("#errors").removeClass("d-none");
        for (var key in errors) {
          if (errors.hasOwnProperty(key)) {
            $("#errors ul").append("<li>" + errors[key] + "</li>");
          }
        }
      });
  });
});
