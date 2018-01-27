function randomIntFromInterval(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}

function typeWrite(id){
  $('#'+id).addClass('cursor')
  var text = $('#'+id).text();
  var randInt = 0
  for (var i = 0; i < text.length; i++) {
    randInt += parseInt(randomIntFromInterval(40,300));
    var typing = setTimeout(function(y){
      $('#'+id).append(text.charAt(y));
    },randInt, i);
  };
  setTimeout(function(){
    $('#'+id).removeClass('cursor');
  },randInt+2500);
}

function typeWriteSays(says, speaker){
  /*typeWrite(says).done(
  	typeWrite(speaker){});*/
  $.when(typeWrite(says)).then(typeWrite(speaker));
}
