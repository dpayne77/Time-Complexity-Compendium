#!/usr/local/bin/php
<html>
<head>
    <title>Graded - Assessment Module 3</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<link rel="manifest" href="../../favicon/site.webmanifest">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
    .container {
        background-color: #f3f0e9;
        border: 1px solid #d3d3d3;
        border-radius: 5px;
        padding: 20px;
        margin: 20px;
  		max-width: 700px; /* Change this value to make the container smaller */
	}
    code pre {
		color: rgb(232,62,140);
		font-size: 18px;
		display: flex;
  		white-space: pre;
	}
    input[type=submit] {
        width: 100%;
        background-color: #125e44;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
<body style="background-color:#f3f0e9;">
<br>
    <div class="container mx-auto">
        <h2 align="center">Module 3: Simple Loops and Nested Loops<br></h2>
        <h1 align="center"><strong>ASSESSMENT</strong></h1><br>
        <h1 align="center"><strong>Score:

        <?php
	$myfile = fopen("data.csv", "a") or die("Unable to open file!");
	$Q1 = $_POST['Q1'];
	$Q4choices = $_POST['Q4'];
	$Q4 = "";
	foreach ($Q4choices as $type){
        $Q4 .= $type." ";
    }
	$Q2 = $_POST['Q2'];
	$Q3 = $_POST['Q3'];
    $Q5 = $_POST['Q5'];
	$Q6 = $_POST['Q6'];
	$Q7 = $_POST['Q7'];

    // echo ("$Q1<br>");
    // echo ("$Q2<br>");
    // echo ("$Q3<br>");
    // echo ("$Q4<br>");
    // echo ("$Q5<br>");
    // echo ("$Q6<br>");
    // echo ("$Q7<br>");

	//$website = htmlspecialchars($_POST['website']);
    $Q1correct = false;
    $Q2correct = false;
    $Q3correct = false;
    $Q4correct = false;
    $Q5correct = false;
    $Q6correct = false;
    $Q7correct = false;

	$score = 0;
	if ($Q1 == "O(n*log(m))") {
		$score = $score + 1;
        $Q1correct = true;
	}
	if ($Q2 == "O(m^2)") {
		$score = $score + 1;
        $Q2correct = true;
	}
	if ($Q3 == "Code Snippet B is more efficient than Code Snippet A") {
		$score = $score + 1;
        $Q3correct = true;
	}
	if ($Q4 == "A is O(n*m) ") {
		$score = $score + 1;
        $Q4correct = true;
	}
	if ($Q5 == "O(n*m*p*q)") {
		$score = $score + 1;
        $Q5correct = true;
	}
    if ($Q6 == "Both B and C") {
		$score = $score + 1;
        $Q6correct = true;
	}
    if ($Q7 == "O(q^2)") {
		$score = $score + 1;
        $Q7correct = true;
	}
    echo "$score/7";
	$currentDate = date("F j Y g:i a");
	$txt = "$$Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $score, $currentDate\n";
	fwrite($myfile, $txt);
	fclose($myfile);
        ?>

        </strong></h1>
        <br><hr>
        <form action='grade.php' method="post">
        <!--Question 1-->
        <h3>Question 1
            <?php
            if ($Q1correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Consider the following code:</p>
        <code><pre>
    int i = 0;
    while(i < n) {
        for (int j = 1; j < m; j*=2) {
            cout << "Question 1" << endl;
        }
        i++;
    }`
        </pre></code>
        <p>What is the time complexity of this code snippet?</p>
        <!--Correct Answer is O(n*log(m)) which is C-->

        <p><strong>You Chose:</strong>
        <?php
            echo $Q1;
        ?>
        <br><strong>Correct Answer:</strong> O(n*log(m))
        <br><strong>Explanation:</strong> The outer loop runs n times and the inner loop runs log(m) times. Therefore, the time complexity is O(n*log(m)).</p>

        <br><br>
        <!--Question 2-->
        <h3>Question 2
            <?php
            if ($Q2correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Consider the following code:</p>
        <code><pre>
    for (int k = 0; i < m; i++) {
        cout << "This is" << endl;
    }
    int i = 0;
    while(i < m) {
        for (int j = 1; j < m; j+=2) {
            cout << "Question 2" << endl;
        }
        i++;
    }`
        </pre></code>
        <p>What is the time complexity of this code snippet?</p>
        <!--Radio Bttns-->
        <!--Correct Answer is O(m^2) which is A-->
        
        <p><strong>You Chose:</strong>
        <?php
            echo $Q2;
        ?>
        <br><strong>Correct Answer:</strong> O(m<sup>2</sup>)
        <br><strong>Explanation:</strong> The outer loop runs m times and the inner loop runs m times. Therefore, the time complexity is O(m<sup>2</sup>). You can drop the first loop since it is a lower order term</p>
        
        
        <br><br>
        <!--Question 3-->
        <h3>Question 3
            <?php
            if ($Q3correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Consider the following code snippets</p>
        <h6>Code Snippet A:</h6>
        <code><pre>
    for (int i = 0; i < n; i++) {
        for (int j = m; j > 0; j--) {
            // some O(1) statement
        }
    }
        </pre></code>
        <h6>Code Snippet B:</h6>
        <code><pre>
    for (int i = m; i > 0; m—-) {
        for(int j = 1; j < n; n*=2) {
            // some O(1) statement
        }
    }

        </pre></code>
        <p>Which Code Snippet is more efficient in terms of Big O notation? </p>
        <!--Radio Bttns-->
        <!--Correct Answer is B-->
        
        <p><strong>You Chose:</strong>
        <?php
            echo $Q3;
        ?>
        <br><strong>Correct Answer:</strong> Code Snippet B is more efficient than Code Snippet A
        <br><strong>Explanation:</strong> Code Snippet B has a time complexity of O(m*log(n)) while Code Snippet A has a time complexity of O(n*m). Since Code Snippet B has a lower time complexity, it is more efficient.</p>
        
        
        
        <br><br>
        <!--Question 4-->
        <h3>Question 4
            <?php
            if ($Q4correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Which of the following are true about the code snippets in Question 3 (select all that apply)</p>
        <!--Checkboxes-->
        <!--Correct Answers is C-->

        <p><strong>You Chose:</strong>
        <?php
            echo $Q4;
        ?>
        <br><strong>Correct Answer:</strong> A is O(n*m)
        <br><strong>Explanation:</strong> The outer loop runs n times and the inner loop runs m times. Therefore, the time complexity is O(n*m). This was the only correct answer</p>
        
        <br><br>
        <!--Question 5-->
        <h3>Question 5
            <?php
            if ($Q5correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Consider the following code snippet</p>
        <code><pre>
    for (int s = 0; s < 83; s++) {
        for (int i = 0; i < n; i++) {
            for (int j = m; j > 0; j--) {
                for (int k = 0; k < p; k++) {
                    for (int l = 0; l < q; l++) {
                        // some O(1) statement
                    }
                }
            }
        }
    }
        </pre></code>

        <p>What is the time complexity of the code snippet? </p>
        <!--Radio Bttns-->
        <!--Correct Answer is O(n*m*p*q) which is D-->

        <p><strong>You Chose:</strong>
        <?php
            echo $Q5;
        ?>
        <br><strong>Correct Answer:</strong> O(n*m*p*q)
        <br><strong>Explanation:</strong> The time complexity of this code snippet is O(1) because the outermost loop runs 1 time. However, the inner loops have a complexity of O(n*m*p*q)</p>

        <br><br>
        <!--Question 6-->
        <h3>Question 6
            <?php
            if ($Q6correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Consider the following code snippet</p>
        <code><pre>
for (int j = 0; j < m; j++) {
    int i = 1;
    while (i < n) {
        cout << "HI" << endl;
        i = // update i here
    }
}
        </pre></code>

        <p>At the end of the inner while loop, what should the i be updated to for this code snippet to be O(m*log(n)) </p>
        <!--Radio Bttns-->
        <!--Correct Answer is Both B and C which is D-->
        
        <p><strong>You Chose:</strong>
        <?php
            echo $Q6;
        ?>
        <br><strong>Correct Answer:</strong> D, both B and C which is i*=2 and i*=3
        <br><strong>Explanation:</strong> Updating i to i*=2 or i*=3 will achieve a time complexity of O(m*log(n)), because these allow for logarithmic growth.</p>
        
        <br><br>
        <!--Question 7-->
        <h3>Question 7
            <?php
            if ($Q7correct == true) {
                echo "<span style='color:green;'>Correct</span>";
            } else {
                echo "<span style='color:red;'>Incorrect</span>";
            }
            ?>
        </h3>
        <p>Consider the following code snippet</p>
        <code><pre>
    for (int j = 0; j < q; j++) {
        // O(1) statement
    }
    for (int j = 0; j < q; j++) {
        // O(1) statement
    }
    for (int j = 0; j < q; j++) {
        for (int k = 0; k < q; k++) {
            // O(1) statement
        }
    }
    for (int j = 1; j < q; j*=2) {
        for (int k = 0; k < q; k*=3) {
            // O(1) statement
        }
    }
        </pre></code>

        <p>What is the time complexity of the code snippet? </p>
        <!--Radio Bttns-->
        <!--Correct Answer is B O(q^2)-->
        
        <p><strong>You Chose:</strong>
        <?php
            echo $Q7;
        ?>
        <br><strong>Correct Answer:</strong>O(q^2)
        <br><strong>Explanation:</strong> The first two loops have a time complexity of O(p) because they run q times. The third loop has a time complexity of O(q^2) because the inner loop runs q times and the outer loop runs q times.
        The last loop has O(log(q)*log(q)) complexity. Dropping constant multipliers, the final answer is O(q^2)</p>
        
        
        <br><br>
        </form>
        
        <p align="center" style="font-size: 18px"><a href="../../"><strong>Back To Home</strong></a></p>

    </div>
</body>
</html>