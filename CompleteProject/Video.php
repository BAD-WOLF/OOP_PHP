<?php
#namespace CompleteProject\Video;
namespace CompleteProject\Video;

require_once "VideoInterfaceAccess.php";
use CompleteProject\VideoInterfaceAccess\VideoInterfaceAccess;

/**
* Class Video
* @author yourname
*/
class Video implements VideoInterfaceAccess
{
    private string $titulo;
    private int    $avaliacao;
    private int    $views;
    private int    $curtidas;
    private bool   $reproduzindo;

    public function __construct(string $titulo, bool $reproduzindo){
        $this->setTitulo($titulo);
        $this->setViews(1);
        $this->setAvaliacao(1);
        $this->setReproduzindo($reproduzindo);
    }

    public function play(): int
    {
        if(!$this->getReproduzindo()){
            $this->setReproduzindo(true);
            return 1;
        }else{
            return 0;
        }
    }

    public function pause(): int
    {
        if(!$this->getReproduzindo()){
            return 0;
        }else{
            $this->setReproduzindo(false);
            return 1;
        }
    }

    public function like(): int
    {
        if(!$this->getCurtidas()){
            $this->setCurtidas(++$this->curtidas);
            return 1;
        }else{
            $this->setCurtidas(++$this->curtidas);
            return 0;
        }
    }

    /**
     * Gets the value of titulo
     *
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Sets the value of titulo
     *
     * @param string $titulo description
     *
     * @return Video
     */
    public function setTitulo(string $titulo): Video
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * Gets the value of avaliacao
     *
     * @return int
     */
    public function getAvaliacao(): int
    {
        return $this->avaliacao;
    }

    /**
     * Sets the value of avaliacao
     *
     * @param int $avaliacao description
     *
     * @return Video
     */
    public function setAvaliacao(int $avaliacao): Video
    {
        $this->avaliacao = $avaliacao;
        return $this;
    }

    /**
     * Gets the value of views
     *
     * @return int
     */
    public function getViews(): int
    {
        return $this->views;
    }

    /**
     * Sets the value of views
     *
     * @param int $views description
     *
     * @return Video
     */
    public function setViews(int $views): Video
    {
        $this->views = $views;
        return $this;
    }

    /**
     * Gets the value of curtidas
     *
     * @return int
     */
    public function getCurtidas(): int
    {
        return $this->curtidas;
    }

    /**
     * Sets the value of curtidas
     *
     * @param int $curtidas description
     *
     * @return Video
     */
    public function setCurtidas(int $curtidas): Video
    {
        $this->curtidas = $curtidas;
        return $this;
    }

    /**
     * Gets the value of reproduzindo
     *
     * @return bool
     */
    public function getReproduzindo(): bool
    {
        return $this->reproduzindo;
    }

    /**
     * Sets the value of reproduzindo
     *
     * @param bool $reproduzindo description
     *
     * @return Video
     */
    public function setReproduzindo(bool $reproduzindo): Video
    {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }
}

?>
