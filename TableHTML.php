<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>TableHTML</title>
</head>
<body>

    <?php
    
        class TableHTML {
            private string $_country;
            private string $_capital;

            public function __construct(string $country, string $capital) {
                $this->_country = $country;
                $this->_capital = $capital;
            }

            public function getCountry() 
            {
                return $this->_country;
            }
            public function setCountry($country)
            {
                $this->_country = $country;
            }
            public function getCapital() 
            {
                return $this->_capital;
            }
            public function setCapital($capital)
            {
                $this->_capital = $capital;
            }

            public function afficherTableHTML($capital)
            {
                echo 
                    "<table>
                        <th scope='col'>Pays</th>
                        <th scope='col'>Capitale</th>
                        <tr>
                            <td>France</td>
                            <td>Paris</td>
                        </tr>
                        <tr>
                            <td>Allemagne</td>
                            <td>Berlin</td>
                        </tr>
                        <tr>
                            <td>USA</td>
                            <td>Washington</td>
                        </tr>
                        <tr>
                            <td>Italie</td>
                            <td>Rome</td>
                        </tr>
                    </table>";
            }

        }
    
    ?>


</body>
</html>