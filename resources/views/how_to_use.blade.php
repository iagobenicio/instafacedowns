@extends('site')

@section('howToUse', 'active')


@section('conteudo')
    <section id="howToUse">
        <div class="container"><div class="row">
            <div class="col s12 ">
              <div class="card-panel  purple darken-2">
                <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>
          </div>
            <div class="row">
                <ul class="collapsible">
                    <li>
                      <div class="collapsible-header"><i class="material-icons ">help</i>First</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">help</i>Second</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">help</i>Third</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                  </ul>
            </div>
        </div>
    </section>
    
@endsection
