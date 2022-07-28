
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Money, Pay Online, or Set Up a Merchant Account.</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css? <?php echo time(); ?> "/>
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>

    <div class="container">
        <!-- Front Page -->
        <div class="front-page">
            <!-- Section 1 -->
            <section class="section-1">
                <div class="navbar-wrapper">
                    <nav class="navbar">
                        <div class="menu">
                            <div class="menu-icon">
                                <div class="line line-1"></div>
                                <div class="line line-2"></div>
                                <div class="line line-3"></div>
                            </div>
                            <span>Menu</span>
                        </div>
                        <a href="/a"> <div class="navbar-logo logo">
                            <span class="p-1">PG</span>
                            <span class="p-2">PG</span>
                            PaymentGateway
                        </div></a>
                        <ul class="nav-list">
                            <li class="nav-list-item dropdown-hover">
                                <a href="#" class="nav-list-link show-dropdown">Personal <i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-personal">
                                    <li class="nav-dropdown-item dropdown-heading">
                                        <a href="#" class="dropdown-heading-link">
                                            <i class="fas fa-chevron-down"></i> Personal
                                        </a>
                                    </li>
                                    

                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Send payments</a>
                                        <a href="#" class="nav-dropdown-link-2">Send payments abroad</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-list-item dropdown-hover">
                                <a href="/a/c" class="nav-list-link show-dropdown">Business <i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-business">
                                    <li class="nav-dropdown-item dropdown-heading">
                                        <a href="#" class="dropdown-heading-link">
                                            <i class="fas fa-chevron-down"></i> Business
                                        </a>
                                    </li>
                                    <li class="nav-dropdown-item">
                                        <a href="#" class="nav-dropdown-link-1">Accept online payments</a>
                                        <a href="#" class="nav-dropdown-link-2">Get paid on your website</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-list-item">
                                <a href="#" class="nav-list-link">Partners and Developers</a>
                            </li>
                        </ul>
                        <div class="navbar-buttons"><a href="b"><button class="navbar-btn login-btn login">Login</button></a>
                            
                        <a href="c"><button class="navbar-btn signup-btn signup"style="background-color: #fff;color:black;">Signup</button></a>
                        </div>
                    </nav>
                </div>
                <div class="banner">
                    <h1 class="banner-heading">Do you need help?</h1>
                    <p class="banner-paragraph">Here we will give you some instructions to learn how to signup to this payment
                        gateway.</br>Nothing will be hard to do.</p>
                    <a href="/github/Renewable-Systems-Corporation1/"><button class="blue-btn">return to main page</button></a>
                </div>
            </section>
            <!-- End of Section 1 -->

            <!-- Section 2 -->
            <!-- End of Section 2 -->

            <!-- Section 3 -->
            <section class="section-3">
                <h1 style="width: max-content;margin: 0 auto 1rem auto;"class="section-3-heading">SignUp Instructions</h1>
                <div class="features">
                    <div class="feature">
                        <h3 class="feature-heading">1 choose your account</h3>
                        <p class="feature-paragraph">choose if you want to have an invidual or business account.</p>
                    </div>
                    <div class="feature">
                        <h3 class="feature-heading">2 click on signup</h3>
                        <p class="feature-paragraph">the signup form will appear to you.</p>
                    </div>
                    <div class="feature">
                        <h3 class="feature-heading">3 fill your info</h3>
                        <p class="feature-paragraph">fill the fields with your info like your name and <br>your lastame etc...</p>
                    </div>
                    <div class="feature">
                        <h3 class="feature-heading">adding a creditard</h3>
                        <p class="feature-paragraph">you can add a creditcard if you want when you signup</p>
                    </div>
                    <div class="feature">
                        <h3 class="feature-heading">enjoy in our service</h3>
                        <p class="feature-paragraph">you can now pay or getting paid</p>
                    </div>
                    <div class="feature">
                        <h3 class="feature-heading">24/7 Service</h3>
                        <p class="feature-paragraph">We will not shutdown our service</p>
                    </div>
                </div>
            </section>
            <!-- End of Section 3 -->
            <!-- Section 4 -->
            <section class="section-4">
                <h1 class="section-4-heading">Get started with PaymentGateway.</h1>
                <div class="section-4-content">
                    <div class="section-4-img-wrapper">
                        <img src="img/macbook.png">
                    </div>
                    <ul class="section-4-list">
                        <li class="section-4-list-item">
                            <span class="number">1</span>
                            <span>Set up a business account</span>
                        </li>
                        <li class="section-4-list-item">
                            <span class="number">2</span>
                            <span>No Scamming, No fraud, No Threats.</span>
                        </li>
                        <li class="section-4-list-item">
                            <span class="number">3</span>
                            <span>Every Thing will be secure.</span>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- End of Section 4 -->

            <!-- Section 5 -->
            <section class="section-5">
                <div class="section-5-top">
                    <h2 class="section-5-top-heading">Sign Up and Get Started</h2>
                    <a href="#"><button class="blue-btn signup">Get Started</button></a>
                </div>
                <footer class="footer">
                    <div class="footer-top">
                    </div>
                    <div class="footer-bottom">
                    <p class="copyright">Copyright &copy; All Rights Reserved</p>
                        
                    </div>
                </footer>
            </section>
            <!-- End of Section 5 -->
        </div>
        <!-- End of Front Page -->

    </div>

    <script>// Pages
