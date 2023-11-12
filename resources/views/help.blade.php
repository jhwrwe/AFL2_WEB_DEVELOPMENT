@extends('layouts.template')
@section('layout_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .faq-content {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-semibold mb-8">Help Page</h1>
        <div class="faq bg-white p-4 rounded mb-4 cursor-pointer" onclick="toggleFAQ(1)">
            <div class="flex justify-between items-center">
                <span class="text-lg">Q1: What is this website about?</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="faqIcon1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div class="faq-content" id="faq1">A1: This website provides information on various topics.</div>
        </div>

        <div class="faq bg-white p-4 rounded mb-4 cursor-pointer" onclick="toggleFAQ(2)">
            <div class="flex justify-between items-center">
                <span class="text-lg">Q2: How do I contact support?</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="faqIcon2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div class="faq-content" id="faq2">A2: You can contact our support team at support@example.com.</div>
        </div>

        <div class="faq bg-white p-4 rounded mb-4 cursor-pointer" onclick="toggleFAQ(3)">
            <div class="flex justify-between items-center">
                <span class="text-lg">Q3: Is there a mobile app available?</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="faqIcon3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div class="faq-content" id="faq3">A3: Yes, we have a mobile app available for download on iOS and Android.</div>
        </div>
    </div>

    <script>
        function toggleFAQ(faqNumber) {
            var faqContent = document.getElementById('faq' + faqNumber);
            var faqIcon = document.getElementById('faqIcon' + faqNumber);

            if (faqContent.style.display === 'none' || faqContent.style.display === '') {
                faqContent.style.display = 'block';
                faqIcon.classList.add("rotate-180");
            } else {
                faqContent.style.display = 'none';
                faqIcon.classList.remove("rotate-180");
            }
        }
    </script>
</body>
</html>

@endsection
