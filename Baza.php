<?php


class Baza
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost', 'root', '', 'biblioteka');
        $this->konekcija->set_charset('utf8');
    }

    public function pretrazi($procitano, $sort)
    {
        $sql = "SELECT * FROM knjiga k join zanr z on k.zanrId = z.zanrId";

        if($procitano != "SVE"){
            $sql .= " WHERE k.procitana = " . $procitano;
        }

        $sql.= " ORDER BY k.ocena " . $sort;

        $resultSet = $this->konekcija->query($sql);

        $rezultati = [];

        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public function vratiZanrove()
    {
        $sql = "SELECT * FROM zanr";
        $resultSet = $this->konekcija->query($sql);

        $rezultati = [];

        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public function sacuvaj($naziv, $autor, $zanr, $ocena, $procitano)
    {
        return $this->konekcija->query("INSERT INTO knjiga VALUES(null, '$naziv' , '$autor', $zanr , $procitano, $ocena)");
    }

    public function azuriraj($knjigaId, $ocena)
    {
        return $this->konekcija->query("UPDATE knjiga SET ocena=$ocena WHERE id=$knjigaId");
    }

    public function obrisi($knjigaId)
    {
        return $this->konekcija->query("DELETE FROM knjiga WHERE id= $knjigaId");
    }
}