<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            100: '#374151',
                            200: '#1F2937',
                            300: '#111827',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-300 text-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        {{ $slot }}
    </div>
</body>