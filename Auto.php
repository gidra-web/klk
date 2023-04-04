<?php 

class Auto{

    private $marka;
    private $godiste;
    private $proizvodjac;

    public function __construct($marka,$godiste,$proizvodjac){
        $this->marka = $marka;
        $this->godiste = $godiste;
        $this->proizvodjac = $proizvodjac;
    }

    public function getMarka(){ return $this->marka;}
    public function getGodiste(){ return $this->godiste;}
    public function getProizvodjac(){ return $this->proizvodjac;}

    public function oldestAuto($nizAutomobila){
        $old = $nizAutomobila[0]->getGodiste();
        $oldest = $nizAutomobila[0];
        foreach($nizAutomobila as $auto){
            if($old>$auto->getGodiste()){
                $old = $auto->getGodiste();
                $oldest = $auto;
            }
        }
        return $oldest;
    }
}
?>