#!/usr/local/bin/php
<html>
<head>
    <title>Assessment Module 3</title>
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
        <h1 align="center"><strong>ASSESSMENT</strong></h1>
        <br>
        <p>
            <ul>
                <li>
                How do you know that the students understood the content?
                <ul>
                    <li>
                    I know students understood the content if they are able to answer the questions in this assessment with sufficient accuracy. These questions take a leap from the activity’s questions and require more thought and proficiency in understanding the time complexity of loops. Therefore, if a student is able to answer a majority of questions correctly, then I know they have understood and mastered the content.
                    </li>
                </ul>
                </li>
                <li>
                What does low, medium, and high proficiency look like?
                <ul>
                    <li>Proficiency can be assessed with assessment scores out of 7 points.</li>
                    <li>Low Proficiency: score of 0-3</li>
                    <li>Medium Proficiency: score of 4-5</li>
                    <li>High Proficiency: score of 6-7</li>
                </ul>
                </li>
                <li>
                What does an assignment look like that exceeds expectations, meets expectation, and does not meet expectations?
                <ul>
                    <li>Since this assignment is a summative assessment, exceeding expectations would be all questions correct. This is because I do not expect all students to get every question correct due to intentionally challenging questions being included in the assessment. Therefore, getting all questions correct would be an indication of a high achiever. Meeting expectations would look like a score of 5-6. This is because it appears as though the student understands the concept, and possibly only answered 1 or 2 of them incorrectly. Not meeting expectations would be a score lower than a 5. I cannot confidently say that a student who received a 4 or less has mastered or understood the content well. That student should go back to the module and study the module more.</li>
                </ul>
                </li>
            </ul>
        </p>
        <br><hr>
        <form action='grade.php' method="post">
        <!--Question 1-->
        <h3>Question 1</h3>
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
        <!--Radio Bttns-->
        <!--Correct Answer is O(n*log(m)) which is C-->
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="O(m*log(n))" name="Q1" value="O(m*log(n))">
            <label class="custom-control-label" for="O(m*log(n))">O(m*log(n))</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(n*m)" name="Q1" value="O(n*m)">
            <label class="custom-control-label" for="O(n*m)">O(n*m)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(n*log(m))" name="Q1" value="O(n*log(m))">
            <label class="custom-control-label" for="O(n*log(m))">O(n*log(m))</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(log(n)*log(m))" name="Q1" value="O(log(n)*log(m))">
            <label class="custom-control-label" for="O(log(n)*log(m))">O(log(n)*log(m))</label><br>
        </div><br><br>


        <!--Question 2-->
        <h3>Question 2</h3>
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
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="O(m^2)" name="Q2" value="O(m^2)">
            <label class="custom-control-label" for="O(m^2)">O(m<sup>2</sup>)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(m^m)" name="Q2" value="O(m^m)">
            <label class="custom-control-label" for="O(m^m)">O(m<sup>m</sup>)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(m*log(m))" name="Q2" value="O(m*log(m))">
            <label class="custom-control-label" for="O(m*log(m))">O(m*log(m))</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(m + m*log(m))" name="Q2" value="O(m + m*log(m))">
            <label class="custom-control-label" for="O(m + m*log(m))">O(m + m*log(m))</label><br>
        </div><br><br>



        <!--Question 3-->
        <h3>Question 3</h3>
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
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="Code Snippet A is more efficient than Code Snippet B" name="Q3" value="Code Snippet A is more efficient than Code Snippet B">
            <label class="custom-control-label" for="Code Snippet A is more efficient than Code Snippet B">Code Snippet A is more efficient than Code Snippet B</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="Code Snippet B is more efficient than Code Snippet A" name="Q3" value="Code Snippet B is more efficient than Code Snippet A">
            <label class="custom-control-label" for="Code Snippet B is more efficient than Code Snippet A">Code Snippet B is more efficient than Code Snippet A</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="Both snippets are equally efficient" name="Q3" value="Both snippets are equally efficient">
            <label class="custom-control-label" for="Both snippets are equally efficient">Both snippets are equally efficient</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="You cannot tell without running them first" name="Q3" value="You cannot tell without running them first">
            <label class="custom-control-label" for="You cannot tell without running them first">You cannot tell without running them first</label><br>
        </div><br><br>


        <!--Question 4-->
        <h3>Question 4</h3>
        <p>Which of the following are true about the code snippets in Question 3 (select all that apply)</p>
        <!--Checkboxes-->
        <!--Correct Answers is C-->
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="B is O(m*m)" name="Q4[]" value="B is O(m*m)">
            <label class="custom-control-label" for="B is O(m*m)"> B is O(m*m)</label><br>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="O(m*n^2)" name="Q4[]" value="O(m*n^2)">
            <label class="custom-control-label" for="O(m*n^2)"> B is O(m*n<sup>2</sup>)</label><br>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="A is O(n*m)" name="Q4[]" value="A is O(n*m)">
            <label class="custom-control-label" for="A is O(n*m)"> A is O(n*m)</label><br>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="A is O(m*m)" name="Q4[]" value="A is O(m*m)">
            <label class="custom-control-label" for="A is O(m*m)"> A is O(m*m)</label><br>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="Both are O(m*n)" name="Q4[]" value="Both are O(m*n)">
            <label class="custom-control-label" for="Both are O(m*n)"> Both are O(m*n)</label><br>
        </div>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="Both are O(n*log(m))" name="Q4[]" value="Both are O(n*log(m)">
            <label class="custom-control-label" for="Both are O(n*log(m))"> Both are O(n*log(m))</label><br>
        </div><br><br>


        <!--Question 5-->
        <h3>Question 5</h3>
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
        <!--Correct Answer is O(n*m*p*q) which is B-->
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(s*n*m*l)" name="Q5" value="O(s*n*m*l)">
            <label class="custom-control-label" for="O(s*n*m*l)">O(s*n*m*p*q)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="O(n*m*p*q)" name="Q5" value="O(n*m*p*q)">
            <label class="custom-control-label" for="O(n*m*p*q)">O(n*m*p*q)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(s*n*m*k*q)" name="Q5" value="O(s*n*m*k*q)">
            <label class="custom-control-label" for="O(s*n*m*k*q)">O(s*n*m*k*q)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(1)" name="Q5" value="O(1)">
            <label class="custom-control-label" for="O(1)">O(1)</label><br>
        </div><br><br>


        <!--Question 6-->
        <h3>Question 6</h3>
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
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="i = i - 3" name="Q6" value="i = i - 3">
            <label class="custom-control-label" for="i = i - 3">i = i - 3;</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="i = i * 3" name="Q6" value="i = i * 3">
            <label class="custom-control-label" for="i = i * 3">i = i * 3;</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="i = i * 2" name="Q6" value="i = i * 2">
            <label class="custom-control-label" for="i = i * 2">i = i * 2;</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="Both B and C" name="Q6" value="Both B and C">
            <label class="custom-control-label" for="Both B and C">Both B and C</label><br>
        </div><br><br>


        <!--Question 7-->
        <h3>Question 7</h3>
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
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(log(q)*log(q))" name="Q7" value="O(log(q)*log(q))">
            <label class="custom-control-label" for="O(log(q)*log(q))">O(log(q)*log(q))</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="O(q^2)" name="Q7" value="O(q^2)">
            <label class="custom-control-label" for="O(q^2)">O(q<sup>2</sup>)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(q^2 + log(q)*log(q) + 2q)" name="Q7" value="O(q^2 + log(q)*log(q) + 2q)">
            <label class="custom-control-label" for="O(q^2 + log(q)*log(q) + 2q)">O(q<sup>2</sup> + log(q)*log(q) + 2q)</label><br>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio"  id="O(q^2 + log(q)*log(q) + q)" name="Q7" value="O(q^2 + log(q)*log(q) + q)">
            <label class="custom-control-label" for="O(q^2 + log(q)*log(q) + q)">O(q<sup>2</sup> + log(q)*log(q) + q)</label><br>
        </div><br><br>


        <input type="submit" id="submit_btn"  onclick="" value="SUBMIT">
        </form>
        
    </div>
</body>
</html>