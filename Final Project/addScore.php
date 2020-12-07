<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scoresdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die(" Connection Failed: " . $conn->connect_error);
    }

    if (isset($_POST['Score'])) $Score = $_POST['Score'];

    $sql = "INSERT INTO scores (Score)
    VALUES('$Score')";

    submitData($conn, $sql);

    function submitData($conn, $sql) {
        if ($conn->query($sql) === TRUE) {
        } else {
                echo "Error: ". $sql . "<br>" . $conn->error;
        }
    }

    echo <<<_START
	<html>
			<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<title>Jumping Game</title>
				<link href="default.css" rel="stylesheet" />
			</head><section><div id="header"></div></section>
			<body>
				<div class="wrapper">
					<header><nav><ul class="nav"><li><a href="game_home.html">Play</a></li><li><a href="instruction_page.html">Instructions</a></li><li><a href="high_scores.php">High Scores</a></li></ul></nav>
					</header><h3>Your score has been submitted!</h3>
	_START;
    echo <<<_END
						</div>
					</main>
				</div><footer>Copyright Protected. All rights reserved. <br /> <br /> Jumping Game <br /> game@jumping.com</footer>
			</body>
		</html>
	_END;
?>