@extends('questoes.main_questoes')

@section('content')

    <form id="form1" action="{{ route('questao02') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="q1" name="nro_questao">
        <div class="questao" id="q1" style="width: 78vw; height: 430">
            <div class="numero">01</div>
            <div class="pergunta">Marque os cinco sentimentos ou situações que fazem
                você se sentir mais motivado no trabalho:</div><br>
            <div class="alternativas fundoGradient" style="width: 270px;float: left;">
                <label class="linha">
                    <div class="letra">a</div> Trabalhar sozinho <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> b </div> Expressar minhas ideias <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> c </div> Estar no controle da situação <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> d </div> Provocar mudanças <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> e </div> Ouvir e falar <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> f </div> Criar os recursos visuais <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> g </div> Prestar atenção aos detalhes <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> h </div> Aspectos técnicos <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> i </div> Trabalhar com pessoas <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> j </div> Usar números, estatísticas <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 320px;float: right;">
                <label class="linha">
                    <div class="letra"> k </div> Oportunidades para fazer experiências <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> l </div> Planejar <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> m </div> Trabalhar com comunicação <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> n </div> Fazer algo funcionar <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> o </div> Arriscar-me <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> p </div> Analisar dados <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> q </div> Lidar com o futuro <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> r </div> Produzir e organizar <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> s </div> Fazer parte de uma equipe <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> t </div> Fazer as coisas sempre no prazo previsto <input type="checkbox" name="check_per_1[]">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="cinza proximo" id="p1">
                <a id="btn-quest1" style="cursor: pointer;">
                    <span class="azul">Próximo </span>
                    <img class="arrow" src="{{ asset("images/righta.svg") }}">
                    <img class="arrow" src="{{ asset("images/righta.svg") }}">
                </a>
            </div>
        </div>
    </form>

@endsection

@section('js_page')
    <script>
        limitarCheckboxes(1, 5);

        document.getElementById('p1').onclick = () => {
            if (validateCheckboxs(1, 5)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection





