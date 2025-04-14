<x-frontend-layout>
    <section>
        <div class="container py-10 text-center space-y-4">
            <h1 class="text-3xl font-bold">
                Register Your Business
            </h1>
            <p>
                Start your business journey on the right foot by registering with us. We make the process simple and efficient, ensuring that you comply with all legal requirements. With our expert guidance, you can focus on growing your business while we handle the paperwork, making it easier for you to establish a strong, credible presence in the market.
            </p>
            <div>
                <button data-modal-target="request-modal" data-modal-toggle="request-modal" type="button"
                    class="btn-primary cursor-pointer">Send Request</button>
            </div>

            <!-- Main modal -->
            <div id="request-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl overflow-hidden">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between px-6 py-4 border-b">
                        <h3 class="text-lg font-semibold">Send Request</h3>
                        <button type="button"
                            class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex items-center justify-center"
                            data-modal-hide="request-modal">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="flex flex-col lg:flex-row">
                        <!-- Left Image -->
                        <div class="hidden lg:block lg:w-1/2 bg-cover bg-center"
                            style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk3N25L8p6f6sY-LwGf-Xi6X-Uku-dZLNJBA&s'); min-height: 100%;">
                        </div>

                        <!-- Right Form -->
                        <div class="w-full lg:w-1/2 p-6">
                            <form action="{{ route('seller_store') }}" method="post" class="space-y-4">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Full Name -->
                                    <div class="space-y-1">
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Full Name</label>
                                        <input type="text" name="name" id="name" required
                                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <!-- Email -->
                                    <div class="space-y-1">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" name="email" id="email" required
                                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <!-- Address -->
                                    <div class="space-y-1 md:col-span-2">
                                        <label for="address"
                                            class="block text-sm font-medium text-gray-700">Address</label>
                                        <input type="text" name="address" id="address" required
                                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <!-- PAN No -->
                                    <div class="space-y-1">
                                        <label for="pan_no"
                                            class="block text-sm font-medium text-gray-700">PAN No</label>
                                        <input type="text" name="pan_no" id="pan_no" required
                                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <!-- Registration No -->
                                    <div class="space-y-1">
                                        <label for="reg_no"
                                            class="block text-sm font-medium text-gray-700">Registration No</label>
                                        <input type="text" name="reg_no" id="reg_no" required
                                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <!-- Phone -->
                                    <div class="space-y-1 md:col-span-2">
                                        <label for="phone"
                                            class="block text-sm font-medium text-gray-700">Phone</label>
                                        <input type="tel" name="phone" id="phone" required
                                            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button type="submit"
                                        class="w-full bg-blue-600 text-white py-2.5 rounded-lg hover:bg-blue-700 transition duration-200">Submit
                                        Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container py-10">
            <h1 class="text-3xl font-bold text-center">
                Get Featured Products with limited time offer!
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 py-5">
                @foreach ($available_product as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
