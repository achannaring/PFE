<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Residences</title>
    <link rel="stylesheet" href="../StudentResidences/StudentResidences.css">
    <link rel="stylesheet" href="../main/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
        <div class="container">
            <a href="../homepage/homepage.html" class="logo"><img src="../assests/logo.png" alt="" ></a>
            <nav>
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="../homepage/homepage.php">Home</a></li>
                    <li><a href="StudentResidences.php">Student Residences</a></li>
                    <li><a href="../addpage/index.php">Add Houses</a></li>
                    <li><a href="../Contact/Contact.php" class="active">Contact Us</a></li>
                    <?php include '../Main/loginValidation.php'; ?>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="txt">
                <h1>Student Residences</h1>
                <p class="description">
                    Uninist offers flexible student accommodation, specializing in short-term options.
                    From studios to ensuite and shared rooms, Uninist manages properties that cater to diverse 
                    student needs, ensuring safety and convenience in university life.
                </p>
            </div>
            <p class="breadcrumb">
                <a href="/">Home</a> &gt; <a href="#">Student Residence</a>
            </p>
        </div>  
    </section>

   <!-- Filter Section -->
    <div class="filter-section">
        <div class="container">
        <!-- University Filter -->
            <div class="filter-option">
                <button class="filter-btn" onclick="toggleFilter('university')">
                    University <span>&#9662;</span>
                </button>
                <div class="filter-dropdown" id="university">
                    <label>
                        <input type="radio" name="university" value="UM6P"> UM6P
                    </label>
                    <label>
                        <input type="radio" name="university" value="UIC"> UIC
                    </label>
                    <label>
                        <input type="radio" name="university" value="AUI"> AUI
                    </label>
                </div>
            </div>

            <!-- City Filter -->
            <div class="filter-option">
                <button class="filter-btn" onclick="toggleFilter('city')">
                    City <span>&#9662;</span>
                </button>
                <div class="filter-dropdown" id="city">
                    <label>
                        <input type="radio" name="city" value="Agadir"> Agadir
                    </label>
                    <label>
                        <input type="radio" name="city" value="Marrakech"> Marrakech
                    </label>
                    <label>
                        <input type="radio" name="city" value="Casablanca"> Casablanca
                    </label>
                </div>
            </div>

            <!-- Budget Filter -->
            <div class="filter-option">
                <button class="filter-btn" onclick="toggleFilter('budget')">
                    Budget <span>&#9662;</span>
                </button>
                <div class="filter-dropdown" id="budget">
                    <label>
                        <input type="radio" name="budget" value="less-5000"> Less than 5000 DH
                    </label>
                    <label>
                        <input type="radio" name="budget" value="5000-8000"> 5000 - 8000 DH
                    </label>
                    <label>
                        <input type="radio" name="budget" value="more-8000"> More than 8000 DH
                    </label>
                </div>
            </div>

            <!-- Stay Duration Filter -->
            <div class="filter-option">
                <button class="filter-btn" onclick="toggleFilter('duration')">
                    Stay Duration <span>&#9662;</span>
                </button>
                <div class="filter-dropdown" id="duration">
                    <label>
                        <input type="radio" name="duration" value="Short-term"> Short-term
                    </label>
                    <label>
                        <input type="radio" name="duration" value="Long-term"> Long-term
                    </label>
                </div>
            </div>

            <button class="clear-filters" onclick="clearFilters()">Clear Filters</button>
        </div>
    </div>


    <!-- Property List -->
    <div  class="rent-list">
        <div class="container">
            
        </div>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <button id="prevPage">Previous</button>
        <span id="pageInfo">Page 1</span>
        <button id="nextPage">Next</button>
    </div>
    <script src="../main/header.js"></script>
    <script src="StudentResidences.js"></script>
    
</body>
</html>
