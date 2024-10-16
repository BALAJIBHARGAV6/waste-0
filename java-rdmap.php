<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Development Roadmap</title>
    <script>
    window.onload = function() {
        window.scrollTo(0, 0);
    };
</script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS Library for animations -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <style>
/* Root Variables */
:root {
    --primary-color: #003366;
    --secondary-color: #00c6ff;
    --accent-color: #ff6b6b;
    --light-bg: #f0f4f8;
    --dark-bg: #1a2a3a;
}

/* General Body Styling */
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #ffffff;
    color: #333;
    line-height: 1.7;
    scroll-behavior: smooth;
    padding-top: 150px;
}
/* Navbar Styles */
.navbar {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 1rem 0;
    transition: all 0.3s ease;
    width: 100%;
    z-index: 1000;
    position: fixed;
    top: 0;
    left: 0;
}

.navbar-brand {
    font-weight: 700;
    font-size: 1.8rem;
    color: var(--secondary-color) !important;
}

.navbar-nav .nav-link {
    font-size: 1.1rem;
    margin: 0 1rem;
    color: black !important;
    transition: all 0.3s ease;
    position: relative;
}

.navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    background-color: var(--secondary-color);
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover::after {
    width: 100%;
}

.navbar-toggler {
    border: none;
    background-color: transparent;
    font-size: 1.25rem;
    line-height: 1;
    padding: 0;
    margin: 0;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    width: 1.5em;
    height: 1.5em;
}

.navbar-toggler:focus {
    outline: none;
    box-shadow: none;
}

/* Mobile Menu Styles */
.mobile-menu {
    display: none;
}

/* Dropdown Styles */
.nav-item.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background-color: white;
    border: 1px solid #ddd;
    border-top: 4px solid var(--secondary-color);
    border-radius: 0 0 4px 4px;
    padding: 10px 0;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.nav-item.dropdown:hover .dropdown-menu,
.nav-item.dropdown.show .dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
}

.dropdown-item {
    padding: 8px 16px;
    color: black;
    text-decoration: none;
}

.dropdown-item:hover {
    background-color: #f1f1f1;
}

/* Media Queries for Responsive Design */
@media (max-width: 768px) {
    body {
        padding-top: 60px;
    }
    .navbar {
        height: 60px;
        padding: 0.5rem 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar-brand {
        font-size: 1.5rem;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .navbar-toggler {
        position: absolute;
        left: 1rem;
    }
    .navbar-nav {
        display: none;
    }

    .mobile-menu {
        display: block;
        position: fixed;
        top: 60px;
        left: -250px;
        width: 250px;
        height: calc(100vh - 60px);
        background-color: white;
        z-index: 999;
        transition: left 0.3s ease-in-out;
        overflow-y: auto;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .mobile-menu.open {
        left: 0;
    }

    .mobile-menu .nav-link {
        padding: 1rem;
        border-bottom: 1px solid #eee;
        display: block;
        color: black;
    }

    .mobile-menu .dropdown-menu {
        position: static;
        display: none;
        width: 100%;
        border: none;
        padding: 0;
        opacity: 1;
        visibility: visible;
    }

    .mobile-menu .nav-item.dropdown.show .dropdown-menu {
        display: block;
    }

    .mobile-menu .dropdown-item {
        padding: 0.5rem 1rem 0.5rem 2rem;
    }

    .menu-overlay {
        display: none;
        position: fixed;
        top: 60px;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 998;
    }

    .menu-overlay.open {
        display: block;
    }
}
@media (max-width: 768px) {
    .mobile-menu {
        display: block;
        position: fixed;
        top: 60px;
        left: -250px;
        width: 250px;
        height: calc(100vh - 60px);
        background-color: white;
        z-index: 1001;
        transition: left 0.3s ease-in-out;
        overflow-y: auto;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .mobile-menu.open {
        left: 0;
    }

    .mobile-menu .navbar-nav {
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
        list-style-type: none;
    }

    .mobile-menu .nav-item {
        width: 100%;
    }

    .mobile-menu .nav-link {
        padding: 1rem;
        border-bottom: 1px solid #eee;
        display: block;
        color: black !important;
        text-decoration: none;
    }

    .menu-overlay {
        display: none;
        position: fixed;
        top: 60px;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .menu-overlay.open {
        display: block;
    }
}
/* Roadmap Section */
.roadmap-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    position: relative;
}

.svg-container {
    max-width: 100%;
    overflow-x: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
    padding: 20px 0;
}

svg {
    width: 100%;
    height: auto;
    max-width: 1200px;
}

.node {
    cursor: pointer;
    transition: all 0.3s ease;
    filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.3));
    position: relative;
    z-index: 2;
}

.node:hover {
    filter: brightness(0.9);
}

.hoverRect {
    transition: fill 0.3s, stroke 0.3s;
    cursor: pointer;
}

.hoverRect:hover {
    fill: #00c6ff;
}

.connection {
    stroke: #4299e1;
    stroke-width: 2;
    fill: none;
}

.dotted {
    stroke-dasharray: 5, 5;
}
/* Slide Panel Styles */
.slide-panel {
    position: fixed;
    top: 90px;
    right: 0;
    width: 600px;
    max-width: 100%;
    height: 100%;
    background-color: white;
    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
    transform: translateX(100%);
    transition: transform 0.3s ease-in-out;
    z-index: 1000;
    overflow-y: auto;
    padding: 1rem;
    border-left: 1px solid #e0e0e0;
}

.slide-panel.open {
    transform: translateX(0);
}

.close-btn {
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
    font-size: 1.5rem;
    background: none;
    border: none;
    cursor: pointer;
    color: #666;
}

.close-btn:hover {
    color: #333;
}

/* Content Styles */
.slide-panel-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #e0e0e0;
}

.slide-panel-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
}

.status-container {
    display: flex;
    align-items: center;
}

.status-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #ffd700;
    margin-right: 0.5rem;
}

.status-text {
    font-size: 0.9rem;
    color: #666;
}

.update-status-btn {
    margin-left: 0.5rem;
    padding: 0.25rem 0.5rem;
    font-size: 0.8rem;
    color: #007bff;
    background-color: transparent;
    border: 1px solid #007bff;
    border-radius: 4px;
    cursor: pointer;
}

.update-status-btn:hover {
    background-color: #007bff;
    color: white;
}

/* Main Content Styles */
.slide-panel-content {
    font-size: 1rem;
    color: #333;
    line-height: 1.6;
}

.content-section {
    margin-bottom: 1.5rem;
}

.content-section h2 {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #333;
}

.resource-list {
    list-style-type: none;
    padding-left: 0;
}

.resource-item {
    margin-bottom: 0.5rem;
}

.resource-tag {
    display: inline-block;
    padding: 0.2rem 0.5rem;
    font-size: 0.8rem;
    font-weight: bold;
    border-radius: 4px;
    margin-right: 0.5rem;
}

.tag-article {
    background-color: #ffd700;
    color: #333;
}

.tag-video {
    background-color: #e6e6fa;
    color: #333;
}

.tag-course {
    background-color: #ffd700;
    color: #333;
}

.resource-link {
    color: #007bff;
    text-decoration: none;
}

.resource-link:hover {
    text-decoration: underline;
}

.offer-banner {
    background-color: #fff8dc;
    border: 1px solid #ffd700;
    border-radius: 4px;
    padding: 0.5rem;
    margin-top: 1rem;
    font-size: 0.9rem;
    color: #333;
}

.note-section {
    margin-top: 1rem;
    font-size: 0.8rem;
    color: #666;
    border-top: 1px solid #e0e0e0;
    padding-top: 1rem;
}
/* Desktop Styles */
@media (min-width: 769px) {
    .slide-panel {
        top: 90px;
        height: calc(100% - 90px);
        transform: translateX(100%);
    }

    .slide-panel.open {
        transform: translateX(0);
    }
}

/* Mobile Styles */
@media (max-width: 768px) {
    .slide-panel {
        top: 100%;
        left: 0;
        width: 100%;
        height: calc(100% - 60px); /* Adjust based on your mobile navbar height */
        transform: translateY(0);
        border-top: 1px solid #e0e0e0;
        border-left: none;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .slide-panel.open {
        transform: translateY(-100%);
    }
}

/* Media Queries */
@media (max-width: 768px) {
    body {
        padding-top: 60px;
    }
    .home-section h1 {
        font-size: 2.5rem;
    }

    .roadmap-container {
        padding: 0 1rem;
    }
}

@keyframes moveDown {
    0% { stroke-dashoffset: 18; }
    100% { stroke-dashoffset: 0; }
}

#animatedLine {
    animation: moveDown 1s linear infinite;
}
/* Footer */
footer {
            background-color: var(--dark-bg);
            color: #fff;
            padding: 4rem 0 2rem;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-section {
            margin-bottom: 2rem;
        }
        .footer-section h3 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
        }
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .footer-section ul li a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        .social-icons {
    display: flex;
    margin-top: 0.5rem;
}

.social-icons a {
    color: #fff;
    font-size: 1.5rem;
    margin-right: 1rem;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    color: #00c6ff;
    transform: translateY(-3px);
}
        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
</style>

