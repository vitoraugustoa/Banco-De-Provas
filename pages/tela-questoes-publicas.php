<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banco de Provas - Minhas Questões</title>
    <?php require_once('/default-pages/head-default.php'); ?>
    <link rel="stylesheet" href="../Material-Desing-Lite/css/getmdl-select.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-questoes.css" />

</head>

<body class="mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header ">
        <?php require_once('/default-pages/config-header.php');
      require_once('/default-pages/config-menu.php') ?>
        <main class="mdl-layout__content padding-layout">
            <div class="mdl-grid conf-titulo-page">
                <h5 class="mdl-cell mdl-cell--12-col">Questões Publicas</h5>
            </div>
            <hr />
            <div class="mdl-grid container-center">
                <div class="mdl-cell mdl-cell--12-col conf-abrir-filtro">
                    <label class="teste mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect" onclick="toggleContainers(this.element)" for="icon-toggle-2">
                <input type="checkbox" id="icon-toggle-2" class="mdl-icon-toggle__input">
                <i id="btn-filter" class="mdl-icon-toggle__label material-icons icon-media" >filter_list</i> 
                <div class="mdl-tooltip" data-mdl-for="btn-filter">
                            Filtar Questões
                        </div>
              </label>
                </div>
            </div>

            <form action="" method="post">
                <!-- Buscar questões -->

                <div class="container-filtrar mdl-grid mdl-shadow--2dp invisivel margin-top container-center">
                    <div class="mdl-cell mdl-cell--4-col">
                        <div class="mdl-textfield mdl-js-textfield">
                            <textarea class="mdl-textfield__input" type="text" rows="1" id="sample5"></textarea>
                            <label class="mdl-textfield__label text-black" for="sample5">TAGS SEPARADAS POR VIRGULA</label>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                            <input type="text" value="" class="mdl-textfield__input" id="sample2" readonly>
                            <input type="hidden" value="" name="sample2">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            <label for="sample2" class="mdl-textfield__label text-black">FILTRAR POR MATERIA</label>
                            <ul for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item" data-val="BY">Belarus</li>
                                <li class="mdl-menu__item" data-val="BR">Brazil</li>
                                <li class="mdl-menu__item" data-val="ES">Estonia</li>
                                <li class="mdl-menu__item" data-val="FI">Finland</li>
                                <li class="mdl-menu__item" data-val="FR">France</li>
                                <li class="mdl-menu__item" data-val="DE">Germany</li>
                                <li class="mdl-menu__item" data-val="PL">Poland</li>
                                <li class="mdl-menu__item" data-val="RU">Russia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                            <input type="text" value="" class="mdl-textfield__input" id="sample3" readonly>
                            <input type="hidden" value="" name="sample3">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            <label for="sample3" class="mdl-textfield__label text-black">FILTRAR POR CURSO</label>
                            <ul for="sample3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item" data-val="BY">Belarus</li>
                                <li class="mdl-menu__item" data-val="BR">Brazil</li>
                                <li class="mdl-menu__item" data-val="ES">Estonia</li>
                                <li class="mdl-menu__item" data-val="FI">Finland</li>
                                <li class="mdl-menu__item" data-val="FR">France</li>
                                <li class="mdl-menu__item" data-val="DE">Germany</li>
                                <li class="mdl-menu__item" data-val="PL">Poland</li>
                                <li class="mdl-menu__item" data-val="RU">Russia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col conf-btn-filtrar">
                            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored">
                    <strong> Filtrar</strong>
                  </button>
                        </div>
                    </div>
                </div>
            </form>

            <form action="" method="post">
                <!-- Adicionar questão ao rasconho-->

                <div class="mdl-grid margin-top">
                    <div id="btn-adm" class=" btn-adm-aling ">

                        <button id="btn-add-prova" class="invisivel mdl-button mdl-js-button mdl-button--fab btn-adm-conf mdl-button--mini-fab mdl-button--green">
                          <i class="material-icons">note_add</i>
                        </button>
                        <div class="mdl-tooltip" data-mdl-for="btn-add-prova">
                            Adicionar Questões à prova
                        </div>




                    </div>
                    <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
                        <thead>
                            <tr>
                                <th class="clumn-small">
                                    <label id="check-todos" class="mdl-checkbox check mdl-js-checkbox  mdl-js-ripple-effect" for="checkbox-master">
                                <input type="checkbox" id="checkbox-master" class="mdl-checkbox__input"  />
                              </label>
                                </th>
                                <th class="mdl-data-table__cell--non-numeric">Questões </th>
                                <th class="clumn-small">
                                    Tipo de questão
                                </th>
                                <th class="clumn-small">Nivel de dificuldade</th>

                                <th class="clumn-small">
                                    Tags
                                </th>
                                <th class="clumn-small">
                                    Ver mais
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-check"><label class="mdl-checkbox check check-all mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-1">
                                <input type="checkbox" id="list-checkbox-1" class="mdl-checkbox__input"  />
                              </label></td>

                                <td class="mdl-data-table__cell--non-numeric">
                                    <p>Acrylic (Transparent)</p>
                                </td>
                                <td>
                                    <p class="text-center">Tipo de questão</p>
                                </td>
                                <td>
                                    <p class="text-center">Facil</p>
                                </td>
                                <td>
                                    <p class="text-center">Tags</p>
                                </td>
                                <td>
                                    <p class="text-center mb-0">
                                        <button type="button" id="questao-1" class="mdl-button mdl-js-button mdl-button--icon">
                              <i class="material-icons">more_vert</i>
                            </button>

                                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="questao-1">
                                            <li><a class="link-btn mdl-menu__item" href="tela-vizualiza-edita-questao.php" >Ver</a></li>
                                            <li><a class="link-btn mdl-menu__item" href="#" class="link-btn">Excluir</a></li>
                                        </ul>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="mdl-checkbox check check-all mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-2">
                                <input type="checkbox" id="list-checkbox-2" class="mdl-checkbox__input"  />
                              </label></td>


                                <td class="mdl-data-table__cell--non-numeric">
                                    <p>Plywood (Birch)</p>
                                </td>
                                <td>
                                    <p class="text-center">Tipo de questão</p>
                                </td>
                                <td>
                                    <p class="text-center">Dificil</p>
                                </td>
                                <td>
                                    <p class="text-center">Tags</p>
                                </td>
                                <td>
                                    <p class="text-center mb-0">
                                        <button type="button" id="questao-2" class="mdl-button mdl-js-button mdl-button--icon">
                          <i class="material-icons">more_vert</i>
                        </button>

                                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="questao-2">
                                            <li><a class="link-btn mdl-menu__item" href="tela-vizualiza-edita-questao.php">Ver</a></li>
                                            <li><a class="link-btn mdl-menu__item" href="#" class="link-btn">Excluir</a></li>
                                        </ul>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="mdl-checkbox check check-all mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-3">
                                <input type="checkbox" id="list-checkbox-3" class="mdl-checkbox__input" />
                              </label></p>
                                </td>

                                <td class="mdl-data-table__cell--non-numeric">
                                    <p>Laminate (Gold on Blue)</p>
                                </td>
                                <td>
                                    <p class="text-center">Tipo de questão</p>
                                </td>
                                <td>
                                    <p class="text-center">Medio</p>
                                </td>
                                <td>
                                    <p class="text-center">Tags</p>
                                </td>
                                <td>
                                    <p class="text-center mb-0">
                                        <button  type="button" id="questao-3" class="mdl-button mdl-js-button mdl-button--icon">
                              <i class="material-icons">more_vert</i>
                            </button>

                                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="questao-3">
                                            <li><a  href="tela-vizualiza-edita-questao.php" class="link-btn mdl-menu__item">Ver</a></li>
                                            <li><a  href="#" class="link-btn mdl-menu__item">Excluir</a></li>
                                        </ul>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </main>
    </div>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
    <script src="../scripts/control-subs-menus.js"></script>
    <script src="../Material-Desing-Lite/js/getmdl-select.min.js"></script>
    <script src="../scripts/scripts-control-containers.js"></script>
    <script src="../scripts/check-box-control.js"></script>
    <script src="../scripts/add-questao-prova.js"></script>
</body>

</html>