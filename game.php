<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Scavenger Hunt Puzzle Game</title>
	<link rel="stylesheet" href="style.css">
</head>
<select id="instructions">
  <option value="">Read Instructions</option>
  <option value="1">Read the clue and solve the puzzle</option>
  <option value="2">Every clue contains only 5 attempts to answer.Chose wisely.</option>
    <option value="3">Enter your answer in the text box</option>
  <option value="4">Submit your answer by clicking the button</option>
  <option value="5">If your answer is wrong an attempt is reduced</option>
  <option value="6">If all the attempts are completed your game is over.</option>
   <option value="7">Repeat until you finish all the puzzles</option>
</select>
<body>
<?php
 session_start();
  if(isset($_SESSION['un'])){
    echo '<br><div style="font-size:2em;text-align:center;margin-left:20px">'."Welcome :". $_SESSION["un"]."!!";
  }
  else{
    header('Location:index.php');
  }
  ?>

<a href="logout.php">Logout</a>
<h1>Scavenger Hunt Puzzle Game</h1>
<p id="clue"></p>
		<input type="text" id="answer-input">
		<button id="button">Submit Answer</button>
		<div id="image-container"></div>

	<script src="script.js"></script>
</body>
</html>
