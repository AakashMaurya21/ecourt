<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ecourt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">
        <h1 class="logo"><a href="index.php" style="font-weight: 700; color:blue; font-size: 30px;"><img src="assets/logo/ashok_stambh.png" class="logo-img" alt="logo">Adaalat<img src="assets/logo/logo.png" class="logo-img" alt="logo"></a></h1>
        <ul class="main-nav">
            <li style="margin-top: 7px;"><a href="#banner">Home</a></li>
            <li style="margin-top: 7px;"><a href="#features">Features</a></li>
            <li style="margin-top: 7px;"><a href="#developers">Developers</a></li>
            <li style="margin-top: 7px;"><a href="#news">News</a></li>
            <li style="margin-top: 7px;"><a href="#footer">About</a></li>
            <li><a href="login.php"><button type="button" class="btn btn-primary login">LOGIN</button></a></li>
            <li><a href="signup.php"><button type="button" class="btn btn-danger signup">Register</button></a></li>
        </ul>
    </header>

    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="head_title">Court Case Management</h1>
                    <h1 class="head_title">System: <span style="color: green;">Adaalat</span>
                    </h1>
                    <h4 class="head_subtitle">a one stop solution for all your cases</h4>
                    <p class="head_para">The Adaalat website streamlines the judicial process, offering a user-friendly platform for case management. It facilitates online filing, document submission, and scheduling, enhancing efficiency. Judges can access digital case records, aiding informed decisions. This system promotes transparency, expedites proceedings, and ensures a seamless experience for legal professionals and litigants.</p>
                    <div class="row">
                        <div class="col-md-6 login-banner">
                            <a href="login.php"><button type="button" class="btn btn-primary">LOGIN</button></a>
                            <a href="signup.php"><button type="button" class="btn btn-success" style="margin-left:20px;">Register</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="section">
        <div class="container">
            <div class="row" style="text-align: center; padding-top:60px; color:black;">
                <div class="col middle">
                    <h1 class="middle section-head" style="font-size: 50px; font-weight:700;">
                        Our Features
                    </h1>
                    <h5>
                        Check out our list of awesome features below.
                    </h5>
                </div>
            </div>
            <div class="row mt-5" style="text-align: center;">
                <div class="col-md-4">
                    <div style="background-color:#f2f2f2; padding: 20px; border-radius: 30px; width:400px; height:300px;">
                        <i class="fa-solid fa-chart-pie"></i>
                        <h3>Performance</h3>
                        <p>The system shall allow several case registration at the same time without downgrading performance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color:#f2f2f2; padding: 20px; border-radius: 30px; width:400px; height:300px;">
                        <i class="fa-solid fa-headphones-simple"></i>
                        <h3>Availability</h3>
                        <p>The system shall be available to all court and can be access anywhere.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color:#f2f2f2; padding: 20px; border-radius: 30px; width:400px; height:300px;">
                        <i class="fa-solid fa-box"></i>
                        <h3>Usability</h3>
                        <p>The system shall be easy to learn and use by all users including registrar and administrator.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5" style="text-align: center;">
                <div class="col-md-4">
                    <div style="background-color:#f2f2f2; padding: 20px; border-radius: 30px; width:400px; height:300px;">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h3>Security</h3>
                        <p>Each user is required to login. The system shall allow people with assigned user names and passwords.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color:#f2f2f2; padding: 20px; border-radius: 30px; width:400px; height:300px;">
                        <i class="fa-solid fa-robot"></i>
                        <h3>Reliability</h3>
                        <p>The system have low system failure occurrence and low risk. And will not take much time to resolve it.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color:#f2f2f2; padding: 20px; border-radius: 30px; width:400px; height:300px;">
                        <i class="fa-solid fa-bullseye"></i>
                        <h3>Accuracy</h3>
                        <p>The system shall work accurately without high failure or error.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="developers" class="section">
        <div class="container">
            <div class="row">
                <div class="col middle" style="text-align: center;">
                    <h1 class="middle section-head" style="font-size: 50px; font-weight:700; padding-top:30px;">
                        Developers
                    </h1>
                    <h5>
                        People who bring life to EAdaalat
                    </h5>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10">
                    <p>Being the full-stack developer, I find myself at the intersection of creativity and functionality, navigating both frontend and backend landscapes. From designing compelling user interfaces to managing server-side logic and databases, I thrive on the diversity of challenges the full stack brings. My proficiency in various languages and frameworks allows me to contribute to every stage of the software development life cycle. In our dynamic and collaborative environment, I take pride in streamlining the development process, ensuring effective communication between frontend and backend components, and delivering end-to-end solutions that exceed expectations.</p>
                    <h6 style="font-weight: 800; margin-top: 10px;">Aakash Maurya</h6>
                    <h6 style="font-weight: 800;">Full Stack Developer</h6>
                </div>
                <div class="col-md-2">
                    <img src="assets/developers/aakash.png" class="testimonial-image">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-2">
                    <img src="assets/developers/anurag.jpg" class="testimonial-image">
                </div>
                <div class="col-md-10">
                    <p>As the frontend developer on our team, I am passionate about turning design concepts into captivating and user-friendly interfaces. My expertise in HTML, CSS, and JavaScript allows me to breathe life into our digital experiences, ensuring that every click and interaction feels seamless. Collaborating closely with our design team, I take pride in translating their vision into reality, creating visually stunning web applications that leave a lasting impression. Crafting responsive and intuitive interfaces is not just my job; it's my commitment to delivering exceptional user experiences.</p>
                    <h6 style="font-weight: 800; margin-top: 10px;">Anurag Mishra</h6>
                    <h6 style="font-weight: 800;">Frontend Developer</h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10">
                    <p>In my role as the database manager, I am the custodian of our data, ensuring its security, integrity, and optimal performance. Armed with expertise in database technologies and a meticulous approach to data modeling, I take pride in designing and maintaining a robust database architecture. My commitment to optimizing queries, implementing security measures, and staying ahead of industry trends is driven by a desire to safeguard our users' information. I see myself not just managing data but contributing to the backbone of our applications, paving the way for scalability and innovation in our data management practices.</p>
                    <h6 style="font-weight: 800; margin-top: 10px;">Akash Kushwaha</h6>
                    <h6 style="font-weight: 800;">Database Manager</h6>
                </div>
                <div class="col-md-2">
                    <img src="assets/developers/aakash.png" class="testimonial-image">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="news" class="section">
        <div class="container">
            <div class="row">
                <div class="col middle" style="text-align: center;">
                    <h1 class="middle section-head" style="font-size: 50px; font-weight:700; padding-top:30px;">
                        Recent news
                    </h1>
                    <h5>
                        Shaping Digital Experiences That Resonate
                    </h5>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <img src="assets/news/news.jpg" class="news-image">
                    <h3 class="news-heading">Revolutionizing Judicial Processes</h3>
                    <i class="fa-regular fa-calendar"></i> February 01, 2024
                    <p>Our cutting-edge eCourt Management System marks a transformative leap in the legal landscape.</p>
                    <a href="#" style="color:brown">Read more</a>
                </div>
                <div class="col-md-3">
                    <img src="assets/news/ai_image.avif" class="news-image">
                    <h3 class="news-heading">eCourt System Implements AI</h3>
                    <i class="fa-regular fa-calendar"></i> February 06, 2024
                    <p>Embracing the power of Artificial Intelligence, our eCourt Management System goes beyond the conventional.</p>
                    <a href="#" style="color:brown">Read more</a>
                </div>
                <div class="col-md-3">
                    <img src="assets/news/secure.jpg" class="news-image">
                    <h3 class="news-heading">Securing Legal Data: Adaalat</h3>
                    <i class="fa-regular fa-calendar"></i> January 01, 2024
                    <p>In an era where data security is paramount, our eCourt Management System prioritizes the protection of sensitive legal information.</p>
                    <a href="#" style="color:brown">Read more</a>
                </div>
                <div class="col-md-3">
                    <img src="assets/news/centric.jpg" class="news-image">
                    <h3 class="news-heading">User-Centric Design: Ecourt</h3>
                    <i class="fa-regular fa-calendar"></i> December 25, 2023
                    <p> Breaking away from traditional complexities, our eCourt Management System prioritizes user experience.</p>
                    <a href="#" style="color:brown">Read more</a>
                </div>
            </div>
        </div>
    </div>


    <div id="footer" class="section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="section-head-footer">About Company</h4>
                    <p style="margin-top: 20px;">Welcome to Adaalat, where we lead the charge in revolutionizing eCourt services. At the forefront of innovation,
                        we specialize in delivering advanced
                        solutions tailored to meet the unique needs of the legal industry.
                        Our mission is clear — to transform court management by fostering a digital environment that enhances
                        the efficiency, transparency, and accessibility of judicial processes.
                        Leveraging cutting-edge technologies, including Artificial Intelligence and smart case analytics
                        , our platform simplifies complex legal workflows, from case tracking to
                        document management. </p>

                    <p>Committed to the highest standards of data security,
                        we implement robust cybersecurity protocols to safeguard confidential legal information.
                        With a user-centric design, our eCourt services not only empower legal professionals with
                        powerful tools but also ensure a seamless and intuitive experience. Join us at Adaalat
                        as we redefine the future of eCourt services, setting new standards in efficiency, security
                        and user satisfaction</p>
                </div>
                <div class="col-6" style="text-align: right;">
                    <h4 class="section-head-footer">Company Address</h4>
                    <h6 style="margin-top: 20px;">Maurya Proejcts ltd.</h6>
                    <h6>Shivdaspur, Manduadih</h6>
                    <h6>Varanasi, India,221103</h6>
                    <h6>P: +91 9140951010</h6>
                </div>
            </div>
            <div class="row" style="text-align: center; margin-top:40px">
                <div class="col-12">
                    <h6 style="color:#f2f2f2"> Copyright 2023 @ Company Name</h6>
                </div>
            </div>
        </div>

</body>

</html>