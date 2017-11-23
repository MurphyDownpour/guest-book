<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section id="guest-book">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="block" class="center-block">
                    <div id="title">
                        <h1>Гостевая книга</h1>
                    </div>
                    <button id="addrecord" class="btn btn-primary center-block" onclick="addRecord()"><i class="fa fa-pencil" aria-hidden="true"></i> Добавить запись</button>
                    <div id="records">
                        <div class="record">
                            <h4>Name</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eum accusamus. Inventore cupiditate, fugit neque corrupti nemo vitae corporis. Eos quidem incidunt dolorum sit dignissimos rerum accusantium molestiae itaque, dolores. <a href="" onclick="edit(this)">Edit</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    $name = $_POST['name'];
    $message = $_POST['message'];

    $xml = new DOMDocument("1.0", "utf-8");

    $record = $xml->createElement("record");
    $xml->appendChild($record);

    $name_element = $xml->createElement("name");
    $record->appendChild($name_element);

    $name_value = $xml->createTextNode("$name");
    $name_element->appendChild($name_value);

    $message_element = $xml->createElement("message");
    $record->appendChild($message_element);
    $message_value = $xml->createTextNode("$message");
    $message_element->appendChild($message_value);

    $xml->formatOutput = true;
    $xml->save("records.xml");
?>


<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>