@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center backcolor">
            <div class="text-center">
                <h1>NOUS CONTACTER</h1>
                <hr>
                <p>Rejoignez le serveur discord afin de passer votre entretien vocal !</p>
                <a href="https://discord.gg/t6zYHY"><img class=" imgdiscord col-md-8"
                                                         src="https://logodownload.org/wp-content/uploads/2017/11/discord-logo.png"
                                                         alt=""></a>
                <p>Où bien passer par ce formulaire si vous avez diverses questions à nous poser avant l'entretien</p>
                <div>
                    <section id="contact">
                        <div class="contact-section">
                            <div class="container">
                                <form action="{{ route('contact') }}" class="row">
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <label for="exampleInputUsername">Votre pseudo</label>
                                            <input type="text" class="form-control" id="" placeholder=" Entrer votre Pseudo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Adresse Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Entrer votre Email">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description"> Message</label>
                                            <textarea class="form-control" id="description" placeholder="Entrer votre message"></textarea>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-default submit">
                                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
