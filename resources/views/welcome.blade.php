<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Navbar with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white text-xl font-semibold">
                <a href="#">My Thoughts</a>
            </div>

            <!-- Nav Links -->
            <ul class="hidden md:flex space-x-8 text-white">
              
                <li><a href="{{ url('/new ') }}" class="block hover:text-gray-400">Complain box</a></li>
                
                <li><a href="#about" class="hover:text-gray-400">Blogs</a></li>
                <li><a href="{{ url('/log') }}" class="hover:text-gray-400">login</a></li>
                <li><a href="{{ url('/bog') }}" class="hover:text-gray-400">Create</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="md:hidden bg-gray-800 text-white absolute top-16 left-0 w-full hidden">
            <ul class="space-y-4 p-4">
                <li><a href="./new.blade.php" class="block hover:text-gray-400">Complain box</a></li>

                <li><a href="#about" class="block hover:text-gray-400">Blogs</a></li>
                <li><a href="./new.blade.php" class="block hover:text-gray-400">Login</a></li>
                <li><a href="#contact" class="block hover:text-gray-400">Create</a></li>
            </ul>
        </div>
    </nav>

    <script>
        // Toggle mobile menu
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <body class="bg-gray-100 font-sans text-gray-800">

    <!-- Hero Section -->
    <section class="relative w-full h-screen bg-gray-900">
       
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="text-center text-white px-4">
                <h1 class="text-5xl font-bold mb-4">Explore the Beauty of your thoughts.</h1>
                <p class="text-lg mb-6">Create your own Blogs, Express your positive side to world.</p>
                <a href="#learn-more" class="bg-blue-600 text-white py-2 px-6 rounded-full text-lg hover:bg-blue-700 transition">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Image and Text Section -->
    <section id="learn-more" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-4xl font-semibold text-gray-900 mb-8">Stunning Photography</h2>
            <p class="text-xl text-gray-600 mb-12">"Don't focus on having a great blog. Focus on producing a blog that's great for your readers".
                "Blogging is to writing what extreme sports are to athletics: more free-form, more accident-prone, less formal, more alive".
                "Don't try to plan everything out to the very last detail. I'm a big believer in just getting it out there".</p>
            
            <div class="relative">
                <img src="https://img.freepik.com/free-photo/lifestyle-entertainment-network-hashtag_53876-21332.jpg?semt=ais_hybrid" alt="Stunning Nature" class="w-full h-full object-cover rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
        </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom animations */
        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Main Container with Flexbox -->
    <div class="flex justify-center items-center min-h-screen px-4 gap-6">

        <!-- Video Div -->
        <div class="video-container w-full md:w-1/2 bg-white rounded-lg overflow-hidden shadow-lg transform transition-all duration-700 ease-in-out hover:scale-105 hover:shadow-2xl animate__animated animate__fadeIn animate__delay-1s">
            {{-- <video class="w-full h-full object-cover" autoplay muted loop>
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video> --}}
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6eiWb80TxnA?si=DlEoA4OdwITUseqo" title="YouTube video player" frameborder="0" allow="accelerometer;  autoplay muted loop; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Image Div -->
        <div class="image-container w-full md:w-1/2 bg-white rounded-lg overflow-hidden shadow-lg transform transition-all duration-700 ease-in-out hover:scale-105 hover:shadow-2xl animate__animated animate__fadeIn animate__delay-1s">
            <img src="https://img.freepik.com/premium-vector/education-set-supplies-icons_24908-28309.jpg?ga=GA1.1.2040314287.1733501560&semt=ais_hybrid" alt="Sample Image" class="w-full h-full object-cover">
        </div>

    </div>
    <!-- Footer Section -->
    <body class="bg-gray-100 font-sans">

        <!-- Container with two divs for image and text -->
        <section class="max-w-6xl mx-auto py-16 px-4">
            <div class="flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
                <!-- Image Div -->
                <div class="w-full md:w-1/2">
                    <img src="https://img.freepik.com/premium-photo/portrait-young-woman-with-mouth-open-studying-library_1048944-20369921.jpg?semt=ais_hybrid" alt="Beautiful Landscape" class="w-full h-auto rounded-lg shadow-lg object-cover">
                </div>
    
                <!-- Text Div -->
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Explore your favourite topics</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        John Dewey's quote highlights the transformative nature of education and its impact on individuals and societies
                    </p>
                    <a href="#explore" class="bg-blue-600 text-white py-2 px-6 rounded-full text-lg hover:bg-blue-700 transition">Learn More</a>
                </div>
            </div>
        </section>
        <style>
            /* Custom Keyframes for Slide-up Animation */
            @keyframes slideUp {
                0% {
                    opacity: 0;
                    transform: translateY(30px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            /* Applying the slide-up animation to footer */
            .footer-slide-up {
                animation: slideUp 1s ease-out forwards;
            }
    
            /* Hover effect for links in the footer */
            .footer-link:hover {
                transform: scale(1.1);
                color: #4c8bf5; /* Custom hover color */
                transition: all 0.3s ease-in-out;
            }
    
            /* Button Hover Effect */
            .footer-btn:hover {
                background-color: #2563eb; /* Darker blue */
                transform: scale(1.05);
                transition: all 0.3s ease-in-out;
            }
        </style>
        <body class="bg-gray-100 font-sans">

            <!-- Content of the Page -->
            <section class="py-16 text-center">
                <h1 class="text-4xl font-bold text-gray-900">Welcome to Our Amazing Page</h1>
                <p class="text-xl text-gray-600 mt-4">Explore our content and enjoy smooth animations as you navigate through!</p>
            </section>
        
            <!-- Footer Section -->
            <footer class="bg-gray-800 text-white py-10 footer-slide-up">
                <div class="max-w-6xl mx-auto text-center">
                    <h3 class="text-3xl font-semibold mb-4">Stay Connected</h3>
                    <p class="text-lg mb-6">Follow us on social media for updates and more information.</p>
                    <div class="space-x-6 mb-6">
                        <a href="#" class="footer-link text-lg">Facebook</a>
                        <a href="#" class="footer-link text-lg">Twitter</a>
                        <a href="#" class="footer-link text-lg">Instagram</a>
                    </div>
                    <button ahref="./new.blade.php" class="footer-btn px-6 py-3 text-lg font-semibold rounded-full bg-blue-600 hover:bg-blue-700 transition-all">Contact Us</button>
                    <p class="text-sm mt-6">&copy; 2024 Amazing Company. All rights reserved.</p>
                </div>
            </footer>
        
            <script>
                // Triggering the footer slide-up animation on page load
                window.addEventListener('load', function() {
                    const footer = document.querySelector('.footer-slide-up');
                    footer.classList.add('footer-slide-up');
                });
            </script>
</body>
</html>