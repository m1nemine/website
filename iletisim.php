<!DOCTYPE html>
<html>
<head>
    <title>İletişim</title>
    <style>
        body {
            font-family: Ubuntu, sans-serif;
        }
        .table {
            width: 100%;
            margin-top: 200px;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 3px solid #ddd;
            padding: 8px;
        }
        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        #basliklar {
            background-color: #f2f2f2;
        }
</style>
</head>
<body>
    <table class="table">
        <thead class="table">
            <tr>
                <th colspan="5" id="basliklar">
                    <h3>MESAJINIZ İLETİLDİ!</h3>
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td id="basliklar">İsminiz</td>
            <td id="basliklar">

                <?php
                echo $_POST['isim'];
                ?>

            </td>
        </tr>

        <tr>
            <td id="basliklar">E-Mail</td>
            <td id="basliklar">
                <?php
                echo $_POST['mail'];
                ?>
            </td>
        </tr>

            <tr>
        <td id="basliklar">TC kimlik NO:</td>
        <td id="basliklar">
            <?php
            echo $_POST['range'];
            ?>
        </td>
    </tr>
            <tr>
                <td id="basliklar">Cinsiyetiniz</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['radio2'];
                    ?>
                </td>
            </tr>


            <tr>
        <td id="basliklar">Doğum Tarihi</td>
        <td id="basliklar">
            <?php
            echo $_POST['date'];
            ?>
        </td>
    </tr>

    <tr>
        <td id="basliklar">Ülke</td>
        <td id="basliklar">
            <?php
            $option = $_POST['option'];
            if ($option == 'option1') {
                echo 'Türkiye';
            } elseif ($option == 'option2') {
                echo 'ABD';
            } elseif ($option == 'option3') {
                echo 'Almanya';
            }
            ?>
        </td>
    </tr>
    
    <tr>
        <td id="basliklar">Ticari Mail</td>
        <td id="basliklar">
            <?php
            echo isset($_POST['checkbox']) ? 'Evet' : 'Hayır';
            ?>
        </td>
    </tr>
    <tr>
            <td id="basliklar">Mesajınız</td>
            <td id="basliklar">
                <?php
                echo $_POST['mesaj'];
                ?>
            </td>
        </tr>


        </tbody>




    </table>
<br><br><br><br>
<?php
header("refresh:5;url=index.html");
?>
  
</body>
</html>