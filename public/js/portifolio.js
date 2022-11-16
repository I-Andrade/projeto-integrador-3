class IdImagens {

    constructor() {
        this.id = 1;
        this.arrayIDs = [];
        this.funcao = 'inserir';
        this.id_atualizar = 0;
    }

    salvar() {
        let idImagem = this.lerDados();
        if (this.validaCampos(idImagem)) {
            if (this.funcao == 'inserir') {
                this.adicionar(idImagem);
            } else {
                console.log(this.id_atualizar,this.arrayIDs);
                this.arrayIDs[this.id_atualizar-1].descImagens = document.getElementById('descImagens').value;
            }
        }
        this.listarInput();
        this.listaTabela();
        if (this.funcao == 'atualizar') {
            document.getElementById('btn1').innerText = "Adicionar";
            this.funcao = 'inserir';
            this.id_atualizar = 0;
        } 
        
        this.cancelar();
    }

    listarInput() {
       let inputsImages = document.getElementById('inputsImages');
       inputsImages.innerText = '';      
       
       for (let i = 0; i < this.arrayIDs.length; i++) {
            if(!this.arrayIDs[i].ativo) continue;
            let imgInput = document.createElement('input');
            imgInput.name = 'imagens[]';
            imgInput.type = 'text';
            imgInput.id = 'imagem-' + this.arrayIDs[i].id;
            imgInput.value = this.arrayIDs[i].descImagens;
            inputsImages.appendChild(imgInput);
       } 

    }

    listaTabela() {
        let tbody = document.getElementById('tbody');
        tbody.innerText = '';
        let numeracaoItem = 1;

        for (let i = 0; i < this.arrayIDs.length; i++) {
            if(!this.arrayIDs[i].ativo) continue;

            let tr = tbody.insertRow();
            let td_id = tr.insertCell();
            let td_idImagens = tr.insertCell();
            let td_acoesEdit = tr.insertCell();
            let td_acoesDel = tr.insertCell();

            // td_id.innerHTML = this.arrayIDs[i].id;
            td_id.innerHTML = numeracaoItem;
            td_idImagens.innerHTML = this.arrayIDs[i].descImagens;

            td_id.classList.add('center');


            let imgEdit = document.createElement('i');
            imgEdit.classList.add('fas');
            imgEdit.classList.add('fa-edit');
            imgEdit.setAttribute("onclick", "idImagem.preparaEdicao(" + JSON.stringify(this.arrayIDs[i]) + ")");

            let imgDelete = document.createElement('i');
            imgDelete.classList.add('fas');
            imgDelete.classList.add('fa-trash');
            imgDelete.setAttribute("onclick", "idImagem.deletar(" + JSON.stringify(this.arrayIDs[i]) + ")");

            td_acoesEdit.appendChild(imgEdit);
            td_acoesDel.appendChild(imgDelete);
            numeracaoItem++;
        }
 

    }

    adicionar(idImagem) {
        this.arrayIDs.push(idImagem);
        this.id++;
    }

    preparaEdicao(dados) {
        this.funcao = 'atualizar';
        this.id_atualizar = dados.id;
        document.getElementById('descImagens').value = dados.descImagens;
        document.getElementById('btn1').innerText = "Atualizar";
    }

    lerDados() {
        let idImagem = {}
        idImagem.id = this.id;
        idImagem.descImagens = document.getElementById('descImagens').value;
        idImagem.ativo = true;

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

    deletar(dados) {
        if (confirm('Deseja realmente deletar a imagem: ' + dados.descImagens)) {
            // let tbody = document.getElementById('tbody');

            // document.getElementById('imagem-' + this.arrayIDs[i].id).remove;
            // for (let i = 0; i < this.arrayIDs.length; i++) {
            //     if (this.arrayIDs[i].id == id) {
            //         this.arrayIDs.splice(i, 1);
            //         tbody.deleteRow(i);
            //     }
            // }

            this.arrayIDs[dados.id-1].ativo = false;

            this.listarInput();
            this.listaTabela();



            console.log(this.arrayIDs);
        }



    }


}


var idImagem = new IdImagens();

