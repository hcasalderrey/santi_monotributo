 
import emailjs from "@emailjs/browser";

export const Formulario = () => {
  const redirect = (url: any, asLink = true) =>
    asLink ? (window.location.href = url) : window.location.replace(url);
  const sendEmail = (e: any) => {
    e.preventDefault();

    emailjs
      .sendForm("service_dh7zv08", "template_7fcufaj", e.target, {
        publicKey: "ggwo5TsKq9HnM1gPt",
      })
      .then(
        () => {
          console.log("SUCCESS!");
          alert("Formulario enviado con exito!");
          redirect("https://estudiobernardo.netlify.app");
        },
        (error) => {
          console.log("FAILED...", error.text);
        }
      );
  };

  return ( 
    <form
      onSubmit={sendEmail}
      className="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-2/5 lg:px-6"
    >
      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px] text-gray-600">
          Nombre
        </label>
        <input
          type="text"
          required
          className="px-2 py-2 border w-full outline-none rounded-md"
          name="from_name"
          placeholder="Nombre"
        />
      </div>

      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px]  text-gray-600">
          Correo electrónico
        </label>
        <input 
          type="email"
          className="px-2 py-2 border w-full outline-none rounded-md"
          name="from_email"
          placeholder="Correo electrónico"
        />
      </div>

      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px] text-gray-600">
          Teléfono
        </label>
        <input
        required
          type="text"
          className="px-2 py-2 border w-full outline-none rounded-md"
          name="from_phone"
          placeholder="Teléfono"
        />
      </div>

      <div className="mb-3 w-full">
        <label className="block font-medium mb-[2px]  text-gray-600">
          Mensaje
        </label>
        <textarea
          className="px-2 py-2 border rounded-[5px] w-full outline-none"
          placeholder="Escriba su mensaje"
          name="message"
        ></textarea>
      </div>

      <button
        type="submit"
        value="Send"
        className="mb-6 inline-block w-full rounded bg-blue-600 px-6 py-2.5 font-medium uppercase leading-normal
         text-white hover:shadow-md hover:bg-blue-800"
      >
        enviar
      </button>
    </form>
  );
};