</head>
<body>
   <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" id="menu-toggle" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">CareerInEdu</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="jobs.php">
                        <i class="bi bi-briefcase-fill"></i> Jobs
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarCourses" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-book-fill"></i> Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarCourses">
                        <li>
                            <a class="dropdown-item" href="internship.php">
                                <i class="bi bi-briefcase-fill"></i> Internships
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="FreeCourses.php">
                                <i class="bi bi-book-half"></i> Free Courses
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="roadmaps.php">
                        <i class="bi bi-signpost-split-fill"></i> Roadmaps
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="videos.php">
                        <i class="bi bi-youtube"></i> Videos
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarCheatcodes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-key-fill"></i> Cheat Codes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarCheatcodes">
                        <li>
                            <a class="dropdown-item" href="cheatcodes.php">
                                <i class="bi bi-key-fill"></i> Cheat-Codes
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="aitools.php">
                                <i class="bi bi-robot"></i> AI Tools
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarSkillAssessment" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bar-chart-fill"></i> Skill Assessment
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarSkillAssessment">
                        <li>
                            <a class="dropdown-item" href="SkillAssessment.php">
                                <i class="bi bi-clipboard-fill"></i> Skill Assessment
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="Quiz.php">
                                <i class="bi bi-question-circle-fill"></i> Quiz Questions
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarLogin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarLogin">
                        <li><a class="dropdown-item" href="login.php"><i class="bi bi-people"></i> Login</a></li>
                        <li><a class="dropdown-item" href="register.php"><i class="bi bi-person-plus"></i> Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="mobile-menu" id="mobile-menu">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="jobs.php">Jobs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="internship.php">Internships</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="FreeCourses.php">Free Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="roadmaps.php">Roadmaps</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="videos.php">Videos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="SkillAssessment.php">Skill Assessment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
    </ul>
</div>

    <div class="menu-overlay" id="menu-overlay"></div>
</nav>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-3/4 overflow-x-auto">
                <svg width="1000" height="2500" viewBox="0 0 1000 2500" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                    <!-- Animated vertical line -->
                    <line id="animatedLine" x1="500" y1="50" x2="500" y2="2300" 
                          stroke="#00c6ff" stroke-width="4" stroke-dasharray="8,8">
                        <animate attributeName="stroke-dashoffset" 
                                 from="18" to="0" 
                                 dur="1s" 
                                 repeatCount="indefinite" />
                    </line>
<!-- Title Background Rectangle -->
<rect x="325" y="10" width="350" height="45" fill="#003366" stroke="#00c6ff" rx="10" ry="10" filter="url(#shadow)" class="node" data-title="Java Development Roadmap"/>

<!-- Title Text (adjusted slightly up) -->
<text x="500" y="32" font-size="24" fill="#00c6ff" text-anchor="middle" dominant-baseline="middle">Java Development</text>

<path d="M 500 60 L 500 95 L 490 85 M 500 95 L 510 85"
      fill="none"
      stroke="#00c6FF"
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Core Java -->
<rect x="400" y="100" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="10" ry="10" filter="url(#shadow)" class="node" data-title="Core java"/>
<text x="500" y="125" font-size="16" fill="#00c6ff" text-anchor="middle">Core Java</text>
            
    <!-- Left column topics for Core Java -->
<rect class="hoverRect" x="50" y="80" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" data-title="Basic Syntax"/>
<text x="150" y="105" font-size="12" text-anchor="middle">Basic Syntax</text>
        
<rect class="hoverRect" x="50" y="130" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" data-title="Java Data Types"/>
<text x="150" y="155" font-size="12" text-anchor="middle">Java Data Types</text>
        
<rect class="hoverRect" x="50" y="180" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" data-title="Control Flow Statements"/>
<text x="150" y="205" font-size="12" text-anchor="middle">Control Flow Statements</text>

<!-- Right column topics for Core Java -->
<rect class="hoverRect" x="750" y="80" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Object Oriented Programming"/>
<text x="850" y="105" font-size="12" text-anchor="middle">Object Oriented Programming</text>
            
<rect class="hoverRect" x="750" y="130" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Exception Handling"/>
<text x="850" y="155" font-size="12" text-anchor="middle">Exception Handling</text>
            
<rect class="hoverRect" x="750" y="180" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Collections Framework"/>
<text x="850" y="205" font-size="12" text-anchor="middle">Collections Framework</text>

     
   <!-- Arrow above GUI Application Development -->
<path d="M 500 260 L 500 295 L 490 285 M 500 295 L 510 285" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- GUI Application Development -->
<rect x="400" y="300" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="GUI application development"/>
<text x="500" y="325" font-size="14" fill="#00c6ff" text-anchor="middle">GUI Application Develop</text>

<!-- Left column topics for GUI -->
<rect class="hoverRect" x="50" y="280" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaFX Introduction"/>
<text x="150" y="305" font-size="12" text-anchor="middle">JavaFX Introduction</text>

<rect class="hoverRect" x="50" y="330" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaFX Events and Properties"/>
<text x="150" y="355" font-size="12" text-anchor="middle">JavaFX Events and Properties</text>

<rect class="hoverRect" x="50" y="380" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaFX Layouts"/>
<text x="150" y="405" font-size="12" text-anchor="middle">JavaFX Layouts</text>

<!-- Right column topics for GUI -->
<rect class="hoverRect" x="750" y="280" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaFX Controls"/>
<text x="850" y="305" font-size="12" text-anchor="middle">JavaFX Controls</text>

<rect class="hoverRect" x="750" y="330" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaFX Media"/>
<text x="850" y="355" font-size="12" text-anchor="middle">JavaFX Media</text>

<rect class="hoverRect" x="750" y="380" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaFX Charts"/>
<text x="850" y="405" font-size="12" text-anchor="middle">JavaFX Charts</text>

            
   <!-- Arrow above Java Database Connectivity -->
<path d="M 500 460 L 500 495 L 490 485 M 500 495 L 510 485" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Java Database Connectivity -->
<rect x="400" y="500" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Database Connectivity"/>
<text x="500" y="525" font-size="14" fill="#00c6ff" text-anchor="middle">Java Database Connectivity</text>

<!-- Left column topics for JDBC -->
<rect class="hoverRect" x="50" y="480" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JDBC Introduction"/>
<text x="150" y="505" font-size="12" text-anchor="middle">JDBC Introduction</text>

<rect class="hoverRect" x="50" y="530" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JDBC Drivers"/>
<text x="150" y="555" font-size="12" text-anchor="middle">JDBC Drivers</text>

<rect class="hoverRect" x="50" y="580" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JDBC Connection"/>
<text x="150" y="605" font-size="12" text-anchor="middle">JDBC Connection</text>

<!-- Right column topics for JDBC -->
<rect class="hoverRect" x="750" y="480" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="CRUD Operations in JDBC"/>
<text x="850" y="505" font-size="12" text-anchor="middle">CRUD Operations in JDBC</text>

<rect class="hoverRect" x="750" y="530" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Transaction Management in JDBC"/>
<text x="850" y="555" font-size="12" text-anchor="middle">Transaction Management in JDBC</text>

<rect class="hoverRect" x="750" y="580" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JDBC Batch Processing"/>
<text x="850" y="605" font-size="12" text-anchor="middle">JDBC Batch Processing</text>

<!-- Arrow above Web Development with Java -->
<path d="M 500 660 L 500 695 L 490 685 M 500 695 L 510 685" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Web Development with Java -->
<rect x="400" y="700" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Web Development with java"/>
<text x="500" y="725" font-size="14" fill="#00c6ff" text-anchor="middle">Web Development with Java</text>

<!-- Left column topics for Web Development -->
<rect class="hoverRect" x="50" y="680" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="servlets API"/>
<text x="150" y="705" font-size="12" text-anchor="middle">Servlets API</text>

<rect class="hoverRect" x="50" y="730" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JavaServer Pages"/>
<text x="150" y="755" font-size="12" text-anchor="middle">JavaServer Pages (JSP)</text>

<rect class="hoverRect" x="50" y="780" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Standard Tag Library"/>
<text x="150" y="805" font-size="12" text-anchor="middle">Standard Tag Library (JSTL)</text>

<!-- Right column topics for Web Development -->
<rect class="hoverRect" x="750" y="680" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Filters in web applications"/>
<text x="850" y="705" font-size="12" text-anchor="middle">Filters in Web Applications</text>

<rect class="hoverRect" x="750" y="730" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Session Management"/>
<text x="850" y="755" font-size="12" text-anchor="middle">Session Management</text>

<rect class="hoverRect" x="750" y="780" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Asynchronous Processing in servlets"/>
<text x="850" y="805" font-size="12" text-anchor="middle">Asynchronous ProcessingServlets</text>

            
<!-- Arrow above Advanced Java -->
<path d="M 500 860 L 500 895 L 490 885 M 500 895 L 510 885" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Advanced Java -->
<rect x="400" y="900" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Advanced java"/>
<text x="500" y="925" font-size="14" fill="#00c6ff" text-anchor="middle">Advanced Java</text>

<!-- Left column topics for Advanced Java -->
<rect class="hoverRect" x="50" y="880" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Interfaces"/>
<text x="150" y="905" font-size="12" text-anchor="middle">Java Interfaces</text>

<rect class="hoverRect" x="50" y="930" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Enums"/>
<text x="150" y="955" font-size="12" text-anchor="middle">Java Enums</text>

<rect class="hoverRect" x="50" y="980" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Multithreading"/>
<text x="150" y="1005" font-size="12" text-anchor="middle">Multithreading</text>

<!-- Right column topics for Advanced Java -->
<rect class="hoverRect" x="750" y="880" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java I/O"/>
<text x="850" y="905" font-size="12" text-anchor="middle">Java I/O</text>

<rect class="hoverRect" x="750" y="930" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Networking in java"/>
<text x="850" y="955" font-size="12" text-anchor="middle">Networking in Java</text>

<rect class="hoverRect" x="750" y="980" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Generics"/>
<text x="850" y="1005" font-size="12" text-anchor="middle">Java Generics</text>

<!-- Arrow above Java APIs for JSON Processing -->
<path d="M 500 1060 L 500 1095 L 490 1085 M 500 1095 L 510 1085" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Java APIs for JSON Processing -->
<rect x="400" y="1100" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java APIs for JSON Processing"/>
<text x="500" y="1125" font-size="14" fill="#00c6ff" text-anchor="middle">JavaAPIs for JSONProcessing</text>

<!-- Left column topics for JSON Processing -->
<rect class="hoverRect" x="50" y="1080" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSON-P Overview"/>
<text x="150" y="1105" font-size="12" text-anchor="middle">JSON-P Overview</text>

<rect class="hoverRect" x="50" y="1130" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSON-P Object Model API"/>
<text x="150" y="1155" font-size="12" text-anchor="middle">JSON-P Object Model API</text>

