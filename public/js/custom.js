(function ($) {
  "use strict"; // Start of use strict

  /*
  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });
  

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });



  $( document ).ready(function() {
    alert("test");
  });

    */

  $("#sidebarShrink").on("click", function (e) {
    $(".sidebar").toggleClass("shrink");
    $("i", this).toggleClass("fas fa-toggle-off fas fa-toggle-on");
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function () {
    if ($(window).width() <= 1024) {
      $(".sidebar").addClass("shrink");
    } else {
      $(".sidebar").removeClass("shrink");
    }

    // Toggle the side navigation when window is resized below 480px
    // if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
    //    $("body").addClass("sidebar-toggled");
    //   $(".sidebar").addClass("toggled");
    //   $('.sidebar .collapse').collapse('hide');
    // };
  });

  $(document).ready(function () {
    $(".dz-button").html(
      " <h6>Drag & Drop</h6> <p>Darg files your computer or <br><span>click here</span> to browse your files. </p>"
    );
  });

  $(document).ready(function () {
    function expandTextarea(id) {
      // document.getElementById(id).addEventListener(
      //   "keyup",
      $(id).keyup(function () {
        this.style.overflow = "hidden";
        this.style.height = 0;
        this.style.height = this.scrollHeight + "px";
      }, false);
    }

    expandTextarea("txtarea");
  });

  $(document).ready(function () {
    $("#show_hide_password a").on("click", function (event) {
      event.preventDefault();
      if ($("#show_hide_password input").attr("type") == "text") {
        $("#show_hide_password input").attr("type", "password");
        $("#show_hide_password i").addClass("fa-eye-slash");
        $("#show_hide_password i").removeClass("fa-eye");
      } else if ($("#show_hide_password input").attr("type") == "password") {
        $("#show_hide_password input").attr("type", "text");
        $("#show_hide_password i").removeClass("fa-eye-slash");
        $("#show_hide_password i").addClass("fa-eye");
      }
    });
  });

  // txtarea

  //  changes mouse cursor when highlighting loawer right of box
  $(document)
    .on("mousemove", "textarea", function (e) {
      var a = $(this).offset().top + $(this).outerHeight() - 16, //	top border of bottom-right-corner-box area
        b = $(this).offset().left + $(this).outerWidth() - 16; //	left border of bottom-right-corner-box area
      $(this).css({
        cursor: e.pageY > a && e.pageX > b ? "nw-resize" : "",
      });
    })
    //  the following simple make the textbox "Auto-Expand" as it is typed in
    .on("keyup", "textarea", function (e) {
      //  the following will help the text expand as typing takes place
      while (
        $(this).outerHeight() <
        this.scrollHeight +
          parseFloat($(this).css("borderTopWidth")) +
          parseFloat($(this).css("borderBottomWidth"))
      ) {
        $(this).height($(this).height() + 1);
      }
    });

  // social card selection

  $(document).ready(function () {
    function addCheck() {
      var count = $(".card-selected").length;
      $(".card-count").html(count);
    }

    $(".curated-card").on("click", function (e) {
      // alert($count);

      if ($(this).hasClass("card-selected")) {
        $(this).removeClass("card-selected");
        $(this).find(".card-check").remove();
        addCheck();
        e.preventDefault();
      } else {
        $(this).addClass("card-selected");
        $(this, "card-body").append(
          '<span class="card-check"><i class="fas fa-check"></i></span>'
        );
        addCheck();
      }
    });
  });

  $(".card-overflow").scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".card-overflow > .card-header").show();
      $(".card-overflow > .card-header").attr(
        "style",
        "display: block !important"
      );
    } else {
      $(".card-overflow > .card-header").hide();
      $(".card-overflow > .card-header").attr(
        "style",
        "display: none !important"
      );
    }
  });

  $(document).ready(function () {
    $.ajax({
      url: "/api/me?token=" + Cookies.get("MKTG360_SESSION"),
      type: "GET",
      success: function (response) {
        let name = response.firstname + " " + response.lastname
        let role = response.role.name

        $('#username').html(name);
        $('#user-role').html(role)
      },
      error: function (response) {
        console.log(response)
      },
    });
  });
})(jQuery); // End of use strict

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split("&"),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split("=");

    if (sParameterName[0] === sParam) {
      return typeof sParameterName[1] === undefined
        ? true
        : decodeURIComponent(sParameterName[1]);
    }
  }
  return false;
};

$.date = function(dateObject) {
  var d = new Date(dateObject);
  var day = d.getDate();
  var month = d.getMonth() + 1;
  var year = d.getFullYear();
  if (day < 10) {
      day = "0" + day;
  }
  if (month < 10) {
      month = "0" + month;
  }
  var date = day + "/" + month + "/" + year;

  return date;
};
