<?php 
require('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Parser</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<?php
echo getLastLineCSV();
?>

<section class="bg-white dark:bg-gray-900">
	

		<div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 grid grid-cols-2 gap-8">
		<div>
			
			<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">List of <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">contries</mark> with ports</h1>
			<p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">These countries have both seaports and river ports.</p>

			<h2 class="mt-8 mb-2 text-lg font-semibold text-gray-900 dark:text-white">Links to each country</h2>
			<ul id="myList" class="border dark:text-gray-400 max-h-40 max-w-md overflow-y-scroll overflow-x-hidden shadow-inner-xs space-y-1 text-gray-500 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
				<?php 
				foreach(getCountries() as $item) : ?>
					<li>
						<?= $item; ?>
					</li>
				<?php endforeach; ?>

			</ul>




			<label for="country" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Link to</label>
			<input type="text" name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Type product name">
	

			<button id="boldButton" type="submit" class="inline-flex items-center px-5 py-2.5 my-4 sm:mt-6 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg focus:ring-4 focus:ring-indigo-200 dark:focus:ring-indigo-900 hover:bg-indigo-800">
					Next
				</button>

		</div>



		<div>
			<h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
			<form action="#">
				<div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
					<div class="sm:col-span-2">
						<label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
						<input type="text" name="product" id="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Type product name">
					</div>
					<div class="w-full">
						<label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
						<input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Product brand" required="">
					</div>
					<div class="w-full">
						<label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
						<input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="$2999" required="">
					</div>
					<div>
						<label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
						<select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
							<option selected="">Select category</option>
							<option value="TV">TV/Monitors</option>
							<option value="PC">PC</option>
							<option value="GA">Gaming/Console</option>
							<option value="PH">Phones</option>
						</select>
					</div>
					<div>
						<label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Weight (kg)</label>
						<input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="12" required="">
					</div> 
					<div class="sm:col-span-2">
						<label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
						<textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Your description here"></textarea>
					</div>
				</div>
				<button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg focus:ring-4 focus:ring-indigo-200 dark:focus:ring-indigo-900 hover:bg-indigo-800">
					Add product
				</button>
			</form>
		</div>
		</section>
	<script src="scripts.js"></script>

</body>
</html>