<rect class="hoverRect" x="50" y="1180" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSON-P Stream API"/>
<text x="150" y="1205" font-size="12" text-anchor="middle">JSON-P Stream API</text>

<!-- Right column topics for JSON Processing -->
<rect class="hoverRect" x="750" y="1080" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSON-P Pointer, Patch and Query"/>
<text x="850" y="1105" font-size="12" text-anchor="middle">JSON-P Pointer, Patch and Query</text>

<rect class="hoverRect" x="750" y="1130" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSON-B Overview"/>
<text x="850" y="1155" font-size="12" text-anchor="middle">JSON-B Overview</text>

<rect class="hoverRect" x="750" y="1180" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSON-B Customizations"/>
<text x="850" y="1205" font-size="12" text-anchor="middle">JSON-B Customizations</text>

<!-- Arrow above Security in Java -->
<path d="M 500 1260 L 500 1295 L 490 1285 M 500 1295 L 510 1285" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>
<!-- Security in Java -->
<rect x="400" y="1300" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Security in Java"/>
<text x="500" y="1325" font-size="14" fill="#00c6ff" text-anchor="middle">Security in Java</text>

<!-- Left column topics for Security -->
<rect class="hoverRect" x="50" y="1280" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Security Overview"/>
<text x="150" y="1305" font-size="12" text-anchor="middle">Java Security Overview</text>

<rect class="hoverRect" x="50" y="1330" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Authentication and Authorization"/>
<text x="150" y="1355" font-size="12" text-anchor="middle">Authentication and Authorization</text>

<rect class="hoverRect" x="50" y="1380" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Cryptography"/>
<text x="150" y="1405" font-size="12" text-anchor="middle">Java Cryptography</text>

<!-- Right column topics for Security -->
<rect class="hoverRect" x="750" y="1280" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Securing Java Web Applications"/>
<text x="850" y="1305" font-size="12" text-anchor="middle">Securing Java Web Applications</text>

<rect class="hoverRect" x="750" y="1330" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Secure Coding Guidelines"/>
<text x="850" y="1355" font-size="12" text-anchor="middle">Java Secure Coding Guidelines</text>

<rect class="hoverRect" x="750" y="1380" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Security Testing"/>
<text x="850" y="1405" font-size="12" text-anchor="middle">Security Testing</text>


 <!-- Arrow above Testing in Java -->
<path d="M 500 1460 L 500 1495 L 490 1485 M 500 1495 L 510 1485" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Testing in Java -->
<rect x="400" y="1500" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Testing in Java"/>
<text x="500" y="1525" font-size="14" fill="#00c6ff" text-anchor="middle">Testing in Java</text>

<!-- Left column topics for Testing -->
<rect class="hoverRect" x="50" y="1480" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Unit Testing with JUnit"/>
<text x="150" y="1505" font-size="12" text-anchor="middle">Unit Testing with JUnit</text>

<rect class="hoverRect" x="50" y="1530" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Integration Testing with Arquillian"/>
<text x="150" y="1555" font-size="12" text-anchor="middle">Integration Testing with Arquillian</text>

<rect class="hoverRect" x="50" y="1580" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Mocking with Mockito"/>
<text x="150" y="1605" font-size="12" text-anchor="middle">Mocking with Mockito</text>

<!-- Right column topics for Testing -->
<rect class="hoverRect" x="750" y="1480" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Test Driven Development"/>
<text x="850" y="1505" font-size="12" text-anchor="middle">Test Driven Development</text>

<rect class="hoverRect" x="750" y="1530" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Behaviour Driven Development"/>
<text x="850" y="1555" font-size="12" text-anchor="middle">Behaviour Driven Development</text>

<rect class="hoverRect" x="750" y="1580" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Code Coverage with JaCoCo"/>
<text x="850" y="1605" font-size="12" text-anchor="middle">Code Coverage with JaCoCo</text>

            
<!-- Arrow above Performance Tuning -->
<path d="M 500 1660 L 500 1695 L 490 1685 M 500 1695 L 510 1685" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Performance Tuning -->
<rect x="400" y="1700" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Performance Tuning"/>
<text x="500" y="1725" font-size="14" fill="#00c6ff" text-anchor="middle">Performance Tuning</text>

<!-- Left column topics for Performance Tuning -->
<rect class="hoverRect" x="50" y="1680" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JVM Overview"/>
<text x="150" y="1705" font-size="12" text-anchor="middle">JVM Overview</text>

<rect class="hoverRect" x="50" y="1730" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JVM Tuning"/>
<text x="150" y="1755" font-size="12" text-anchor="middle">JVM Tuning</text>

<rect class="hoverRect" x="50" y="1780" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Profiling"/>
<text x="150" y="1805" font-size="12" text-anchor="middle">Java Profiling</text>

<!-- Right column topics for Performance Tuning -->
<rect class="hoverRect" x="750" y="1680" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Garbage Collection Optimizations"/>
<text x="850" y="1705" font-size="12" text-anchor="middle">Garbage Collection Optimization</text>

<rect class="hoverRect" x="750" y="1730" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Concurrency Utilities"/>
<text x="850" y="1755" font-size="12" text-anchor="middle">Java Concurrency Utilities</text>

<rect class="hoverRect" x="750" y="1780" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Performance Testing"/>
<text x="850" y="1805" font-size="12" text-anchor="middle">Java Performance Testing</text>

<!-- Arrow above Build Tools in Java -->
<path d="M 500 1860 L 500 1890 L 490 1880 M 500 1890 L 510 1880" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"/>

<!-- Build Tools in Java -->
<rect x="400" y="1900" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Build Tools in Java"/>
<text x="500" y="1925" font-size="14" fill="#00c6ff" text-anchor="middle">Build Tools in Java</text>

<!-- Left column topics for Build Tools -->
<rect class="hoverRect" x="50" y="1870" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Maven Overview"/>
<text x="150" y="1900" font-size="12" text-anchor="middle">Maven Overview</text>

<rect class="hoverRect" x="50" y="1920" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Maven Lifecycle"/>
<text x="150" y="1950" font-size="12" text-anchor="middle">Maven Lifecycle</text>

<rect class="hoverRect" x="50" y="1970" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Gradle Overview"/>
<text x="150" y="2000" font-size="12" text-anchor="middle">Gradle Overview</text>

<!-- Right column topics for Build Tools -->
<rect class="hoverRect" x="750" y="1870" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Gradle Build Scripts"/>
<text x="850" y="1900" font-size="12" text-anchor="middle">Gradle Build Scripts</text>

<rect class="hoverRect" x="750" y="1920" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Dependency Management"/>
<text x="850" y="1950" font-size="12" text-anchor="middle">Dependency Management</text>

<rect class="hoverRect" x="750" y="1970" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Continuous Integration with Jenkins"/>
<text x="850" y="2000" font-size="12" text-anchor="middle">Continuous Integration  Jenkins</text>

<!-- Arrow above Java EE Overview -->
<path d="M 500 2050 L 500 2085 L 490 2075 M 500 2085 L 510 2075" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4" 
      stroke-linecap="round" 
      stroke-linejoin="round"/>

<!-- Java EE Overview -->
<rect x="400" y="2090" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java EE Overview"/>
<text x="500" y="2115" font-size="14" fill="#00c6ff" text-anchor="middle">Java EE Overview</text>

<!-- Left column topics for Java EE -->
<rect class="hoverRect" x="50" y="2070" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java EE Architecture"/>
<text x="150" y="2095" font-size="12" text-anchor="middle">Java EE Architecture</text>

<rect class="hoverRect" x="50" y="2120" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="EJB Components"/>
<text x="150" y="2145" font-size="12" text-anchor="middle">EJB Components</text>

<rect class="hoverRect" x="50" y="2170" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Persistence API"/>
<text x="150" y="2195" font-size="12" text-anchor="middle">Java Persistence API</text>

<!-- Right column topics for Java EE -->
<rect class="hoverRect" x="750" y="2070" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JAX-RS for RESTful APIs"/>
<text x="850" y="2095" font-size="12" text-anchor="middle">JAX-RS for RESTful APIs</text>

<rect class="hoverRect" x="750" y="2120" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JSF for Web Applications"/>
<text x="850" y="2145" font-size="12" text-anchor="middle">JSF for Web Applications</text>

<rect class="hoverRect" x="750" y="2170" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="JMS for Messaging"/>
<text x="850" y="2195" font-size="12" text-anchor="middle">JMS for Messaging</text>


<!-- Arrow above Java Frameworks -->
<path d="M 500 2260 L 500 2295 L 490 2285 M 500 2295 L 510 2285" 
      fill="none" 
      stroke="#00c6FF" 
      stroke-width="4" 
      stroke-linecap="round" 
      stroke-linejoin="round"/>

<!-- Java Frameworks -->
<rect x="400" y="2300" width="200" height="45" fill="#003366" stroke="#00c6ff" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Java Frameworks"/>
<text x="500" y="2325" font-size="14" fill="#00c6ff" text-anchor="middle">Java Frameworks</text>

<!-- Left column topics for Java Frameworks -->
<rect class="hoverRect" x="50" y="2280" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Spring Framework"/>
<text x="150" y="2305" font-size="12" text-anchor="middle">Spring Framework</text>

<rect class="hoverRect" x="50" y="2330" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Hibernate Framework"/>
<text x="150" y="2355" font-size="12" text-anchor="middle">Hibernate Framework</text>

<rect class="hoverRect" x="50" y="2380" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Struts Framework"/>
<text x="150" y="2405" font-size="12" text-anchor="middle">Struts Framework</text>

<!-- Right column topics for Java Frameworks -->
<rect class="hoverRect" x="750" y="2280" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Apache Camel"/>
<text x="850" y="2305" font-size="12" text-anchor="middle">Apache Camel</text>

<rect class="hoverRect" x="750" y="2330" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Apache Hadoop"/>
<text x="850" y="2355" font-size="12" text-anchor="middle">Apache Hadoop</text>

