<?php
// DATABASE CONNECTION
$conn = mysqli_connect("localhost", "root", "", "andison_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SEARCH
$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $query = "SELECT * FROM brands WHERE brand_name LIKE '%$search%'";
} else {
    $query = "SELECT * FROM brands";
}
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Andison Industrial</title>
<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #eaeaea;
}

.navbar {
  background: #2d1bff;
  padding: 10px;
  display: flex;
  align-items: center;
  gap: 15px;
}

.logo {
  color: white;
  font-weight: bold;
  font-size: 18px;
}

.search-box input {
  padding: 6px;
  width: 300px;
}

.quote-btn {
  background: #00ff90;
  padding: 8px 14px;
  text-decoration: none;
  color: black;
  font-weight: bold;
  border-radius: 4px;
}

.menu {
  background: #3c2cff;
  padding: 10px;
}

.menu a {
  color: white;
  margin-right: 15px;
  text-decoration: none;
  font-size: 14px;
}

.brand-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(160px,1fr));
  gap: 15px;
  padding: 20px;
}

.brand-card {
  background: white;
  padding: 15px;
  text-align: center;
  border-radius: 6px;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

.brand-card img {
  width: 120px;
  height: 60px;
  object-fit: contain;
}

.brand-card h3 {
  margin: 10px 0 5px 0;
}

.brand-card p {
  font-size: 12px;
  color: gray;
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="navbar">
  <div class="logo">ANDISON INDUSTRIAL</div>

  <form method="GET" class="search-box">
    <input type="text" name="search" placeholder="Search for products..." value="<?php echo $search; ?>">
  </form>

  <a href="#" class="quote-btn">REQUEST A QUOTE</a>
</div>

<!-- MENU -->
<div class="menu">
  <a href="#">Home</a>
  <a href="#">Brands</a>
  <a href="#">Industries</a>
  <a href="#">Contact Us</a>
</div>

<!-- BRAND GRID -->
<div class="brand-container">
<?php
while($row = mysqli_fetch_assoc($result)){
?>
  <div class="brand-card">
    <img src="images/<?php echo $row['logo']; ?>">
    <h3><?php echo $row['brand_name']; ?></h3>
    <p><?php echo $row['description']; ?></p>
  </div>
<?php } ?>
</div>

</body>
</html>
