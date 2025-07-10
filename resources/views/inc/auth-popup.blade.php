

<!-- Modal Background -->
<div id="authModal" class="fixed inset-0 bg-white/75 backdrop-blur-sm z-50 hidden items-center justify-center">
<!-- Modal Box -->
<div class="bg-white p-6 pt-8 rounded-lg shadow-lg w-full max-w-md relative">
    
    <!-- Close Button -->
    <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-500 font-bold text-3xl">&times;</button>

    <!-- Title -->
    <h2 id="modalTitle" class="text-2xl font-bold text-center mb-4">Sign In</h2>

    <!-- Social Buttons -->
    <div class="flex justify-center mb-4">

        <img class="w-3/4" src="/assets/media.png" alt="">



    </div>

    <div class="flex items-center mb-4 space-x-4">
    <hr class="flex-grow border-gray-400">
    <span class="px-2 text-gray-500 text-xl">Or</span>
    <hr class="flex-grow border-gray-400">
    </div>

    <!-- Form -->
    <form action="/" class="space-y-4">
    <input type="email" placeholder="Email" class="w-full text-lg border px-4 py-2 rounded outline-none focus:ring-1 focus:ring-gray-500" required>
    <input type="password" placeholder="Password" class="w-full text-lg border px-4 py-2 rounded outline-none focus:ring-1 focus:ring-gray-500" required>
    <div class="text-right">
        <a href="#" class="text-sm underline font-light">Forgot password?</a>
    </div>
    <button id="toggleButton" type="submit" class="w-full brand-red-bg text-lg red-btn text-white py-3 rounded-sm">Sign In</button>
    </form>

    <button id="toggleText" onclick="toggleAuthMode()" class="w-full mt-2 text-lg black-btn border border-black py-3 rounded-sm">I don`t have an account</button>


    
</div>
</div>



<script>
const modal = document.getElementById("authModal");
const title = document.getElementById("modalTitle");
const toggleText = document.getElementById("toggleText");
const toggleButton = document.getElementById("toggleButton");
let isSignIn = true;

function openModal() {
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModal() {
    modal.classList.remove("flex");
    modal.classList.add("hidden");
}

function toggleAuthMode() {
    
    title.textContent = isSignIn ? "Sign Up" : "Sign In";
    toggleText.textContent = isSignIn ? "Don't have an account?" : "Already have an account?";
    toggleButton.textContent = isSignIn ? "Sign Up" : "Sign In";

    isSignIn = !isSignIn;
}
</script>