<rect class="hoverRect" x="750" y="2380" width="200" height="40" fill="#00ccff" stroke="#003366" rx="5" ry="5" filter="url(#shadow)" class="node" data-title="Apache Spark"/>
<text x="850" y="2405" font-size="12" text-anchor="middle">Apache Spark</text>



            
    <svg width="1000" height="300">
    <!-- Core Java Lines -->
    <path d="M250 95 Q325 120 400 120" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 145 Q325 120 400 120" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 195 Q325 120 400 120" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 120 Q675 95 750 100" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 120 Q675 145 750 145" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 120 Q675 200 750 200" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>
</svg>
<svg width="1000" height="400">
    <!-- GUI Application Development Lines -->
    <path d="M250 295 Q325 325 400 320" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 345 Q325 320 400 320" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 395 Q325 320 400 320" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 320 Q675 290 750 295" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 320 Q675 345 750 345" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 320 Q675 385 750 395" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>
</svg>
<svg width="1000" height="800">
    <!-- Java Database Connectivity -->
    <path d="M250 495 Q325 520 400 520" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 545 Q325 520 400 520" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 595 Q325 520 400 520" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 520 Q675 495 750 495" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 520 Q675 545 750 545" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 520 Q675 595 750 595" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <!-- Web Development with Java -->
    <path d="M250 700 Q325 725 400 720" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 750 Q325 720 400 720" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 795 Q325 725 400 720" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 720 Q675 685 750 695" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 720 Q675 745 750 745" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 720 Q675 795 750 795" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>
</svg>
<svg width="1000" height="1300">
    <!-- Advanced Java -->

    <!-- Left Column Dotted Lines -->
    <path d="M250 900 Q325 920 400 920" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 945 Q325 920 400 920" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 990 Q325 930 400 920" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <!-- Right Column Dotted Lines -->
    <path d="M600 920 Q675 880 750 895" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 920 Q675 945 750 945" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 920 Q675 990 750 995" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <!-- JSON Processing -->
    <path d="M250 1095 Q325 1120 400 1120" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 1145 Q325 1120 400 1120" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 1195 Q325 1120 400 1120" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 1120 Q675 1095 750 1095" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 1120 Q675 1145 750 1145" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 1120 Q675 1195 750 1195" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>
</svg>

<svg width="1000" height="2000">
    <!-- Security in Java -->
    <path d="M250 1295 Q325 1320 400 1320" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 1345 Q325 1320 400 1320" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 1395 Q325 1320 400 1320" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 1320 Q675 1295 750 1295" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 1320 Q675 1345 750 1345" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 1320 Q675 1395 750 1395" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <!-- Testing in Java -->
    <path d="M250 1495 Q325 1520 400 1520" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 1545 Q325 1520 400 1520" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 1595 Q325 1520 400 1520" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 1520 Q675 1495 750 1495" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 1520 Q675 1545 750 1545" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 1520 Q675 1595 750 1595" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <!-- Performance Tuning -->
    <path d="M250 1695 Q325 1720 400 1720" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 1745 Q325 1720 400 1720" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 1795 Q325 1720 400 1720" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 1720 Q675 1695 750 1695" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 1720 Q675 1745 750 1745" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 1720 Q675 1795 750 1795" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 2300">
    <!-- Existing content -->
    
   <!-- Updated Build Tools in Java connections - slightly raised -->
<path d="M250 1790 Q325 1830 400 1830" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
</path>
<path d="M250 1845 Q325 1830 400 1830" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
</path>
<path d="M250 1895 Q325 1830 400 1830" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
</path>

<path d="M600 1830 Q675 1795 750 1795" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
</path>
<path d="M600 1830 Q675 1845 750 1845" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
</path>
<path d="M600 1830 Q675 1895 750 1895" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
</path>


    <!-- Updated Java EE Overview connections -->
    <path d="M250 1995 Q325 2020 400 2020" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M250 2045 Q325 2020 400 2020" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M250 2095 Q325 2020 400 2020" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <path d="M600 2020 Q675 1995 750 1995" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
    </path>
    <path d="M600 2020 Q675 2045 750 2045" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
    </path>
    <path d="M600 2020 Q675 2095 750 2095" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
        <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
    </path>

    <!-- Updated Java Frameworks connections - slightly raised -->
<path d="M250 2195 Q325 2220 400 2220" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
</path>
<path d="M250 2245 Q325 2220 400 2220" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
</path>
<path d="M250 2295 Q325 2220 400 2220" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
</path>

<path d="M600 2220 Q675 2195 750 2195" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" />
</path>
<path d="M600 2220 Q675 2245 750 2245" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.2s" />
</path>
<path d="M600 2220 Q675 2295 750 2295" fill="none" stroke="#00c6ff" stroke-width="2" stroke-dasharray="5,5">
    <animate attributeName="stroke-dashoffset" from="10" to="0" dur="1s" repeatCount="indefinite" begin="0.4s" />
</path>

</svg>
                </svg>
                <div id="slidePanel" class="slide-panel">
    <button class="close-btn">&times;</button>
    <h2 id="slidePanelTitle" class="text-xl font-bold mb-2"></h2>
    <p id="slidePanelContent"></p>
</div>
            </div>
        </div>
    </div>
    <p>
   For detailed explanations and theory, visit the <a href="javadetail.php">Complete Java Roadmap Notes</a>.
</p>
<!-- Footer -->
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <ul>
    <li><a href="about.php">Our Story</a></li>
    <li><a href="team.php">Our Team</a></li>
    <li><a href="contact.php">Contact Us</a></li>
</ul>

                </div>
                <div class="footer-section">
                    <h3>Resources</h3>
                    <ul>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="faqs.php">FAQs</a></li>
    <li><a href="terms.php">Terms of Use</a></li>
</ul>

                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Career In Edu. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
const rects = document.querySelectorAll('.hoverRect');
const slidePanel = document.getElementById('slidePanel');
const slidePanelTitle = document.getElementById('slidePanelTitle');
const slidePanelContent = document.getElementById('slidePanelContent');
const closeBtn = document.querySelector('.close-btn');
const body = document.body;

// Add dimming effect and stop scrolling when the panel is open
function applyBackgroundDimming(apply) {
    if (apply) {
        body.style.backgroundColor = "rgba(0, 0, 0, 0.3)";  // Dimming effect
        body.style.overflow = 'hidden';  // Disable background scrolling
    } else {
        body.style.backgroundColor = "";  // Remove dimming effect
        body.style.overflow = '';  // Enable background scrolling
    }
}

rects.forEach(rect => {
    rect.addEventListener('click', (event) => {
        const title = rect.getAttribute('data-title');
        slidePanelTitle.textContent = title;
        slidePanelContent.innerHTML = getContent(title);

        // Close any open panel first, then open the clicked one
        slidePanel.classList.add('open');
        applyBackgroundDimming(true);  // Apply dimming and disable scrolling
        event.stopPropagation();
    });
});

// Close the panel when clicking on the close button
closeBtn.addEventListener('click', () => {
    slidePanel.classList.remove('open');
    applyBackgroundDimming(false);  // Remove dimming and enable scrolling
});

// Close the panel if clicking outside of it
document.addEventListener('click', (event) => {
    if (!event.target.closest('.hoverRect') && !event.target.closest('#slidePanel')) {
        slidePanel.classList.remove('open');
        applyBackgroundDimming(false);  // Remove dimming and enable scrolling
    }
});

