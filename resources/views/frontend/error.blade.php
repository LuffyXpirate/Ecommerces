<x-frontend-layout>
    <section class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="text-center p-6 bg-white shadow-lg rounded-2xl max-w-md">
            <h1 class="text-6xl font-bold text-primary mb-4">404</h1>
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Page Not Found</h2>
            <p class="text-gray-500 mb-6">
                Oops! The page you are looking for doesn’t exist or has been moved.
            </p>
            <a href="{{ url('/') }}"
                class="inline-block bg-primary text-white px-6 py-2 rounded-full hover:bg-opacity-90 transition">
                Go Home
            </a>
        </div>
    </section>
</x-frontend-layout>
