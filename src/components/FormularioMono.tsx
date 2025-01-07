 
import emailjs from "@emailjs/browser";

const SERVICE_ID='service_15fhl87'
const TEMPLATE_ID='template_bntagac'
const PUBLIC_KEY='xIFzN1G0WWC1g37GV'



export const FormularioMono = () => {
 
  const redirect = (url: any, asLink = true) =>
    asLink ? (window.location.href = url) : window.location.replace(url);

  const handleInputNameChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const value = e.target.value;
    const error = document.getElementById("cname_error");
    if (!/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*$/.test(value)) {
    //  console.error("Solo se permiten letras y espacios");
      error?.classList.remove("hidden");
    } else {
      error?.classList.add("hidden");
    }
  };

  const handleInputLastNameChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const value = e.target.value;
    const error = document.getElementById("clastname_error");
    if (!/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*$/.test(value)) {
    //  console.error("Solo se permiten letras y espacios");
      error?.classList.remove("hidden");
    } else {
      error?.classList.add("hidden");
    }
  };


  const handleInputPhoneChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const value = e.target.value;
    const error = document.getElementById("cphone_error");
    if (!/^[0-9]*$/.test(value)) {
    //  console.error("Solo se permiten letras y espacios");
      error?.classList.remove("hidden");
    } else {
      error?.classList.add("hidden");
    }
  };

  const handleInputDNIChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const value = e.target.value;
    const error = document.getElementById("cdni_error");
    if (!/^[0-9]*$/.test(value)) {
    //  console.error("Solo se permiten letras y espacios");
      error?.classList.remove("hidden");
    } else {
      error?.classList.add("hidden");
    }
  };

  const handleInputMailChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const value = e.target.value;
    const error = document.getElementById("cmail_error");
    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value)) {
        error?.classList.remove("hidden");
    } else {
      error?.classList.add("hidden");
    }
  };

  const sendEmail = (e: any) => {
    e.preventDefault();
    
    emailjs
      .sendForm(SERVICE_ID, TEMPLATE_ID, e.target, {
        publicKey: PUBLIC_KEY,
      })
      .then(
        () => {
          console.log("SUCCESS!");
          alert("Formulario enviado con exito!");
          redirect("https://monotributo.net");
        },
        (error) => {
          console.log("FAILED...", error.text);
          redirect("https://monotributo.net");
        }
      );
};
    
  return ( 
    <>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    
    <form
      onSubmit={sendEmail}
      className="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-2/5 lg:px-6"
    >
      <div className="mb-3 w-full">
        <label   className="block font-medium mb-[2px] text-gray-600">
          Nombre (*)
        </label>
        <label  id="cname_error" className="hidden italic mb-[2px] text-red-600 transition duration-700  ease-in-out ">
        Solo se permiten letras sin espacios, ni números
        </label>
        <input
          type="text"
          id="cname" 
          className="px-2 py-2  focus:ring-2 w-full outline-none rounded-xl"
          name="from_name"
          placeholder="Nombre" 
          onInput={handleInputNameChange}
        />
      </div>


      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px] text-gray-600">
          Apellido (*)
        </label>
        <label  id="clastname_error" className="hidden italic mb-[2px] text-red-600 transition duration-700  ease-in-out ">
        Solo se permiten letras sin espacios, ni números
        </label>
        <input
          type="text"
          id="clastname"
          required
          className="px-2 py-2  focus:ring-2 w-full outline-none rounded-xl"
          name="from_lastname"
          placeholder="Apellido"   
          onInput={handleInputLastNameChange}
        />
      </div>

      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px] text-gray-600">
          DNI (*)
        </label>
        <label  id="cdni_error" className="hidden italic mb-[2px] text-red-600 transition duration-700  ease-in-out ">
        Solo se permiten números
        </label>
        <input
        required
          type="text"
          id="cdni"
          className="px-2 py-2  focus:ring-2 w-full outline-none rounded-xl"
          name="from_DNI"
          placeholder="DNI"
          onInput={handleInputDNIChange}
        //  pattern="\d{1,5}" maxLength={10}
        />
      </div>


      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px]  text-gray-600">
          Correo electrónico
        </label>
        <label  id="cmail_error" className="hidden italic mb-[2px] text-red-600 transition duration-700  ease-in-out ">
        Solo se permiten caracteres de correo electrónico
        </label>
        <input 
          type="email"
          id="cmail"
          className="px-2 py-2  focus:ring-2 w-full outline-none rounded-xl"
          name="from_email"
          placeholder="Correo electrónico"
          onInput={handleInputMailChange}
        /> 
      </div>

      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px] text-gray-600">
          Teléfono (*)
        </label>
        <label  id="cphone_error" className="hidden italic mb-[2px] text-red-600 transition duration-700  ease-in-out ">
        Solo se permiten números
        </label>
        <input
        required
          type="text"
          id="cphone"
          className="px-2 py-2  focus:ring-2 w-full outline-none rounded-xl"
          name="from_phone"
          placeholder="Teléfono"
          onInput={handleInputPhoneChange}
        //  pattern="\d{1,5}" maxLength={10}
        />
      </div>

      
     
      <button
        type="submit"
        value="Send"
        className="mb-6 inline-block w-full rounded-3xl   px-6 py-2.5 font-medium uppercase leading-relaxed
         text-white hover:shadow-md bg-accentligth hover:bg-accent "
      >
        enviar
      </button>
    </form>
    </>
  );
};
