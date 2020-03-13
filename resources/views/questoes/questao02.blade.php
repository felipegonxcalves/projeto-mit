@extends('questoes.main_questoes')

@section('content')
    <form action="">
        <div class="questao" id="q2" style="width: 80vw;height: 430;">
            <div class="numero">02</div>
            <div class="pergunta"> Quando aprendo, gosto de...(Marque cinco alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 260px;float: left;">
                <label class="linha">
                    <div class="letra"> a </div> Avaliar e testar teorias<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> b </div> Obter e quantificar fatos<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> c </div> Ouvir e compartilhar ideias<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> d </div> Usar minha imaginação<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> e </div> Aplicar análise e lógica<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> f </div> Ambiente bem informal<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> g </div> Verificar meu entendimento<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> h </div> Fazer experiências práticas<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> i </div> Pensar sobre as ideias<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> j </div> Confiar nas instituições<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 330px;float: right;">
                <label class="linha">
                    <div class="letra"> k </div> Receber informações passo a passo<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> l </div> Tomar iniciativas<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> m </div> Elaborar teorias<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> n </div> Envolvimento emocional<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> o </div> Trabalhar em grupo <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> p </div> Orientações claras<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> q </div> Fazer descobertas<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> r </div> Criticar<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> s </div> Perceber logo o quadro geral (objetivo final)<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> t </div> Adquirir habilidade pela prática<input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p2">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="iframe_data/righta2.svg">
                    <img class="arrow" src="iframe_data/righta2.svg">
                </a>
            </div>
        </div>
    </form>
@endsection

@section('js_page')
    <script>
        limitarCheckboxes(2, 5);
    </script>
@endsection






