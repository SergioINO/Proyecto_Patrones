<?php
namespace Singleton;

class Vendedor
{
    /**
     *
     * @var string
     */
    protected $nombre;
    /**
     *
     * @var string
     */
    protected $direccion;
    /**
     *
     * @var string
     */
    protected $email;

    /**
     * @var Vendedor
     */
    private static $instance = null;

    /**
     * constructor de visibilidad privada
     */
    private function __construct()
    {
    }

    /**
     * @return Vendedor
     */
    public static function Instance()
    {
        if (!isset(Vendedor::$instance)) {
            Vendedor::$instance = new Vendedor();
        }
        return Vendedor::$instance;
    }

    public function muestra()
    {

        return array(
            'Nombre' => $this->nombre,
            'Direccion' => $this->direccion,
            'Email' => $this->email,
        );
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}
