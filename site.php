<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" media="screen">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="get" class='container'>
        <input type="radio" name="choice" id="rock" value='rock' checked>
        <label for="rock">rock</label><br>
        <input type="radio" name="choice" id='paper' value='paper'>
        <label for="paper">paper</label><br>
        <input type="radio" name="choice" id='scissors' value='scissors'>
        <label for="scissors">scissors</label><br>
        <input type='submit' class='btn'>
    </form>

    <?php 
        $userInput = $_GET['choice'];
        $computerChoice = computerChoice();
        

        function computerChoice() {

            $randNumber = rand(1, 3);
            
            if ($randNumber == 1) {
                return 'rock';
            } else if ($randNumber == 2) {
                return 'paper';
            } else {
                return 'scissors';
            }
        }

        function checkForWinner() {

            global $computerChoice, $userInput;

            if ($computerChoice == $userInput) {
                return "It's a draw!";
            } else if ($userInput == 'rock' && $computerChoice == 'scissors') {
                return "You Win!";
            } else if ($userInput == 'rock' && $computerChoice == 'paper') {
                return "Computer Wins!";
            } else if ($userInput == 'paper' && $computerChoice == 'rock') {
                return "You Win!";
            } else if ($userInput == 'paper' && $computerChoice == 'scissors') {
                return "Computer Wins!";
            } else if ($userInput == 'scissors' && $computerChoice == 'rock') {
                return "Computer Wins!";
            } else if ($userInput == 'scissors' && $computerChoice == 'paper') {
                return "You Win!";
            }
        }
       
        echo "<div class='container output'>" . "Computer:" . '<br>' . $computerChoice . '</br>' . checkForWinner() . "</div>";
        
    ?>
</body>
</html>