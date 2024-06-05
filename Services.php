<?php include 'navbar.php'; ?>

<?php
$backgroundImage = 'img/cu.webp';
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
  <title>Our Services</title>

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
      <h1 class="zoom-in">Services Offered
      </h1>
    </div>
    <div class="zoom-in">
      <p>At Global Services Inc., we pride ourselves on our diverse portfolio of services designed to cater to the unique needs of different industries. Our primary service areas include:

      </p>
      <h2 class="zoom-in">Consulting Services:
      </h2>
      <p>Strategic Management: Assisting businesses in developing and implementing effective strategies to achieve their long-term goals.
        Operational Efficiency: Optimizing processes and systems to enhance productivity and reduce costs.
        Technology Integration: Leveraging cutting-edge technologies to streamline operations and drive digital transformation.</p>
      </p>
      <h2 class="zoom-in">Human Resources Solutions:
      </h2>
      <p>Recruitment and Staffing: Providing end-to-end recruitment services to source top talent for various roles across industries.
        Employee Training and Development: Offering customized training programs to upskill employees and enhance their performance.
        HR Consulting: Advising on HR policies, compliance, and best practices to create a positive workplace environment.</p>
      <h2 class="zoom-in">IT and Cybersecurity Services:</h2>
      <p>IT Support and Maintenance: Ensuring the smooth operation of IT infrastructure with proactive support and maintenance.
Cybersecurity Solutions: Implementing robust security measures to protect businesses from cyber threats and
Data Protection: Ensuring compliance with data privacy regulations and safeguarding sensitive information.</p>
      <h2 class="zoom-in">Marketing and Branding:</h2>
      <p>Digital Marketing: Developing and executing comprehensive digital marketing strategies to enhance online presence and drive engagement.
Brand Management: Crafting and maintaining a strong brand identity to differentiate our clients in the marketplace.
Market Research: Conducting thorough market analysis to inform strategic decision-making and identify growth opportunities.</p>
      <h2 class="zoom-in">Financial Advisory:</h2>
      <p>Corporate Finance: Assisting businesses with financial planning, investment strategies, and capital raising.
Risk Management: Identifying and mitigating financial risks to protect assets and ensure long-term stability.
Tax Advisory: Providing expert advice on tax planning and compliance to optimize tax liabilities.</p>
    </div>
  </div>


</head>

<body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>