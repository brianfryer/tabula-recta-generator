<!DOCTYPE html>
<head>

    <title>Tabula Recta Generator</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body{
            font-family: 'Open Sans', sans-serif;
            font-size: medium;
            line-height: 1.6;
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
            line-height: 1;
            text-transform: uppercase;
            background-color: black;
        }

        .yellow { background-color: yellow; }
        tr:nth-child(10) > td:nth-child(24) { background-color: yellow; }
        tr:nth-child(11) > td:nth-child(25) { background-color: yellow; }
        tr:nth-child(12) > td:nth-child(26) { background-color: yellow; }
        tr:nth-child(13) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(14) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(15) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(16) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(17) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(18) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(19) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(20) > td:nth-child(27) { background-color: yellow; }
        tr:nth-child(21) > td:nth-child(27) { background-color: yellow; }

        .green { background-color: #9acd32; }
        tr:nth-child(16) > td:nth-child(9) { background-color: #9acd32; }
        tr:nth-child(17) > td:nth-child(10) { background-color: #9acd32; }
        tr:nth-child(18) > td:nth-child(11) { background-color: #9acd32; }
        tr:nth-child(19) > td:nth-child(12) { background-color: #9acd32; }
        tr:nth-child(20) > td:nth-child(13) { background-color: #9acd32; }
        tr:nth-child(21) > td:nth-child(14) { background-color: #9acd32; }
        tr:nth-child(22) > td:nth-child(15) { background-color: #9acd32; }
        tr:nth-child(23) > td:nth-child(16) { background-color: #9acd32; }
        tr:nth-child(24) > td:nth-child(17) { background-color: #9acd32; }
        tr:nth-child(25) > td:nth-child(18) { background-color: #9acd32; }
        tr:nth-child(26) > td:nth-child(19) { background-color: #9acd32; }
        tr:nth-child(27) > td:nth-child(20) { background-color: #9acd32; }

    </style>

</head>
<body>

    <h1>Tabula Recta</h1>

    <p>Refeshing this page will generate a new tabula recta.</p>

    <p>See below for information on how to use this to create and store unique and secure passwords.</p>

    <hr />

    <table>
      <tbody>
        <tr>
          <td><strong>&#9786;</strong></td>
          <?php
            if (array_key_exists('chars', $_REQUEST)) {
              define(default_chars, $_REQUEST['chars']);
            } else {
              define(default_chars, 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()+_-{}|;<>?ABCDEFGHIJKLMNOPQRSTUVWXYZ');
            }
            function rand_char($chars = default_chars) {
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

    <hr />

    <h3>How to use the <a title="Wikipedia's entry for Tabula Recta" href="http://en.wikipedia.org/wiki/Tabula_recta">tabula recta</a>:</h3>

    <ol>
        <li>Print (at least) two copies of this page.</li>
        <li>Keep one copy in your wallet, backpack, or purse, and the other copy next to your computer.</li>
        <li>Come up with an algorithm (see examples below).</li>
        <li>Reference your unique tabula recta when you need to create, or remember, a password.</li>
    </ol>

    <h3><strong>Example 1:</strong></h3>

    <p>Let's say you are creating a new account for <a href="http://whooshtraffic.com/">Whoosh Traffic</a>. Again, your password would begin at the intersection of <strong>column H</strong> and <strong>row O</strong> (the second and third letters of W<strong>ho</strong>osh Traffic).</p>

    <p>From here, read off 12 characters diagonally. (See the <span class="green">green highlights</span> below).</p>

    <h3><strong>Example 2:</strong></h3>

    <p>Or, perhaps you need to update your password for your Twitter account. In this case, your password would begin at the intersection of <strong>column W</strong> and <strong>row I</strong> (the second and third letters of T<strong>wi</strong>tter).</p>

    <p>From here, read off 12 characters diagonally. (See the <span class="yellow">yellow highlights</span> below).</p>

    <p>In the two examples above, the algorithm being used to determine where the password starts is:</p>

    <blockquote>
        <p><strong>[<em>Second letter</em> + <em>Third letter</em> of the name of the website] then [count off 12 characters diagonally, moving SW]</strong></p>
    </blockquote>

    <h3>A few more algorithm examples:</h3>

    <ul>
        <li>[<em>First letter</em> + <em>third letter</em> of the name of the website] then [count off 16 characters in the same row moving left; if you reach the edge, begin again on the next row below].</li>
        <li>[<em>Last two letters</em> of the name of the website] then [count off 14 characters in the same column moving up; if you reach the edge, begin again on the same row at the bottom]</li>
    </ul>

    <p>Get creative; or, keep it simple. Either way, you'll never forget a password when using a tabula recta; and all your passwords will be unique, and secure!</p>

</body>
</html>
