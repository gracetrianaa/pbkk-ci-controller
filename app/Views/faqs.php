<!DOCTYPE html>
<html>
<head>
  <title>FAQs</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .faq {
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 5px #ccc;
      padding: 10px;
      background-color: #fff;
    }

    .faq h2 {
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 20px;
      color: #333;
    }

    .faq .answer {
      /* display: none; */
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    .faq .answer p {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: #333;
    }

    .faq.active .answer {
      display: block;
    }

    .faq:hover {
      box-shadow: 0 0 10px #ccc;
    }

    .faq.active {
      border-color: #333;
    }
  </style>
  <script>
    // Add your JavaScript code here
  </script>
</head>
<body>
  <h1>Frequently Asked Questions</h1>
  <div class="faq">
    <h2>What is CodeIgniter?</h2>
    <div class="answer">
      <p>CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.</p>
    </div>
  </div>
  <div class="faq">
    <h2>How CodeIgniter Works?</h2>
    <div class="answer">
      <p>CodeIgniter is an MVC framework. MVC stands for Model View Controller. When a user requests a resource, the controller responds first. The controller understands the user request then request the necessary data if necessary.</p>
    </div>
  </div>
  <!-- Add more questions and answers as needed -->
</body>
</html>
