<?php


namespace controls;


use models\DierenFabriek;
use views\DierenView;

class BezoekerController
{
    private DierenView $view;
    private DierenFabriek $fabriek;

    public function __construct(){
        $this->view = new DierenView();
        $this->fabriek = new DierenFabriek();
    }

    public function vraagAction():void{
        $this->view->vraag();
    }

    public function toonAction():void{
        $bijdrage = $_POST['dier'];
        $dier = $this->fabriek->maakDier($bijdrage);
        $this->view->toon($dier);
    }

    public function voeruit():void{
        if(isset($_REQUEST['actie'])){
            $taak = $_REQUEST['actie'];
            $this->toonAction();

        }
        else{
            $this->vraagAction();
        }
    }
}