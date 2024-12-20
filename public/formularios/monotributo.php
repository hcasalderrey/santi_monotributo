<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="../logo.webp" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>MONOTRIBUTO.NET | Inscripción de Monotributo</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">
</head>

<body class="bg-gray-100">
    <header class="fixed top-0 z-10 items-center justify-center w-full mx-auto">
        <div class="container mx-auto">
            <nav
                class="relative px-4 py-4 flex justify-between items-center bg-white">
                <a
                    class="text-2xl font-bold leading-none items-center inline-flex"
                    href="/">
                    <img
                        src="../logo.webp"
                        class="h-12"
                        style="filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.8))"
                        alt="" />
                    <span class="text-gray-900 pl-5 uppercase">Monotributo</span>
                    <span class="text-blue-600">.net</span>
                </a>
                <div class="lg:hidden">
                    <button class="navbar-burger flex items-center text-blue-600 p-3">
                        <Hamburger />
                    </button>
                </div>
            </nav>
            <div class="navbar-menu relative z-50 hidden">
                <div
                    class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="/">
                            <img src="../logo.webp" class="h-12" alt="" />
                        </a>
                        <button class="navbar-close">
                            <Close />
                        </button>
                    </div>
                    <div></div>
                    <div class="mt-auto">
                        <div class="pt-6"></div>
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright © 2024</span>
                        </p>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <section class="container mx-auto mt-10 h-full">
        <!-- component -->
        <div class="flex items-center justify-center p-12 bg-slate-200">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full  ">
                <h1 class="flex justify-center items-center text-3xl font-bold mb-5">Inscripción al monotributo</h1>
                <br>

                <form method="post" action="mailMonotributo.php" enctype="multipart/form-data">

                    <div class="mb-5">
                        <label
                            for="name"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Nombre
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                            required
                            placeholder="Nombre" />
                    </div>


                    <div class="mb-5">
                        <label
                            for="apellido"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Apellido
                        </label>

                        <input
                            type="text"
                            name="apellido"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['apellido']) ? $postData['apellido'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                            required
                            placeholder="Apellido" />
                    </div>

                    <div class="mb-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <label
                                    for="Telefono"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Teléfono
                                </label>
                                <input
                                    type="number"
                                    maxlength="11"
                                    name="phone"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    value="<?php echo !empty($postData['phone']) ? $postData['phone'] : ''; ?>"
                                    autocomplete="off"
                                    maxlength="11"
                                    required
                                    placeholder="Teléfono de contacto"
                                    id="phone"
                                    onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />

                            </div>




                            <div>
                                <div class="flex">
                                    <label
                                        for="Mail"
                                        class="mb-3 mr-3 block text-base font-medium text-[#07074D]">
                                        Mail
                                    </label>
                                    <p id="result"></p>
                                </div>

                                <input
                                    type="text" id="email"
                                    name="Mail"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                            outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    value="<?php echo !empty($postData['Mail']) ? $postData['Mail'] : ''; ?>"
                                    autocomplete="off"
                                    autocapitalize="words"
                                    required
                                    placeholder="Correo electrónico de contacto" />
                            </div>
                            <script>
                                const validateEmail = (email) => {
                                    return email.match(
                                        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                                    );
                                };

                                const validate = () => {
                                    const $result = $('#result');
                                    const email = $('#email').val();
                                    $result.text('');

                                    if (!validateEmail(email)) {

                                        $result.text(email + ' no es un correo electrónico.');
                                        $result.css('color', 'red');
                                    }
                                    return false;
                                }

                                $('#email').on('input', validate);
                            </script>

                        </div>

                    </div>

                    <div class="mb-5">
                        <label
                            for="cuit"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            C.U.I.T.
                        </label>

                        <input
                            type="number"
                            maxlength="11"
                            name="cuit"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                              outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['cuit']) ? $postData['cuit'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                            required
                            placeholder="C.U.I.T."
                            id="cuit"
                            onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />


                    </div>



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
                    <input :type="(show) ? 'text' : 'password'"  
                        name="claveFiscal"
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


                    
                    <div class="mb-5">
                        <label
                            for="mesInscripcion"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            ¿A partir de que mes te inscribimos?
                        </label>

                        <input
                            type="month"
                            name="mesInscripcion"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                outline-none focus:border-[#6A64F1] focus:shadow-md"
                            min="<?php echo date('Y-m'); ?>"
                            value="<?php echo date('Y-m');
                                    !empty($postData['mesInscripcion']) ? $postData['mesInscripcion'] : ''; ?>"

                            required
                            placeholder="Mes de inscripción" />
                    </div>

                    <div class="mb-5">
                        <label
                            for="productosServicios"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            ¿Vendes productos o prestas servicios?
                        </label>
                        <input
                            type="text"
                            name="productosServicios"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                    outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['productosServicios']) ? $postData['productosServicios'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                            required
                            placeholder="¿Productos o Servicios?" />
                    </div>

                    <div class="mb-5">
                        <label
                            for="actividad"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            ¿Qué actividad desarrollás?
                        </label>
                        <input
                            type="text"
                            name="actividad"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                               outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['actividad']) ? $postData['actividad'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                            required
                            placeholder="Actividad desarrollada" />
                    </div>
                    <div class="mb-5">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                            <div>
                                <label
                                    for="DomicilioCalle"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Calle
                                </label>
                                <input
                                    type="text"
                                    name="DomicilioCalle"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                         outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    value="<?php echo !empty($postData['DomicilioCalle']) ? $postData['DomicilioCalle'] : ''; ?>"
                                    autocomplete="off"
                                    autocapitalize="words"
                                    required
                                    placeholder="Calle" />
                            </div>

                            <div>
                                <label
                                    for="DomicilioNumero"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Número
                                </label>
                                <input
                                    type="text"
                                    name="DomicilioNumero"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                            outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    value="<?php echo !empty($postData['DomicilioNumero']) ? $postData['DomicilioNumero'] : ''; ?>"
                                    autocomplete="off"
                                    autocapitalize="words"
                                    required
                                    placeholder="Número" />
                            </div>
                            <div>
                                <label
                                    for="DomicilioDto"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Piso/Departamento
                                </label>
                                <input
                                    type="text"
                                    name="DomicilioDto"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                        outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    value="<?php echo !empty($postData['DomicilioDto']) ? $postData['DomicilioDto'] : ''; ?>"
                                    autocomplete="off"
                                    autocapitalize="words"
                                     
                                    placeholder="Piso / Departamento" />

                            </div>
                        </div>

                    </div>
                    <div class="mb-5">
                        <label
                            for="DomicilioProvincia"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Provincia de residencia
                        </label>



                        <select id="DomicilioProvincia" name="DomicilioProvincia" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                outline-none focus:border-[#6A64F1] focus:shadow-md"
                            
                            autocomplete="off" value="<?php echo !empty($postData['DomicilioProvincia']) ? $postData['DomicilioProvincia'] : ''; ?>"
                            autocapitalize="words"
                            required placeholder="Provincia de residencia" />

                        <option selected>Seleccione una Opción</option>
                        <option value="901 - Ciudad de Buenos Aires">901 - Ciudad de Buenos Aires</option>
                        <option value="902 - Provincia de Buenos Aires">902 - Provincia de Buenos Aires</option>
                        <option value="903 - Catamarca">903 - Catamarca</option>
                        <option value="904 - Córdoba">904 - Córdoba</option>
                        <option value="905 - Corrientes">905 - Corrientes</option>
                        <option value="906 - Chaco">906 - Chaco</option>
                        <option value="907 - Chubut">907 - Chubut</option>
                        <option value="908 - Entre Ríos">908 - Entre Ríos</option>
                        <option value="909 - Formosa">909 - Formosa</option>
                        <option value="910 - Jujuy">910 - Jujuy</option>
                        <option value="911 - La Pampa">911 - La Pampa</option>
                        <option value="912 - La Rioja">912 - La Rioja</option>
                        <option value="913 - Mendoza">913 - Mendoza</option>
                        <option value="914 - Misiones">914 - Misiones</option>
                        <option value="915 - Neuquén">915 - Neuquén</option>
                        <option value="916 - Río Negro">916 - Río Negro</option>
                        <option value="917 - Salta">917 - Salta</option>
                        <option value="918 - San Juan">918 - San Juan</option>
                        <option value="919 - San Luis">919 - San Luis</option>
                        <option value="920 - Santa Cruz">920 - Santa Cruz</option>
                        <option value="921 - Santa Fe">921 - Santa Fe</option>
                        <option value="922 - Santiago del Estero">922 - Santiago del Estero</option>
                        <option value="923 - Tierra del Fuego">923 - Tierra del Fuego</option>
                        <option value="924 -Tucumán">924 -Tucumán</option>


                        </select>
                        <br><br>

                        <label
                            for="DomicilioProvinciaText"
                            class="DomicilioProvinciaLabel hidden  mt-2 text-base font-medium text-[#07074D]">
                            *enviar el numero de la partida inmobiliaria que figura dentro de dicho impuesto.
                        </label>


                        <input
                            type="text"
                            name="DomicilioProvinciaText"
                            class="DomicilioProvinciaText hidden w-full mt-2  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                    outline-none focus:border-[#6A64F1] focus:shadow-md "
                            value="<?php echo !empty($postData['DomicilioProvinciaText']) ? $postData['DomicilioProvinciaText'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                              maxlength="10"
                            placeholder="xxx-xxxxxx-x"
                            onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
 


                    </div>


                    <div class="mb-5">
                        <label
                            for="ingresosBrutos"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            INGRESOS BRUTOS ¿En qué provincias desarrollas tus actividades?
                        </label>



                        <select id="ingresosBrutos[]" name="ingresosBrutos[]" class="ingresosBrutos  w-full rounded-md border 
                                border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                 outline-none focus:border-[#6A64F1] focus:shadow-md
                                    select-none
                                  
                                 "
                            autocomplete="off"
                            autocapitalize="words" multiple
                            required placeholder="Ingresos Brutos" />


                        <option value="901 - Ciudad de Buenos Aires">901 - Ciudad de Buenos Aires</option>
                        <option value="902 - Provincia de Buenos Aires">902 - Provincia de Buenos Aires</option>
                        <option value="903 - Catamarca">903 - Catamarca</option>
                        <option value="904 - Córdoba">904 - Córdoba</option>
                        <option value="905 - Corrientes">905 - Corrientes</option>
                        <option value="906 - Chaco">906 - Chaco</option>
                        <option value="907 - Chubut">907 - Chubut</option>
                        <option value="908 - Entre Ríos">908 - Entre Ríos</option>
                        <option value="909 - Formosa">909 - Formosa</option>
                        <option value="910 - Jujuy">910 - Jujuy</option>
                        <option value="911 - La Pampa">911 - La Pampa</option>
                        <option value="912 - La Rioja">912 - La Rioja</option>
                        <option value="913 - Mendoza">913 - Mendoza</option>
                        <option value="914 - Misiones">914 - Misiones</option>
                        <option value="915 - Neuquén">915 - Neuquén</option>
                        <option value="916 - Río Negro">916 - Río Negro</option>
                        <option value="917 - Salta">917 - Salta</option>
                        <option value="918 - San Juan">918 - San Juan</option>
                        <option value="919 - San Luis">919 - San Luis</option>
                        <option value="920 - Santa Cruz">920 - Santa Cruz</option>
                        <option value="921 - Santa Fe">921 - Santa Fe</option>
                        <option value="922 - Santiago del Estero">922 - Santiago del Estero</option>
                        <option value="923 - Tierra del Fuego">923 - Tierra del Fuego</option>
                        <option value="924 -Tucumán">924 -Tucumán</option>

                        </select>

                    </div>

                    <div class="mb-5">
                        <label
                            for="facturacion"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            ¿Cuánto estimas que vas a facturar por mes?
                        </label>
                      
                        <input
                           type='number' 
           inputMode='decimal'
                            name="facturacion"
                            min="0.00" max="100000000.00" step="0.01"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
           outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['facturacion']) ? $postData['facturacion'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                            required
                              onFocus="this.type='number'; this.value=this.lastValue" 
           onBlur="this.type=''; this.lastValue=this.value; this.value=this.value==''?'':(+this.value).toLocaleString()"
                            placeholder="Facturación" />
                    </div>

                    <div class="mb-5">
                       
                        <label
                            for="obraSocial"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            ¿Tenes una obra social o prepaga? ¿Cuál? En el caso de no tener, le asignaremos una
relacionada con la actividad. O poner cual:
                        </label>
                        <input
                            type="text"
                            name="obraSocial"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['obraSocial']) ? $postData['obraSocial'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                             
                            placeholder="Obra Social" />
                        
                        
                    </div>

                    <div class="mb-5">

                    <label
                    for="obraSocial"
                    class="mb-3 block text-base font-medium text-[#07074D]">
                    <div class="group text-start flex relative hover:text-red-600 cursor-pointer transition-colors items-center">
                    Código RNOS  
                        <span class="mr-2 ml-2 text-red-500"> (opcional) </span>
                        <span class=" text-red-500"> ! </span>
                        <span class=" group-hover:opacity-100 transition-opacity bg-blue-300 p-4 text-sm text-gray-800 rounded-md absolute  left-1/3   
                                     -translate-x-1/3 translate-y-full opacity-0 m-4 mx-auto">
                            <span class="uppercase text-bold">importante: </span>
                            <p>
                            El RNOS, es el Registro Nacional de Obras Sociales.
                            </p>
                        </span>

                        </div>

                </label>


                       
                       
                        <input
                            type="text"
                            name="RNOS"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
                                outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo !empty($postData['RNOS']) ? $postData['RNOS'] : ''; ?>"
                            autocomplete="off"
                            autocapitalize="words"
                          
                            placeholder="Código RNOS" />
                        
                        
                    </div>


                    <div class="mb-5">
                        <label
                            for="foto4x4"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Foto tipo carnet de su rostro (preferentemente fondo blanco y buena luz)
                        </label>
                        <input
                            type="file"
                            name="foto4x4"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
           outline-none focus:border-[#6A64F1] focus:shadow-md"
                            accept="image/*"
                            max-size="2000"
                            required
                            placeholder="foto4x4" />
                    </div>
                    <div class="mb-5">
                        <label
                            for="fotoDNIfrente"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Foto DNI frente (legible)
                        </label>
                        <input
                            type="file"
                            name="fotoDNIfrente"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
           outline-none focus:border-[#6A64F1] focus:shadow-md"
                            accept="image/*"
                            max-size="2000"
                            required
                            placeholder="foto DNI frente" />
                    </div>

                    <div class="mb-5">
                        <label
                            for="fotoDNIreverso"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Foto DNI reverso (legible)
                        </label>
                        <input
                            type="file"
                            name="fotoDNIreverso"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
           outline-none focus:border-[#6A64F1] focus:shadow-md"
                            accept="image/*"
                            max-size="2000"
                            required
                            placeholder="foto DNI reverso" />
                    </div>

                    <div class="mb-5">
                        <label
                            for="comprobantePago"
                            class="mb-3 block text-base font-medium text-[#07074D]">
                            Comprobante de pago
                        </label>
                        <input
                            type="file"
                            name="comprobantePago"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280]
           outline-none focus:border-[#6A64F1] focus:shadow-md"
                            accept="image/*"
                            max-size="2000"
                            required
                            placeholder="comprobantePago" />
                    </div>

                    <div class="flex justify-center items-center align-middle">
                        <button
                            class="hover:shadow-form rounded-md bg-[#2196f3] py-3 px-8 text-base 
            font-semibold text-white outline-none">
                            Enviar
                        </button>
                    </div>
                </form>



                <h3 class="container py-4  p-6 text-center mt-4 font-bold text-2xl bg-white rounded-2xl">Destino de transferencia: Banco o Mercado pago</h3>
                <div
                    class="container py-4  grid grid-cols-1 md:grid-cols-2 gap-4 text-center items-center justify-center px-2 mx-auto">



                    <article
                        class="bg-white  min-h-40 p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer max-h-56 justify-center items-center content-center">

                        <div class="relative mb-4 rounded-2xl">
                            <p class="text-center uppercase font-bold">FEDERICO GASTON MARKER</p>
                            <p class="text-sm">CTA: 4019611-8 322-1</p>
                            <p class="text-sm">CBU: 00703220-30004019611818</p>
                            <p class="text-sm">ALIAS: Marker.Federico.Gali</p>
                            <p class="text-sm">CUIT/CUIL: 20-40536915-0</p>
                            <span class="text-sm">BANCO GALICIA</span>
                        </div>
                        </a>
                    </article>


                    <article
                        class="bg-white   min-h-40 p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer max-h-56 justify-center items-center content-center">

                        <div class="relative mb-4 rounded-2xl">
                            <p class="text-center uppercase font-bold">Santiago Ariel Signoretta</p>

                            <p class="text-sm">CVU: 0000003100089782170480</p>
                            <p class="text-sm">ALIAS: signoretta.mp</p>
                            <p class="text-sm">CUIT/CUIL: 20388303124</p>
                            <p class="text-sm">Mercado Pago</p>
                        </div>
                        </a>
                    </article>


                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white shadow mt-10">
        <div class="w-full max-w-screen-xl mx-auto md:py-2">
            <div
                class="sm:flex flex-col md:flex-row sm:items-center justify-center">
                <a
                    class="text-2xl font-bold leading-none items-center inline-flex"
                    href="/">
                    <img
                        src="../logo.webp"
                        class="h-12"
                        style="filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.8))"
                        alt="" />
                    <span class="text-gray-900 pl-5 uppercase">Monotributo</span>
                    <span class="text-blue-600">.net</span>
                </a>
            </div>
            <hr class="my-6 border-gray-700 lg:my-8" />
            <span class="block text-sm text-center dark:text-gray-500">
                <a
                    href="https://hcsoluciones.com.ar/"
                    class="text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-blue-600 rounded transform motion-safe:hover:scale-105">HC Soluciones</a>.
            </span>
        </div>
    </footer>
</body>


<script>
    let select = document.getElementById('DomicilioProvincia');

    const igText = document.querySelector(".DomicilioProvinciaText");

    const igLabel = document.querySelector(".DomicilioProvinciaLabel");
  

    select.addEventListener('change',
        function() {
            let selectedOption = this.options[select.selectedIndex];


            if (selectedOption.value.includes("902 - Provincia de Buenos Aires")) {
                igText.classList.remove("hidden");
                igLabel.classList.remove("hidden"); 
            } else {
                igText.classList.add("hidden");
                igLabel.classList.add("hidden"); 

            }

        });
</script>


<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>

<script>
    new MultiSelectTag('ingresosBrutos[]') // id
</script>

</html>