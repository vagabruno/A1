<?php
include('ClassConect.php');

class ClassEstados extends ClassConect
{

    public function getEstados()
    {
        $estados = $this->conectaDB()->prepare('select * from estados');
        $estados->execute();
        return $fEstados = $estados->fetchAll(\PDO::FETCH_OBJ);
    }

}