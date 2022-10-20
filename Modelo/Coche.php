<?php

class Coche {
    public $matricula;
    public $marca;
    public $modelo;
    public $color;
    public $revisado;

    function get_matricula() {
        return $this->matricula;
    }

    function set_matricula($nuevaMatricula) {
        $this->matricula = $nuevaMatricula;
    }

    function get_marca() {
        return $this->marca;
    }

    function set_marca($nuevaMarca) {
        $this->marca = $nuevaMarca;
    }

    function get_modelo() {
        return $this->modelo;
    }

    function set_modelo($nuevoModelo) {
        $this->modelo = $nuevoModelo;
    }

    function get_color() {
        return $this->color;
    }

    function set_color($nuevoColor) {
        $this->color = $nuevoColor;
    }

    function get_revisado() {
        return $this->revisado;
    }

    function set_revisado($nuevoRevisado) {
        $this->revisado = $nuevoRevisado;
    }
}