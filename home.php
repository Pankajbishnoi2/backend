<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navbar */
        nav {
            background-color: #333;
            padding: 15px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: flex-start;
        }

        nav ul li {
            margin-right: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ddd;
        }

        /* Hero Section */
        .hero {
            background-image: url('img/heroimg.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 600px;
        }
        
   

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 250px;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card a {
      display: block;
    }

    .card img {
      width: 100%;
      height: 260px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .shop-name {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .shop-location {
      font-size: 14px;
      color: #555;
    }
 


    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Stores</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero">

        <h1>Stock Updates</h1>
        <p>The new arrivals have, well, newly arrived. Check out the latest options from our summer small-batch release while they're still in stock.</p>
        
    </div>

    <!-- Shop by Category Section -->
    <div class="category-section">
    
       
  <h1>Shops Near You</h1>
  <br>
  <div class="card-container">
    <div class="card">
      <a href="stock.php?table=stock_shop_a">
        <img src="img/img1.jpg" alt="Shop 1">
      </a>
      <div class="card-content">
        <div class="shop-name">Sunrise Mart</div>
        <div class="shop-location">123 Main St, Rewari</div>
      </div>
    </div>

    <div class="card">
      <a href="stock.php?table=stock_shop_b">
        <img src="img/img2.jpg" alt="Shop 2">
      </a>
      <div class="card-content">
        <div class="shop-name">Green Grocers</div>
        <div class="shop-location">456 Oak Ave, Ludhiana</div>
      </div>
    </div>

    <div class="card">
      <a href="stock.php?table=stock_shop_c">
        <img src="img/img3.jpg" alt="Shop 3">
      </a>
      <div class="card-content">
        <div class="shop-name">Techie's Corner</div>
        <div class="shop-location">789 Tech Blvd, Delhi</div>
      </div>
    </div>

    <div class="card">
      <a href="stock.php?table=stock_shop_d">
        <img src="img/img4.jpg" alt="Shop 4">
      </a>
      <div class="card-content">
        <div class="shop-name">Baker’s Delight</div>
        <div class="shop-location">Sector 9, Gurgaon</div>
      </div>
    </div>
  </div>


 

</body>
</html>


