@extends('site')

@section('howToUse', 'active')


@section('conteudo')
    <section id="howToUse">
        <div class="container"><div class="row">
            <div class="col s12 ">
              <div class="card-panel  purple darken-2">
                <span class="white-text">
                  Tira-dúvidas
                </span>
              </div>
            </div>
          </div>
            <div class="row">
                <ul class="collapsible">
                    <li>
                      <div class="collapsible-header"><i class="material-icons ">help</i>Como funciona o site ?</div>
                      <div class="collapsible-body"><span>O dowinstaface é um site que permite que você possa baixar 
                        videos e imagens tanto do facebook como do instagram</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">help</i>Como faço para baixar uma imagem ou um video ?</div>
                      <div class="collapsible-body"><span></span>O site tem duas abas, a de video e a de imagem. Para baixar um video, basta
                      acessar a aba de videos e colar a URL do video no campo. A URL de video pode ser tanto do facebook como do instagram. 
                      Para baixar uma imagem, basta acessar a aba de imagens e colar a URL de imagem no campo. A URL de imagem pode ser tanto
                    do facebook como instagram</div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">help</i>De quais páginas eu posso baixar um video ou uma imagem ?</div>
                      <div class="collapsible-body"><span>Você pode baixar videos e imagens de qualquer pagina pública. Caso a imagem ou o video for de uma página
                      privada, você não conseguirá baixa-lo</span></div>
                    </li>
                  </ul>
            </div>
        </div>
    </section>
    
@endsection
