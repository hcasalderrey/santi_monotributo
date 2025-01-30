<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="MONOTRIBUTO.NET, es una página de trámites y asesoramiento impositivo, en la cual vas a poder realizarlos de manera segura."
    />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@monotributo.net" />
    <meta name="twitter:creator" content="@monotributo.net" />
    <meta
      name="twitter:title"
      content="MONOTRIBUTO.NET | Te ayudamos con ARCA (ex AFIP)!"
    />
    <meta
      name="twitter:description"
      content="MONOTRIBUTO.NET, es una página de trámites y asesoramiento impositivo, en la cual vas a poder realizarlos de manera segura."
    />
    <meta name="twitter:image" content="/logo.jpg" />
    <meta name="og:image" content="/logo.jpg" />
    <meta name="og:title" content="MONOTRIBUTO.NET | Te ayudamos con ARCA (ex AFIP)!" />
    <meta
      name="og:description"
      content="MONOTRIBUTO.NET, es una página de trámites y asesoramiento impositivo, en la cual vas a poder realizarlos de manera segura."
    />
    <meta name="og:url" content="https://monotributo.net" />
    <meta name="og:site_name" content="monotributo.net" />
    <meta name="og:type" content="website" />
    <meta name="og:locale" content="es_AR" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="view-transitions" content="same-origin" />
    <title>MONOTRIBUTO.NET | BACKOFFICE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative text-black">
    <div
      class="absolute inset-0 -z-10 bottom-0 left-0 right-0 top-0 md:bg-[radial-gradient(circle_500px_at_90%_200px,#79b2f8,transparent)] bg-[radial-gradient(circle_250px_at_90%_200px,#79b2f8,transparent)]"
    ></div>
    <header
      class="fixed top-0 z-10 items-center justify-center w-full mx-auto"
      data-astro-transition-persist="astro-bjtkwc3c-1"
    >
      <div class="container mx-auto">
      <nav class="relative px-6 py-6 flex justify-between items-center
     bg-[#3f6b9c]  rounded-3xl rounded-t-none shadow-2xl shadow-gray-100 drop-shadow-xl">
      <a class="text-base  md:text-xl   lg:text-2xl  font-bold leading-none items-center inline-flex" href="/">
        <img src="./images/logo.avif" class="h-20" style="filter: drop-shadow(0 0 0.5px rgba(0,0,0,0.8));" alt="">
        <!--<span class="text-gray-900 pl-5 uppercase">Monotributo</span>
        <span class="text-accent">.net</span>-->
        

      </a>
           
        </nav>
        
      </div>
    </header>
    <main id="main-content" class="container mx-auto">
      <main class="px-4">
        <section
          class="section py-16 md:py-36 w-full mx-auto container lg:max-w-full md:max-w-2xl"
        >
          <div class="flex flex-row  justify-center items-center">
            <h1 class="text-5xl text-center font-semibold">
              Ingreso de Valores para los formularios
            </h1>
          </div>
          <div class="flex flex-row min-h-96 justify-center items-center">
            <form action="guardar.php" method="POST"
                            enctype="multipart/form-data">

                            <div class="mb-5">
                                <label
                                    for="tipo"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Tipo de formulario
                                </label>

                                <select name="tipo" id="tipo"
                                placeholder="Eligir el valor"
                                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                >
                                <!--<option value="">Eligir el valor</option>-->
                                <option value="monotributo">Monotributo</option>
                                <option value="responsableinscripto">Responsable Inscripto</option>
                               
                                </select>

 
                                   
                            </div>


                            

                            <div class="mb-5">
                                <label
                                    for="image"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Valor
                                </label>
                                <input type="number" name="valor" id="valor"
                                     
                                    placeholder="valor"
                                    min="0"
                                    class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white 
                                    py-3 px-6 text-base font-medium text-[#6B7280] outline-none 
                                    focus:border-[#6A64F1] focus:shadow-md" />



                            </div>


                            <div class="items-center align-middle justify-center w-full">
                                <input class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 
                                text-center text-base font-semibold text-white  " type="submit" value="Guardar">
                            </div>
                        </form>



          </div>
        </section>
        <div
          class="absolute inset-0 -z-10 bottom-0 left-0 right-0 top-1/2 bg-[radial-gradient(circle_170px_at_0%_200px,#79b2f8,transparent)]"
        ></div>
        <div
          class="absolute inset-0 -z-10 bottom-0 left-0 right-0 top-3/4 bg-[radial-gradient(circle_170px_at_80%_200px,#79b2f8,transparent)]"
        ></div>
      </main>
    </main>
  
    
  </body>
</html>