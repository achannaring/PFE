<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agadir Real Estate Listings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Main/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     
     <!-- Header -->
     <header>
        <div class="container">
            <a href="../homepage/homepage.html" class="logo"><img src="../assests/logo.png" alt="" ></a>
            <nav>
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="../homepage/homepage.php">Home</a></li>
                    <li><a href="../StudentResidences/StudentResidences.php">Student Residences</a></li>
                    <li><a href="index.php">Add Houses</a></li>
                    <li><a href="../Contact/Contact.php" class="active">Contact Us</a></li>
                    <?php include '../Main/loginValidation.php'; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Modal for Adding New Property -->
    <form method="POST" action="addRents.php">
        <div class="container">
    <!-- Name of Property Owner -->
            <div class="form-group">
                <label for="ownerName">Name of Property Owner:</label>
                <input type="text" id="ownerName" name="ownerName" required placeholder="ahmed lans">
            </div>
            <!-- Email of Property Owner -->
            <div class="form-group">
                <label for="ownerEmail">Email:</label>
                <input type="email" id="ownerEmail" name="ownerEmail" required placeholder="ahmedlans@example.com">
            </div>
            <!-- Image URLs -->
            <div class="form-group">
                <label for="images">Image URLs (One per line):</label>
                <textarea id="images" name="images" required placeholder="https://example.com/house1.jpg&#10;https://example.com/house2.jpg"></textarea>
            </div>
            <!-- Title -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required placeholder="Modern Villa in Agadir">
            </div>
            <!-- Price -->
            <div class="form-group">
                <label for="price">Price (MAD):</label>
                <input type="number" id="price" name="price" required placeholder="1500000">
            </div>
            <!-- Property Type -->
            <div class="form-group">
                <label for="propertyType">Property Type:</label>
                <select id="propertyType" name="propertyType" required>
                    <option value="">Select Property Type</option>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Villa">Villa</option>
                    <option value="Studio">Studio</option>
                </select>
            </div>
            <!-- Bedrooms, Bathrooms, and Square Meters -->
            <div class="form-row">
                <div class="form-group">
                    <label for="bedrooms">Bedrooms:</label>
                    <input type="number" id="bedrooms" name="bedrooms" required placeholder="3">
                </div>
                <div class="form-group">
                    <label for="bathrooms">Bathrooms:</label>
                    <input type="number" id="bathrooms" name="bathrooms" required placeholder="2">
                </div>
                <div class="form-group">
                    <label for="sqft">Square Meters:</label>
                    <input type="number" id="sqft" name="sqft" required placeholder="120">
                </div>
            </div>
            <!-- Neighborhood Selection -->
            <div class="form-group">
                <label for="neighborhood">Neighborhood:</label>
                <select id="neighborhood" name="neighborhood" required>
                    <option value="">Select neighborhood</option>
                    <option value="Talborjt">Talborjt</option>
                    <option value="Founty">Founty</option>
                    <option value="Dakhla">Dakhla</option>
                    <option value="Marina">Marina</option>
                    <option value="Sonaba">Sonaba</option>
                    <option value="Centre Ville">Centre Ville</option>
                    <option value="Charaf">Charaf</option>
                </select>
            </div>
            <!-- Address -->
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required placeholder="123 Avenue Mohammed V, Agadir">
            </div>
            <!-- Coordinates -->
            <div class="form-row">
                <div class="form-group">
                    <label for="latitude">Latitude:</label>
                    <input type="number" id="latitude" name="latitude" required step="any" placeholder="30.4278">
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude:</label>
                    <input type="number" id="longitude" name="longitude" required step="any" placeholder="-9.5981">
                </div>
            </div>
            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required placeholder="Detailed description of the property..."></textarea>
            </div>
            <!-- Features -->
            <div class="form-group">
                <label for="features">Features (One per line):</label>
                <textarea id="features" name="features" required placeholder="Swimming Pool&#10;Garden&#10;Garage"></textarea>
            </div>
            <!-- Availability Status -->
            <div class="form-group">
                <label for="availability">Availability:</label>
                <select id="availability" name="availability" required>
                    <option value="">Select Availability</option>
                    <option value="Available">Available</option>
                    <option value="Sold">Sold</option>
                    <option value="Under Renovation">Under Renovation</option>
                </select>
            </div>
            <!-- Contact Number -->
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" required placeholder="0661234567">
            </div>
            <button type="submit" class="btn-primary">Add Property</button>
        </div>
    </form>



    <script src="script.js"></script>
    <script src="../Main/header.js"></script>
</body>
</html>
