<!DOCTYPE html>
<html>
<head>
	<title>UTS-NAMA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Selamat datang</h1>
	<button onclick="showInput('meter')">Meter to Feet</button>
	<button onclick="showInput('centimeter')">Centimeter to Inch</button>
	<div id="input">
		<label for="value">Input value:</label>
		<input type="text" id="value" name="value">
		<button onclick="convert()">Convert</button>
	</div>
	<div id="result"></div>
	<script>
		function showInput(type) {
			document.getElementById("result").innerHTML = "";
			var inputDiv = document.getElementById("input");
			if (type === "meter") {
				inputDiv.style.display = "block";
				inputDiv.getElementsByTagName("label")[0].innerHTML = "Input meter value:";
			} else if (type === "centimeter") {
				inputDiv.style.display = "block";
				inputDiv.getElementsByTagName("label")[0].innerHTML = "Input centimeter value:";
			}
		}
		function convert() {
			var value = document.getElementById("value").value;
			if (value === "" || isNaN(value)) {
				alert("Input must be a number");
			} else {
				var type = document.getElementById("input").getElementsByTagName("label")[0].innerHTML;
				if (type === "Input meter value:") {
					var result = value * 3.28;
					document.getElementById("result").innerHTML = value + " meter = " + result.toFixed(2) + " feet";
				} else if (type === "Input centimeter value:") {
					var result = value * 0.393;
					document.getElementById("result").innerHTML = value + " cm = " + result.toFixed(2) + " inch";
				}
			}
		}
	</script>
</body>
</html>
