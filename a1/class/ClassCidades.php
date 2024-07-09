<?php
include('ClassConect.php');

class ClassCidades extends ClassConect
{

    public function getCidades($idEstado)
    {
        $cidades = $this->conectaDB()->prepare('select * from cidades where id_estado = ?');
        $cidades->bindValue(1,$idEstado);
        $cidades->execute();
        return $fCidades = $cidades->fetchAll(\PDO::FETCH_OBJ);
    }

}