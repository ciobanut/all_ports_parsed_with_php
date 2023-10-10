
document.addEventListener('DOMContentLoaded', function() {
	const myList = document.getElementById('myList');
	const country_input = document.getElementById('country');
	const listItems = myList.getElementsByTagName('li');
	const boldButton = document.getElementById('boldButton');
	let currentIndex = 0;

	boldButton.addEventListener('click', function() {
		if (currentIndex < listItems.length) {

			// Add <strong> tag to the current item
			listItems[currentIndex].innerHTML = `<strong>${listItems[currentIndex].textContent}</strong>`;
			country_input.value = listItems[currentIndex].textContent.trim();

			runPhpScript(country_input.value);

			currentIndex++;
		}
	});
});


// Function to send an AJAX request to the PHP script
function runPhpScript(variable) {

	var param1 = 100;
	var param2 = 230;
	var xhr = new XMLHttpRequest();

	xhr.open("POST", "functions.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	// Set up a callback function to handle the response
	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			// The response is available in xhr.responseText
			var responseData = xhr.responseText;
			
		}
	};

	xhr.send("action=callPhpFunction&link=" + variable + "&param2=" + param2);
}