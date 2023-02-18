 <!DOCTYPE html>
<html>
  <head>
    <title>404 - Page not found</title>
    <style type="text/css">
      body {
        /* background: linear-gradient(to bottom right, #4e54c8, #8f94fb, #4e54c8); */
        background: linear-gradient(to bottom right, #0077c2, #00ffbf,#0077c2,#4e54c8, #8f94fb);
        color: #fff;
        font-family: Arial, sans-serif;
        text-align: center;
        height: 100vh; /* đặt chiều cao cho body full màn hình */
        display: flex; /* đưa tiêu đề, nội dung và button vào giữa màn hình */
        flex-direction: column; /* sắp xếp tiêu đề, nội dung và button theo chiều dọc */
        justify-content: center; /* căn giữa theo chiều dọc */
      }
      h1 {
        font-size: 8em;
        margin: 0;
      }
      p {
        font-size: 2em;
        margin-top: 20px;
      }
      .message {
        margin-top: 40px;
      }
      button {
        background-color: #fff;
        color: #0077c2;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        margin-top: 20px;
        font-size: 1.5em;
        font-weight: bold;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="message">
      <h1>404</h1>
      <p>Page not found</p>
      <button onclick="goBack()">Go Back</button>
    </div>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>

