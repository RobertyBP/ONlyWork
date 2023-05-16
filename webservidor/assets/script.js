
function verMaisDescricao(){
    var elBtnDescricao = document.getElementById('btnDescricaoCadastro');
    if(elBtnDescricao.value == 'Ver mais..'){
        var elTexto = document.getElementById('txtDescricaoCadastro');
        var linhas = elTexto.textContent.length / 83;

        linhas = Math.ceil(linhas+1);

        var tamanhoContainerDescricao = linhas * 15;
        var tamanhoContainer = tamanhoContainerDescricao - 130;
        var stringStyle = tamanhoContainerDescricao.toString() + 'px';

        stringStyle = 'height: ' + stringStyle;

        var elContainerDescricao = document.getElementById('containerdescricao');
        elContainerDescricao.setAttribute('style', stringStyle);
        var tamanhoContainerPrincipal = 500 + tamanhoContainer;
        var tamanhoFormularios = (-350) - tamanhoContainer; 
        tamanhoContainer = 350 + tamanhoContainer;
        tamanhoContainer = 'height: ' + tamanhoContainer + 'px';
        tamanhoContainerPrincipal = 'height: ' + tamanhoContainerPrincipal + 'px';

        var elFormulariosCadastro = document.getElementById('formulariosnovotrabalho');
        elFormulariosCadastro.setAttribute('style', 'top: ' + tamanhoFormularios.toString() + 'px');

        var elNovoTrabalho = document.getElementById('novotrabalho');
        elNovoTrabalho.setAttribute('style', tamanhoContainer);

        var elContainerPrincipal = document.getElementById('container');
        elContainerPrincipal.setAttribute('style', tamanhoContainerPrincipal);


        elBtnDescricao.setAttribute('value', '..Ver menos');
    }else if(elBtnDescricao.value == '..Ver menos'){

        var elContainerDescricao = document.getElementById('containerdescricao');
        elContainerDescricao.setAttribute('style', 'height: 130px');

        var elNovoTrabalho = document.getElementById('novotrabalho');
        elNovoTrabalho.setAttribute('style', 'height: 350px');

        elBtnDescricao.setAttribute('value', 'Ver mais..');

        var elContainerPrincipal = document.getElementById('container');
        elContainerPrincipal.setAttribute('style', 'height: 500px');

        var elFormulariosCadastro = document.getElementById('formulariosnovotrabalho');
        elFormulariosCadastro.setAttribute('style', 'top: -350px');
    }
    
}

function onChangeCadastro(input){
    if(input.name == 'tituloFormularios'){
        var el = document.getElementById("tituloTrabalho");
        el.textContent = input.value.toString();
    }else if(input.name == 'descricaoFormularios'){
        var el = document.getElementById("txtDescricaoCadastro");
        el.textContent = input.value.toString();
    }else if(input.name == 'requisitosFormularios'){
        var el = document.getElementById("requisitosTrabalho");
        el.textContent = 'Requisitos: ' + input.value.toString();
    }else if(input.name == 'valorPagamentoFormularios'){
        var el = document.getElementById("valorPagamentoTrabalho");
        el.textContent = 'Pagamento: ' + 'R$ ' + input.value.toString();
    }else if(input.name == 'dataEntregaFormularios'){
        var el = document.getElementById("dataEntregaTrabalho");
        el.textContent = 'Data entrega: ' + input.value.toString();
    }
    /*autorTrabalho valorPagamentoTrabalho requisitosTrabalho btnDescricaoCadastro 
    txtDescricaoCadastro tituloTrabalho dataPublicacaoTrabalho propostasTrabalho 
    dataEntregaTrabalho*/
}

function isNumberDuasCasas(evt, obj) {
    var keyCode = evt.keyCode;
    var result;
    if (keyCode > 31 && (keyCode < 48 || keyCode > 57)) {
        return false;
    }else{
        
        result = formatNumberDuasCasas(obj, evt.key);
        return result;
    }
}

function formatNumberDuasCasas(input, key) {
    var valor = input.value;
    var valorAux;
    var string;
    valorAux = valor.replace(',','');
    valor = valorAux;
    valorAux = valor.replace('.','');
    valor = valorAux;
    var array = Array.from(valor);
    if(key == "Enter"){
        return true;
    }
    else{
        array.push(key);
    }
    if(valor.length == 1){
        string = ',' + array[0] + array[1];
        input.value = string;
        return false;
    }else if(valor.length == 2){
        string = array[0] +  ',' + array[1] + array[2];
        input.value = string;
        return false;
    }else if(valor.length == 3){
        string = array[0] + array[1] +  ',' + array[2] + array[3];
        input.value = string;
        return false;
    }else if(valor.length == 4){
        string = array[0] + array[1] + array[2] + ',' + array[3] + array[4];
        input.value = string;
        return false;
    }else if(valor.length == 5){
        string = array[0] + '.' + array[1] + array[2] + array[3] + ',' + array[4] + array[5];
        input.value = string;
        return false;
    }else if(valor.length == 6){
        string = array[0] + array[1] + '.' + array[2] + array[3] + array[4] + ',' + array[5] + array[6];
        input.value = string;
        return false;
    }else if(valor.length == 7){
        string = array[0] + array[1] + array[2] + '.' + array[3] + array[4] + array[5] + ',' + array[6] +  array[7];
        input.value = string;
        return false;
    }else if(valor.length == 8){
        string = array[0] + '.' + array[1] + array[2] + array[3] + '.' + array[4] + array[5] + array[6] + ',' + array[7] +  array[8];
        input.value = string;
        return false;
    }else if(valor.length > 8){
        return false;
    }
}

function alertas(obj){
    var texto = obj.textContent;
    alert(texto);
}