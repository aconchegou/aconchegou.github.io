<section id="filter">
    
    <!--<div id="selected-filters"></div>-->
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2023/07/Icones-63.svg">
                <h4>Tipo</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <select id="filter-type" name="filter-type">
                <option value="">Selecione o tipo do imovel</option>
                <option value="apartamento">Apartamento</option>
                <option value="casa">Casa</option>
            </select>
        </div>
    </div>
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2023/07/Icones-52.svg">
                <h4>Cidade</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <select id="filter-city" name="filter-city">
                <option value="">Selecione a Cidade</option>
                <option value="osasco">Osasco</option>
                <option value="barueri">Barueri</option>
                <option value="santana-do-parnaiba">Santana do Parnaíba</option>
                <option value="sao-paulo">São Paulo</option>
                <option value="cotia">Cotia</option>
                <option value="carapicuiba">Carapicuíba</option>
            </select>
        </div>
    </div>
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2023/01/Icones-56.svg">
                <h4>Metragem</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <div class="d-flex flex-column flex-wrap">
                <div>
                    <lable>Min</lable>
                    <input type="text" class="filter-footage" id="filter-footage-min" name="filter-footage-min" value="">
                </div>
                <div>
                    <lable>Max</lable>
                    <input type="text" class="filter-footage" id="filter-footage-max" name="filter-footage-max" value="">
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2023/01/Icones-54.svg">
                <h4>Quartos</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <select id="filter-bedrooms" name="filter-bedrooms" >
                <option value="">Selecione os Quartos</option>
                <option value="1-quarto">1 Quarto</option>
                <option value="2-quartos">2 Quartos</option>
                <option value="3-quartos">3 Quartos</option>
                <option value="4-quartos">4 Quartos</option>
                <option value="5-quartos">5 Quartos</option>
                <option value="+6-quartos">+6 Quartos</option>
                <option value="studio">Studio</option>
            </select>
            <!--<input type="text" id="filter-bedrooms" name="filter-bedrooms" value="" palceholder="Digite a quantidade Quartos">-->
        </div>
    </div>
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2023/01/Icones-57.svg">
                <h4>Vagas</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <!--<input type="text" id="filter-vacancies" name="filter-vacancies" value="" palceholder="Digite a quantidade Vagas">-->
            <select id="filter-vacancies" name="filter-vacancies" >
                <option value="">Selecione as Vagas</option>
                <option value="0-vagas">Nenhuma Vaga</option>
                <option value="1-vaga">1 Vaga</option>
                <option value="2-vagas">2 Vagas</option>
                <option value="3-vagas">3 Vagas</option>
                <option value="4-vagas">4 Vagas</option>
                <option value="5-vagas">5 Vagas</option>
                <option value="+6-vagas">+6 Vagas</option>
            </select>
        </div>
    </div>
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2023/07/Icones-55.svg">
                <h4>Investimentos</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <!--<input type="text" id="filter-investments" name="filter-investments" value="" palceholder="Digite o valor do Investimento">-->
            <div class="d-flex flex-column flex-wrap">
                <div>
                    <lable>Min</lable>
                    <input type="text" class="filter-investments" id="filter-investments-min" name="filter-footage-min" value="">
                </div>
                <div>
                    <lable>Max</lable>
                    <input type="text" class="filter-investments" id="filter-investments-max" name="filter-footage-max" value="">
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="/wp-content/uploads/2024/03/construcao-1.png">
                <h4>Construtora</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        <div class="dropdown-input">
            <!--<input type="text" id="filter-investments" name="filter-investments" value="" palceholder="Digite o valor do Investimento">-->
            <div class="d-flex flex-column flex-wrap">
                <select id="filter-company" name="filter-type">
                    <option value="">Selecione a construtora</option>
                    <option value="ARBORE">ARBORE</option>
                    <option value="ARQOS">ARQOS</option>
                    <option value="BACABA">BACABA</option>
                    <option value="BP8">BP8</option>
                    <option value="CANVAS-ENGENHARIA">CANVAS ENGENHARIA</option>
                    <option value="CASA-8-CONSTRUTORA">CASA 8 CONSTRUTORA</option>
                    <option value="CIPEL">CIPEL</option>
                    <option value="CNL">CNL</option>
                    <option value="CONCEL">CONCEL</option>
                    <option value="CONSTRUTORA-JL">CONSTRUTORA JL</option>
                    <option value="CONSTRUTORA-TENDA">CONSTRUTORA TENDA</option>
                    <option value="CR-INCORP">CR INCORP</option>
                    <option value="CURY-CONSTRUTORA">CURY CONSTRUTORA</option>
                    <option value="CYRELA">CYRELA</option>
                    <option value="DANPRIS">DANPRIS</option>
                    <option value="DIRECIONAL">DIRECIONAL</option>
                    <option value="DUBAI">DUBAI</option>
                    <option value="EKKO-GROUP">EKKO GROUP</option>
                    <option value="EVEN">EVEN</option>
                    <option value="EZTEC">EZTEC</option>
                    <option value="FAAL">FAAL</option>
                    <option value="FACE-HOME">FACE HOME</option>
                    <option value="FRONT-EMPREENDIMENTOS">FRONT EMPREENDIMENTOS</option>
                    <option value="GAFISA">GAFISA</option>
                    <option value="GER-CASA">GER CASA</option>
                    <option value="GNR-ENGENHARIA">GNR ENGENHARIA</option>
                    <option value="GRUPO-DEVEK">GRUPO DEVEK</option>
                    <option value="GRUPO-NOVOLAR">GRUPO NOVOLAR</option>
                    <option value="GRUPO-PLAENGE">GRUPO PLAENGE</option>
                    <option value="GRUPO-SALDANHA">GRUPO SALDANHA</option>
                    <option value="HELBOR">HELBOR</option>
                    <option value="HM-ENGENHARIA">HM ENGENHARIA</option>
                    <option value="HM-ENGENHARIA">HM ENGENHARIA</option>
                    <option value="JMF">JMF</option>
                    <option value="LACOTISSE">LACOTISSE</option>
                    <option value="MENDES-SALGE-ENGENHARIA">MENDES SALGE ENGENHARIA</option>
                    <option value="METACONS">METACONS</option>
                    <option value="MODENA">MODENA</option>
                    <option value="MPD-ENGENHARIA">MPD ENGENHARIA</option>
                    <option value="NLS">NLS</option>
                    <option value="P4-ENGENHARIA">P4 ENGENHARIA</option>
                    <option value="PACAEMBU">PACAEMBU</option>
                    <option value="PROXX">PROXX</option>
                    <option value="QUATTRO">QUATTRO</option>
                    <option value="RE9">RE9</option>
                    <option value="RSF">RSF</option>
                    <option value="RZK-EMPREENDIMENTOS">RZK EMPREENDIMENTOS</option>
                    <option value="SPITALLETI">SPITALLETI</option>
                    <option value="TECNOFORT">TECNOFORT</option>
                    <option value="TECNOFORTE">TECNOFORTE</option>
                    <option value="TEGRA">TEGRA</option>
                    <option value="ZAFIR-CONSTRUTORA">ZAFIR CONSTRUTORA</option>
                    <option value="ZATS">ZATS</option>
                    <option value="ECON-CONSTRUTORA-E-INCORPORADORA">ECON CONSTRUTORA E INCORPORADORA</option>
                    <option value="LIVING-CONSTRUTORA">LIVING CONSTRUTORA</option>
                    <option value="ENGELUX">ENGELUX</option>
                    <option value="BENX-BUENO-NETTO">BENX - BUENO NETTO</option>
                    <option value="SINDONA">SINDONA</option>
                </select>

            </div>
        </div>
    </div>
    
       <div>
        <div class="dropdown-filter">
            <div class="filter-name">
                <img src="https://aconchegou.com/wp-content/uploads/2024/04/docs-1.png">
                <h4>Data de entrega</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
        
        <div class="dropdown-input">
            <div class="d-flex flex-column flex-wrap">
                <input type="month" id="filter-datadeentrega" name="filter-datadeentrega">
            </div>
        </div>
    </div>
    
    <!--<div>-->
    <!--    <div class="dropdown-filter">-->
    <!--        <div class="filter-name">-->
    <!--            <img src="/wp-content/uploads/2023/01/Icones-36.svg">-->
    <!--            <h4>Entrega</h4>-->
    <!--        </div>-->
    <!--        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg
    <!--    </div>-->
    <!--    <div class="dropdown-input">-->
    <!--        <input type="text" id="filter-delivery" name="filter-delivery" value="" palceholder="Digite a quantidade Entrega">-->
    <!--    </div>-->
    <!--</div>-->
    
    <p id="clear">Limpar filtro</p>
    
</section>



