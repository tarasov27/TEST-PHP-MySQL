$("#sendPoll").on("click", function() {
	let name = $("#name").val();
	let email = $("#email").val();
	let poll1 = $("#poll1").val();
	let poll2 = $("#poll2").val();
	let poll3 = $("#poll3").val();

$.ajax({
  url: 'add.php',
  type: 'POST',
  cache: false,
  data: { 'name': name, 'email': email, 'poll1': poll1, 'poll2': poll2, 'poll3': poll3 },
  dataType: 'html',
  beforeSend: function() {
  	$("#sendPoll").prop("disable", true);
  },
  success: function() {
  	alert('Данные успешно отправлены');
  	$("#sendPoll").prop("disable", false);
  }
});
});