<!DOCTYPE html>
<head>

    <title>Tabula Recta Generator</title>

    <link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body{
            font-family: 'Capriola', sans-serif;
            font-size: medium;
            line-height: 1;
        }
        table {
            border: 1px solid black;
            text-align: center;
        }
        td {
            width: 26px;
            height: 26px;
            border: 1px dotted black;
        }
        .black,
        tr > td:first-child {
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            background-color: black;
        }
    </style>

</head>
<body>

    <table>
      <tbody>
        <tr>
          <td><strong>&#9786;</strong></td>
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
              echo "<td class='black'>".$letterarray[$i]."</td>";
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
