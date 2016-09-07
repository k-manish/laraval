<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use FileMaker;
use App\config\dbconfig;

class MyProfModel extends Model
{
    protected $fmcon;
    protected $request;

    public function __construct()
    {
        $this->fmcon = new FileMaker(dbname,ipaddr,username,password);
        $this->request = $this->fmcon->newFindCommand('USER');
    }
    public function getDetail($mail)
    {
        $this->request->addFindCriterion("mail_id","==$mail");
        $result = $this->request->execute();
        $records = $result->getRecords();
        $record=$records[0];
        $arr=array();
        $arr['name']=$record->getField("name");
        $arr['mail_id']=$record->getField("mail_id");
        $arr['contact']=$record->getField("mobile");
        return $arr;
    }
}
