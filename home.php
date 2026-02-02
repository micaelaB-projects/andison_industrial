<?php
// sample product categories
$categories = [
    "Arc Welding Machine",
    "Arc Welding Robots",
    "Batteries",
    "Drilling and Lifting",
    "Portable Gas Detectors",
    "Portable Ventilators",
    "Power Tools",
    "Protection and Safety",
    "Welding Accessories",
    "Welding Consumables"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Andison Industrial</title>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}
.top-bar {
    background: #2c1cff;
    color: white;
    padding: 5px 20px;
    font-size: 12px;
    display: flex;
    justify-content: space-between;
}
.header {
    background: #2c1cff;
    padding: 10px 20px;
    display: flex;
    align-items: center;
}
.logo {
    color: white;
    font-size: 22px;
    font-weight: bold;
    margin-right: 20px;
}
.search-box {
    flex: 1;
}
.search-box input {
    width: 100%;
    padding: 8px;
}
.menu {
    background: #00e0c6;
    padding: 10px;
}
.menu a {
    margin: 0 15px;
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.container {
    display: flex;
}
.sidebar {
    width: 250px;
    border-right: 1px solid #ccc;
}
.sidebar h3 {
    background: #2c1cff;
    color: white;
    padding: 10px;
    margin: 0;
}
.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.sidebar ul li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
.content {
    flex: 1;
    padding: 20px;
}
.video-box {
    display: flex;
    gap: 20px;
}
iframe {
    width: 100%;
    height: 250px;
}
</style>
</head>
<body>

<div class="top-bar">
    <div>We reply in less than 24 hours, Mondays to Saturdays.</div>
    <div>(+632) 8584-4958 | (+6343) 425-4126 | (+63) 977 803 7398</div>
</div>

<div class="header">
    <div class="logo">ANDISON INDUSTRIAL</div>
    <div class="search-box">
        <input type="text" placeholder="Search for products">
    </div>
</div>

<div class="menu">
    <a href="#">HOME</a>
    <a href="#">ABOUT US</a>
    <a href="#">BRANDS</a>
    <a href="#">INDUSTRIES</a>
    <a href="#">SERVICES</a>
    <a href="#">CONTACT US</a>
</div>

<div class="container">
    <div class="sidebar">
        <h3>BROWSE PRODUCTS</h3>
        <ul>
            <?php foreach($categories as $cat): ?>
                <li><?php echo $cat; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="content">
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
    </div>
</div>

</body>
</html>