document.querySelectorAll('.logo').forEach(logo => {
    logo.addEventListener('click', () => {
        document.querySelector('.front-page').style.display = 'block'
        document.querySelector('.login-page').style.display = 'none'
        document.querySelector('.signup-page').style.display = 'none'
    })
})

document.querySelectorAll('.login').forEach(loginBtn => {
    loginBtn.addEventListener('click', () => {
        document.querySelector('.front-page').style.display = 'none'
        document.querySelector('.login-page').style.display = 'block'
        document.querySelector('.signup-page').style.display = 'none'
    })
})

document.querySelectorAll('.signup').forEach(signupBtn => {
    signupBtn.addEventListener('click', () => {
        document.querySelector('.front-page').style.display = 'none'
        document.querySelector('.login-page').style.display = 'none'
        document.querySelector('.signup-page').style.display = 'flex'
    })
})
// End of Pages

// Navigation
const dropdownItems = document.querySelectorAll('.dropdown-hover')

if (window.innerWidth < 1000) {
    const menuIcon = document.querySelector('.menu')
    const navbar = document.querySelector('.navbar')

    menuIcon.addEventListener('click', () => {
        navbar.classList.toggle('change')

        if (!navbar.classList.contains('change')) {
            document.querySelectorAll('.nav-dropdown').forEach(dropdown => {
                dropdown.style.left = '-20rem'
            })
        }
    })

    document.querySelectorAll('.show-dropdown').forEach(link => {
        link.addEventListener('click', () => {
            link.nextElementSibling.style.left = '0'
        })
    })

    document.querySelectorAll('.dropdown-heading-link').forEach(headingLink => {
        headingLink.addEventListener('click', () => {
            headingLink.parentElement.parentElement.style.left = '-20rem'
        })
    })
} else {
    dropdownItems.forEach(dropdownItem => {
        dropdownItem.addEventListener('mouseover', () => {
            dropdownItem.lastElementChild.style.cssText = 'opacity: 1; visibility: visible'
            document.querySelector('.navbar-wrapper').style.background = 'linear-gradient(to right, #066399, #2f8fdf, #066399)'
            dropdownItem.firstElementChild.firstElementChild.style.transform = 'rotate(180deg)'
        })
        dropdownItem.addEventListener('mouseout', () => {
            dropdownItem.lastElementChild.style.cssText = 'opacity: 0; visibility: hidden'
            document.querySelector('.navbar-wrapper').style.background = 'none'
            dropdownItem.firstElementChild.firstElementChild.style.transform = 'rotate(0)'
        })
    })
}

window.addEventListener('resize', () => {
    // window.location.reload()
})

// End of Navigation</script>
</body>

</html>