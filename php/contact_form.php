<?php 
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "kroufekd@gmail.com";
        $header = "Od: ".$mailFrom;
        $txt = "Máte nový mail z webu elektromontaze-litomerice.cz od " . $name . ".\n\n" . $message;

        mail($mailTo, "Nová zpráva z webu ektromontaze-litomerice.cz", $txt, $header);
        header("Location: index.html");


    }


?>