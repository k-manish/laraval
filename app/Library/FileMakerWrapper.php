<?php
class FileMakerWrapper extends FileMaker
{
    protected $fmCon = '';
    protected $layout = '';
    protected $andWheres;
    protected $orWheres;
    
    public function __construct()
    {
        parent::__construct();
        $this->setConnection();
    }
    
    protected function setConnection()
    {
        
    }
    
    public function setLayout($layout = '')
    {
        $this->layout = $layout;
        return $this;
    
    }
    
    public function andWheres($andWheres = array())
    {

        $this->andWheres = $andWheres;
        return $this;
    }
    
    public function orWheres($orWheres = array())
    {
        $this->orWheres = $andWheres;
        return $this;
    }
    
    public function get()
    {
        if (! empty($andWheres) && empty($orWheres)) {
            $this->find();        } else {
                
            }
    }
}