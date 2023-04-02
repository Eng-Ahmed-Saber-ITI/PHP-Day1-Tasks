<html>
    <body>
        <?php 
        //~ 1-  Search for how to make \n work in browser.
        //~ note: <br>  
        echo nl2br("Hello Ahmed\nHow can i help you?").nl2br("\n").nl2br("\n");
        //~ 2-  Search 3 built-in function of a string.
        //^ lcfirst() - converts the first character of a string to lowercase
        echo lcfirst("Hello Ahmed").nl2br("\n");
        //^ ucfirst() - converts the first character of a string to uppercase
        echo ucfirst("hello ahmed").nl2br("\n");        
        //^ ucwords() - converts the first character of each word in a string to uppercase
        echo ucwords("hello ahmed").nl2br("\n");
        //^ strtoupper() - converts a string to uppercase
        echo strtoupper("hello ahmed").nl2br("\n");
        //^ strtolower() - converts a string to lowercase
        echo strtolower("HELLO AHMED").nl2br("\n");
        //^ str_repeat()	Repeats a string a specified number of times
        echo str_repeat("  Hello Ahmed  ",3).nl2br("\n");
        //^ str_word_count() Count the number of words in a string
        echo str_word_count("Hello Ahmed").nl2br("\n");
        //^ str_split() Splits a string into an array --> str_split(string,length)
        print_r(str_split("Hello ",3)).nl2br("\n");
        //~ 3-  Display $_SERVER in readable format.
        echo "<br>";
        echo "<pre>";
        $str = print_r ($_SERVER);
        print_r (explode(" ",$str));
        echo "</pre>";
        echo "<br>";

        //~ 4-  Write a PHP script to get the sum and avg of an indexed array
        //~ with value = 45 in index =1
        //~ with value = 12 in index =0
        //~ with value = 25 in index =3
        //~ with value = 10 in index =2
        //~ after that sort it in a reverse order (highest to lowest).
        //~ note:
        //~ array
        //* First method to associate create array. */
            echo nl2br("\n");
            // $numbers = array(12,45,15,25);
        //* Second method to create array. */
            $numbers[0] = 12;
            $numbers[1] = 45;
            $numbers[2] = 10;        
            $numbers[3] = 25;
        // *sum
            echo nl2br("\n \nSummation of array is : ");       
            echo array_sum($numbers);
            echo nl2br("\n");
        // *avg
            $average = (array_sum($numbers)/count($numbers));
            echo nl2br("\n Average of array is : ");
            echo $average.nl2br("\n");
            echo nl2br("\n");
        // *sort reverse
            //!rsort() - sort arrays in descending order
            rsort($numbers);
            print_r($numbers);
            echo nl2br("\n");
        //~ 5-  Write a PHP script to sort the following associative array :
        //~ array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) i
        echo nl2br("\n");
        echo nl2br("\n");
        //* First method to associate create array. */
        // $age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
        //* Second method to create array. */
        $age['Sara'] = 31;
        $age['John'] = 41;
        $age['Walaa'] = 39;        
        $age['Ramy'] = 40;
        echo nl2br("\n Array is: \n"); 
        print_r($age);
        echo nl2br("\n");
        // a) ascending order sort by value
        // //^asort() - sort associative arrays in ascending order, according to the value
            asort($age);
            echo nl2br("\n a) ascending order sort by value is: \n");       
            print_r($age);
            echo nl2br("\n");
        // b) ascending order sort by Key
        // //^ksort() - sort associative arrays in ascending order, according to the key
            ksort($age);
            echo nl2br("\n b) ascending order sort by Key is: \n");       
            print_r($age);
            echo nl2br("\n");
        // c) descending order sorting by Value
        // //^arsort() - sort associative arrays in descending order, according to the value
            arsort($age);
            echo nl2br("\n c) descending order sorting by Value is: \n");       
            print_r($age);
            echo nl2br("\n");
        // d) descending order sorting by Key  
        // //^krsort() - sort associative arrays in descending order, according to the key
            krsort($age);
            echo nl2br("\n d) descending order sorting by Key is: \n");       
            print_r($age);
            echo nl2br("\n");
        // ************************************
        ?>
    </body>
</html>