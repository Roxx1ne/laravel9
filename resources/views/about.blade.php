@extends('layouts.mainlayout')
@section('tittle', 'About')

@section('about')
<center>
    <div class="card" style="width: 18rem">
        <img src="img/profil.png" class="card-img-top" alt="profil" style="background-color: #D27685">
        <div class=" card-body" style="background-color: #9E4784">
            <h5 class="card-title" style="color:white">Naufal Aulio </h5>
            <p class="card-text" style="color:white">Saya adalah orang </p>
            <a href="#" class="btn btn-primary">Contact?</a>
        </div>
    </div>
</center>
<br>

<!-- Button trigger modal -->
<center>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Work Experience
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:black">Work Experience</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color:black">
                    Pengangguran
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Recruit Me</button>
                </div>
            </div>
        </div>
    </div>
</center>


@endsection