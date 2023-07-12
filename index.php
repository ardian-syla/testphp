<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

        <?php

            /*
            //Writing HTML
            echo("Hello from Ardiani");
            echo "<h1>Hello from Ardiani</h1>";
            echo "<hr>";
            echo "<p>This is PHP Tutorial</p>";
            */

            /*
            //VARIABLAT
            $characterName = "Tom";
            $characterAge = 53;
            echo "There once was a man name $characterName <br>";
            echo "He was $characterAge years old <br>";
            echo "He really liked the name $characterName <br>";
            echo "But didn't like being $characterAge <br>";
            */

            /*
            $phrase = "To be or not to be";
            $age = 25;
            $gpa = 25.6;
            $isMale = false;
            echo $phrase;
            */


            /*
            //Working With Numbers
            echo 40.998 ."<br>";
            echo 40 ."<br>";
            echo 2 + 6 . "<br>";
            echo 4 - 6 . "<br>";
            echo 2 * 5 . "<br>";
            echo 3 / 9 . "<br>";
            echo 23 % 4 ."<br>";
            echo 6 + 9 * 10 . "<br>";
            echo (6 + 9) * 10 . "<br>";
            $num = 10;
            echo $num ."<br>";
            $num1 = 500;
            $num1++;
            echo $num1 ."<br>";
            $num2 = 17;
            $num2--;
            echo $num2 ."<br>";
            $num = 10;
            $num = $num + 25;
            //$num += 25;
            //$num -= 25;
            //$num *= 25;
            //$num /= 25;
            echo $num ."<br>";
            echo abs(-100)."<br>";
            echo pow(2, 4)."<br>";
            echo sqrt(144)."<br>";
            echo max(25 , 330)."<br>";
            echo min(32 , 70)."<br>";
            echo round(4.6)."<br>";
            echo round(4.1)."<br>";
            echo ceil(2.7)."<br>";
            echo floor(4.9)."<br>";
            */

            
        ?>
        <!-- <form action="home.php" method="get">
            Name: <input type="text" name="username">
            <br>
            <br>
             Age: <input type="number" name="age">
                    <input type="submit">
        </form>
        <br>
        Your name is :  <?php 
        /* echo $_GET["username"]*/
        
        ?>
        <br>
        Your age is : --> <?php /* echo $_GET["age"] */ ?> 

         
        <!-- <form action="index.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <input type="submit">
        </form>
        Answer: -->
        <?php 
        //echo $_GET["num1"] + $_GET["num2"]
        ?>

        <!-- <form action="index.php" method="get">
            Colors: <input type="text" name="color"><br>
            Plural Noun: <input type="text" name="pluralNoun"><br>
            Celebrity: <input type="text" name="celebrity"><br>
            <input type="submit">
        </form>
        <br><br> -->

        <?php  
            // $color = $_GET["color"];
            // $pluralNoun = $_GET["pluralNoun"];
            // $celebrity = $_GET["celebrity"];
            // echo "Roses are $color <br>";
            // echo "$pluralNoun are blue <br>";
            // echo "I love $celebrity <br>";
        ?>

        <!-- <form action="index.html" method="get">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form>
        <br><br> -->

        <?php
          //  echo $_GET["name"];
        ?>

        <!-- <form action="index.php" method="get">
            Password: <input type="password" name="password"><br>
            <input type="submit">
        </form> 
        <br><br> -->

        <?php
           // echo $_GET["password"];
        ?>

        <!-- Arrays -->
        <?php 
            // $shoket = array("Elton", "Dren", "Gjoka", "Jim");
            // echo $shoket[0]."<br>";
            // echo $shoket[1]."<br>";
            // echo $shoket[2]."<br>";
            // echo $shoket[3]."<br>";
            // echo $shoket[1] = "Dwight"."<br>"; //It changes the name of the first array
            // echo count($shoket)."<br>";
        ?>
        <!-- <form action="index.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
            <input type="submit">
        </form> -->
        <?php
           /* $fruits = $_POST["fruits"];
            echo $fruits[0];
            */
        ?>

        <!-- Associative Arrays -->
        <!-- <form action="index.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php
            //$grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
            // echo $grades["Jim"]."<br>";
            // echo $grades["Pam"]."<br>";
            // echo $grades["Oscar"]."<br>";
           // echo $grades[$_POST["student"]]."<br>";
        ?> -->

        <?php
        // function sayHi($name, $age){
        //     echo "Hello $name , you are $age<br>";
        // }
        
        // sayHi("Mike", 40);
        // sayHi("Dave", 37); 
        // sayHi("Tim", 50); 
        ?>

        <!-- Return Statements -->
        <?php
            // function cube($num){
            //echo "Hello <br>";
            //     return $num * $num * $num;
            // }

            // $cuberesult = cube(4);
            // echo $cuberesult;
            //echo cube(4);
        ?>

        <?php
        // $isMale = true;
        // $isTall = true;
        // if($isMale || $isTall)
        // {
        //     echo "You are a tall male";
        // }
        // elseif ($isMale || !$isTall){
        //     echo "You are a short male";
        // }
        // elseif (!$isMale || $isTall){
        //     echo "You are not male but are tall";
        // }
        // else{
        //     echo "You are not a male and not tall";
        // }
        ?>

        <?php
        // function getMax($num1, $num2, $num3)
        // {
        //   if($num1 != $num2 && $num1 >= $num3){
        //     return $num1;
        //   }
        //   elseif($num2 == $num1 && $num2 >= $num3){
        //     return $num2;
        //   }
        //   else
        //   {
        //     return $num3;
        //   }
        // }
        // echo getMax(200,2,3);
        ?>

        <!-- Building a Better Calcucalotr -->
        <!-- <form action="index.php" method="post">
            First Num: <input type="number" step="0.1" name="num1"><br>
            OP: <input type="text" name="op"><br>
            Second Num: <input type="number" name="num2"><br>
            <input type="submit">
        </form>
        <?php
        //  $num1 = $_POST["num1"];
        //  $num2 = $_POST["num2"];
        //  $op = $_POST["op"];

        //  if($op == "+")
        //  {
        //     echo $num1 + $num2;
        //  }
        //  elseif($op == "-"){
        //     echo $num1 - $num2;
        //  }
        //  elseif ($op == "*") {
        //     echo $num1 * $num2;
        //  }
        //  elseif ($op == "/") {
        //     echo $num1 / $num2;
        //  }
        //  else
        //  {
        //     echo "ERROR";
        //  }
        ?> -->

        <!-- Switch Statements -->
        <!-- <form action="index.php" method="post">
            What day is today?
            <input type="text" name="day">
            <input type="submit">
        </form> -->
        <?php
            // $day = $_POST["day"];
            // switch($day){
            //     case "Monday":
            //         echo "Today is Monday";
            //         break;
            //     case "Tuesday":
            //         echo "Today is Tuesday";
            //         break;
            //     case "Wednesday":
            //         echo "Today is Wednesday";
            //         break;
            //     case "Thursday":
            //         echo "Today is Thursday";
            //         break;
            //     case "Friday":
            //         echo "Today is Friday";
            //         break;
            //     case "Saturday":
            //         echo "Today is Saturday";
            //         break;
            //     case "Sunday":
            //         echo "Today is Sunday";
            //         break;
            //     default :
            //      echo "You have not write a day of a week";
            //      break;
                
            // }
        ?>

        <?php
            // $index = 1;
            // while($index <=5){
            //     echo "$index <br>";
            //     $index = $index + 1;
            //     $index++;
            // }
            // $index = 6;
            // do{
            // echo "$index <br>";
            //     $index = $index + 1;
            //     $index++;
            // }while($index <=5);
        ?>

        <!-- For Loops -->
        <?php
        // $luckyNumbers = array(4, 8, 14, 16, 23, 42);
        // for ($i=0; $i <= count($luckyNumbers) ; $i++) { 
        //     echo "$luckyNumbers[$i] <br>";
        // }
        // for ($i=1; $i <=5; $i++) { 
        //     echo "$i <br>";
        // }
        ?>

        <?php
            /*
            echo "Comments are fun!";
            echo "Comments are fun!";
            echo "Comments are fun!";
            echo "Comments are fun!";
            */
            //echo "Comments are fun!";
        ?>

        <!-- Including HTML -->
         <?php 
        // include "header.html" 
        ?>
        <!-- <p>Hello World</p> -->
        <?php 
        // include "footer.html" 
        ?>

        <!-- Inculde - PHP -->
        <?php
        // $title = "PHP Tutorial";
        // $author = "Mike";
        // $wordCount = 400;
        //     include "article-header.php";
        // include "useful-tools.php";
        // sayHi("Ardian <br>");
        // echo $feetInMile;
        ?>

        <!-- Classes & Objects -->
        <?php
            // class Book {
            //     var $title;
            //     var $author;
            //     var $pages;
            // }

            // $book1 = new Book;
            // $book1->title = "Harry Potter";
            // $book1->author = "JK Rowling";
            // $book1->pages = 400;

            // echo $book1->title."<br>";
            // echo $book1->author."<br>";
            // echo $book1->pages."<br>";
        ?>

        <!-- Constructors -->
        <?php
        // class Book {
        //         var $title;
        //         var $author;
        //         var $pages;

        //         // function __construct(){
        //         //     echo "New Book Created <br>";
        //         // }
        //         // function __construct($name){
        //         //     echo "$name <br>";
        //         // }
        //         function __construct($aTitle, $aAuthor, $aPages){
        //             $this->title = $aTitle;
        //             $this->author = $aAuthor;
        //             $this->pages = $aPages;
        //         }
        //     }

        // $book1 = new Book("Harry Potter", "JK Rowling", 400);
        //     // $book1->title = "Harry Potter";
        //     // $book1->author = "JK Rowling";
        //     // $book1->pages = 400;

        //     $book2 = new Book("Tom");
        //     $book2->title = "Lord Of The Rings";
        //     $book2->author = "Tolkien";
        //     $book2->pages = 700;
        ?>

        <?php
            // class Student {
            //     var $name;
            //     var $major;
            //     var $gpa;

            //     function __construct($name, $major, $gpa){
            //         $this->name = $name;
            //         $this->major = $major;
            //         $this->gpa = $gpa;
            //     }
                
            //     function hasHonors(){
            //         if ($this->gpa >= 3.5) {
            //             return "true";
            //         }
            //         return "false";
            //     }
            // }

            // $student1 = new Student("Ardian", "Programmer", 5.8);
            // $student2 = new Student("Ardian", "Art", 2.3);

            // echo $student1->hasHonors();
        ?>

        <!-- Getters & Setters -->
        <?php
        //     class Movie {
        //         public $title;
        //         // public $rating;
        //         private $rating;

        //         function __construct($title, $rating){
        //             $this->title = $title;
        //             $this->rating = $rating;
        //         }
                
        //         function getRating(){
        //             return $this->rating;
        //         }

        //         function setRating($rating){
        //             // $this->rating = $rating;
        //             if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
        //                 $this->rating = $rating;   
        //             }
        //             else{
        //                 $this->rating = "ERROR";
        //             }
        //         }
        //     }

        //     $avengers = new Movie("Avengers", "PG-13");
        //     $avengers->setRating("Dog");
        //    echo  $avengers->getRating();
           // echo $avengers->rating;
        ?>

</body>
</html>