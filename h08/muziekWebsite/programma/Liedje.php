<?php
class liedje
{
    private $titel;
    private $artiest;

    function _construction($t, $a){
        $this->titel = $t;
        $this->artiest = $a;
    }

    /** Get the value of title.
     *
     *
     * @ return mixed
     */
    public function getTitle()
    {
        return$this->titel;
    }

    /**
     * Sets value of the title
     *
     * @param mixed $title the titel
     *
     * @return self
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * Sets value of artiest.
     *
     * @param mixed $artiest the artiest
     */
    public function getArtiest($artiest)
    {
        $this->artiest = $artiest;

        return $this;
    }
}