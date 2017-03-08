 <!DOCTYPE html>
<html>
<title>Product Proposal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-light-grey" >
<div class="w3-content" style="max-width:800px;">

  <div class="w3-container">
  <div class="w3-container">
    <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card-2 w3-hover-opacity-off">
      <h2>Product Proposal</h2>
      <p>請填寫下列表格</p>

      <label for="product_name">產品名稱:</label>
      <input class="w3-input w3-border" type="text" name="product_name" id="product_name" required="required" />
      
      <label for="function">功能:</label>
      <input class="w3-input w3-border" type="text" name="function" id="function" required="required" />

      <label for="Highlights">亮點:</label>
      <input class="w3-input w3-border" type="text" name="Highlights" id="Highlights" required="required" />
      
      <label for="risk">風險:</label><br />
      <textarea class="w3-input w3-border" name="risk" rows="3" cols="20" id="risk"></textarea>

      <label for="Expected profit">預期獲利:</label><br />
      <textarea class="w3-input w3-border" name="Expected profit" rows="3" cols="20" id="Expected profit"></textarea>

      <label for="Profit_distribution">獲利分配:</label><br />
      <textarea class="w3-input w3-border" name="Profit_distribution" rows="3" cols="20" id="Profit_distribution"></textarea>

      <label for="cost">合理生產成本:</label><br />
      <input class="w3-input w3-border" type="text" name="cost" id="cost" required="required" />

      <input type="submit" name="Submit" value="送出" class="w3-button w3-red w3-margin-top" required="required" />
    </div>
  </div>
 </div>
</div>
</body>
</html>
