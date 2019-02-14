<div class="mdl-layout__drawer">
  <span class="mdl-layout-title">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <a href="tela-principal.php"><img src="../src/imagens/logo-pitagoras.png" class="logo-pequena" alt="Logo Faculdade Pitágoras"></a>
      </div>
    </div>
  </span>
  <nav class="mdl-navigation">
    <a id="questoes" class="mdl-navigation__link" onclick="ControlarSubMenus(this.id)" href="#"><b>Questões </b><i style="display: none" class="material-icons">keyboard_arrow_up</i><i class="material-icons">keyboard_arrow_down</i></a>
    <nav class="invisivel">
      <a class="mdl-navigation__link" href="tela-minhas-questoes.php" id="teste"><i class="material-icons links-submenu">line_style</i>Minhas
        Questões</a>
      <a class="mdl-navigation__link" href="tela-questoes-publicas.php"><i class="material-icons links-submenu">contacts</i>Questões Públicas </a>
    </nav>

    <a id="provas" class="mdl-navigation__link" onclick="ControlarSubMenus(this.id)" href="#"><b>Provas</b><i style="display: none" class="material-icons">keyboard_arrow_up</i><i class="material-icons">keyboard_arrow_down</i></a>
    <nav class="invisivel">
      <a class="mdl-navigation__link" href="tela-minhas-provas.php"><i class="material-icons links-submenu">library_books</i>Minhas Provas</a>
      <a class="mdl-navigation__link" href=""><i class="material-icons links-submenu">library_add</i>Provas Públicas</a>
    </nav>
    <a class="mdl-navigation__link" href=""><b>Relatório</b></a>
    <a class="mdl-navigation__link" href=""><b>Administração</b></a>
  </nav>
</div>