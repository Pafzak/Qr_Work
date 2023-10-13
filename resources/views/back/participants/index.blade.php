<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="participants"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Participants"></x-navbars.navs.auth>
        <!-- End Navbar -->


        {{--Debut-Modal d'ajout de participant--}}
   <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un participant</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('add-participant')}}" method="POST">
        @csrf
        <div class="modal-body">

            <div class="row">

                <div class="col">
                    <label for="nom" class="col-form-label" require="">Nom:</label>
                    <input type="text" name="nom" class="form-control" >
                    {{-- <span style="color: red">@error('nom'){{ $message }}@enderror</span> --}}
                </div>
                <div class="col">
                    <label for="prenom" class="col-form-label" require="">Prenom:</label>
                    <input type="text" name="prenom" class="form-control" >
                    {{-- <span style="color: red">@error('prenom'){{ $message }}@enderror</span> --}}
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <label for="tel" class="col-form-label" require="">Tel:</label>
                    <input type="text" name="tel" class="form-control" >
                </div>
                <div class="col">
                    <label for="email" class="col-form-label" require="">Email:</label>
                    <input type="text" name="email" class="form-control" >
                </div>
            </div>

                <div class="row">

                <div class="col">
                    <label for="fonction" class="col-form-label" require="">Fonction:</label>
                    <input type="text" name="fonction" class="form-control" >
                </div>
                <div class="col">
                    <label for="organisation" class="col-form-label" require="">Organisation:</label>
                    <input type="text" name="organisation" class="form-control" >
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label for="recipient-name" class="col-form-label" require="">Votre confirmation:</label>
                    <input type="text" name="reponse" class="form-control" >
                </div>

            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  {{--Fin-Modal d'ajout de participant--}}


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">

                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Liste des participants</h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un participant</button>
                        </div>




                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        {{-- <tr> --}}
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">NOM</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">PRENOM</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">EMAIL</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">TEL</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">FONCTION</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">ORGANISATION</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Votre Code</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($participants as $participant)
                                        <tr id="sid{{$participant->id}}">
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->id}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->nom}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->prenom}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->email}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->tel}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->fonction}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$participant->organisation}}</span>
                                            </td>
                                            {{-- <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"> {{$participant->reponse}}</span>
                                            </td> --}}



                                            <td class="align-middle">
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                {{-- </td>
                                                <td> --}}
                                                <button type="button" class="btn btn-danger btn-link"
                                                data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                            </td>
                                        {{-- </tr> --}}
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
