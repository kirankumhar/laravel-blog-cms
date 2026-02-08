<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-300">
    <header>
        <nav class="flex justify-between px-6 py-3 shadow item-center b-white">
            <h1 class="text-xl font-semibold text-gray-800"> Blog CMS</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button 
                    type="submit"    
                    class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-heading rounded-base group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class=" relative px-4 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded-base group-hover:bg-transparent group-hover:dark:bg-transparent leading-5">
                        Logout
                    </span>
                </button>
            </form>
        </nav>
    </header>
    <div class="flex min-h-screen">
        <aside class="w-64 bg-indigo-700 text-ehite">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-indigo-700">Dashboard</a>
        </aside>
    
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>