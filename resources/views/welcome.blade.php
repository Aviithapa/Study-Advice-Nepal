<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructions - Nepal Pharmacy Council Training</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center">

    <!-- Logo Section -->
    <div class="my-8">
        <a class="logo" href="/">
            <img class="max-w-full h-[150px] for-light" style="height: 150px;"
                src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage" />

        </a>
    </div>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12 w-full max-w-5xl px-4">
        <!-- Login Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
            <h2 class="text-xl font-bold mb-4">Login</h2>
            <p class="mb-6 text-center text-gray-600">Existing users can log in here.</p>
            <a href="{{ route('login') }}"
                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Go to Login
            </a>
        </div>

        <!-- Registration Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
            <h2 class="text-xl font-bold mb-4">Register</h2>
            <p class="mb-6 text-center text-gray-600">New users can create an account here.</p>
            <a href="{{ route('auth.register') }}"
                class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                Register Now
            </a>
        </div>
    </div>

    <!-- Instructions Section -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-5xl mb-12">
        <h2 class="text-2xl font-bold mb-6 text-center">Instructions</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Applicant Instructions -->
            <div>
                <h3 class="text-xl font-semibold mb-4">For Applicants</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Go to the registration page and fill in your details with a valid phone number and email.</li>
                    <li>An OTP code will be sent within 2 minutes. Wait until it arrives. If you don't receive it, click
                        the "Resend OTP" button (enabled after 2 minutes).</li>
                    <li>After entering the correct OTP, you will be redirected to your dashboard.</li>
                    <li>Click on the <strong>Training Form</strong> sidebar. You will see active trainings with an
                        <strong>Apply</strong> button.
                    </li>
                    <li>Fill all the required details carefully. If there is any mistake, you can edit the form until it
                        is approved.</li>
                </ol>
            </div>

            <!-- Expert Instructions -->
            <div>
                <h3 class="text-xl font-semibold mb-4">For Experts</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Go to the registration page and click on the <strong>Expert</strong> card to start registration.
                    </li>
                    <li>Fill in your details with a valid phone number and email. An OTP code will be sent within 2
                        minutes. Wait until it arrives. If you don't receive it, click the "Resend OTP" button (enabled
                        after 2 minutes).</li>
                    <li>After entering the correct OTP, you will be redirected to your expert dashboard.</li>
                    <li>Complete your expert profile including qualifications, experience, and key expertise.</li>
                    <li>Upload relevant documents such as CV and training materials.</li>
                    <li>Update your availability and preferred area of engagement.</li>
                    <li>Monitor applicant submissions and provide feedback or approvals as needed.</li>
                </ol>
            </div>
        </div>
        <div style="text-align: center; width: 100%; margin-top: 50px;">
            <p><strong>Bank Detail</strong></p>
            <p>Bank: NABIL Bank</p>
            <p>A/C Holder's Name: Nepal Pharmacy Council</p>
            <p>Account Number: 17301017500573</p>
        </div>
    </div>

</body>

</html>
