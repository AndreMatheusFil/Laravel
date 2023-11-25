<h3>Fornecedor</h3>
{{--comentario do blade--}}
@php
/*
if(){

}
elseif(){

}
else{

}
*/
@endphp
@isset ($fornecedores)
    @if(count($fornecedores)>0 && count($fornecedores)<10)
        <h3>Exitem alguns fornecedores cadastrado</h3>
    @elseif(count($fornecedores)>10)
        <h3>Exitem varios fornecedores cadastrado</h3>
    @else
        <h3>Não exite fornecedores cadastrado</h3>
    @endif
@endisset
Teste de escrita