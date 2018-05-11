<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title?></title>
    <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css" />
</head>
<body>
<div id="wrapper">
    <div id="banner">
    </div>

    <nav id="navigation">
        <ul id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Item.php">School Items</a></li>
            <li><a href="Rules.php">Rules</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </nav>



    <div id="content_area">
        <?php echo $content; ?>
    </div>



    <div id="sidebar">

        <h3><u>FAQ</u></h3>

        <p><b>Do I need to pay in order to borrow and item?</b></p>
        <p>-No! This project was created in mind for students who are struggling financially. <a href="Rules.php">click here to see rules for borrowing</a></p>

        <p><b>How long can i borrow an item for?</b></p>
        <p>-You can discuss a reasonable time of your choice with one of our staffs. We prefer you to use the item to it's fullest before it is returned but some
            <a href="Rules.php">other rules may apply</a>.</p>

        <p><b>How do I donate books to this service?</b></p>
        <p>-To donate to this Service you can get in contact with us on here or at school
            <a href="Contact.php">click here to contact us</a></p>


    </div>

    <footer>
        <p>All rights reserved - BUFU 2017</p>
    </footer>
</div>
</body>
</html>

