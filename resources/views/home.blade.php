{{-- <h2>Ahmad khan</h2> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complain box</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-blue-500 via-teal-400 to-blue-500">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg transform transition-all duration-500 ease-in-out hover:scale-105">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6 animate__animated animate__fadeIn animate__delay-1s">Complain box</h1>

            <form id="contactForm" class="space-y-6">
                <div class="space-y-4">
                    <!-- Name Input -->
                    <div>
                        <input type="text" id="name" name="name" placeholder="Your Name"
                            class="w-full p-3 border-2 border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 transition-all ease-in-out">
                    </div>

                    <!-- Email Input -->
                    <div>
                        <input type="email" id="email" name="email" placeholder="Your Email"
                            class="w-full p-3 border-2 border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 transition-all ease-in-out">
                    </div>

                    <!-- Message Input -->
                    <div>
                        <textarea id="message" name="message" placeholder="Your Message"
                            class="w-full p-3 border-2 border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 transition-all ease-in-out resize-none h-32"></textarea>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-md transition-all duration-300 ease-in-out transform hover:scale-105">
                        Send Message
                    </button>
                </div>
            </form>

            <div id="responseMessage" class="mt-4 text-center text-green-600 opacity-0 transform translate-y-4 transition-all ease-out duration-500">
                Thank you for contacting us! We'll get back to you shortly.
            </div>
        </div>
    </div>

    <script>
        // Form submission handling
        const form = document.getElementById('contactForm');
        const responseMessage = document.getElementById('responseMessage');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Simulating form submission response
            setTimeout(() => {
                responseMessage.classList.remove('opacity-0', 'translate-y-4');
                responseMessage.classList.add('opacity-100', 'translate-y-0');
            }, 1000);
        });
    </script>

</body>
</html>