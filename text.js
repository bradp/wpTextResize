jQuery(document).ready(function($){
  // Reset Font Size
  var originalFontSize = $('html').css('font-size');
    $(".resetFont").click(function(){
      $('#page').css('font-size', originalFontSize);
  });
  // Increase Font Size
  $(".increaseFont").click(function(){
    var currentFontSize = $('#page').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*1.2;
    $('#page').css('font-size', newFontSize);
    $('.decreaseFont').css('font-size', '10px');
    $('.increaseFont').css('font-size', '18px');
    $('.resetFont').css('font-size', '13px');
    return false;
  });
  // Decrease Font Size
  $(".decreaseFont").click(function(){
    var currentFontSize = $('#page').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*0.8;
    $('#page').css('font-size', newFontSize);
    $('.decreaseFont').css('font-size', '10px');
    $('.increaseFont').css('font-size', '18px');
    $('.resetFont').css('font-size', '13px');
    return false;
  });
});