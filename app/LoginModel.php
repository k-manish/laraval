<?php

namespace App;

use FileMaker;
use App\config\dbconfig;
class LoginModel extends FileMaker
{
    protected $fmcon;
    protected $request;

    public function __construct()
    {
        $this->fmcon = new FileMaker(dbname,ipaddr,username,password);
        $this->request = $this->fmcon->newFindCommand('USER');
    }
    
    public function getRecord($mail="",$pswd="")
    {
        $this->request->addFindCriterion("mail_id","==$mail");
        $result = $this->request->execute();
        if(Filemaker::isError($result)) {
              return false;
         }
        $records = $result->getRecords();
        $record=$records[0];
       if($record->getField("password")==$pswd)
        {
            return true;
        }
        return false;
    }
}
