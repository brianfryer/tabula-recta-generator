<!DOCTYPE html>
<head>

    <title>Tabula Recta Generator</title>

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body{
            font-family: 'Lato', sans-serif;
        }
        table {
            border: 1px solid black;
        }
        td {
            border: 1px solid black;
        }
    </style>

</head>
<body>

    <table>
      <tbody>
        <tr>
          <td style="border: 1px solid black">&nbsp;</td>
          <?php
            function rand_char($chars = 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()+_-{}|;<>?ABCDEFGHIJKLMNOPQRSTUVWXYZ') {
              $string = '';
              for ($i = 0; $i < 1; $i++) {
                $pos = rand(0, strlen($chars)-1);
                $string .= $chars{$pos};
              }
              return $string;
            }
            $letterarray = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't' ,'u', 'v', 'w', 'x', 'y', 'z');
            $count = count($letterarray);
            for ($i = 0; $i < $count; $i++) {
              echo "<td>".$letterarray[$i]."</td>";
            }
            echo "</tr>";
            for ($i = 0; $i < $count; $i++) {
              echo "<tr><td>".$letterarray[$i]."</td>";
              for($s=0; $s < $count; $s++) {
                echo "<td>".rand_char()."</td>";
              }
              echo "</tr>";
            }
          ?>
        </tr>
      </tbody>
    </table>

</body>
</html>
