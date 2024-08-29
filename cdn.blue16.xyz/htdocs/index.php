<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>?</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
	<style>
		body {
			background-color: #111;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			font-family: 'Roboto', sans-serif;
			color: #ffffff;
		}

		.glowing-text {
			font-size: 24px;
			color: #ffffff;
			text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff;
			animation: spin 4s linear infinite;
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		.bottom-text,
		.small-text {
			opacity: 0;
			transition: opacity 4s ease-in-out;
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<div class="glowing-text" id="randomText">
		:)
	</div>

	<div class="bottom-text" id="additionalText">
		BLUE16 is currently down. Thanks :)
	</div>

	<div class="small-text" id="randomSmallText">
		smth not real one :/
	</div>

	<script>
		const randomTextOptions = [":)", ":o", ":D", ":(", ";(", ":3", ":/"];
        const randomSmallTextOptions = ["funfact: this page is small thing", "hihi!!!", "i like these things!!!", "no sleals no steals kitti, ok?"];
        function setRandomText(elementId, options) {
            const randomIndex = Math.floor(Math.random() * options.length);
            const randomText = options[randomIndex];
            document.getElementById(elementId).textContent = randomText;
        }
        setRandomText('randomText', randomTextOptions);
        setInterval(() => setRandomText('randomText', randomTextOptions), 3000);
        setTimeout(() => {
            const additionalText = document.getElementById('additionalText');
            additionalText.style.opacity = '0.1';
        }, 5000);
        setTimeout(() => {
            const smallText = document.getElementById('randomSmallText');
            setRandomText('randomSmallText', randomSmallTextOptions);
            smallText.style.opacity = '0.1';
        }, 6000);
	</script>
</body>

</html>