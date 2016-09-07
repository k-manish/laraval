<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use FileMaker;
use App\config\dbconfig;
class AddedUserModel extends FileMaker
{
    protected $fmcon;
    protected $records;
    protected $request;
    
    public function __construct()
    {
        $this->fmcon = new FileMaker(dbname,ipaddr,username,password);
        $this->request = $this->fmcon->newFindCommand('USER');
    }
    public function getRecord()
    {
        $this->request->addFindCriterion('mail_id', '=="manish.k@mindfire.com"');
        $result = $this->request->execute();
        $this->records = $result->getRecords();
        
        dd($this->records);
        
        foreach($this->records as $record)
        {
            //$record1=$record->getRelatedSet('id');
            dd($record);
            $record->getField('mail_id');
            /*
            foreach($record1 as $record2)
            {
                echo $record2->getField('name'). " ";
                echo $record2->getField('mail_id'). " ";
                echo $record2->getField('mobile'). " ";
                echo "<br>";
            }*/
        }
    }



}
