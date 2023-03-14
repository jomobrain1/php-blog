const toggleButton = document.getElementById('toggle');
	const sidebar = document.getElementById('sidebar');
	
	toggleButton.addEventListener('click', function() {
		sidebar.classList.toggle('hide');
		toggleButton.classList.toggle('hide');
	});