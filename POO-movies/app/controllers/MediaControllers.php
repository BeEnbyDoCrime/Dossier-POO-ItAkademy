<?php

namespace App;

use Interfaces\pageInterface;
use Model\Realisateur;

abstract class MediaControllers implements pageInterface
{
  protected $datas;
  protected $defaultModel = "Model\\Film";
  public function list()
  {
    $model = new $this->defaultModel();
    $datas = $model->getDatas();

    return $datas;
  }

  public function detail($id)
  {
    $model = new $this->defaultModel();
    $data = $model->getDataById($id);
    return $data;
  }

  public function getRealisateur($id) {
    $model = new $this->defaultModel();
    $realisateur = new Realisateur;
    $datareal = $realisateur->getDatas();
    $real = $datareal[$id];

    return $real;

  }
}

?>