<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <!--  -->

<div class="min-h-screen">

    <!-- ================= Toolbar ================= -->

    <header class="bg-white border-b border-gray-300">

        <div class="flex items-center justify-between px-5 py-3">

            <div>

                <h1 class="text-lg font-semibold">
                    Customer Maintenance
                </h1>

                <p class="text-gray-500">
                    Create or maintain customer information
                </p>

            </div>

            <div class="flex gap-2">

                <button class="h-8 px-4 bg-blue-600 text-white rounded">
                    Save
                </button>

                <button class="h-8 px-4 border rounded">
                    Save & New
                </button>

                <button class="h-8 px-4 border rounded">
                    Delete
                </button>

                <button class="h-8 px-4 border rounded">
                    Print
                </button>

            </div>

        </div>

    </header>

    <!-- ================= Form ================= -->

    <main class="p-5">

        <div class="bg-white border border-gray-300">

            <!-- General Information -->

            <div class="bg-gray-100 border-b px-4 py-2 font-semibold">
                General Information
            </div>

            <div class="grid grid-cols-12 gap-6 p-5">

                <!-- LEFT -->

                <div class="col-span-6 space-y-3">

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Customer Code</label>

                        <input
                            class="col-span-2 h-8 border rounded px-2"
                            placeholder="C000001">

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Customer Name</label>

                        <input
                            class="col-span-2 h-8 border rounded px-2">

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Customer Type</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>Customer</option>
                            <option>Supplier</option>
                            <option>Both</option>

                        </select>

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Status</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>Active</option>
                            <option>Inactive</option>

                        </select>

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>TIN</label>

                        <input
                            class="col-span-2 h-8 border rounded px-2">

                    </div>

                </div>

                <!-- RIGHT -->

                <div class="col-span-6 space-y-3">

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Currency</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>PHP</option>

                        </select>

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Payment Terms</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>30 Days</option>

                        </select>

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Price List</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>Retail</option>

                        </select>

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Salesperson</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>Select</option>

                        </select>

                    </div>

                    <div class="grid grid-cols-3 items-center gap-3">

                        <label>Warehouse</label>

                        <select class="col-span-2 h-8 border rounded px-2">

                            <option>Main Warehouse</option>

                        </select>

                    </div>

                </div>

            </div>

            <!-- Tabs -->

            <div class="border-t">

                <nav class="flex bg-gray-100 border-b">

                    <button class="px-5 py-2 bg-white border-r font-semibold">
                        General
                    </button>

                    <button class="px-5 py-2 hover:bg-gray-50">
                        Contact
                    </button>

                    <button class="px-5 py-2 hover:bg-gray-50">
                        Address
                    </button>

                    <button class="px-5 py-2 hover:bg-gray-50">
                        Financial
                    </button>

                    <button class="px-5 py-2 hover:bg-gray-50">
                        Sales
                    </button>

                    <button class="px-5 py-2 hover:bg-gray-50">
                        Documents
                    </button>

                    <button class="px-5 py-2 hover:bg-gray-50">
                        Activity
                    </button>

                </nav>

            </div>

            <!-- Contact + Address -->

            <div class="grid grid-cols-12 gap-6 p-5">

                <!-- Contact -->

                <div class="col-span-6">

                    <div class="border rounded">

                        <div class="bg-gray-100 border-b px-3 py-2 font-semibold">
                            Contact Information
                        </div>

                        <div class="space-y-3 p-4">

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Contact Person</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Email</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Phone</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Mobile</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Website</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Address -->

                <div class="col-span-6">

                    <div class="border rounded">

                        <div class="bg-gray-100 border-b px-3 py-2 font-semibold">
                            Address Information
                        </div>

                        <div class="space-y-3 p-4">

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Country</label>

                                <select class="col-span-2 h-8 border rounded px-2">

                                    <option>Philippines</option>

                                </select>

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Province</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>City</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>ZIP Code</label>

                                <input class="col-span-2 h-8 border rounded px-2">

                            </div>

                            <div class="grid grid-cols-3 items-start gap-3">

                                <label class="pt-2">
                                    Address
                                </label>

                                <textarea
                                    rows="3"
                                    class="col-span-2 border rounded px-2 py-2"></textarea>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Financial -->

            <div class="grid grid-cols-12 gap-6 px-5 pb-5">

                <div class="col-span-6">

                    <div class="border rounded">

                        <div class="bg-gray-100 border-b px-3 py-2 font-semibold">
                            Credit Information
                        </div>

                        <div class="space-y-3 p-4">

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Credit Limit</label>

                                <input class="col-span-2 h-8 border rounded px-2 text-right">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Balance</label>

                                <input class="col-span-2 h-8 border rounded px-2 text-right">

                            </div>

                            <div class="grid grid-cols-3 items-center gap-3">

                                <label>Available Credit</label>

                                <input class="col-span-2 h-8 border rounded px-2 text-right bg-gray-50" readonly>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-span-6">

                    <div class="border rounded">

                        <div class="bg-gray-100 border-b px-3 py-2 font-semibold">
                            Options
                        </div>

                        <div class="space-y-3 p-4">

                            <label class="flex items-center gap-2">
                                <input type="checkbox">
                                Active Customer
                            </label>

                            <label class="flex items-center gap-2">
                                <input type="checkbox">
                                Tax Exempt
                            </label>

                            <label class="flex items-center gap-2">
                                <input type="checkbox">
                                Allow Credit
                            </label>

                            <label class="flex items-center gap-2">
                                <input type="checkbox">
                                Send Statements by Email
                            </label>

                            <label class="flex items-center gap-2">
                                <input type="checkbox">
                                Requires Purchase Order
                            </label>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>



                <!--  -->

            </div>
        </div>
    </div>
    
</x-app-layout>
