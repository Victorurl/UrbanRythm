<!-- <?php
include 'Navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Order</title>
    <link rel="stylesheet" href="order.css">
    <style>
      /* style.css */

/* Global Styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #ffffff;
  background-color: #333333;
}
/* Navigation Bar Styles */
#NavBar {
  background-color: #444444;
  padding: 1em;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
#header nav {
  display: flex;
  align-items: center;
}
#header ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}
#header li {
  margin-left: 20px;
}
#header a {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.2s ease;
}
#header a:hover {
  color: #999999;
}
.logo {
  width: 50px;
  height: 50px;
  margin-right: 20px;
}
/* Hero Section Styles */
.shop {
  text-align: center;
  padding: 100px 20px;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/your_background_image.jpg') no-repeat center center/cover;
  color: #ffd700;
}
.shop h1 {
  font-size: 3em;
  margin-bottom: 20px;
}
.shop p {
  font-size: 1.2em;
  margin-bottom: 30px;
}
.shop .btn {
  background-color: #ffd700;
  color: #333;
  padding: 10px 20px;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
}
.shop .btn:hover {
  background-color: #ffcc00;
}
/* Products Section Styles */

.products {
  display: flex;
  justify-content: space-around;
  padding: 50px 20px;
}
.product {
  background-color: #444444;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  width: 200px;
}
.product img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  margin-bottom: 10px;
}
.product h3 {
  color: #ffd700;
  font-size: 1.2em;
  margin-bottom: 10px;
}
.product p {
  font-size: 1em;
  margin-bottom: 20px;
}
.product .btn {
  background-color: #ffd700;
  color: #333;
  padding: 10px;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
}
.product .btn:hover {
  background-color: #ffcc00;
}
/* Contact Section Styles */
#Contact {
  text-align: center;
  padding: 20px;
  background-color: #444444;
}
#Contact a {
  color: #ffd700;
  text-decoration: none;
}
#Contact a:hover {
  color: #ffcc00;
}
    </style>
</head>
<body>

<form action="" method="POST">
    <label for="category">What would you like to order?</label>
    <select id="category" name="category" required>
        <option value="">Order Type</option>
        <option value="self_adhesive_posters">Self Adhesive Posters</option>
        <option value="non_adhesive_posters">Non-Adhesive Posters</option>
        <option value="music_vinyls">Music Vinyls</option>
        <option value="leaf_vines">Leaf Vines</option>
        <option value="fairy_lights">Fairy Lights</option>
        <option value="album_stickers">Album Stickers</option>
        <option value="framed_posters">Framed Posters</option>
    </select>
    <button type="submit" name="submit">Submit</button>
</form>

<!-- <?php
// if (isset($_POST['submit'])) {

//     $category = $_POST['category'];
    
//     switch ($category) {
//         case "self_adhesive_posters":
//             header("Location: self_adhesive_posters.php");
//             break;
//         case "non_adhesive_posters":
//             header("Location: non_adhesive_posters.php");
//             break;
//         case "music_vinyls":
//             header("Location: music_vinyls.php");
//             break;
//         case "leaf_vines":
//             header("Location: leaf_vines.php");
//             break;
//         case "fairy_lights":
//             header("Location: fairy_lights.php");
//             break;
//         case "album_stickers":
//             header("Location: album_stickers.php");
//             break;
//         case "framed_posters":
//             header("Location: framed_posters.php");
//             break;
//         default:
//             echo "Please select a valid option.";
//             break;
//     }
//     exit; // Ensures that the script stops after redirection
//} -->
?>

</body>
</html> -->
