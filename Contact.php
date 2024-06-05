<?php include 'navbar.php'; ?>

<?php
$backgroundImage = 'img/cont.jpg'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Contact Us</title>

<style>
    body,
    html {
      height: 100%;
    }

    body {
      background-image: url('<?php echo $backgroundImage; ?>');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100%;
      margin: 0;
    }
    .contact-section {
            text-align: center;
            padding: 50px;
            background-color: #01416d;
            color: white;
            animation: zoomIn 2s ease-in-out;
        }

        .contact-details {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .contact-details div {
            flex: 1;
            padding: 20px;
        }

        .contact-details div img {
            display: block;
            margin: 0 auto 10px;
        }

        .contact-details div p {
            margin: 0;
        }

        .message-form {
            padding: 50px;
            background-color: #f5f5f5;
            text-align: center;
        }

        .message-form form {
            max-width: 600px;
            margin: 0 auto;
        }

        .message-form form input,
        .message-form form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .message-form form button {
            padding: 10px 20px;
            background-color: #01416d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .message-form form button:hover {
            background-color: #013254;
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .icon{
            width: 60px;
            height: 60px;
            
        }
    </style>

<div class="contact-section zoom-in">
    <h1>Get In Touch</h1>
    <div class="contact-details">
        <div>
            <img src="img/home.png" alt="Address Icon" class="icon">
            <h3>Address</h3>
            <p>Global Services Inc.</p>
            <p>1234 Industry Avenue</p>
            <p>New York, NY 10001</p>
        </div>
        <div>
            <img src="img/phone-call.png" alt="Phone Icon" class="icon">
            <h3>Phone</h3>
            <p>Main Office: (123) 456-7890</p>
            <p>Customer Support: (987) 654-3210</p>
        </div>
        <div>
            <img src="img/email.png" alt="Email Icon" class="icon">
            <h3>Email</h3>
            <p>info@globalservices.com</p>
            <p>support@globalservices.com</p>
        </div>
    </div>
</div>

<div class="message-form">
    <h2>Message Us</h2>
    <form action="send_message.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>



  




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/665e2eeb9a809f19fb389d65/1hvfueipi';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>