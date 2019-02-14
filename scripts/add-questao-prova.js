function addQuestaoProva() {
    Swal({
        title: 'Adicionar Questão',
        text: "Você tem certeza que deseja adicionar a(s) questão(ôes) selecionadas à rascunho?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ff5722',
        cancelButtonColor: '#9e9e9e',
        confirmButtonText: 'Adicionar!',
        cancelButtonText: 'Cancelar!',
        preConfirm: (login) => {
            return fetch(`//api.github.com/users/${login}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(response.statusText)
                    }
                    return response.json()
                })
                .catch(error => {
                    Swal.showValidationMessage(
                        `Request failed: ${error}`
                    )
                })
        }
    }).then((result) => {
        if (result.value) {
            Swal(
                'Adicionada(s)!',
                'Questão(ões) adicionada(s).',
                'Sucesso!'
            )
        }
    })
}