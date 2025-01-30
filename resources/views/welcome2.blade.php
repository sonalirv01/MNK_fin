<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MNK Finance - Your Trusted Banking Partner for Loans, Fund Transfers, and Insurance Policies">
    <title>MNK Finance - Banking Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="font-sans">
    <header class="bg-blue-900 text-white">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="/logo.jpg" alt="MNK Finance Logo" class="h-12 w-12">
                    <a href="/" class="ml-3 text-2xl font-bold">MNK Finance</a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="hover:text-blue-200">Services</a>
                    <a href="#about" class="hover:text-blue-200">About</a>
                    <a href="#contact" class="hover:text-blue-200">Contact</a>
                    <a href="/login" class="bg-blue-500 px-6 py-2 rounded-full hover:bg-blue-600">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="bg-blue-800 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-5xl font-bold mb-6">Your Financial Partner for Growth</h1>
                <p class="text-xl mb-8">Secure loans, instant fund transfers, and comprehensive insurance policies</p>
                <div class="space-x-4">
                    <a href="#apply-loan" class="bg-green-500 px-8 py-3 rounded-full text-lg hover:bg-green-600">Apply for Loan</a>
                    <a href="#contact" class="border-2 border-white px-8 py-3 rounded-full text-lg hover:bg-white hover:text-blue-800">Contact Us</a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Loan Service -->
                    <div class="p-6 border rounded-lg text-center">
                        <i class="fas fa-hand-holding-usd text-4xl text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-3">Loans</h3>
                        <p class="text-gray-600">Personal, Business, and Mortgage loans with competitive rates</p>
                    </div>

                    <!-- Fund Transfer -->
                    <div class="p-6 border rounded-lg text-center">
                        <i class="fas fa-exchange-alt text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-3">Fund Transfers</h3>
                        <p class="text-gray-600">Instant domestic and international money transfers</p>
                    </div>

                    <!-- Insurance -->
                    <div class="p-6 border rounded-lg text-center">
                        <i class="fas fa-shield-alt text-4xl text-red-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-3">Insurance Policies</h3>
                        <p class="text-gray-600">Comprehensive life, health, and property insurance</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="bg-gray-100 py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Why Choose MNK Finance?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <i class="fas fa-lock text-3xl text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Secure Transactions</h3>
                        <p class="text-gray-600">Bank-level security for all operations</p>
                    </div>
                    <!-- Add more features similarly -->
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section id="contact" class="py-16">
            <div class="container mx-auto px-6 max-w-2xl">
                <h2 class="text-3xl font-bold text-center mb-8">Contact Us</h2>
                <form class="space-y-6">
                    @csrf
                    <div>
                        <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded-lg">
                    </div>
                    <div>
                        <input type="email" placeholder="Email Address" class="w-full px-4 py-2 border rounded-lg">
                    </div>
                    <div>
                        <textarea rows="4" placeholder="Your Message" class="w-full px-4 py-2 border rounded-lg"></textarea>
                    </div>
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 w-full">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">MNK Finance</h4>
                    <p class="text-gray-400">Your trusted financial partner since 2010</p>
                </div>
                <!-- Add footer columns for Quick Links, Contacts, Legal -->
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 MNK Finance. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.4.2/cdn.min.js"></script>
</body>

</html>