<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scoresdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die(" Connection Failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM scores order by Score desc limit 10";
    $result = $conn->query($sql);


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
					</header>
	_START;
    $n = 0;
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $n++;
        echo
        "<div class='card'>
                                <h2>  {$n} : {$row['Score']} </h2>
                            </div>";
    }
    } else {
        echo "0 results";
    }

    $conn->close();

    echo <<<_END
						</div>
					</main>
				</div><footer>Copyright Protected. All rights reserved. <br /> <br /> Jumping Game <br /> game@jumping.com</footer>
			</body>
		</html>
	_END;
?>