<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Submission Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fade-in and Slide-up animation for the form */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease-out;
        }

        /* Button hover color transition */
        @keyframes colorTransition {
            0% {
                background-color: #4CAF50;
            }
            100% {
                background-color: #45a049;
            }
        }

        .color-transition {
            animation: colorTransition 0.5s ease-in-out forwards;
        }

        /* Heading transition for smooth animation */
        @keyframes headingAnimation {
            0% {
                opacity: 0;
                transform: translateX(-30px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .heading-fade-in {
            animation: headingAnimation 1s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-2xl fade-in-up">
        <!-- Heading 1 -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4 heading-fade-in">Submit Your Blog</h2>

        <!-- Heading 2 -->
        <h3 class="text-xl font-semibold text-gray-600 mb-4 heading-fade-in">Tell us what you're writing about</h3>

        <!-- Blog Title -->
        <div class="mb-6">
            <label for="title" class="block text-gray-700 text-sm mb-2">Blog Title</label>
            <input type="text" id="title" name="title" placeholder="Enter the blog title"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 transition-all duration-300">
        </div>

        <!-- Heading 3 -->
        <h3 class="text-xl font-semibold text-gray-600 mb-4 heading-fade-in">What's your story?</h3>

        <!-- Blog Content -->
        <div class="mb-6">
            <label for="content" class="block text-gray-700 text-sm mb-2">Content</label>
            <textarea id="content" name="content" rows="6" placeholder="Write your blog content here"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 transition-all duration-300"></textarea>
        </div>

        <!-- Heading 4 -->
        <h3 class="text-xl font-semibold text-gray-600 mb-4 heading-fade-in">Add tags to your post</h3>

        <!-- Blog Tags -->
        <div class="mb-6">
            <label for="tags" class="block text-gray-700 text-sm mb-2">Tags (separate with commas)</label>
            <input type="text" id="tags" name="tags" placeholder="e.g., technology, lifestyle"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 transition-all duration-300">
        </div>

        <!-- Heading 5 -->
        <h3 class="text-xl font-semibold text-gray-600 mb-4 heading-fade-in">Who is the author?</h3>

        <!-- Author Name -->
        <div class="mb-6">
            <label for="author" class="block text-gray-700 text-sm mb-2">Author Name</label>
            <input type="text" id="author" name="author" placeholder="Enter your name"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 transition-all duration-300">
        </div>

        <!-- Heading 6 -->
        <h3 class="text-xl font-semibold text-gray-600 mb-4 heading-fade-in">What is the publishing date?</h3>

        <!-- Publish Date -->
        <div class="mb-6">
            <label for="date" class="block text-gray-700 text-sm mb-2">Publish Date</label>
            <input type="date" id="date" name="date"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500 transition-all duration-300">
        </div>

        <!-- Heading 7 -->
        <h3 class="text-xl font-semibold text-gray-600 mb-4 heading-fade-in">Are you ready?</h3>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition-colors duration-300 color-transition">
            Submit Blog
        </button>

        <!-- Optional Message -->
        <p class="text-center text-sm mt-4 text-gray-500">
            Want to share your thoughts? Let's get started!
        </p>
    </div>

</body>
</html>