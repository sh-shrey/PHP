<html>
    <head>
        <title>Simple Calculator in Php</title>
    </head>
    <body>
        <form>
            <input type = "number" name = "num1" placeholder = "First Number">
            <input type = "number" name = "num2" placeholder = "Second Number">
            <select name = "operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <button type = "submit" name = "submit" value = "submit">Calculate</button>
        </form>
        <p>The answer is:</p>
    <?php 
       if (isset($_GET['submit'])) {
           $firstNum = $_GET['num1'];
           $secondNum = $_GET['num2'];
           $operator = $_GET['operator'];
      
       switch ($operator) {
           case "Add":
               echo $firstNum + $secondNum;
               break;
           case "Subtract":
               echo $firstNum - $secondNum;
               break;
           case "Multiply":
               echo $firstNum * $secondNum;
               break;
           case "Divide":
               echo $firstNum / $secondNumb;
               break;
           default:
               echo "You should to select a method!";
               break;
       }
     }
    ?>    
    </body>
</html>