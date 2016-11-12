$("#fNameLink").click(function(){
	$("#fNameContent").slideToggle();
});

function updateDashboard(){
	$.post('real_dashboard.php','',function(data){
		$('#real_dashboard').replaceWith(data);
	});
}

updateDashboard();