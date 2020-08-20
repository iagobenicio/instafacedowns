@extends('site')

@section('help', 'active')


@section('conteudo')
    <section id="help">
        <div class="container">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field mb-2" >
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Name</label>
                        </div>

                        <div class="input-field mb-2">
                            <input id="first_name" type="email" class="validate">
                            <label for="first_name">Email</label>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 mb-2">
                                <input type="text" class="validate">
                                <label>Subject</label>
                            </div>
                        </div>

                        <div class="row">
                        <div class="input-field col s12 mb-2">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Textarea</label>
                        </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 mb-2">
                                <button class="btn waves-effect waves-light  purple darken-2" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                  </button>
                            </div>
                            </div>
                    </div>
                  
                    
                </form>

            </div>
        </div>
    </section>
@endsection
