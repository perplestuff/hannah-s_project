<html lang='en'>
	<header>
		<title>Hannah Vents.</title>
		<link rel="stylesheet" href="pages/css/main.css" type="text/css"/>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="pages/js/main.js" type="text/javascript"></script>
		<script>
		window.onerror = function (msg, url, linenumber) {
		    alert ('Error: '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);
		    return True;
		}
		</script>
	</header>
	<body onload="refresh()">
		<h2>Hannah's Vent Space.</h2>
		<button onclick="refresh()">Refresh.</button><br/><br/>
		<div id="left">
			<form id="ventspace">
				<label for="title"><i>Vent Title.</i></label><br/>
				<input type="text" id="title" name="title"/><br/>
				<label for="msg"><i>Vent Message.</i></label><br/>
				<textarea type="text" id="msg" name="msg" autofocus></textarea><br/>
				<label for="pic"><i>Vent Pic.</i></label><br/>
				<input type="file" id="pic" name="pic"/><br/>
				<label for="color"><i>Vent Color.</i></label><br/>
				<select id="color" name="color"><br/>
					<option value="black">black</option>
					<option value="green">green</option>
					<option value="blue">blue</option>
					<option value="yellow">yello</option>
					<option value="purple">purple</option>
					<option value="orange">orange</option>
					<option value="pink">pink</option>
					<option value="red">red</option>
				</select><br/>
				<label for="font"><i>Vent Font.</i></label><br/>
				<select id="font" name="font"><br/>
					<option value="16">16px</option>
					<option value="20">20px</option>
					<option value="24">24px</option>
					<option value="28">28px</option>
				</select><br/><br/>
				<input type="submit" value="Submit."/>
			</form>
		</div>
		<div id="timeline"></div>
	</body>
</html>
