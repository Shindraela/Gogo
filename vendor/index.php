<!DOCTYPE html>
    <html> 
    <head> 
        <title>Gogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body> 
        <table width="450px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
            for($i=1;$i<=9;$i++)
            {
                echo "<tr>";
                for($j=1;$j<=9;$j++)
                {
                    echo '<td onclick="foo()" height=50px width=50px bgcolor=#fcba54></td>';
                }
                echo "</tr>";
            }
        ?>
        </table>

        <script>
            function foo () {
                $.ajax({
                    url:"test.php",
                    type: "POST",
                    success:function(result){
                    alert(result);
                }
                });
            }
        </script>

        <?php
        require 'Goban.php';
        $array = array(1, 2);
        $nbColonne = 9;
        $nbLigne = 9;
        $goban = new Goban;
        $goban->affichageGoban($array, $nbColonne, $nbLigne);
        print_r($goban);
        ?>

    </body>
</html>