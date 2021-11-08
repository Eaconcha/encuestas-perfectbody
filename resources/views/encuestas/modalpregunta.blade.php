<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>encuesta perfect body medical center</title>
</head>
<body>
    <!-- Button trigger modal -->
<button
class="px-8 py-3 mb-1 mr-1 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
type="button"
onclick="toggleModal('modal-example-large')"
>
Open large modal
</button>
<!-- Modal -->
<div
class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none focus:outline-none"
id="modal-example-large"
>
<div class="relative w-auto max-w-6xl mx-auto my-6">
  <!--content-->
  <div
    class="relative flex flex-col w-full bg-white border-0 rounded-lg shadow-lg outline-none focus:outline-none"
  >
    <!--header-->
    <div
      class="flex items-start justify-between p-5 border-b border-gray-200 border-solid rounded-t "
    >
      <h3 class="text-3xl font-semibold">Modal Title</h3>
      <button
        class="float-right p-1 ml-auto text-3xl font-semibold leading-none text-gray-300 bg-transparent border-0 outline-none focus:outline-none"
        onclick="toggleModal('modal-example-large')"
      >
        <span
          class="block w-6 h-6 text-2xl bg-transparent outline-none focus:outline-none"
        >
          <i class="fas fa-times"></i>
        </span>
      </button>
    </div>
    <!--body-->
    <div class="relative flex-auto p-6">
      <p class="my-4 text-lg leading-relaxed text-gray-500">
        <label class="mb-2 text-base tracking-wide text-black " for="plantilla">
            <div class="mx-4 bg-black">
            <p class="py-12 mx-8 text-center text-justify text-white">
                Estimado usuario</br>
                Para <strong class="color-blue-300">PERFECT BODY MEDICAL CENTER</strong>, sus opiniones y sugerencias son de valiosa
                importancia para la mejora continua. Permitanos conocer su percepción para la 
                toma de decisiones que nos permita prestarle cada vez, un mejor servicio.
                <br>
                <strong class="text-sm text-center text-green-100 sm:text-base">Por favor, marque la casilla segun su percepción del servicio recibido:</strong>
            </div>
              </p>
            </label>
<!--##############################################################################-->
            <form class="px-4" action="" method="POST">
            <div class="block mx-4 mt-4 text-center bg-red-900">
                <label class="text-lg text-white">¿Está usted satisfecho con nuestro servicio?</label>
                <div class="grid mb-2 text-justify text-white grid-rows-2/3">
                  <div class="grid content-center w-40 grid-rows-3 mx-auto text-lg ">
                    
                        <input type="radio" class="form-check-input" name="pregunta1" id="pregunta_n1" value="5">
                        <label class="form-check-label" for="pregunta_n1">Muy bueno</label>
                    
                    <label type="inline-flex items-center">
                      <input type="radio" class="form-radio" name="accountType2" value="4">
                      <span class="ml-2">Bueno</span>
                    </label>
                    <label type="inline-flex items-center">
                      <input type="radio" class="form-radio" name="accountType3" value="3">
                      <span class="ml-2">Regular</span>
                    </label>
                    <label type="inline-flex items-center">
                      <input type="radio" class="form-radio" name="accountType4" value="2">
                      <span class="ml-2">Malo</span>
                    </label>
                    <label type="inline-flex items-center">
                      <input type="radio" class="form-radio" name="accountType5" value="1">
                      <span class="ml-2">Muy malo</span>
                    </label>
                  </div>
                </div>
            
        <form class="px-4" action="" method="POST">
            <p class="text-center"><strong>Your rating:</strong></p>
    
            <div class="mb-2 form-check">
              <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
              <label class="form-check-label" for="radio3Example1">
                Very good
              </label>
            </div>
            <div class="mb-2 form-check">
              <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
              <label class="form-check-label" for="radio3Example2">
                Good
              </label>
            </div>
            <div class="mb-2 form-check">
              <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
              <label class="form-check-label" for="radio3Example3">
                Medicore
              </label>
            </div>
            <div class="mb-2 form-check">
              <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
              <label class="form-check-label" for="radio3Example4">
                Bad
              </label>
            </div>
            <div class="mb-2 form-check">
              <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
              <label class="form-check-label" for="radio3Example5">
                Very bad
              </label>
            </div>
    
            <p class="text-center"><strong>What could we improve?</strong></p>
    
            <!-- Message input -->
            <div class="mb-4 form-outline">
              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Your feedback</label>
            </div>
          </form>
        </div>
        <div class="card-footer text-end">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
      </p>
      
    </div>
    <!--footer-->
    <div
      class="flex items-center justify-end p-6 border-t border-gray-200 border-solid rounded-b "
    >
      <button
        class="px-6 py-2 mb-1 mr-1 text-sm font-bold text-purple-500 uppercase transition-all duration-150 ease-linear outline-none background-transparent focus:outline-none"
        type="button"
        onclick="toggleModal('modal-example-large')"
      >
        Close
      </button>
      <button
        class="px-4 py-2 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow outline-none active:bg-purple-600 hover:shadow-md focus:outline-none"
        type="button"
        onclick="toggleModal('modal-example-large')"
      >
        Save Changes
      </button>
    </div>
  </div>
</div>
</div>
<div
class="fixed inset-0 z-40 hidden bg-black opacity-25"
id="modal-example-large-backdrop"
></div>
<script type="text/javascript">
function toggleModal(modalID) {
  document.getElementById(modalID).classList.toggle("hidden");
  document
    .getElementById(modalID + "-backdrop")
    .classList.toggle("hidden");
  document.getElementById(modalID).classList.toggle("flex");
  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
}
</script>
</body>
</html> 