<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDU Komek</title>
    
    <link rel= "stylesheet" href="./css/index.css">
</head>
<body>
  <header class = "header">
      <div class="wrapper">
          <div class="header_wrapper">
            <div class="header_logo">
                <a href="/" class="header_logo-link">
                  <img src="{{URL::asset("./css/svg/komek.svg")}}"  class="header_logo-link">
              </a>
            </div>
      
  
  
        <nav class="header_nav">
            <ul class="header_list">
                <li class="header_item">
                    <a href="#!" class="header_link">About</a>
                </li>
                <li class="header_item">
                  <a href="#!" class="header_link">Active</a>
              </li>
              <li class="header_item">
                  <a href="#!" class="header_link">Finished</a>
              </li>
              <li class="header_item">
                  <a href="#!" class="header_link">Leaderboard</a>
              </li>
              <li class="header_item">
                  <a href="#!" class="header_link">Donate</a>
              </li>
            </ul>
            
        </nav>
        <div class="log_in">
          <a href="login" class="header_link">Login</a>
          <button class="sign-btn"><a href="registration">Sign Up</a>   
          </button>
</div>
      </div>
          </div>  
        </div>      
          </header>


          <main class="main">
              <section class="intro">
                  <div class="wrapper">
                      <h1 class="intro_title">
                        Make the World a better place!
                      </h1>
                      <p class="subtitle">
                        Join to our Free Help & Charity service to spread kindness and positivity! 
                      </p>
                      <form>
                        <div class ="search1">
                          <input type="search"
                           placeholder="name,tag,people">
                           
                          <button class="search-button"></button>
                        </div>
                      </form>
                  </div> 
          </section>
        </main>
</body>
</html>