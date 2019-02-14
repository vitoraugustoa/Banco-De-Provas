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
					
      
      <!-- CONTAINER PARA VISUALIZAR QUESTÃO  -->
      <section class="mdl-shadow--2dp ">

       	<div class="mdl-grid conf-titulo-page">
          <a href="tela-minhas-questoes.php"> <span class="material-icons">undo</span> Questões/</a>
          <h5 class="mdl-cell mdl-cell--12-col ">Vizualizar Questoes</h5>
        </div>
        <hr />

          <div class="mdl-grid container-center">
            <div class="mdl-cell mdl-cell--5-col">
                <span class="text-black">TIPO DE QUESTÃO</span>
                <p>Aberta ou Fechada</p>
            </div>
            <div class="mdl-cell mdl-cell--5-col">
              <span class="text-black">MATÉRIA</span>
              <p>Materia ligada à questão</p>
          </div>
          </div> 

          <div class="mdl-grid container-center">
            <div class="mdl-cell mdl-cell--5-col">
                <span class="text-black">CURSO</span>
                <p>Curso ligado à questão</p>
            </div>
            <div class="mdl-cell mdl-cell--5-col">
              <span class="text-black">NIVEL DE DIFICULDADE</span>
              <p>Nivel de dificuldade da prova</p>
          </div>
          </div> 

          <div class="mdl-grid ">
            <div class=" mdl-cell mdl-cell--12-col container-center">
              <span class="text-black">TAGS LIGADAS À QUESTÃO</span>
             </div>

             <div class=" mdl-cell mdl-cell--12-col container-center">
              <p>
                <span class="mdl-chip">
                  <span class="mdl-chip__text">Tag 1</span>
              </span>
               <span class="mdl-chip">
                 <span class="mdl-chip__text">Tag 2</span>
               </span>
              </p>
              </div>
          </div>
       
          <div class="mdl-grid ">
            <div class=" mdl-cell mdl-cell--12-col container-center itens-center-aling">
              <span class="text-black">PERGUNTA</span>
              <p>Pergunta da questão</p>
            </div>
          </div>

          <div class="mdl-grid ">
            <div class=" mdl-cell mdl-cell--12-col container-center itens-center-aling ">
              <span class="text-black">RESPOSTA</span>
              <div class=" mdl-cell mdl-cell--12-col container-center">
              <p>Resposta da questão</p>
              </div>
            </div>
          </div>

          <!-- RESPOSTA PARA QUESTÃO FECHADA  -->

          <div class="mdl-grid ">
            <div class=" mdl-cell mdl-cell--12-col container-center itens-center-aling">
              <span class="text-black">RESPOSTA FECHADA</span>
              <p><span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--orange-900 mdl-color-text--white">A</span>
                <span class="mdl-chip__text">Alternativa Correta</span>
            </span></p>
            <p><span class="mdl-chip mdl-chip--contact">
              <span class="mdl-chip__contact mdl-color--grey mdl-color-text--white">B</span>
              <span class="mdl-chip__text">Alternativa</span>
          </span></p>
          <p><span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact  mdl-color--grey mdl-color-text--white">C</span>
            <span class="mdl-chip__text">Alternativa</span>
        </span></p>
        <p><span class="mdl-chip mdl-chip--contact">
          <span class="mdl-chip__contact mdl-color--grey mdl-color-text--white">D</span>
          <span class="mdl-chip__text">Alternativa</span>
      </span></p>
      <p><span class="mdl-chip mdl-chip--contact">
        <span class="mdl-chip__contact mdl-color--grey mdl-color-text--white">E</span>
        <span class="mdl-chip__text">Alternativa</span>
    </span></p>
            </div>
          </div>

          <div class="aling-content-right">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                EDITAR
               </button>

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                VOLTAR
               </button>
              </div>

      </section>
      <!--FIM CONTAINER PARA VISUALIZAR QUESTÃO  -->


       <!-- CONTAINER PARA EDITA QUESTÃO  -->

      <section class="">
       	<div class="mdl-grid conf-titulo-page">
          <a href="tela-minhas-questoes.php">Minhas Questões/</a>
          <h5 class="mdl-cell mdl-cell--12-col ">Editar Questoes</h5>
        </div>
        <hr />
						<section class=" mdl-shadow--2dp">

								<form action="" method="post">

						<div class="mdl-grid container-center">
								<div class="mdl-cell mdl-cell--5-col">
										<div class="mdl-textfield repositorio-questoes mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
												<input type="text" value="" class="mdl-textfield__input" id="tipo-questao" readonly>
												<input id="input-tipo-questao" type="hidden" onchange="alteraFormQuestoes(this.value)" value="" name="tipo-questao">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												<label for="tipo-questao" class="mdl-textfield__label text-black">TIPO DE QUESTÃO</label>
												<ul for="tipo-questao" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<li class="mdl-menu__item tipo-questoes" data-val="aberta">Aberta</li>
														<li class="mdl-menu__item tipo-questoes" data-val="fechada">Fechada</li>
												</ul>
										</div>
								</div>


								<div class="mdl-cell mdl-cell--5-col">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
												<input type="text" value="" class="mdl-textfield__input" id="materia" readonly>
												<input type="hidden" value="" name="materia">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												<label for="materia" class="mdl-textfield__label text-black">MATERIA</label>
												<ul for="materia" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<li class="mdl-menu__item" data-val="BY">Materia 1</li>
														<li class="mdl-menu__item" data-val="BR">Materia 2</li>
														<li class="mdl-menu__item" data-val="ES">Materia 3</li>
												</ul>
										</div>
								</div>

      </div>
    

						<div class="mdl-grid container-center">
										<div class="mdl-cell mdl-cell--5-col">
														<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
																<input type="text" value="" class="mdl-textfield__input" id="curso" readonly>
																<input type="hidden" value="" name="curso">
																<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
																<label for="curso" class="mdl-textfield__label text-black">CURSO</label>
																<ul for="curso" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
																		<li class="mdl-menu__item" data-val="BY">Sistemas de informação</li>
																		<li class="mdl-menu__item" data-val="BR">Administração</li>
																		<li class="mdl-menu__item" data-val="ES">Contabilidade</li>
																</ul>
														</div>
												</div>

								<div class="mdl-cell mdl-cell--5-col">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
												<input type="text" value="" class="mdl-textfield__input" id="dificuldade" readonly>
												<input type="hidden" value="" name="dificuldade">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												<label for="dificuldade" class="mdl-textfield__label text-black">NIVEL DE DIFICULDADE</label>
												<ul for="dificuldade" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<li class="mdl-menu__item" data-val="BY">Fácil</li>
														<li class="mdl-menu__item" data-val="BR">Intermediário</li>
														<li class="mdl-menu__item" data-val="ES">Difícil</li>
												</ul>
										</div>
								</div>

						</div>

						<div class="mdl-grid ">
										<div class=" mdl-cell mdl-cell--12-col container-center">
														<div class="mdl-textfield mdl-js-textfield">
																<textarea class="mdl-textfield__input" type="text" name="tags" rows="1" id="tags"></textarea>
																<label class="mdl-textfield__label text-black" for="tags">TAGS SEPARADAS POR VIRGULA</label>
														</div>
												</div>
						</div>
				</section>


						<div class="mdl-grid">
								<div id="container-questao-aberta" class="conf-text-area  mdl-cell mdl-cell--12-col">
												<h6>Pergunta:</h6>
										<div class=" mdl-cell mdl-cell--12-col container-center ">
																<div class="mdl-textfield mdl-js-textfield  mdl-cell-100">
																		<textarea class="mdl-textfield__input  mdl-cell-100" name="pergunta" type="text" rows="3" id="pergunta"></textarea>
																		<label class="mdl-textfield__label text-black" for="pergunta">DIGITE A PERGUNTA</label>
																</div>
														</div>

														<h6>Resposta:</h6>
														<div class=" mdl-cell mdl-cell--12-col container-center ">
																				<div class="mdl-textfield mdl-js-textfield  mdl-cell-100">
																						<textarea class="mdl-textfield__input  mdl-cell-100" name="resposta" type="text" rows="3" id="resposta"></textarea>
																						<label class="mdl-textfield__label text-black" for="resposta">DIGITE A RESPOSTA</label>
																				</div>
																		</div>

																		<div class="aling-content-right">
																		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
																						EDITAR
																					</button>

																		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
																						CANCELAR
																					</button>
																				</div>


								</div>


								<div id="container-questao-fechada" class="conf-text-area  mdl-cell mdl-cell--12-col">
												<h6>Pergunta:</h6>
												<div class=" mdl-cell mdl-cell--12-col container-center ">
																		<div class="mdl-textfield mdl-js-textfield  mdl-cell-100">
																				<textarea class="mdl-textfield__input  mdl-cell-100" name="pergunta-fechada" type="text" rows="3" id="pergunta-fechada"></textarea>
																				<label class="mdl-textfield__label text-black" for="pergunta-fechada">DIGITE A PERGUNTA</label>
																		</div>
																</div>

												<h6>Alternativas:</h6>
												<li class="mdl-list__item">
																<span class="mdl-list__item-secondary-action">
																				<label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opcao-a">
																					<input type="radio" id="opcao-a" value="" class="mdl-radio__button" name="alternativa-correta" />
																				</label>
																			</span>
																<span class="mdl-list__item-primary-content">
																				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
																								<input class="mdl-textfield__input" type="text" name="alternativa-a" id="alternativa-a">
																								<label class="mdl-textfield__label text-black" for="alternativa-a">Alternativa</label>
																							</div>
																</span>

															</li>

															<li class="mdl-list__item">
																		<span class="mdl-list__item-secondary-action">
																						<label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opcao-b">
																							<input type="radio" id="opcao-b" value="" class="mdl-radio__button" name="alternativa-correta" />
																						</label>
																					</span>
																		<span class="mdl-list__item-primary-content">
																						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
																										<input class="mdl-textfield__input" type="text" name="alternativa-b" id="alternativa-b">
																										<label class="mdl-textfield__label text-black" for="alternativa-b">Alternativa</label>
																									</div>
																		</span>

																	</li>


																	<li class="mdl-list__item">
																				<span class="mdl-list__item-secondary-action">
																								<label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opcao-c">
																									<input type="radio" id="opcao-c" value="" class="mdl-radio__button" name="alternativa-correta" />
																								</label>
																							</span>
																				<span class="mdl-list__item-primary-content">
																								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
																												<input class="mdl-textfield__input" type="text" name="alternativa-c" id="alternativa-c">
																												<label class="mdl-textfield__label text-black" for="alternativa-c">Alternativa</label>
																											</div>
																				</span>

																			</li>


																			<li class="mdl-list__item">
																						<span class="mdl-list__item-secondary-action">
																										<label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opcao-d">
																											<input type="radio" id="opcao-d" value="" class="mdl-radio__button" name="alternativa-correta" />
																										</label>
																									</span>
																						<span class="mdl-list__item-primary-content">
																										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
																														<input class="mdl-textfield__input" type="text" name="alternativa-d" id="alternativa-d">
																														<label class="mdl-textfield__label text-black" for="alternativa-d">Alternativa</label>
																													</div>
																						</span>

																					</li>


																					<li class="mdl-list__item">
																								<span class="mdl-list__item-secondary-action">
																												<label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opcao-e">
																													<input type="radio" id="opcao-e" value="" class="mdl-radio__button" name="alternativa-correta" />
																												</label>
																											</span>
																								<span class="mdl-list__item-primary-content">
																												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
																																<input class="mdl-textfield__input" type="text" name="alternativa-e" id="alternativa-e">
																																<label  class="mdl-textfield__label text-black"  for="alternativa-e">Alternativa</label>
																															</div>
																								</span>

																							</li>

																							<div class="aling-content-right">
																										<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
																														EDITAR
																													</button>

																										<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
																														CANCELAR
																													</button>
																												</div>

								</div>
						</div>


						</form>
     </section>
     <!-- FIM CONTAINER PARA EDITA QUESTÃO  -->

				</main>
		</div>
		<script src="../jQuery/jquery-3.3.1.min.js"></script>
		<script src="../scripts/control-subs-menus.js"></script>
		<script src="../Material-Desing-Lite/js/getmdl-select.min.js"></script>
		<script src="../scripts/scripts-uteis.js"></script>
</body>

</html