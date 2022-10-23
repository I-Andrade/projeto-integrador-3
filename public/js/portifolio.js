

class IdImagens {

    constructor() {
        this.id = 1;
        this.arrayIDs = [];


    }
    salvar() {
        let idImagem = this.lerDados();
        if (this.validaCampos(idImagem)) {
            this.adicionar(idImagem);
        }
        this.listaTabela();
        this.cancelar();

    }

    listaTabela() {
        let tbody = document.getElementById('tbody');
        tbody.innerText = '';


        for (let i = 0; i < this.arrayIDs.length; i++) {
            let tr = tbody.insertRow();
            let td_id = tr.insertCell();
            let td_idImagens = tr.insertCell();
            let td_acoesEdit = tr.insertCell();
            let td_acoesDel = tr.insertCell();

            td_id.innerHTML = this.arrayIDs[i].id;
            td_idImagens.innerHTML = this.arrayIDs[i].descImagens;

            td_id.classList.add('center');


            let imgEdit = document.createElement('i');
            imgEdit.classList.add('fas');
            imgEdit.classList.add('fa-edit');


            imgEdit.setAttribute("onclick", "idImagem.preparaEdicao(" + JSON.stringify(this.arrayIDs[i]) + ")");

            let imgDelete = document.createElement('i');
            imgDelete.classList.add('fas');
            imgDelete.classList.add('fa-trash');

            imgDelete.setAttribute("onclick", "idImagem.deletar(" + this.arrayIDs[i].id + ")");

            td_acoesEdit.appendChild(imgEdit);
            td_acoesDel.appendChild(imgDelete);
            console.log(this.arrayIDs);
        }

    }
    adicionar(idImagem) {
        this.arrayIDs.push(idImagem);
        this.id++;
        console.log(this.arrayIDs);
    }

    preparaEdicao(dados) {
        document.getElementById('descImagens').value = dados.descImagens;
        document.getElementById('btn1').innerText = "Atualizar";
    }

    lerDados() {
        let idImagem = {}
        idImagem.id = this.id;
        idImagem.descImagens = document.getElementById('descImagens').value;

        return idImagem;
    }

    validaCampos(idImagem) {
        let msg = '';

        if (idImagem.descImagens == '') {
            msg += '- Informe o Id da Imagem \n';
        }


        if (msg != '') {
            alert(msg);
            return false
        }
        return true;


    }

    cancelar() {
        document.getElementById('descImagens').value = '';


    }
    deletar(id) {
        if (confirm('Deseja realmente deletar a imagem do ID ' + id)) {
            let tbody = document.getElementById('tbody');

            for (let i = 0; i < this.arrayIDs.length; i++) {
                if (this.arrayIDs[i].id == id) {
                    this.arrayIDs.splice(i, 1);
                    tbody.deleteRow(i);
                }
            }

            console.log(this.arrayIDs);
        }



    }


}


var idImagem = new IdImagens();