// Function to load content dynamically based on the clicked title
function getContent(title) {
    switch (title) {
        case 'Basic Syntax':
            return `
                <p>Java basic syntax includes class definitions, main methods, statements, and more. 
                Every Java application must have a 'main' method, which serves as the entry point.</p>
                <ul>
                    <li>Class structure: <code>public class ClassName {}</code></li>
                    <li>Main method: <code>public static void main(String[] args) {}</code></li>
                    <li>Statements: variable declarations, assignments, etc.</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/nutsandbolts/" target="_blank">Learn more about Java Basic Syntax</a>
            `;
        case 'Java Data Types':
            return `
                <p>Java has two main categories of data types: primitive and reference. Primitive types include 
                <code>int</code>, <code>float</code>, <code>boolean</code>, etc. Reference types are objects, like 
                <code>String</code>, arrays, and custom class instances.</p>
                <ul>
                    <li><strong>Primitive:</strong> int, float, double, boolean, char, byte, short, long</li>
                    <li><strong>Reference:</strong> String, arrays, user-defined objects</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html" target="_blank">Learn more about Java Data Types</a>
            `;
        case 'Control Flow Statements':
            return `
                <p>Control flow in Java is used to dictate the order in which statements are executed. 
                Common control flow statements include:</p>
                <ul>
                    <li><strong>Conditional:</strong> if-else, switch</li>
                    <li><strong>Loops:</strong> for, while, do-while</li>
                    <li><strong>Jump:</strong> break, continue, return</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/nutsandbolts/flow.html" target="_blank">Learn more about Java Control Flow Statements</a>
            `;
        default:
            return `
                <p>This is the content for ${title}. You can add more detailed information about ${title} here.</p>
                <a href="https://www.oracle.com/java/technologies/javase-downloads.html" target="_blank">Learn more about Java</a>
            `;
            case 'Object Oriented Programming':
            return `
                <p>Java supports Object-Oriented Programming (OOP) principles: encapsulation, inheritance, 
                polymorphism, and abstraction. These principles make Java a powerful and flexible language.</p>
                <ul>
                    <li><strong>Encapsulation:</strong> Bundling data with methods</li>
                    <li><strong>Inheritance:</strong> Mechanism for a class to inherit features from another class</li>
                    <li><strong>Polymorphism:</strong> Ability to take many forms</li>
                    <li><strong>Abstraction:</strong> Hiding complex implementation details</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/concepts/" target="_blank">Learn more about OOP in Java</a>
            `;
        case 'Exception Handling':
            return `
                <p>Java provides a powerful mechanism for handling runtime errors, known as exceptions. 
                It uses try-catch blocks to manage exceptions gracefully and ensure that the program doesn't crash.</p>
                <ul>
                    <li><strong>Checked Exceptions:</strong> Exceptions that are checked at compile time</li>
                    <li><strong>Unchecked Exceptions:</strong> Exceptions that occur during runtime</li>
                    <li><strong>Finally Block:</strong> Used to execute important code such as closing resources</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/essential/exceptions/" target="_blank">Learn more about Exception Handling in Java</a>
            `;
        case 'Collections Framework':
            return `
                <p>The Java Collections Framework provides a set of classes and interfaces to store and manipulate 
                groups of objects. It includes lists, sets, maps, and queues, making data manipulation easy.</p>
                <ul>
                    <li><strong>List:</strong> Ordered collection of elements</li>
                    <li><strong>Set:</strong> Unordered collection with no duplicates</li>
                    <li><strong>Map:</strong> Key-value pairs</li>
                    <li><strong>Queue:</strong> First-in, first-out data structure</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/collections/" target="_blank">Learn more about Collections Framework</a>
            `;
        case 'JavaFX Introduction':
            return `
                <p>JavaFX is a platform for building rich desktop applications in Java. It supports hardware-accelerated graphics 
                and provides a modern GUI toolkit.</p>
                <ul>
                    <li>Rich GUI components</li>
                    <li>CSS styling and FXML integration</li>
                    <li>Hardware-accelerated graphics</li>
                </ul>
                <a href="https://openjfx.io/" target="_blank">Learn more about JavaFX</a>
            `;
        case 'JavaFX Events and Properties':
            return `
                <p>JavaFX allows developers to create interactive UIs by handling events like mouse clicks and key presses. 
                JavaFX also supports binding properties to UI components.</p>
                <ul>
                    <li><strong>Event Handling:</strong> Respond to user interactions</li>
                    <li><strong>Property Binding:</strong> Sync data between components and logic</li>
                </ul>
                <a href="https://docs.oracle.com/javafx/2/events/handlers.htm" target="_blank">Learn more about JavaFX Events</a>
            `;
        case 'JavaFX Layouts':
            return `
                <p>JavaFX offers various layout panes to arrange UI elements in your application. Popular layouts include:</p>
                <ul>
                    <li><strong>HBox and VBox:</strong> Arrange components in horizontal or vertical rows</li>
                    <li><strong>GridPane:</strong> Grid-based layout for organizing components</li>
                    <li><strong>AnchorPane:</strong> Anchor nodes to specific positions</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/javafx/layout-tutorial/" target="_blank">Learn more about JavaFX Layouts</a>
            `;
        case 'JavaFX Controls':
            return `
                <p>JavaFX provides a rich set of controls like buttons, text fields, combo boxes, and more. These 
                controls are used to create interactive applications.</p>
                <ul>
                    <li>Buttons, Labels, and TextFields</li>
                    <li>ComboBox, ListView, and TableView</li>
                    <li>ProgressBars and Sliders</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/controls.htm" target="_blank">Learn more about JavaFX Controls</a>
            `;
        case 'JavaFX Media':
            return `
                <p>JavaFX supports media playback, including audio and video, through its Media and MediaPlayer APIs.</p>
                <ul>
                    <li>Media playback (audio and video)</li>
                    <li>Customizable media controls</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/javafx/media-tutorial/" target="_blank">Learn more about JavaFX Media</a>
            `;
        case 'JavaFX Charts':
            return `
                <p>JavaFX provides a variety of charts such as line charts, bar charts, pie charts, and more to visualize data.</p>
                <ul>
                    <li>Line Chart, Bar Chart, Pie Chart</li>
                    <li>Customizing chart appearance</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/javafx/user-interface-tutorial/charts.htm" target="_blank">Learn more about JavaFX Charts</a>
            `;
            case 'JDBC Introduction':
            return `
                <p>Java Database Connectivity (JDBC) is an API that allows Java applications to interact with databases. 
                It provides methods to connect to a database, execute queries, and retrieve results.</p>
                <ul>
                    <li>Database connection and query execution</li>
                    <li>Supports a variety of databases via drivers</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/jdbc/overview/index.html" target="_blank">Learn more about JDBC</a>
            `;
        case 'JDBC Drivers':
            return `
                <p>JDBC drivers act as a bridge between Java applications and the database. 
                There are four types of JDBC drivers:</p>
                <ul>
                    <li>Type 1: JDBC-ODBC bridge driver</li>
                    <li>Type 2: Native-API driver</li>
                    <li>Type 3: Network Protocol driver</li>
                    <li>Type 4: Thin driver (pure Java driver)</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/jdbc/basics/connecting.html" target="_blank">Learn more about JDBC Drivers</a>
            `;
        case 'JDBC Connection':
            return `
                <p>A JDBC connection is established using the DriverManager class. Once connected, 
                you can interact with the database using SQL queries.</p>
                <ul>
                    <li>Establishing a connection via DriverManager</li>
                    <li>Managing connection states and closing connections</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/jdbc/basics/connecting.html" target="_blank">Learn more about JDBC Connection</a>
            `;
        case 'CRUD Operations in JDBC':
            return `
                <p>CRUD operations in JDBC allow you to create, read, update, and delete records from a database.</p>
                <ul>
                    <li>Create: Insert data into a table</li>
                    <li>Read: Retrieve data from a table</li>
                    <li>Update: Modify existing data in a table</li>
                    <li>Delete: Remove data from a table</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/jdbc/basics/processingsqlstatements.html" target="_blank">Learn more about CRUD Operations in JDBC</a>
            `;
        case 'Transaction Management in JDBC':
            return `
                <p>Transaction management ensures that a series of operations are executed successfully or rolled back 
                if any part of the operation fails. JDBC supports transaction control via the Connection object.</p>
                <ul>
                    <li>Commit: Save changes to the database</li>
                    <li>Rollback: Revert changes if an error occurs</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/jdbc/basics/transactions.html" target="_blank">Learn more about Transaction Management in JDBC</a>
            `;
        case 'JDBC Batch Processing':
            return `
                <p>Batch processing in JDBC allows multiple SQL statements to be executed as a batch, improving performance by reducing the number of database round trips.</p>
                <ul>
                    <li>Using addBatch() and executeBatch() methods</li>
                    <li>Executing multiple insert, update, or delete operations in a single batch</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/jdbc/basics/prepared.html" target="_blank">Learn more about JDBC Batch Processing</a>
            `;
        case 'Servlets API':
            return `
                <p>Java Servlets are server-side components that handle HTTP requests and responses in a web application. 
                They are a part of the Java EE specification.</p>
                <ul>
                    <li>Handles GET, POST, and other HTTP methods</li>
                    <li>Extends the javax.servlet.http.HttpServlet class</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets.htm" target="_blank">Learn more about Java Servlets</a>
            `;
        case 'JavaServer Pages (JSP)':
            return `
                <p>JavaServer Pages (JSP) is a technology used to create dynamic web pages using Java and HTML. JSP 
                files are compiled into servlets and executed on the server.</p>
                <ul>
                    <li>Embeds Java code in HTML using special tags</li>
                    <li>Supports MVC design pattern</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/jsf.htm" target="_blank">Learn more about JavaServer Pages</a>
            `;
        case 'Standard Tag Library (JSTL)':
            return `
                <p>JSTL is a collection of standard tags for JSP, providing common functionalities like loops, 
                conditionals, and data manipulation.</p>
                <ul>
                    <li>Core tags for iteration and conditions</li>
                    <li>Formatting and internationalization tags</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/5/tutorial/doc/bnakc.html" target="_blank">Learn more about JSTL</a>
            `;
        case 'Filters in Web Applications':
            return `
                <p>Servlet filters intercept client requests and responses to perform tasks like authentication, 
                logging, or data compression before the request reaches a servlet or JSP.</p>
                <ul>
                    <li>Request and response modification</li>
                    <li>Chaining multiple filters together</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets004.htm" target="_blank">Learn more about Filters in Web Applications</a>
            `;
        case 'Session Management':
            return `
                <p>Session management in Java web applications helps maintain state across multiple requests from the same client.</p>
                <ul>
                    <li>Managing sessions with HttpSession</li>
                    <li>Tracking sessions with cookies or URL rewriting</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets012.htm" target="_blank">Learn more about Session Management</a>
            `;
        case 'Asynchronous Processing in Servlets':
            return `
                <p>Asynchronous processing in servlets allows long-running tasks to be executed without blocking the 
                server thread handling the request.</p>
                <ul>
                    <li>Using AsyncContext for asynchronous processing</li>
                    <li>Returning responses after background tasks complete</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets014.htm" target="_blank">Learn more about Asynchronous Processing in Servlets</a>
            `;
        case 'Java Interfaces':
            return `
                <p>Interfaces in Java define a contract of methods that a class must implement, 
                allowing for polymorphism and decoupled code.</p>
                <ul>
                    <li>Defining methods without implementation</li>
                    <li>Multiple inheritance via interfaces</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/IandI/createinterface.html" target="_blank">Learn more about Java Interfaces</a>
            `;
        case 'Java Enums':
            return `
                <p>Enums in Java are used to define a fixed set of constants. They are a special type of class 
                in Java that can include methods and constructors.</p>
                <ul>
                    <li>Define constants like <code>enum Day { MONDAY, TUESDAY }</code></li>
                    <li>Use enums to control specific sets of values</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/javaOO/enum.html" target="_blank">Learn more about Java Enums</a>
            `;
        case 'Multithreading':
            return `
                <p>Multithreading in Java allows concurrent execution of two or more parts of a program to maximize CPU usage.</p>
                <ul>
                    <li>Creating threads with <code>Runnable</code> or <code>Thread</code></li>
                    <li>Synchronization to avoid thread interference</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/essential/concurrency/" target="_blank">Learn more about Multithreading in Java</a>
            `;
        case 'Java I/O':
            return `
                <p>Java I/O is used to handle input and output operations, including file handling, 
                streams, and serialization.</p>
                <ul>
                    <li>Streams: InputStream, OutputStream</li>
                    <li>Readers and Writers for character data</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/essential/io/" target="_blank">Learn more about Java I/O</a>
            `;
            case 'Servlets API':
            return `
                <p>Java Servlets are server-side components that handle HTTP requests and responses in a web application. 
                They are a part of the Java EE specification.</p>
                <ul>
                    <li>Handles GET, POST, and other HTTP methods</li>
                    <li>Extends the javax.servlet.http.HttpServlet class</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets.htm" target="_blank">Learn more about Java Servlets</a>
            `;
        case 'JavaServer Pages (JSP)':
            return `
                <p>JavaServer Pages (JSP) is a technology used to create dynamic web pages using Java and HTML. JSP 
                files are compiled into servlets and executed on the server.</p>
                <ul>
                    <li>Embeds Java code in HTML using special tags</li>
                    <li>Supports MVC design pattern</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/jsf.htm" target="_blank">Learn more about JavaServer Pages</a>
            `;
        case 'Standard Tag Library (JSTL)':
            return `
                <p>JSTL is a collection of standard tags for JSP, providing common functionalities like loops, 
                conditionals, and data manipulation.</p>
                <ul>
                    <li>Core tags for iteration and conditions</li>
                    <li>Formatting and internationalization tags</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/5/tutorial/doc/bnakc.html" target="_blank">Learn more about JSTL</a>
            `;
        case 'Filters in Web Applications':
            return `
                <p>Servlet filters intercept client requests and responses to perform tasks like authentication, 
                logging, or data compression before the request reaches a servlet or JSP.</p>
                <ul>
                    <li>Request and response modification</li>
                    <li>Chaining multiple filters together</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets004.htm" target="_blank">Learn more about Filters in Web Applications</a>
            `;
        case 'Session Management':
            return `
                <p>Session management in Java web applications helps maintain state across multiple requests from the same client.</p>
                <ul>
                    <li>Managing sessions with HttpSession</li>
                    <li>Tracking sessions with cookies or URL rewriting</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets012.htm" target="_blank">Learn more about Session Management</a>
            `;
        case 'Asynchronous Processing in Servlets':
            return `
                <p>Asynchronous processing in servlets allows long-running tasks to be executed without blocking the 
                server thread handling the request.</p>
                <ul>
                    <li>Using AsyncContext for asynchronous processing</li>
                    <li>Returning responses after background tasks complete</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/servlets014.htm" target="_blank">Learn more about Asynchronous Processing in Servlets</a>
            `;
            case 'Java Interfaces':
            return `
                <p>An interface in Java is a reference type, similar to a class, that can contain only constants, method 
                signatures, default methods, static methods, and nested types. Interfaces are used to achieve abstraction 
                and multiple inheritance in Java.</p>
                <ul>
                    <li>Declared using the <code>interface</code> keyword</li>
                    <li>Classes implement interfaces using the <code>implements</code> keyword</li>
                    <li>Supports default and static methods from Java 8</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/IandI/createinterface.html" target="_blank">Learn more about Java Interfaces</a>
            `;
        case 'Java Enums':
            return `
                <p>Enums in Java are special classes that represent a collection of constants. They are used to define 
                a fixed set of constants like days of the week, months, or directions.</p>
                <ul>
                    <li>Declared using the <code>enum</code> keyword</li>
                    <li>Enum constants are implicitly public, static, and final</li>
                    <li>Enums can have fields, methods, and constructors</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/javaOO/enum.html" target="_blank">Learn more about Java Enums</a>
            `;
        case 'Multithreading':
            return `
                <p>Multithreading in Java allows concurrent execution of two or more threads. Java provides built-in 
                support for multithreaded programming via the <code>Thread</code> class and <code>Runnable</code> interface.</p>
                <ul>
                    <li>Extending the <code>Thread</code> class or implementing <code>Runnable</code> interface</li>
                    <li>Managing threads using methods like <code>start()</code> and <code>run()</code></li>
                    <li>Synchronization and thread safety with <code>synchronized</code> blocks</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/essential/concurrency/" target="_blank">Learn more about Multithreading in Java</a>
            `;
        case 'Java I/O':
            return `
                <p>Java provides a rich set of I/O classes to handle input and output operations such as reading from or 
                writing to files, standard input/output streams, or network communication.</p>
                <ul>
                    <li>File I/O using classes like <code>FileInputStream</code>, <code>FileOutputStream</code>, <code>BufferedReader</code>, etc.</li>
                    <li>Stream classes for handling input/output data streams</li>
                    <li>Handling exceptions with <code>IOException</code></li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/essential/io/" target="_blank">Learn more about Java I/O</a>
            `;
        case 'Networking in Java':
            return `
                <p>Networking in Java allows communication between computers using the TCP/IP protocol. Java's networking 
                APIs enable building distributed applications using sockets, URL connections, etc.</p>
                <ul>
                    <li>Using <code>Socket</code> and <code>ServerSocket</code> classes for TCP connections</li>
                    <li>Handling URLs with <code>HttpURLConnection</code> and <code>URLConnection</code></li>
                    <li>Using datagrams and UDP with <code>DatagramSocket</code> and <code>DatagramPacket</code></li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/networking/" target="_blank">Learn more about Networking in Java</a>
            `;
        case 'Java Generics':
            return `
                <p>Generics in Java allow the creation of classes, interfaces, and methods that can operate on any data 
                type while providing compile-time type safety.</p>
                <ul>
                    <li>Using generic types with classes and methods</li>
                    <li>Defining generic classes using type parameters like <code>&lt;T&gt;</code></li>
                    <li>Ensuring type safety by preventing ClassCastException at runtime</li>
                </ul>
                <a href="https://docs.oracle.com/javase/tutorial/java/generics/" target="_blank">Learn more about Java Generics</a>
            `;
            case 'JSON-P Overview':
            return `
                <p>JSON-P (JSON Processing) is a Java API designed to work with JSON data. It provides a standard way 
                to parse, generate, and transform JSON data within Java applications.</p>
                <ul>
                    <li>Part of Java EE and Jakarta EE specifications</li>
                    <li>Supports both streaming and object model processing of JSON</li>
                    <li>Provides flexibility for different JSON representations</li>
                </ul>
                <a href="https://javaee.github.io/jsonp/" target="_blank">Learn more about JSON-P Overview</a>
            `;
        case 'JSON-P Object Model API':
            return `
                <p>The JSON-P Object Model API provides a way to parse and manipulate JSON data using Java objects. 
                It allows you to create, read, and write JSON structures in a convenient and efficient manner.</p>
                <ul>
                    <li>Classes like <code>JsonObject</code> and <code>JsonArray</code> represent JSON objects and arrays</li>
                    <li>Supports JSON value types such as strings, numbers, and booleans</li>
                    <li>Offers methods for querying and modifying JSON data</li>
                </ul>
                <a href="https://javaee.github.io/jsonp/1.1/index.html#object-model-api" target="_blank">Learn more about JSON-P Object Model API</a>
            `;
        case 'JSON-P Stream API':
            return `
                <p>The JSON-P Stream API allows for reading and writing JSON data in a streaming fashion, which is 
                particularly useful for processing large JSON datasets. It provides a low-level API to handle JSON 
                data efficiently without loading the entire dataset into memory.</p>
                <ul>
                    <li>Using <code>JsonReader</code> for reading JSON data from input sources</li>
                    <li>Using <code>JsonWriter</code> for writing JSON data to output streams</li>
                    <li>Supports both SAX-like and DOM-like processing styles</li>
                </ul>
                <a href="https://javaee.github.io/jsonp/1.1/index.html#stream-api" target="_blank">Learn more about JSON-P Stream API</a>
            `;
        case 'JSON-P Pointer, Patch and Query':
            return `
                <p>JSON-P provides a set of APIs for navigating, modifying, and querying JSON data structures using 
                pointers, patches, and queries. This functionality enhances the flexibility of working with JSON data.</p>
                <ul>
                    <li>JSON pointers are used to reference specific parts of a JSON document</li>
                    <li>JSON patches allow for modifying a JSON document in a structured way</li>
                    <li>Supports querying JSON data using a path-like syntax</li>
                </ul>
                <a href="https://javaee.github.io/jsonp/1.1/index.html#pointer-patch-and-query" target="_blank">Learn more about JSON-P Pointer, Patch and Query</a>
            `;
        case 'JSON-B Overview':
            return `
                <p>JSON-B (JSON Binding) is a Java API that provides a binding layer between JSON data and Java objects. 
                It simplifies the serialization and deserialization of Java objects to and from JSON format.</p>
                <ul>
                    <li>Part of the Jakarta EE specification</li>
                    <li>Supports annotations for customizing JSON representation</li>
                    <li>Allows for conversion of complex Java objects into JSON and vice versa</li>
                </ul>
                <a href="https://jakarta.ee/specifications/jsonb/2.0/jakarta.json.bind-api-2.0.html" target="_blank">Learn more about JSON-B Overview</a>
            `;
        case 'JSON-B Customizations':
            return `
                <p>JSON-B provides various customization options to control how Java objects are converted to and from 
                JSON. You can customize serialization and deserialization processes using annotations and configuration 
                settings.</p>
                <ul>
                    <li>Using annotations like <code>@JsonbProperty</code> and <code>@JsonbTransient</code> for field mapping</li>
                    <li>Configuring naming strategies, date formats, and more</li>
                    <li>Custom serializers and deserializers for complex types</li>
                </ul>
                <a href="https://jakarta.ee/specifications/jsonb/2.0/jakarta.json.bind-api-2.0.html#customization" target="_blank">Learn more about JSON-B Customizations</a>
            `;
            case 'Java Security Overview':
            return `
                <p>Java Security provides a comprehensive framework to protect Java applications from various security threats. 
                It includes APIs, tools, and techniques for ensuring data integrity, confidentiality, and authentication.</p>
                <ul>
                    <li>Supports various security protocols and algorithms</li>
                    <li>Offers features like encryption, digital signatures, and secure sockets</li>
                    <li>Integrates with Java EE for secure enterprise applications</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/docs/technotes/guides/security/overview.html" target="_blank">Learn more about Java Security Overview</a>
            `;
        case 'Authentication and Authorization':
            return `
                <p>Authentication and authorization are critical components of securing Java applications. 
                Authentication verifies the identity of users, while authorization determines their access rights.</p>
                <ul>
                    <li>Java EE provides built-in support for authentication and authorization mechanisms</li>
                    <li>Common methods include form-based, basic, and token-based authentication</li>
                    <li>Role-based access control (RBAC) is often used for authorization</li>
                </ul>
                <a href="https://docs.oracle.com/javaee/7/tutorial/security.htm" target="_blank">Learn more about Authentication and Authorization</a>
            `;
        case 'Java Cryptography':
            return `
                <p>Java Cryptography provides a set of APIs for secure data transmission, storage, and management. 
                It supports various cryptographic algorithms, protocols, and standards.</p>
                <ul>
                    <li>Includes APIs for encryption, decryption, signing, and hashing</li>
                    <li>Supports standard algorithms like AES, RSA, and SHA</li>
                    <li>Java Cryptography Architecture (JCA) and Java Cryptography Extension (JCE) provide additional features</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/docs/technotes/guides/security/crypto/CryptoSpec.html" target="_blank">Learn more about Java Cryptography</a>
            `;
        case 'Securing Java Web Applications':
            return `
                <p>Securing Java web applications involves implementing various strategies to protect against common threats 
                like cross-site scripting (XSS), SQL injection, and session hijacking.</p>
                <ul>
                    <li>Use HTTPS to encrypt data in transit</li>
                    <li>Implement input validation and sanitization to prevent injections</li>
                    <li>Use security frameworks like Spring Security for enhanced protection</li>
                </ul>
                <a href="https://www.owasp.org/index.php/Java_Security" target="_blank">Learn more about Securing Java Web Applications</a>
            `;
        case 'Java Secure Coding Guidelines':
            return `
                <p>Java Secure Coding Guidelines provide best practices for writing secure code in Java applications. 
                Following these guidelines helps mitigate security risks and vulnerabilities.</p>
                <ul>
                    <li>Validate and sanitize all inputs</li>
                    <li>Use prepared statements to prevent SQL injection</li>
                    <li>Implement proper error handling and logging</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/javase/codeconventions-contents.html" target="_blank">Learn more about Java Secure Coding Guidelines</a>
            `;
        case 'Security Testing':
            return `
                <p>Security testing involves identifying vulnerabilities and weaknesses in Java applications through various techniques. 
                It ensures that applications are secure and resistant to attacks.</p>
                <ul>
                    <li>Common techniques include penetration testing, static code analysis, and dynamic testing</li>
                    <li>Tools like OWASP ZAP and Burp Suite are often used for security testing</li>
                    <li>Regular security audits and code reviews are essential for maintaining security</li>
                </ul>
                <a href="https://owasp.org/www-project-web-security-testing-guide/latest/Contents.html" target="_blank">Learn more about Security Testing</a>
            `;
            case 'Unit Testing with JUnit':
            return `
                <p>JUnit is a widely used framework for unit testing in Java. It allows developers to write and run repeatable tests, ensuring code quality and functionality.</p>
                <ul>
                    <li>Supports annotations to define test methods and lifecycle methods</li>
                    <li>Provides assertion methods for verifying expected outcomes</li>
                    <li>JUnit 5 introduced new features like dynamic tests and improved extensions</li>
                </ul>
                <a href="https://junit.org/junit5/" target="_blank">Learn more about Unit Testing with JUnit</a>
            `;
        case 'Integration Testing with Arquillian':
            return `
                <p>Arquillian is a testing platform for Java that simplifies integration testing. It allows developers to test Java EE components in a real environment, making tests more reliable.</p>
                <ul>
                    <li>Supports various containers like GlassFish, WildFly, and Payara</li>
                    <li>Allows testing of web applications, EJBs, and CDI components</li>
                    <li>Offers a rich set of extensions for different testing needs</li>
                </ul>
                <a href="https://arquillian.org/" target="_blank">Learn more about Integration Testing with Arquillian</a>
            `;
        case 'Mocking with Mockito':
            return `
                <p>Mockito is a popular framework for mocking objects in Java unit tests. It allows developers to create mock objects, making it easier to isolate components and test them independently.</p>
                <ul>
                    <li>Supports stubbing and verifying method calls on mock objects</li>
                    <li>Helps in creating unit tests without relying on external dependencies</li>
                    <li>Integrates well with JUnit and other testing frameworks</li>
                </ul>
                <a href="https://site.mockito.org/" target="_blank">Learn more about Mocking with Mockito</a>
            `;
        case 'Test Driven Development':
            return `
                <p>Test Driven Development (TDD) is a software development approach where tests are written before the actual code. This methodology ensures that code meets its requirements from the start.</p>
                <ul>
                    <li>Follows the cycle of writing a failing test, implementing code, and refactoring</li>
                    <li>Encourages simple design and high test coverage</li>
                    <li>Helps in catching bugs early in the development process</li>
                </ul>
                <a href="https://www.agilealliance.org/glossary/tdd/" target="_blank">Learn more about Test Driven Development</a>
            `;
        case 'Behaviour Driven Development':
            return `
                <p>Behaviour Driven Development (BDD) extends TDD by focusing on the behavior of the application from the user's perspective. It emphasizes collaboration among stakeholders.</p>
                <ul>
                    <li>Uses a natural language syntax to describe application behavior</li>
                    <li>Tools like Cucumber and JBehave support BDD practices</li>
                    <li>Aims to improve communication between technical and non-technical team members</li>
                </ul>
                <a href="https://cucumber.io/docs/guides/gherkin/" target="_blank">Learn more about Behaviour Driven Development</a>
            `;
        case 'Code Coverage with JaCoCo':
            return `
                <p>JaCoCo is a code coverage library for Java that helps identify how much of the code is being tested. It provides metrics that assist in improving test coverage.</p>
                <ul>
                    <li>Generates reports showing which lines of code were executed during tests</li>
                    <li>Integrates with build tools like Maven and Gradle</li>
                    <li>Helps identify untested parts of the codebase</li>
                </ul>
                <a href="https://www.jacoco.org/jacoco/" target="_blank">Learn more about Code Coverage with JaCoCo</a>
            `;
        
            case 'JVM Overview':
            return `
                <p>The Java Virtual Machine (JVM) is an engine that provides a runtime environment to execute Java bytecode. It enables Java applications to be platform-independent.</p>
                <ul>
                    <li>Converts Java bytecode into machine-specific instructions</li>
                    <li>Manages memory allocation and garbage collection</li>
                    <li>Supports Java's security features through the class loader</li>
                </ul>
                <a href="https://docs.oracle.com/javase/specs/jvms/se17/html/index.html" target="_blank">Learn more about JVM Overview</a>
            `;
        case 'JVM Tuning':
            return `
                <p>JVM tuning involves optimizing the JVM settings to enhance application performance. Proper tuning can lead to significant improvements in response time and resource utilization.</p>
                <ul>
                    <li>Adjust heap size and garbage collection settings</li>
                    <li>Monitor application performance and tweak parameters accordingly</li>
                    <li>Use tools like VisualVM and JConsole for analysis</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/javase/vmoptions-jdk11.html" target="_blank">Learn more about JVM Tuning</a>
            `;
        case 'Java Profiling':
            return `
                <p>Java profiling is the process of measuring the performance of a Java application. Profilers help identify bottlenecks, memory leaks, and other performance issues.</p>
                <ul>
                    <li>Tools like YourKit, JProfiler, and Java Mission Control are commonly used</li>
                    <li>Allows for analyzing CPU usage, memory consumption, and thread activity</li>
                    <li>Helps developers optimize code and improve application performance</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/javase/jmc.html" target="_blank">Learn more about Java Profiling</a>
            `;
        case 'Garbage Collection Optimization':
            return `
                <p>Garbage collection (GC) is a process of automatic memory management in Java. Optimizing GC can enhance application performance by reducing pause times.</p>
                <ul>
                    <li>Understanding different GC algorithms like G1, Parallel, and CMS is essential</li>
                    <li>Tuning parameters such as heap size and GC threads can improve performance</li>
                    <li>Monitoring tools help analyze GC behavior and optimize accordingly</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/docs/technotes/guides/vm/gctuning.html" target="_blank">Learn more about Garbage Collection Optimization</a>
            `;
        case 'Java Concurrency Utilities':
            return `
                <p>Java Concurrency Utilities provide a framework for developing multi-threaded applications. These utilities simplify the development of concurrent applications.</p>
                <ul>
                    <li>Includes classes like ExecutorService, Future, and CountDownLatch</li>
                    <li>Helps manage thread pools and handle asynchronous tasks</li>
                    <li>Facilitates safe sharing of resources between threads</li>
                </ul>
                <a href="https://docs.oracle.com/javase/8/docs/api/java/util/concurrent/package-summary.html" target="_blank">Learn more about Java Concurrency Utilities</a>
            `;
        case 'Java Performance Testing':
            return `
                <p>Java performance testing involves measuring and analyzing the performance characteristics of Java applications. It helps ensure that applications meet performance requirements.</p>
                <ul>
                    <li>Tools like JMeter, Gatling, and Apache Bench are commonly used</li>
                    <li>Focuses on metrics such as response time, throughput, and resource utilization</li>
                    <li>Can be integrated into the development process to identify performance issues early</li>
                </ul>
                <a href="https://jmeter.apache.org/" target="_blank">Learn more about Java Performance Testing</a>
            `;
            case 'Maven Overview':
            return `
                <p>Maven is a build automation tool used primarily for Java projects. It simplifies the build process and manages project dependencies effectively.</p>
                <ul>
                    <li>Uses an XML file (pom.xml) to configure project structure and dependencies</li>
                    <li>Supports the concept of repositories for managing libraries</li>
                    <li>Facilitates easy project management and builds through plugins</li>
                </ul>
                <a href="https://maven.apache.org/guides/introduction/introduction-to-maven.html" target="_blank">Learn more about Maven Overview</a>
            `;
        case 'Maven Lifecycle':
            return `
                <p>The Maven lifecycle is a set of phases that define the order of tasks in the build process. Each phase is responsible for a specific task.</p>
                <ul>
                    <li><strong>validate:</strong> Validate the project is correct and all necessary information is available</li>
                    <li><strong>compile:</strong> Compile the source code of the project</li>
                    <li><strong>test:</strong> Run tests using a suitable testing framework</li>
                    <li><strong>package:</strong> Package the compiled code into a distributable format (like JAR)</li>
                    <li><strong>install:</strong> Install the package into the local repository for use as a dependency</li>
                    <li><strong>deploy:</strong> Copy the final package to the remote repository for sharing with other developers</li>
                </ul>
                <a href="https://maven.apache.org/guides/introduction/introduction-to-the-lifecycle.html" target="_blank">Learn more about Maven Lifecycle</a>
            `;
        case 'Gradle Overview':
            return `
                <p>Gradle is a modern build automation tool that is flexible and powerful, used for building applications in Java, Groovy, Kotlin, and other languages.</p>
                <ul>
                    <li>Utilizes a domain-specific language (DSL) based on Groovy or Kotlin</li>
                    <li>Supports incremental builds and cache mechanisms for efficiency</li>
                    <li>Integrates well with popular IDEs and CI/CD tools</li>
                </ul>
                <a href="https://gradle.org/guides/what-is-gradle/" target="_blank">Learn more about Gradle Overview</a>
            `;
        case 'Gradle Build Scripts':
            return `
                <p>Gradle build scripts define the project structure and configuration for builds. They are typically written in Groovy or Kotlin DSL.</p>
                <ul>
                    <li>Uses a <code>build.gradle</code> file to specify dependencies, plugins, and tasks</li>
                    <li>Supports multi-project builds to manage complex projects effectively</li>
                    <li>Allows custom tasks and configurations to streamline the build process</li>
                </ul>
                <a href="https://docs.gradle.org/current/userguide/tutorial_using_tasks.html" target="_blank">Learn more about Gradle Build Scripts</a>
            `;
        case 'Dependency Management':
            return `
                <p>Dependency management in Maven and Gradle allows developers to specify and manage the libraries and frameworks their projects depend on.</p>
                <ul>
                    <li>Maven uses <code>pom.xml</code> for defining dependencies with scope, version, and transitive dependencies</li>
                    <li>Gradle simplifies dependency declaration using a more concise syntax in the build script</li>
                    <li>Both tools provide access to public repositories like Maven Central for easy integration of third-party libraries</li>
                </ul>
                <a href="https://maven.apache.org/guides/introduction/introduction-to-dependency-mechanism.html" target="_blank">Learn more about Dependency Management in Maven</a>
                <a href="https://docs.gradle.org/current/userguide/dependency_management.html" target="_blank">Learn more about Dependency Management in Gradle</a>
            `;
        case 'Continuous Integration Jenkins':
            return `
                <p>Jenkins is a popular open-source automation server that facilitates continuous integration and continuous delivery (CI/CD) for software projects.</p>
                <ul>
                    <li>Automates the process of building, testing, and deploying applications</li>
                    <li>Supports plugins for various build tools, version control systems, and deployment environments</li>
                    <li>Enables developers to detect and fix issues early in the development cycle</li>
                </ul>
                <a href="https://www.jenkins.io/doc/book/" target="_blank">Learn more about Continuous Integration with Jenkins</a>
            `;
            case 'Java EE Architecture':
            return `
                <p>Java EE (Enterprise Edition) architecture provides a set of specifications and APIs for building enterprise-level applications.</p>
                <ul>
                    <li>Follows a layered architecture consisting of client layer, web layer, business layer, and persistence layer</li>
                    <li>Supports various components such as Servlets, JSP, EJB, JPA, and more</li>
                    <li>Facilitates modularity and scalability in application development</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/javaee-architecture.html" target="_blank">Learn more about Java EE Architecture</a>
            `;
        case 'EJB Components':
            return `
                <p>Enterprise JavaBeans (EJB) are server-side components that encapsulate business logic in Java EE applications.</p>
                <ul>
                    <li>Supports various types of beans: session beans, entity beans, and message-driven beans</li>
                    <li>Manages transactions, security, and concurrency</li>
                    <li>Allows developers to focus on business logic while the EJB container handles the underlying complexities</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/javase/ejb-architecture.html" target="_blank">Learn more about EJB Components</a>
            `;
        case 'Java Persistence API':
            return `
                <p>The Java Persistence API (JPA) is a specification for managing relational data in Java applications.</p>
                <ul>
                    <li>Provides a standardized approach to object-relational mapping (ORM)</li>
                    <li>Allows developers to define entity classes that correspond to database tables</li>
                    <li>Supports querying and managing entity instances using JPQL (Java Persistence Query Language)</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/persistence-jsp.html" target="_blank">Learn more about Java Persistence API</a>
            `;
        case 'JAX-RS for RESTful APIs':
            return `
                <p>Java API for RESTful Web Services (JAX-RS) is a set of APIs to create web services that adhere to the REST architectural style.</p>
                <ul>
                    <li>Facilitates the development of RESTful services in Java</li>
                    <li>Provides annotations to simplify the creation of RESTful endpoints</li>
                    <li>Supports various data formats, including JSON and XML, for request and response bodies</li>
                </ul>
                <a href="https://jakarta.ee/specifications/restful-ws/3.1/jakarta-restful-ws-spec-3.1.html" target="_blank">Learn more about JAX-RS</a>
            `;
        case 'JSF for Web Applications':
            return `
                <p>JavaServer Faces (JSF) is a Java specification for building component-based user interfaces for web applications.</p>
                <ul>
                    <li>Uses reusable UI components to create dynamic web pages</li>
                    <li>Supports event-driven programming and manages the state of UI components</li>
                    <li>Integrates with various technologies like JSP and Facelets</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/javaserverfaces-overview.html" target="_blank">Learn more about JSF</a>
            `;
        case 'JMS for Messaging':
            return `
                <p>Java Message Service (JMS) is a messaging standard that allows Java applications to create, send, receive, and read messages.</p>
                <ul>
                    <li>Facilitates asynchronous communication between different components of a distributed application</li>
                    <li>Supports both point-to-point and publish-subscribe messaging models</li>
                    <li>Provides reliability and scalability in messaging systems</li>
                </ul>
                <a href="https://www.oracle.com/java/technologies/jms-overview.html" target="_blank">Learn more about JMS</a>
            `;
            case 'Spring Framework':
            return `
                <p>The Spring Framework is a comprehensive framework for building enterprise applications in Java.</p>
                <ul>
                    <li>Provides inversion of control (IoC) through dependency injection</li>
                    <li>Supports aspect-oriented programming (AOP) for cross-cutting concerns</li>
                    <li>Includes modules for various functionalities like Spring MVC, Spring Boot, and Spring Data</li>
                </ul>
                <a href="https://spring.io/projects/spring-framework" target="_blank">Learn more about Spring Framework</a>
            `;
        case 'Hibernate Framework':
            return `
                <p>Hibernate is an object-relational mapping (ORM) framework for Java, simplifying database interactions.</p>
                <ul>
                    <li>Maps Java classes to database tables using XML or annotations</li>
                    <li>Supports features like caching, lazy loading, and query optimization</li>
                    <li>Provides a powerful query language (HQL) to interact with the database</li>
                </ul>
                <a href="https://hibernate.org/orm/" target="_blank">Learn more about Hibernate Framework</a>
            `;
        case 'Struts Framework':
            return `
                <p>Apache Struts is an open-source web application framework for creating Java EE web applications.</p>
                <ul>
                    <li>Follows the MVC (Model-View-Controller) design pattern</li>
                    <li>Supports form validation, internationalization, and plugin architecture</li>
                    <li>Facilitates the development of scalable and maintainable web applications</li>
                </ul>
                <a href="https://struts.apache.org/" target="_blank">Learn more about Struts Framework</a>
            `;
        case 'Apache Camel':
            return `
                <p>Apache Camel is an open-source integration framework that provides a rule-based routing and mediation engine.</p>
                <ul>
                    <li>Supports Enterprise Integration Patterns (EIPs) for message routing</li>
                    <li>Integrates with various transport protocols and APIs</li>
                    <li>Allows developers to define routing rules in a simple and readable manner</li>
                </ul>
                <a href="https://camel.apache.org/" target="_blank">Learn more about Apache Camel</a>
            `;
        case 'Apache Hadoop':
            return `
                <p>Apache Hadoop is an open-source framework for distributed storage and processing of large datasets.</p>
                <ul>
                    <li>Comprises of Hadoop Distributed File System (HDFS) for storage and MapReduce for processing</li>
                    <li>Supports scalability and fault tolerance in big data applications</li>
                    <li>Integrates with various tools like Hive, Pig, and HBase for data analysis and management</li>
                </ul>
                <a href="https://hadoop.apache.org/" target="_blank">Learn more about Apache Hadoop</a>
            `;
        case 'Apache Spark':
            return `
                <p>Apache Spark is an open-source unified analytics engine for large-scale data processing.</p>
                <ul>
                    <li>Provides in-memory data processing capabilities for faster execution</li>
                    <li>Supports multiple programming languages, including Java, Scala, and Python</li>
                    <li>Integrates well with Hadoop and other big data tools for complex data workflows</li>
                </ul>
                <a href="https://spark.apache.org/" target="_blank">Learn more about Apache Spark</a>
            `;

    }
}    


</script>

     <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script>
   document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuOverlay = document.getElementById('menu-overlay');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('open');
        menuOverlay.classList.toggle('open');
    });

    menuOverlay.addEventListener('click', function() {
        mobileMenu.classList.remove('open');
        menuOverlay.classList.remove('open');
    });

    // Handle dropdowns in mobile menu
    const dropdownToggleList = mobileMenu.querySelectorAll('.dropdown-toggle');
    dropdownToggleList.forEach(function(dropdownToggle) {
        dropdownToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const dropdownMenu = this.nextElementSibling;
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    });
});
</script>
</body>
</html>
                 