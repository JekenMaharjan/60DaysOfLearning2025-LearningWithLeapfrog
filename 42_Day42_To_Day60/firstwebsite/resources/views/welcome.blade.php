<!DOCTYPE html>
<html>
<head>
    <title>Welcome - Jeken</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class="bg-gray-800 flex items-center justify-center h-screen text-white">
    <div class="text-center">
        <div class="title"><h1>👋 Hello, I'm Jeken Maharjan</h1></div>    
        <p class="text-lg mb-6">A passionate Laravel & MERN stack developer 🚀</p>
        <a href="https://github.com/jekenmaharjan" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            View My GitHub
        </a><br><br>
        <a href="{{ route('testpage') }}" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Test your page</a>
    
        <br><br>
        <div class="border-white p-5 m-5 border-2 rounded-xl">
            <h3 class="text-3xl font-bold">Laravel Basic FORM</h3>
            <br>
            <!-- Form that sends data to the 'formsubmitted' route using POST method -->
            <form action="{{ route('formsubmitted') }}" method="post">

                <!-- CSRF token to protect against cross-site request forgery -->
                @csrf

                <!-- Label and input for Full Name -->
                <label for="fullname">Full name:</label>
                <!-- Text input for the user's full name with border styling and required validation -->
                <input class="border" type="text" id="fullname" name="fullname" placeholder="Enter your Name.." required>

                <br><br>

                <!-- Label and input for Email -->
                <label class="ml-5" for="email">E-mail:</label>
                <!-- Text input for the user's email with border styling and required validation -->
                <input class="border" type="text" id="email" name="email" placeholder="Enter your email.." required>

                <br><br>

                <!-- Submit button with Tailwind CSS styles and hover effect -->
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
