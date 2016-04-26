$(document)
		.ready(
				function() {
					$(".btn-login")
							.click(
									function(e) {
										e.preventDefault();
										window.frames["content"].document.location.href = 'service_mobile.php?token=999';
									});
					setInterval(function() {
						$.get('data/json/login.json', function(data) {
							
						})
						.success(function() { window.document.location.href = 'index.php?service=service_mobile'; })
						.error(function() {  })
						.complete(function() { })
					},10000);
				});
window.onload = function() {
	window.addEventListener('shake', shakeEventDidOccur, false);
	function shakeEventDidOccur() {
		if (confirm("Login in desktop?")) {
			document.location.href = 'service_mobile.php?token=999';
		}
	}
};