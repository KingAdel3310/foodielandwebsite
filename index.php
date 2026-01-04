<?php
    session_start();

    $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name']: 'Guest';
    $current_date = date('d-m-y');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foodieland</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="nav">
      <img src="images/Foodieland..svg" alt="Foodieland Logo" class="logo" />
      <nav>
        <a href="index.php">Home</a>
        <a href="recipe.php">Recipes</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
        <a href="#">About Us</a>
      </nav>
      <div class="login-signin">
        <button class="btn-login" onclick ="document.getElementById('loginpopup').style.display='flex'" >Login</button>
        <button class="btn-signup" onclick="showPopup('signupPopup')">
          Sign Up
        </button>
        <button class="btn-signup" onclick="window.location.href='logout.php'">
          Log out
        </button>
      </div>
    </header>
    <hr class="dividerI" />
    <main>
      <section class="section-1">
        <div class="cdl">
          <img src="images/Badge.png" alt="" class="badge">
          <div class="cdl-left">
            <div class="hot-recipes">
              <img src="images/Scroll.png" alt="Scroll Icon" />
              <h2>Hot Recipes</h2>
            </div>  
            <div class="cdl-text">
              <h1>Spicy delicous <br>chicken wings</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta provident, culpa reprehenderit distinctio quo aperiam sint aliquam accusamus repellat perspiciatis.
              </p>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer Icon" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife Icon" />
                  Chicken
                </span>
              </div>
              <div class="user">
                <img src="images/profile.png" alt="User Profile" />
                <div class="user-info">
                  <span class="user-name"><?php echo $user_name ?></span>
                  <span class="date"><?php echo $current_date ?></span>
                </div>
                <button type="button" class="btn-view-recipes">
                  View Recipes
                </button>
              </div>
            </div>
          </div>
          <div class="cdl-right">
            <img src="images/bakedchicken.png" alt="Baked Chicken" />
          </div>
        </div>
        <div class="categories">
          <div>
            <span>
              <h1>Categories</h1>
            </span>
            <span>
              <p>View All Categories</p>
            </span>
          </div>
          <div>
            <div class="category">
              <img src="images/breakfast.png" alt="Category 1" />
            </div>
            <div class="category">
              <img src="images/Vegan.png" alt="Category 2" />
            </div>
            <div class="category">
              <img src="images/Meat.png" alt="Category 3" />
            </div>
            <div class="category">
              <img src="images/Dessert.png" alt="Category 4" />
            </div>
            <div>
              <img src="images/Lunch.png" alt="Category 5" />
            </div>
            <div class="category">
              <img src="images/Chocolate.png" alt="Category 6" />
            </div>
          </div>
        </div>
      </section>
      <section class="section-2">
        <h2>Simple and Tasty Recipes</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit adipisci
          illum eveniet. Iure consectetur obcaecati commodi provident
          repudiandae dolorum veniam ipsam adipisci assumenda quasi.
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, ratione suscipit? Voluptatibus exercitationem vel eos, quis hic minima iusto, deleniti molestiae.
        </p>
        <div class="grid-container">
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Chesseburger.png" alt="" srcset="" />
              <img src="images/heartc.png" alt="Heart" class="heart liked-heart"  />
              <img src="images/heartuc.png" alt="Heart" class="heart unliked-heart "/>
            </div>
            <div class="recipe-name">
              <h3>Big and Juicy Wagyu Beef Cheeseburger</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Salmon.png" alt=""  />
              <img src="images/heartc.png" alt="" class="heart liked-heart" />
              <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
            </div>
            <div class="recipe-name">
              <h3>Fresh Lime Roasted Salmon with Ginger Sauce</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Honey-Pancakes.png" alt="" />
              <img src="images/heartc.png" alt="" srcset="" class="heart liked-heart"/>
              <img src="images/heartuc.png" alt="" srcset="" class="heart unliked-heart"/>
            </div>
            <div class="recipe-name">
              <h3>Strawberry Oatmeal Pancakes with Honey Syrup</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Fresh-salad.png" alt="" srcset="" />
              <img src="images/heartc.png" alt="" class="heart liked-heart"/>
              <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
            </div>
            <div class="recipe-name">
              <h3>Fresh and Healthy Mixed Mayonnaise Salad</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Chicken-meatball.png" alt="" srcset="" />
              <img src="images/heartc.png" alt="" class="heart liked-heart"/>
              <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
            </div>
            <div class="recipe-name">
              <h3>Chicken Meatball with Cream Cheese</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
          <div class="recipe-card grid-item">
            <img src="images/Ads.png" alt=""/>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Fruity-pancakes.png" alt="" srcset="" />
              <img src="images/heartc.png" alt="" class="heart liked-heart" />
              <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
            </div>
            <div class="recipe-name">
              <h3>Fruity Pancakes with Orange and Blueberry</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Chicken-Rice.png" alt=""  />
              <img src="images/heartc.png" alt="" class="heart liked-heart" />
              <img src="images/heartuc.png" alt="" class="heart unliked-heart"/>
            </div>
            <div class="recipe-name">
              <h3>The Best Easy One Pot Chicken and Rice</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
          </div>
          </div>
          <div class="recipe-card grid-item">
            <div class="recipe-image">
              <img src="images/Chicken-Pasta.png" alt="" srcset="" />
              <img src="images/heartc.png" alt="" class="heart liked-heart"/>
              <img src="images/heartuc.png" alt="" class="heart unliked-heart"/>
            </div>
            <div class="recipe-name">
              <h3>The Creamiest Creamy Chicken and Bacon Pasta</h3>
              <div class="timer-meal">
                <span class="time">
                  <img src="images/Timer.svg" alt="Timer" />
                  30 Minutes
                </span>
                <span class="meal">
                  <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                  Chicken
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-3">
        <div class="chef-section">
          <div class="chef-text">
            <h2>Everyone Can Be a Chef in Their Own Kitchen</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni
              placeat explicabo ipsam cupiditate ullam aut inventore dolores. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima sunt dolore doloribus quod libero rem, et veniam corrupti ratione necessitatibus maxime, eius, dolorem placeat ipsum accusantium quis exercitationem quam voluptatibus!
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
          <div class="chef-image">
            <img src="images/Chef-1.png" alt="Chef Image" />
          </div>
        </div>
        <div class="foodieig">
          <span>
            <h3>Check out @foodieland on Instagram</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. A quod
              molestias eveniet commodi rem blanditiis voluptatibus.
            </p>
          </span>
            <div class="ig-post">
              <div>
                <img src="images/Post-1.png" alt="" class="ig-post-img" />
                <img src="images/Post-2.png" alt="" class="ig-post-img" />
                <img src="images/Post-3.png" alt="" class="ig-post-img" />
                <img src="images/Post-4.png" alt="" class="ig-post-img"/>
              </div>
              <button class="ig-btn">
                  Visit our Instagram
                  <img src="images/instagramw.svg" alt="" id="ig-logo-btn"/>
              </button>
            </div>
        </div>
      </section>
      <section class="section-4">
        <div>
          <div class="recipe-intro">
            <div class="intro-content">
              <h3>Try this delicous recipe to make your day</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                optio culpa harum adipisci enim auto.
              </p>
            </div>
          </div>
          <div class="recipe-grid">
            <div class="recipe-card grid-item-II">
              <div class="recipe-image">
                <img src="images/Tropical-salad.png" alt=""/>
                <img src="images/heartc.png" alt="" class="heart liked-heart" />
                <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
              </div>
              <div class="recipe-name">
                <h3>Mixed Tropical Fruit Salad with Super Food Boost</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>  
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Juicy-beef.png" alt=""  />
                <img src="images/heartc.png" alt="" class="heart liked-heart" />
                <img src="images/heartuc.png" alt="" class="heart unliked-heart"/>
            </div>
              <div class="recipe-name">
                <h3>Big and Juicy Wagyu Beef Chesseburger</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Japanese-rice.png" alt=""/>
                <img src="images/heartc.png" alt="" class="heart liked-heart" />
                <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
              </div>
              <div class="recipe-name">
                <h3>Healthy Japanese Fried Rice with Aspragus</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Taco-meat.png" alt=""/>
                <img src="images/heartc.png" alt="" class="heart liked-heart" />
                <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
              </div>
              <div class="recipe-name">
                <h3>Cauliflower Walnut Vegetarian Taco Meat</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Chicken-salad.png" alt=""/>
                <img src="images/heartc.png" alt="" class="heart liked-heart"/>
                <img src="images/heartuc.png" alt="" class="heart unliked-heart"/>
              </div>
              <div class="recipe-name">
                <h3>
                  Rainbow Chicken Salad with Almond Honey Mustard Dressing
                </h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Sandwish.png" alt="" srcset="" />
                <img src="images/heartc.png" alt="" class="heart liked-heart" />
                <img src="images/heartuc.png" alt="" class="heart unliked-heart" />
              </div>
              <div class="recipe-name">
                <h3>Barbeque Spicy Sandwishes with Chips</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Vegan-lettuce.png" alt="" />
                <img src="images/heartc.png" alt="" class="heart liked-heart"/>
                <img src="images/heartuc.png" alt="" class="heart unliked-heart"/>
            </div>
              <div class="recipe-name">
                <h3>Firecracker Vegan Lettuce Wrap-Spicy</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
            <div class="recipe-card grid-item-II">
              <div class="recipe-image image-II">
                <img src="images/Chicken-Pasta.png" alt="" class="image-III"/>
                <img src="images/heartc.png" alt="" class="heart liked-heart"/>
                <img src="images/heartuc.png" alt="" class="heart unliked-heart"/>
              </div>
              <div class="recipe-name">
                <h3>Chicken Ramen Soup with Mushroom</h3>
                <div class="timer-meal">
                  <span class="time">
                    <img src="images/Timer.svg" alt="Timer" />
                    30 Minutes
                  </span>
                  <span class="meal">
                    <img src="images/ForkKnife.svg" alt="Fork & Knife" />
                    Chicken
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="newsletter">
          <div class="newsletter-content">
            <h3>Deliciousness to Your Inbox</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores,
              hic earum placeat voluptatum assumenda.
            </p>
            <form class="newsletter-form">
              <input
                type="email"
                placeholder="Your email address..."
                required
              />
              <button type="submit" class="btn-subscribe">Subscribe</button>
            </form>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer-main">
        <div class="footer-logo-text">
          <img src="images/Foodieland..svg" alt="Foodieland Logo" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, repellat,
            cum ipsum dignissimos at quibusdam perferendis.
          </p>
        </div>
        <nav class="footer-nav">
          <a href="#">Recipes</a>
          <a href="#">Blog</a>
          <a href="#">Contact</a>
          <a href="#">About Us</a>
        </nav>
      </div>
      <div class="footer-social">
        <hr />
        <div class="footer-social-content">
          <p>@2020 Flowbase Powered by Webflow</p>
          <div class="social-icons">
            <img src="images/Facebook.svg" alt="Facebook Icon" />
            <img src="images/Twitter.svg" alt="Twitter Icon" />
            <img src="images/Instagram.svg" alt="Instagram Icon" />
          </div>
        </div>
      </div>
    </footer>
    <div id="signupPopup" class="popup">
      <div class="popup-inner">
        <div class="popup-image">
          <img src="images/loginpage.jpeg" alt="">
        </div>
        <div class="popup-content">
          <span class="close-btn" onclick="closePopup('signupPopup')">&times;</span>
          <h2 class="popup-title">Welcome to FoodieLand</h2>
          <p class="popup-subtitle">
            Kindly fill in your details below to create an account
          </p>
          <form action="register.php" method="post" class="signup-form">
            <div class="form-group">
              <label for="signup-name">Full Name</label>
              <input
                type="text"
                id="signup-name"
                placeholder="Enter your full name"
                required
                name="full_name"
              />
            </div>
            <div class="form-group">
              <label for="signup-email">Email Address*</label>
              <input
                type="email"
                id="signup-email"
                placeholder="Enter your email address"
                required
                name="email"
              />
            </div>
            <div class="form-group">
                <label for="signup-skill">Select your Skills</label>
                <select id="signup-skill" name="skill" required>
                    <option value="" disabled selected>Select a skill...</option>
                    <option value="Baker">Baker</option>
                    <option value="Banquet Chef">Banquet Chef</option>
                    <option value="Butcher">Butcher</option>
                    <option value="Cake Decorator">Cake Decorator</option>
                    <option value="Caterer">Caterer</option>
                    <option value="Chef de Cuisine">Chef de Cuisine (Head Chef)</option>
                    <option value="Chef de Partie">Chef de Partie (Station Chef)</option>
                    <option value="Commis Chef">Commis Chef (Junior Chef)</option>
                    <option value="Consultant Chef">Consultant Chef</option>
                    <option value="Culinary Instructor">Culinary Instructor</option>
                    <option value="Executive Chef">Executive Chef</option>
                    <option value="Expediter">Expediter (Kitchen Coordinator)</option>
                    <option value="Food Stylist">Food Stylist</option>
                    <option value="Health Inspector">Health Inspector</option>
                    <option value="Line Cook">Line Cook</option>
                    <option value="Food Nutritionist">Food Nutritionist</option>
                    <option value="Personal Shopper">Personal Shopper</option>
                    <option value="Private Chef">Private Chef</option>
                    <option value="Sous Chef">Sous Chef</option>
                </select>
            </div>
            <div class="form-group terms">
              <input type="checkbox" id="terms" name="terms" required />
              <label for="terms">I agree to terms & conditions</label>
            </div>
            <button type="submit" class="btn-submit">Login</button>
            <div class="divider">
              <hr />
              <span>Or</span>
              <hr />
            </div>
            <p class="already-account">
              Already have an account? <a href="#">Log in</a>
            </p>
            <button type="button" class="btn-google">
              <img src="images/flat-color-icons_google.svg" alt="Google Icon" />
              Register with Google
            </button>
          </form>
        </div>
      </div>
    </div>
    <div class="popup" id="loginpopup">
      <div class="popup-innerII">
        <div class="popup-contentII">
          <span class="close-btn" onclick="closePopup('loginpopup')">
            &times;
          </span>
          <h2 class="popup-title">Welcome back to FoodieLand</h2>
          <p class="popup-subtitle">
            Kindly fill in your details below to sign into your account
          </p>
          <form action="login.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="login-">Full Name</label>
                    <input
                        type="text"
                        id="login-name"
                        name="full_name"
                        placeholder="Enter your Full Name"
                        required
                    />
                </div> 
                <div class="form-group">
                    <label for="login-email">Email Address*</label>
                    <input
                        type="email"
                        id="login-email"
                        name="email"
                        placeholder="Enter your email address"
                        required
                    />
                </div>
                <button type="submit" class="btn-submit">Log In</button>
                <div class="divider">
                    <hr />
                    <span>Or</span>
                    <hr />
                </div>
                <p class="already-account">
                    Don't have an account? <a href="#" onclick="showLogin('signupPopup'); closePopup('loginpopup')">Sign up</a>
                </p>
                <button type="button" class="btn-google">
                    <img src="images/flat-color-icons_google.svg" alt="Google Icon" />
                    Log in with Google
                </button>
            </form>
        </div>
      </div>
    </div>
    <script src=" js/index.js"></script>
    
  </body>
</html>
