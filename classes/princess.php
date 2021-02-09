<?php

class princess extends Personnage
{
    //new propriété
    private $saved;

    public function __construct() {
        parent::__construct();
        $this->setSaved(0);

        $this->x = rand(1,450);
        $this->y = rand(1,450);
    }

    /**
     * @return mixed
     */
    public function getSaved() {
        return $this->saved;
    }

    /**
     * @param mixed $saved
     */
    public function setSaved($saved): void {
        $this->saved = $saved;
    }



}
