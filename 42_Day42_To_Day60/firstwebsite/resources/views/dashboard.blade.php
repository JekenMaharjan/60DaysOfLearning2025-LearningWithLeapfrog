<div class="flex flex-col text-center ml-100">
    <div class="flex justify-center">
        <img src="{{ asset('images/profilePic.png') }}" alt="Profile Picture" class="h-60 w-60 rounded-xl">
    </div>
    <div class="title">
        <h1>👋 Hello, I'm Jeken Maharjan</h1>
    </div>    
    <p class="text-lg mb-6">A passionate Laravel & MERN stack developer 🚀</p>
    <div class="flex justify-center">
        <a href="https://github.com/jekenmaharjan" target="_blank" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            View My GitHub
        </a>
    </div>
    <br>

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
            <input class="border" type="text" id="fullname" name="fullname" placeholder="Enter your FullName..." required>

            <br><br>

            <!-- Label and input for Email -->
            <label class="ml-6" for="email">E-mail:</label>
            <!-- Text input for the user's email with border styling and required validation -->
            <input class="border" type="text" id="email" name="email" placeholder="Enter your E-mail..." required>

            <br><br>

            <!-- Submit button with Tailwind CSS styles and hover effect -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
        </form>
    </div>
</div>