$(document).ready(function() {

  var currentLocation = location.href;
  var menuItem = document.querySelectorAll('li a');
  var menuLength = menuItem.length;

  for(var i = 0; i < menuLength; i++) {
    if(menuItem[i].href === currentLocation) {
      menuItem[i].className = "active";
    }
  }

  $(function() {
    $("#datepicker").datepicker({
      dateFormat: "mm/dd/yy",
      minDate: new Date(),
      maxDate: "+10",
      showButtonPanel: false,
      buttonImageOnly: true,
      firstDay: 1,
      showOtherMonths: true,
      selectOtherMonths: true,
      changeMonth: true,
      changeYear: true,
   })
});

$(document).ready(function(){
  $('#time').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '12:00pm',
    maxTime: '9:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true,
    
  });
});

  //Menu Filters 
  $(".filter").click(function(){
    var category = $(this).attr("data-filter");

      $(".menu-restaurant-item").not("."+category).hide("2000");
      $(".menu-restaurant-item").filter("."+category).show("2000");
  
  });

  $(".menu-filter-list").find('a.active').click();

  $(".menu-filter-list a").click(function(){
      $('.active').removeClass('active');
      $(this).addClass('active');
      //$(this).addClass("active").siblings().removeClass("active");
  });

});

