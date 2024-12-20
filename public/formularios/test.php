<!-- component -->
<!-- This is an example component -->

<div>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <body>
        <main class=" ">


            <div class="mb-5"  >
                <label
                    for="claveFiscal"
                    class="mb-3 block text-base font-medium text-[#07074D]">
                    <div class="group text-start flex relative hover:text-red-600 cursor-pointer transition-colors items-center">
                        Clave Fiscal
                        <span class="ml-2 text-red-500"> ! </span>
                        <span class=" group-hover:opacity-100 transition-opacity bg-blue-300 p-4 text-sm text-gray-800 rounded-md absolute  left-1/3   
                                     -translate-x-1/3 translate-y-full opacity-0 m-4 mx-auto">
                            <span class="uppercase text-bold">importante: </span>
                            <p>
                                Si no tenes tu clave fiscal, podes obtenerla desde tu celular
                                con la app ARCA (ex Mi AFIP), Seleccionando la opción "Solicitar o recuperar tu clave fiscal"
                            </p>
                        </span>
                    </div>

                </label>


                <div class="flex w-full items-center space-x-2 rounded-md bg-gray-50 p-2" x-data="{ show: false }" x-clock>
                    <input :type="(show) ? 'text' : 'password'" placeholder="password"

                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                     outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="<?php echo !empty($postData['claveFiscal']) ? $postData['claveFiscal'] : ''; ?>"
                        autocomplete="off"

                        required
                        placeholder="Clave Fiscal" />

                    <button class="block" @click="show = !show">
                        <div x-show="show"><i class="fas fa-eye text-lg"></i></div>
                        <div x-show="!show"><i class="fas fa-eye-slash text-lg"></i></div>
                    </button>
                </div>
            </div>

        </main>
    </body>

    </html>