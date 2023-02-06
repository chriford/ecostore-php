<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include './include/navigation.php'; ?>
    <marquee behavior="left" direction="right">
        <h1 class="mt-1">Welcome to Ecostore</h1>
    </marquee>

    <div class="bg-blue-50 md:flex align-center justify-center pb-6 gap-3">
        <div class="bg-white bg-white mt-4 md:w-1/4 sm:w-1/12 max-w-sm rounded overflow-hidden shadow-lg shadow-gray-700 pb-0">
            <img class="w-full h-50" src="/assets/django-web-dev.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Django Eccomerce Website</div>
                <p class="text-gray-700 text-base">
                    This service contains a pre-build django ecommerce
                    feature implementations and will therefore require some updates either by the creator or customer if desires.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="w-full bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                    Contact seller
                </button>
                <div class="text-center">
                    <a class="text-blue" href="#">About service</a>
                </div>
            </div>
        </div>
        

        <div class="bg-white mt-4 md:w-1/4 sm:w-1/12 max-w-sm rounded overflow-hidden shadow-lg shadow-gray-700 pb-0">
            <img class="w-full h-50" src="/assets/react-web-dev.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">React Eccomerce Website</div>
                <p class="text-gray-700 text-base">
                    This service contains a pre-build react ecommerce
                    feature implementations and will therefore require some updates either by the creator or customer if desires.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="w-full bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                    Contact seller
                </button>
                <div class="text-center">
                    <a class="text-blue" href="#">About service</a>
                </div>
            </div>
        </div>

        <div class="bg-white mt-4 w-full md:w-1/4 sm:w-1/12 max-w-sm rounded overflow-hidden shadow-lg shadow-gray-700 pb-0">
            <img class="w-full h-50" src="/assets/flask-web-dev.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Flask Eccomerce Website</div>
                <p class="text-gray-700 text-base">
                    This service contains a pre-build flask ecommerce
                    feature implementations and will therefore require some updates either by the creator or customer if desires.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="w-full bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                    Contact seller
                </button>
                <div class="text-center">
                    <a class="text-blue" href="#">About service</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>