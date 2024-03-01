<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book with Paramountains</title>
</head>
<link rel="stylesheet" href="style.css">
<style>

    
   
    .book {
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    
    .left-book {
        flex: 1;
        padding: 20px;
    }
    
    .right-book {
        flex: 1;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .book h3 {
        margin-bottom: 20px;
        text-align: center;
    }
    
    label {
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color:  orangered;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    input[type="submit"]:hover {
        background-color: #ffc107;
    }
    
  
    </style>
<body>
    <!-- header-start -->
    <div class="fluid-header">
        <header>
            <div class="logo">
                <a href="index.html">
                    <img src="img/Paramountains Logo.png" width="90px">
                </a>
            </div>
            <nav>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.html">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="todo.html">What to do</a>
                    </li>
                </ul>
            </nav>
        </header>

    </div>

    <!-- header end -->

<div class="book">
    <div class="left-book">
<h3>Book with Paramountains</h3>
    </div>
    <div class="right-book">

        <form action="action">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="John"><br><br>
        
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" placeholder="Doe"><br><br>
            <label for="fname">Phone:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Phone"><br><br>
            <label for="fname">No. of People:</label><br>
            <input type="number" id="fname" name="fname" placeholder="select"><br><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Enquiry for Paragliding</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2"> Bungee Jumping</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> Camping</label><br><br>
            <input type="submit" value="Book Now">
          </form> 
    </div>
    
</div>

    <div class="footer-top">

    </div>
    <footer>
        <div class="upper-footer">
            <div class="service">
                <h3>Services</h3>
                <ul>
                    <li>Paragliding</li>
                    <li> Bungee Jumping</li>
                    <li> Camping</li>
                </ul>
            </div> 
             <div class="service">
                <h3>Support</h3>
                <ul>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li> Pricing Policy</li>
                </ul>
            </div> 
            <div class="service">
                <h3>About</h3>
                <ul>
                    <li>About us</li>
                    <li> Blogs</li>
                    <li> Landing site of Bir Billing, Colony, Suja, Himachal Pradesh 176077</li>
                </ul>
            </div>
            
        </div>
        <div class="lower-footer">
            <div class="left-logo"><img src="img/Paramountains Logo.png" width="90px"></div>
            <div class="right-copyright">
                Copyright 2022© All rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>