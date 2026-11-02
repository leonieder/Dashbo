<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script> //farbpalette
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ocean: {
                            50: '#f0f7f9',
                            100: '#e1eff3',
                            200: '#c3dfeb',
                            300: '#95c6db',
                            400: '#5ea5c4',
                            500: '#3c88a8',
                            600: '#2d6d8a',
                            700: '#285871',
                            800: '#254a5d',
                            900: '#1b3443',
                            950: '#0f202b',
                        },
                        slate: {
                            850: '#15202b',
                        }
                    }
                }
            }
        }
    </script>


</head>
<body class="bg-ocean-900 b text-white flex flex-col">
  <h1 class="text-3xl font-bold text-align-center mt-8 text-center">
    Willkommen USER
  </h1>
<!-- Navigation -->  
  <aside class=" flex flex-col fixed top-0 left-0 w-64 h-screen bg-ocean-800 text-white p-4">
    <h2 class="text-xl font-bold mb-4">Übersicht</h2>
    <ul>
      <li><a href="startseite.php" class="block py-2 px-4 hover:bg-ocean-700 hover:rounded-xl">Startseite</a></li>
      <li><a href="verlauf.php" class="block py-2 px-4 hover:bg-ocean-700 hover:rounded-xl">Verlauf</a></li>
      <li><a href="empfehlungen.php" class="block py-2 px-4 hover:bg-ocean-700 hover:rounded-xl">Empfehlungen</a></li>
    </ul>

  </aside>

  <h2 class="text-2xl font-bold mb-4 text-center">Startseite</h2>

  <div class="grid grid-cols-4 gap-1 grid-auto-rows ml-64 p-8">
    <div class=" rounded-md p-4 bg-ocean-600"> 
      <h3 class="text-xl font-bold mb-2 text-center">Aktuelle Gäste</h3>
    </div>

    <div class=" rounded-md p-4 bg-ocean-600">
      <h3 class="text-xl font-bold mb-2 text-center">aktuelle Hunde</h3>
    </div>

    <div class="rounded-md p-4 bg-ocean-600">
      <h3 class="text-xl font-bold mb-2 text-center">Durchschnittliche Aufenthaltsdauer</h3>
    </div>

    <div class="rounded-md p-4 bg-ocean-600">
      <h3 class="text-xl font-bold mb-2 text-center">Anzahl der Frühstücksbestellungen</h3>
    </div>
  </div>



</body>
</html>