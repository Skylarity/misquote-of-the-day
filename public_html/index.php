<!DOCTYPE html>
<html>
	<head>
		<title>Misquote Angular 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- IE required polyfills, in this exact order -->
		<script src="node_modules/es6-shim/es6-shim.min.js"></script>
		<script src="node_modules/systemjs/dist/system-polyfills.js"></script>
		<script src="node_modules/angular2/es6/dev/src/testing/shims_for_IE.js"></script>

		<script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
		<script src="node_modules/systemjs/dist/system.src.js"></script>
		<script src="node_modules/rxjs/bundles/Rx.js"></script>
		<script src="node_modules/angular2/bundles/angular2.dev.js"></script>

		<script>
			System.config({
				packages: {
					app: {
						format: 'register',
						defaultExtension: 'js'
					}
				}
			});
			System.import('app/main')
				.then(null, console.error.bind(console));
		</script>
	</head>

	<body>
		<misquote-app>Loading...</misquote-app>
	</body>
</html>
