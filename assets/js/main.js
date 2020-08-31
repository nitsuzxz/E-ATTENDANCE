// A $( document ).ready() block.

"use strict";

	[].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
    new SelectFx(el);
});

jQuery('.selectpicker').selectpicker;


$('#menuToggle').click(function () {
    $('body').toggleClass('open');
});

$('.search-trigger').click(function (event) {
    event.preventDefault();
    event.stopPropagation();
    $('.search-trigger').parent('.header-left').addClass('open');
});

$('.search-close').click(function (event) {
    event.preventDefault();
    event.stopPropagation();
    $('.search-trigger').parent('.header-left').removeClass('open');
});

$("#alrt").click(function () {

});


function modalDelete(id) {
    $("#exampleModal").modal('toggle');
    console.log('id', id);
    $("#btnYes").click(function () {
        window.location = "./pengajar.php?delete='" + id + "'";
    });
}


function modalDeletePelajar(id) {
    $("#exampleModal").modal('toggle');
    console.log('id', id);
    $("#btnYes").click(function () {
        window.location = "./pelajar.php?delete='" + id + "'";
    });
}

function modal_delsubjek(id) {
    $("#exampleModal").modal('toggle');
    console.log('id', id);
    $("#btnYes").click(function () {
        window.location = "./subjek.php?delete='" + id + "'";
    });
}

function mdelsub(id) {
    $("#exampleModal").modal('toggle');
    console.log('id', id);
    $("#btnYes").click(function () {
        window.location = "./jadual.php?deljadual='" + id + "'";
    });
}

function modalEdit(id) {
    $("#editModal").modal('toggle');
}


function submitForm() {
    $("#submitEdit").click();
}

function modalEditsubjek(id) {
    $("#editModal").modal('toggle');
}

$(document).ready(function () {
    var hashValue = location.hash;
    hashValue = hashValue.replace(/^#/, '');
    console.log(hashValue);
    if (hashValue === "success") {
        $("#success").modal('toggle');
    } else if (hashValue === "successEdit") {
        $("#successEdit").modal('toggle');
    } else if (hashValue === "adds") {
        $("#adds").modal('toggle');
    } else if (hashValue === "exist") {
        $("#exist").modal('toggle');
    }
});

$(document).ready(function () {
    var hashValue = location.hash;
    hashValue = hashValue.replace(/^#/, '');
    console.log(hashValue);
    if (hashValue === "success") {
        $("#success").modal('toggle');
    } else if (hashValue === "successsubjek") {
        $("#successsubjek").modal('toggle');
    }
    else if (hashValue === "successsubjek") {
        $("#successsubjek").modal('toggle');
    }
    else if (hashValue === "kehadiran") {
        $("#attendance").modal('toggle');
    }
});

 $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });


