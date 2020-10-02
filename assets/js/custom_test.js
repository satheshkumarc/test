$(document).ready(function () {
  if( $('#message').length != 0){
    $('#message').delay(2000).fadeOut("slow");
  }
    if( $('#insertData').length != 0){
      $('#insertData').delay(1000).fadeOut("slow");
    }
  $('#test_submit').click(function (event) {
    if ($.trim($('#fname').val()).length <= 0 || $.trim($('#lname').val()).length <= 0 || $('#dob').val().length <= 0 || $.trim($('#address1').val()).length <= 0 || $.trim($('#address2').val()).length <= 0 || $.trim($('#city').val()).length <= 0 || $.trim($('#state').val()).length <= 0 || $.trim($('#pincode').val()).length <= 0 || $.trim($('#country').val()).length <= 0 || $.trim($('#comments').val()).length <= 0){
      event.preventDefault();
      alert('kindly fill all fields');
      return false;
    }
  });
});
