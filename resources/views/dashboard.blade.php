<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,500;1,900&display=swap"
          rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!--Font awesome-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!--hightcharts-->
    <script src="https://code.highcharts.com/highcharts.js"></script>

<style>
    body{
        font-family: "Montserrat", sans-serif;
    }
    #aside{
        background-color: #f13b3e;!important;
    }

    @media only screen and (min-width: 240px) and (max-width: 480px) {
        #box-messaggi {
            display: none;
        }
    }
    @media only screen and (min-width: 240px) and (max-width: 480px) {
        #box-staff {
            display: none;
        }
    }
    #icon{
        display: none;
    }
    @media only screen and (min-width: 240px) and (max-width: 480px) {
        #icon {
            display: block;
        }
    }
    @media only screen and (min-width: 240px) and (max-width: 480px) {
        .grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
        }
         #section{
             display: grid;
             grid-template-columns: repeat(1, 1fr);
         }
         #welcome{
             display: grid;
             grid-template-columns: repeat(1, 1fr);
             justify-items: end
         }
        #allenamenti{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
        }

    }

    .put-end{
        justify-content: end;
    }
    @media only screen and (min-width: 240px) and (max-width: 480px) {

    }



</style>
<body>
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div id="aside" class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Abbonamenti</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Calendario</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pagamenti</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Prenotazioni</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Prenotazioni</span>
                        <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Notifiche</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Pagamenti</span>
                    </a>
                </li>
                <li>
                    <a href="route{{ 'logout' }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div id="welcome" class="grid grid-cols-2">
            <div  class=" flex justify-content-start">
                <p class="text-2xl text-black font-bold">Welcome,  {{  Auth::user()->name  }}</p>
            </div>
            <div class="flex put-end" role="group">
                <div> <img class="w-10 h-10 rounded mr-3" src="/img/bell-icon.png" alt="Default avatar"></div>
                <div> <img class="w-10 h-10 rounded" src="/img/avatar.png" alt="Default avatar"></div>
            </div>

        </div>

        <div class="grid grid-cols-1 mb-6 mt-10">
            <table class="table p-4 bg-white rounded-lg shadow">
                <thead>
                <tr>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900 bg-red-600 ">
                        Orari
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap text-black font-bold bg-red-600">
                        Lunedi
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap text-gray-900 bg-red-600 font-bold">
                        Martedì
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap text-gray-900 bg-red-600 font-bold">
                        Mercoledì
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap text-gray-900 bg-red-600 font-bold">
                        Giovedì
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap text-gray-900 bg-red-600 font-bold">
                        Venerdì
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-gray-700">
                    <td class="border p-4 dark:border-dark-5 text-center">
                        8:15-9:00
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Funzionale</strong><br>
                        Marta
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Zumba</strong><br>
                        Louis
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Funzionale</strong><br>
                        Marta
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Zumba</strong><br>
                        Louis
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Funzionale</strong><br>
                        Marta
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="border p-4 dark:border-dark-5 text-center">
                        9:30-10:15
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Yoga</strong><br>
                        Eric
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Yoga</strong><br>
                        Prouve
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="border p-4 dark:border-dark-5 text-center">
                        13:00-13:45
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Spinning</strong><br>
                        julia
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Spinning</strong><br>
                        julia
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Spinning</strong><br>
                        julia
                    </td>

                </tr>
                <tr class="text-gray-700">
                    <td class="border p-4 dark:border-dark-5 text-center">
                        15:00-16:30
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Kick-box</strong><br>
                        Igor
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Crossfit</strong><br>
                        Louth
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Crossfit</strong><br>
                        Louth
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Kick-boxing</strong><br>
                        Igor
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="border p-4 dark:border-dark-5 text-center">
                        17:00-18:30
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Fitness combat</strong><br>
                        Igor
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Pump</strong><br>
                        Louth
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Fitness combat</strong><br>
                        Igor
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Crossfit</strong><br>
                        Louth
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Pump</strong><br>
                        Louth
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="border p-4 dark:border-dark-5 text-center">
                        19:00-20:15
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Kick-boxing</strong><br>
                        Igor
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Zumba</strong><br>
                        Anastasia
                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">

                    </td>
                    <td class="border p-4 dark:border-dark-5 text-center">
                        <strong>Zumba</strong><br>
                        Anastasia
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="flex justify-center">
            <button type="button" class="text-gray-900 w-96  mt-5 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-md px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Prenota la tua lezione!</button>
            </div>
        </div>
        <div class="p-4 ">
            <div id="allenamenti" class="grid grid-cols-4 gap-3 mb-4">

                <div id="box-staff" class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-20 h-20 mb-2 text-gray-500 dark:text-gray-400 justify-center" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" src="img/staff.png" >
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Staff</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-red-600 hover:underline">
                        guarda i nostri trainer
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
                    </a>
                </div>

                <div id="box-staff" class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-20 h-20 mb-2 text-gray-500 dark:text-gray-400 justify-center" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" src="img/account.png" >
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Account</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-red-600 hover:underline">
                        dettagli acoount
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
                    </a>
                </div>
                <div id="box-staff" class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-20 h-20 mb-2 text-gray-500 dark:text-gray-400 justify-center" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" src="img/faq.png" >
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Faq</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-red-600 hover:underline">
                        vai alle faq
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
                    </a>
                </div>

            <div id="box-stato-allenamenti" class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="img/chart.png" alt="product image" />
                </a>
                <div class="px-5 pb-5 ">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Stato allenamenti</h5>
                    </a>
                </div>
            </div>
            </div>
            </div>
            <div id="section" class="grid grid-cols-2 gap-4 mb-4 justify-items-center mt-5">
                <div class="w-full  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Prossime attività</h5>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-10 rounded-full" src="img/doumbell.png" alt="Bonnie image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Zumba
                                        </p>

                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">25/02/23</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-10 rounded-full" src="img/doumbell.png" alt="Michael image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Funzionale
                                        </p>

                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">27/02/23</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-10 rounded-full" src="img/doumbell.png" alt="Lana image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Pilates
                                        </p>

                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">28/02/23</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Abbonamenti</h5>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="img/membership.png" alt="Bonnie image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            GOLD
                                        </p>

                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">$399</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="img/membership.png" alt="Michael image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            SILVER
                                        </p>

                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">$499</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="img/membership.png" alt="Lana image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            BRONZE
                                        </p>

                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">$299</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>


        <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </footer>

</body>
</html>
