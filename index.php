<?php

if ($_POST){


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'regnskabsapp.herokuapp.com/api/create_transaction_api.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
            "description" : "Swim Pants",
            "amount" : "90"
            }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    curl_exec($curl);

    curl_close($curl);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="swim_icon.png">
    <title>Webshop</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Kroner</th>
                            <th>Picture</th>
                            <th></th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>Swim Pants</td>
                            <td>90</td>
                            <td><img src="swim_pants.jpg" alt="Swim Pants" width="100" height="100"></td>
                            <td>
                                <form method='post'>
                                    <input type="text" style="visibility: hidden" value="">
                                    <button type="submit" name="swim_pants" class="btn btn-success"> Buy </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <div>
        <div>
    <div>
<body>

<?php

if($_POST){

    echo "
    <h3>Thanks for the purchase</h3>
    <p>The owner just got this purchase automatically bookkept.</p>
    <p>Should you wish the same feautures for your small business, visit:</p>
    <a href='https://regnskabsapp.herokuapp.com' class='link-primary'>https://regnskabsapp.herokuapp.com</a>
    ";

}
?>
