<?php
$conexao = Null;
function obterConexao(){
	global $conexao;
	if ($conexao == Null){
		$conexao = mysqli_connect("localhost", "root1", "aluno", "arquivo");
	}
	return $conexao;
}

function salvarFuncionario($nome, $foto_end){
    $conexao = obterConexao();
	$comandoSQL = "INSERT INTO funcionario (nome,foto_endereco) VALUES ('$nome','$foto_end')";
	$query = mysqli_query($conexao, $comandoSQL);
    
    return $query;
}

function pesquisarTodosFuncionarios(){
    $conexao = obterConexao();
	$comandoSQL = "select nome,foto_endereco from funcionario";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	$result_array = [];
	
    return $result_array;

}

