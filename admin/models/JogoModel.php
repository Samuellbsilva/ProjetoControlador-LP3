<?php

use PSpell\Config;

require_once "Conexao.php";
require_once "Categoria.php";

class JogoModel
{

    public $tabela = "jogos";

    public function create(Jogo $c)
    {
        try {
           /////// String Sql
            $sql = "insert into $this->tabela (nome, jogo, regras ,numero_integrantes) values (?,?,?,?)";

            ////// Conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);

            ////// Insere Dados na consulta
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getJogo());
            $stmt->bindValue(1, $c->getRegras());
            $stmt->bindValue(2, $c->getNrmInt());

            ////// Executa
            return $stmt->execute();

        } catch (PDOException $e) {
            //Handling errors

            /////// Get Message
            echo "Erro" . $e->getMessage();

            /////// Get Code
            echo "Número" . (int)$e->getCode();


        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'jogos');

        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'jogos');
        
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Categoria $c)
    {
         try {
           /////// String Sql
            $sql = "update $this->tabela set regras =?, numero_integrantes = ?, jogos = ? where id=?";

            ////// Conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);

            ////// Insere Dados na consulta
            $stmt->bindValue(1, $c->getNmrInt());
            $stmt->bindValue(2, $c->getJogo());
            $stmt->bindValue(3, $c->getId());
            $stmt->bindValue(4, $c->getRegras());
            ////// Executa
            return $stmt->execute();

        } catch (PDOException $e) {
            //Handling errors

            /////// Get Message
            echo "Erro" . $e->getMessage();

            /////// Get Code
            echo "Número" . (int)$e->getCode();


        }
    }
    public function delete($id)
    {
        try {
            /////// String Sql
             $sql = "delete from $this->tabela where id=?";
 
             ////// Conexão com banco de dados
             $stmt = Conexao::getConn()->prepare($sql);
 
             ////// Insere Dados na consulta
             $stmt->bindValue(1, $id);

             ////// Executa
             return $stmt->execute();
 
         } catch (PDOException $e) {
             //Handling errors
 
             /////// Get Message
             echo "Erro" . $e->getMessage();
 
             /////// Get Code
             echo "Número" . (int)$e->getCode();
 
 
         }
    }
}
