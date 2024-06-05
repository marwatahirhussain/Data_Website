<?php include 'navbar.php'; ?>

<?php
$backgroundImage = 'img/bg.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>About Us</title>
    <style>
        body,
        html {
            height: 100%;
        }

        body {
            background-image: url('<?php echo $backgroundImage; ?>');
            background-size: cover;
            background-position: center;

            height: 100%;
            margin: 0;
        }

        .container {
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        h1,
        h2 {
            text-align: center;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            margin: 20px 0;
        }

        p {
            text-align: justify;
            font-style: italic;
            color: white;
            margin-bottom: 20px;
        }

        .zoom-in {
            animation: zoomIn 2s ease-in-out;
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
    </style>
    <div class="container">
        <div class="col-md-12">
            <h1 class="zoom-in">Introduction to Our Company: Global Services Inc.
            </h1>
        </div>
        <div class="zoom-in">
            <h2 class="zoom-in">Overview
            </h2>
            <p>Global Services Inc. is a leading multinational corporation dedicated to providing a comprehensive range of professional services to industries worldwide. Established with a vision to drive innovation and efficiency across various sectors, our company has grown to become a trusted partner for businesses seeking excellence in service delivery and operational enhancement.

            </p>
            <h2 class="zoom-in">Our Mission
            </h2>
            <p>Our mission is to empower industries globally by offering top-tier services that not only meet but exceed our clients' expectations. We strive to create value through our expert solutions, innovative approaches, and commitment to quality, helping businesses navigate complex challenges and achieve sustainable growth.

            </p>
            <h2 class="zoom-in">Global Reach
            </h2>
            <p>
                Global Services Inc. is more than just a service provider; we are a partner in success. Our holistic approach, combined with our global expertise and local insights, allows us to deliver unparalleled value to our clients. Whether you are looking to enhance your operations, innovate your business processes, or find the right talent, Global Services Inc. is here to help you achieve your goals and drive your business forward.</p>
            <h2 class="zoom-in">Conclusion</h2>
            <p>Global Services Inc. operates in over 50 countries, with a network of offices and partners strategically located to serve clients across continents. Our global reach enables us to understand and address the unique challenges faced by businesses in different regions, ensuring that our solutions are both relevant and effective.

            </p>
            <h2 class="zoom-in">Commitment to Job Creation

            </h2>
            <p>One of our core values is fostering economic growth and development through job creation. We are proud to offer employment opportunities to talented individuals worldwide, contributing to the local economies of the regions we operate in. Our comprehensive recruitment process ensures that we attract, retain, and nurture the best talent, providing them with the tools and opportunities to thrive in their careers.

            </p>
            <h2 class="zoom-in">Innovation and Excellence
            </h2>
            <p>Innovation is at the heart of everything we do at Global Services Inc. We continuously invest in research and development to stay at the forefront of industry trends and technological advancements. Our commitment to excellence is reflected in the quality of our services and the long-lasting relationships we build with our clients.

            </p>
            <h2 class="zoom-in">Sustainability and Corporate Responsibility
            </h2>
            <p>As a global company, we are acutely aware of our responsibility to the communities and environments in which we operate. We are dedicated to sustainable business practices, reducing our environmental footprint, and making positive contributions to society through various corporate social responsibility initiatives.

            </p>
        </div>
    </div>

    </body>

</html>