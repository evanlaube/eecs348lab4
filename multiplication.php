
<html>
    <head>
        <meta charset="UTF-8">

        <title> EECS 348 - Multiplication Table </title>
        <link rel="stylesheet" href="main.css"/>
    </head>
    
    <body>

        <nav>
            <h1> Multiplication Table </h1>
        </nav>

        <main>
            <div class="content">
                <form method="post" action="multiplication.php">
                    <label for="size">Number of rows/cols</label>
                    <input type="number" id="size" name="size" value="1">
                    <button type="submit"> Generate </button>
                </form>

                <?php

                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                        $size = $_POST["size"];

                        if($size > 101 || $size < 1) {
                            echo "Size must be between 1 and 100";
                        } else {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th></th>";
                            for($i = 1; $i < $size+1; $i++) {
                                echo "<th>$i</th>";
                            }
                            echo "</tr>";

                            for($i = 1; $i <= $size; $i++) {
                                echo "<tr>";
                                echo "<th>$i</th>";

                                for($n = 1; $n <= $size; $n++) {
                                    echo "<td>";
                                    $num = $i * $n;
                                    echo $num;
                                    echo "</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                    } else {
                        echo "Enter a size and press generate!";
                    }

                ?>
            </div>

    </body>


</html>
